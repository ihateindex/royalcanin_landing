<?php
    include_once "./head.php";

    $serial = $_GET['serial'];
?>
<body>
    <div id="container">
        <div class="content _sub __checklist">
            <div class="sub-header">
                <a href="javascript:void(0)" id="go-before"></a>
                <a href="./" id="go-index"></a>
            </div>
            <div class="title-block">
                <div class="prj-title">
                    <img src="./images/project_logo.svg" class="project-logo" alt="고양이 주치의 프로젝트">
                    <span class="text">
                        <em>주치의</em><img src="./images/icon_power.png" alt="력" class="icon"><em>테스트</em></span>
                </div>
                <div class="subject">
                    우리 반려묘 OO!<br><b>혹시 이런 모습을 보이나요?</b>
                </div>
            </div>
            <div class="indicator-block">
                <div class="guide">
                    <img src="./images/icon_chkguide.png" alt="터치 가이드 이미지" class="icon">
                    <span>해당되는 항목을 모두 터치해주세요.</span>
                </div>
                <ul class="indicator">
                    <li class="is-current"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="checklist-container">
                <div class="list-wrapper">
                    <ul class="group is-current" data-cate="weight"></ul>
                    <ul class="group" data-cate="gastro"></ul>
                    <ul class="group" data-cate="kidney"></ul>
                    <ul class="group" data-cate="urinary"></ul>
                    <ul class="group" data-cate="stress"></ul>
                </div>
            </div>
            <button type="button" class="type-01" id="go-next">다음으로</button>
        </div>
        <div id="footer">
            <span class="for-a11y">Copyright © 2020. ROYAL CANIN all rights reserved.</span>
        </div>
    </div>
    <script>
        // serial 없으면 고양이 정보입력으로 튕길것
        var $doc = $(document);
        $doc.ready(function() {
            catTest.init();
        });

        var catTest = function() {
            var currentStep = 0;
            var checklist = {};
            var isAnimate = false;
            var $wrapperEl = $('.list-wrapper');
            var $groupEl = $('.list-wrapper .group');
            var $indicatorEl = $('.indicator');
            return {
                init: function() {
                    // 초기화
                    // checklist json 가져와서 뿌림
                    $.ajax({
                        url: "../checklist_info.json",
                        cache: false,
                        dataType: "json",
                        type: 'get',
                        success: function (data) {
                            var object = data;
                            
                            for (var key in object) {
                                var checklistEl = "";
                                checklist[key] = {};
                                checklist[key].list = [];
                                object[key].list.forEach(function(item) {
                                    var el = "<li>";
                                        el += "<button type='button' class='chk-trigger'>";
                                        el += "<span class='chk-shape'></span>";
                                        el += "<span class='text'>"+item.question+"</span>";
                                        el += "</button>";
                                        el += "</li>";
                            
                                    checklistEl += el;
                                });
                                $('[data-cate="'+key+'"]').html(checklistEl);
                            }
                        },
                        error: function(jqXHR, errMsg) {
                            // Handle error
                            alert(errMsg);
                        }
                    });
                    this.bind();
                },
                bind: function() {
                    // 이벤트 바인딩
                    var _this = this;
                    $doc.on('click', '.chk-trigger', function() {
                        var $this = $(this);
                        $this.toggleClass('is-active');
                    });
                    $doc.on('click', '#go-next', function() {
                        if(isAnimate) return false;
                        _this.nextStep();
                    });
                    $doc.on('click', '#go-before', function() {
                        if(isAnimate) return false;
                        _this.prevStep();
                    });
                },
                prevStep: function() {
                    if(currentStep<1) {
                        alert('반려묘 정보 페이지로 돌아갑니다.');
                        return;
                    } else {
                        this.stepAnimate('prev');
                    }
                },
                nextStep: function() {
                    if(currentStep>3) {
                        alert('로딩&결과 페이지로 이동합니다.');
                        this.submit();
                        return;
                    } else {
                        this.stepAnimate('next');
                    }
                },
                stepAnimate: function(direction) {
                    console.log('step animation start');
                    isAnimate = true;
                    var stepTl = gsap.timeline({onComplete: function(){
                        (direction==='next') ? currentStep++ : currentStep--;
                        isAnimate = false;
                        if(Number(currentStep)===4) {
                            $('#go-next').text('결과 보기');
                        } else {
                            $('#go-next').text('다음으로');
                        }
                        $('.list-wrapper .group').removeClass('is-current').eq(currentStep).addClass('is-current');
                        console.log('step animation end');
                    }});
                    if(direction === 'next') {
                        stepTl
                        .to($groupEl.eq(currentStep).find('li'), {duration: 0.55, autoAlpha: 0})
                        .to($wrapperEl, {duration: 0.55, x: "-="+100+'%'}, "-=0.55")
                        .to($groupEl.eq(currentStep+1).find('li'), {stagger: 0.15, autoAlpha: 1}, "-=0.45")
                        .to($indicatorEl.find('li').eq(currentStep), {duration: 0.2, width: 6}, "-=1.1")
                        .to($indicatorEl.find('li').eq(currentStep+1), {duration: 0.5, width: 21, ease: "elastic.out(1, 0.6)"}, "-=0.6");
                        
                    } else {
                        stepTl
                        .to($wrapperEl, {duration: 0.55, x: "+="+100+'%'})
                        .to($groupEl.eq(currentStep-1).find('li'), {stagger: 0.15, autoAlpha: 1}, "-=0.45")
                        .to($indicatorEl.find('li').eq(currentStep), {duration: 0.2, width: 6}, "-=1.1")
                        .to($indicatorEl.find('li').eq(currentStep-1), {duration: 0.5, width: 21, ease: "elastic.out(1, 0.6)"}, "-=0.6")
                        .set($groupEl.eq(currentStep).find('li'), {autoAlpha: 0});
                    }
                },
                submit: function() {
                    $('.chk-trigger').each(function(idx, el) {
                        var key = $(this).closest('.group').attr('data-cate');
                        var question = $(this).find('.text').text();
                        var pushVal = {"question": question, "checked": $(el).hasClass('is-active') ? "Y" : "N"};
                        checklist[key].list.push(pushVal);
                    });

                    for (var key in checklist) {
                        var len = 0;
                        checklist[key].list.forEach(function(item) {
                            if(item.checked == 'Y') {
                                len++;
                            }
                        });
                        checklist[key].checkedLength = len;
                        // console.log('key:', key);
                        // console.log('length:', len);
                    }

                    console.log(checklist);
                    // 체크 정보 db update 후 callback에서 result로 serial같이 넘김
                    // 데이터 저장
                    $.ajax({
                        url: "../main_exec.php",
                        type: 'POST',
                        data: {
                            "exec"          : "insert_check_data",
                            "mb_check"      : JSON.stringify(checklist),
                            "mb_serial"    : "<?php echo $serial?>"
                        },
                        success: function (response) {
                            if (response == "Y") {
                                setTimeout(function() {
                                    location.href = "./result.php?serial=<?php echo $serial?>";
                                }, 200);
                            }else{

                            }
                        },
                        error: function(jqXHR, errMsg) {
                            // Handle error
                            console.log(errMsg);
                        }
                    });

                }
            };
        }();
    </script>
</body>
</html>