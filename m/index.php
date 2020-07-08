<?php
    include_once "../include/autoload.php";
    $mnv_f 			= new mnv_function();
    $my_db      = $mnv_f->Connect_MySQL();
    $mobileYN      = $mnv_f->MobileCheck();

    $siteURL = parse_url($mnv_f->siteURL());
    if ($mobileYN == "PC")
    {
		if(isset($siteURL['query'])) {
			echo "<script>location.href='../index.php?".$siteURL['query']."';</script>";
		} else {
			echo "<script>location.href='../index.php';</script>";
		}
    }else{
		$saveMedia     = $mnv_f->SaveMedia();
		$rs_tracking   = $mnv_f->InsertTrackingInfo($mobileYN);
		// print_r($rs_tracking);
    }

    include_once "./head.php";
?>
<body>
    <!-- Google Tag Manager (noscript) -->

    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5TSHTM5"

    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->

    <!-- End Google Tag Manager (noscript) -->
    <div id="container">
        <div id="menu-layer">
            <div class="inner">
                <ul>
                    <li>
                        <a href="#" data-url="#section1">
                            <span class="p-name">메인</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-url="#section2">
                            <span class="p-name">주치의 프로젝트</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-url="#section3" onclick="lbReload('RCK_2020CCN_BTN_menu_gotoEvent','','','');gtag('event', 'GA_RCK_2020CCN_BTN_menu_gotoEvent');">
                            <span class="p-name">주치의력 테스트</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-url="#section4" onclick="lbReload('RCK_2020CCN_BTN_menu_gotoPromo','','','');gtag('event', 'GA_RCK_2020CCN_BTN_menu_gotoPromo');">
                            <span class="p-name">주치의력 업그레이드 TIPS</span>
                        </a>
                    </li>
                </ul>
                <img src="./images/menu_cat.png" alt="" class="cat">
            </div>
        </div>
        <div class="menu-transition-layer"></div>
        <div id="header">
            <a href="./" class="logo">
                <img src="./images/logo.png" alt="로얄캐닌 홈으로">
            </a>
            <button type="button" class="gnb-toggle">
                <div class="wrapper">
                    <div class="line _01"></div>
                    <div class="line _02"></div>
                    <div class="line _03"></div>
                </div>
            </button>
        </div>
        <div class="content _main">
            <section class="section _01" id="section1">
                <div class="wrapper">
                    <h1 class="title-block">
                        <img src="./images/project_logo.svg" alt="고양이 주치의 프로젝트" class="project-logo">
                        <img src="./images/main_01_title.png" alt="고양이는 아파도 숨기는 사실, 알고 계세요? 반려묘가 숨기고 있을지 모를 건강 신호 확인해보고 무료 건강검진의 기회도 받아보세요!" class="title">
                    </h1>
                    <img src="./images/main_01_cat.png" alt="고양이" class="cat">
                </div>
                <!-- scroll down -->
            </section>
            <section class="section _02" id="section2">
                <div class="title-block">
                    <img src="./images/project_logo.svg" alt="고양이 주치의 프로젝트" class="project-logo">
                    <p class="tt">#주치의 프로젝트</p>
                    <p class="sub">직접 경험해본 보호자들이 말한다</p>
                </div>
                <div class="infl-video-container">
                    <div class="title-block">
                        <div class="title">
                            <span>반려묘를 꿰뚫어보는 <br><b>프로 집사도 주치의가 필요해요</b></span>
                            <!-- <span>사랑하는 반려묘 앞에서는 <br><b>누구보다 예민해져야해요</b></span> -->
                        </div>
                        <div class="yt-container">
                            <img src="" alt="" class="object _body">
                            <img src="" alt="" class="object _tail">
                            <div id="yt-player">
                                <!-- youtube video -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 활성탭에 따른 컨텐츠 변경 -->
                <div class="tab-container-wrap">
                    <ul class="tab-container">
                        <li>
                            <button type="button" class="tab-trigger is-active" data-key="3_6h0o-t3Vw">
                                <img src="" alt="" class="thumb">
                                <span>프로 집사의<br>#주치의 프로젝트</span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="tab-trigger" data-key="CAInhDnQFaA">
                                <img src="" alt="" class="thumb">
                                <span>예민보스 집사의<br>#주치의 프로젝트</span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="tab-trigger" data-key="NWROQ1tCFPM">
                                <img src="" alt="" class="thumb">
                                <span>현명 집사의<br>#주치의 프로젝트</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="section _03" id="section3">
                <div class="title-block">
                    <img src="./images/project_logo.svg" alt="고양이 주치의 프로젝트" class="project-logo">
                    <p class="tt">변경예정 타이틀</p>
                    <p class="sub">
                        아픈 것을 잘 드러내지 않는 반려묘이기에<br>
                        세심하게 살펴주는 가장 가까운 주치의로써의 관찰 능력은 필수!<br>
                        <b>나의 주치의력을 테스트 해 보시고 반려묘의 시그널은 물론<br>
                        무료 건강검진권의 기회도 잡으세요!</b>
                    </p>
                    <div style="padding: 50px 0; background-color: #ececec">
                        변경 후 작업
                    </div>
                </div>
                <button type="button" class="type-01" id="go-sub" onclick="lbReload('RCK_2020CCN_BTN_CONV1_checklist','','','');gtag('event', 'GA_RCK_2020CCN_BTN_CONV1_checklist');">다음 단계로</button>
            </section>
            <section class="section _04" id="section4">
                <img src="" alt="고양이" class="cute">
                <div class="title-block">
                    <img src="./images/project_logo.svg" alt="고양이 주치의 프로젝트" class="project-logo">
                    <p class="tt">변경예정 타이틀</p>
                    <p class="sub"></p>
                </div>
                <div class="tab-container-wrap">
                    <ul class="tab-container">
                        <li>
                            <button type="button" class="tab-trigger is-active" data-key="3_6h0o-t3Vw">
                                <img src="" alt="" class="icon">
                                <span>10 TRAVEL<br>TIPS</span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="tab-trigger" data-key="CAInhDnQFaA">
                                <img src="" alt="" class="icon">
                                <span>수의사님<br>영상</span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="tab-trigger" data-key="NWROQ1tCFPM">
                                <img src="" alt="" class="icon">
                                <span>1/5</span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="tab-trigger" data-key="3_6h0o-t3Vw">
                                <img src="" alt="" class="icon">
                                <span>2/5</span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="tab-trigger" data-key="CAInhDnQFaA">
                                <img src="" alt="" class="icon">
                                <span>3/5</span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="tab-trigger" data-key="NWROQ1tCFPM">
                                <img src="" alt="" class="icon">
                                <span>4/5</span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="tab-trigger" data-key="NWROQ1tCFPM">
                                <img src="" alt="" class="icon">
                                <span>5/5</span>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="tips-video-container">
                    <div class="yt-container">
                        <div id="yt-player">
                            <!-- youtube video -->
                        </div>
                    </div>
                </div>
                <ul class="article-list">
                    <li>
                        <a href="https://www.royalcanin.com/kr/cats/health-and-wellbeing/is-your-cat-stressed" target="_blank">
                            <span class="thumb"></span>
                            <span class="text">
                                <span>반려묘 스트레스 확인 방법</span>
                                <span>자세히 보기 ></span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.royalcanin.com/kr/cats/health-and-wellbeing/keeping-your-cat-at-a-healthy-weight" target="_blank">
                            <span class="thumb"></span>
                            <span class="text">
                                <span>체중 유지 방법</span>
                                <span>자세히 보기 ></span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.royalcanin.com/kr/cats/health-and-wellbeing/my-cat-is-losing-its-hair" target="_blank">
                            <span class="thumb"></span>
                            <span class="text">
                                <span>털이 빠지는 이유</span>
                                <span>자세히 보기 ></span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.royalcanin.com/kr/cats/health-and-wellbeing/common-illnesses-in-older-cats" target="_blank">
                            <span class="thumb"></span>
                            <span class="text">
                                <span>노령묘 질환</span>
                                <span>자세히 보기 ></span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.royalcanin.com/kr/cats/health-and-wellbeing/how-your-cats-diet-affects-its-urinary-health" target="_blank">
                            <span class="thumb"></span>
                            <span class="text">
                                <span>요로기계 건강이 중요한 이유</span>
                                <span>자세히 보기 ></span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.royalcanin.com/kr/cats/health-and-wellbeing/what-makes-a-cats-digestive-system-healthy" target="_blank">
                            <span class="thumb"></span>
                            <span class="text">
                                <span>소화기계</span>
                                <span>자세히 보기 ></span>
                            </span>
                        </a>
                    </li>
                </ul>
            </section>
        </div>
        <div id="footer">
            <span class="for-a11y">Copyright © 2020. ROYAL CANIN all rights reserved.</span>
        </div>
    </div>
    <script src="../js/slick.min.js"></script>
    <!-- <script src="https://vjs.zencdn.net/7.8.2/video.js"></script> -->
    <script src="https://vjs.zencdn.net/7.6.0/video.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/ScrollToPlugin.min.js"></script>
    <script>
        $(document).ready(function() {
            paramObj = get_query();
            // paramValArr = Object.values(paramObj);
            paramValArr = get_param_arr(paramObj);

            // 메인 섹션 1 한화면에 보일 수 있도록 조정
            var winwidth = $(window).width();
            var vh = $(window).height();
            $('.section._01').attr('style', 'height:'+ $(window).height()+'px');
            // $('.section._01 .resize-elm').each(function() {
            //     var wid = vh*$(this).attr('data-width');
            //     $(this).attr('style', 'width:'+(wid/winwidth)*100+'%');  
            // })
            $('.menu-transition-layer').css({
                'width': winwidth*4,
                'height': winwidth*4,
                'top': -winwidth+'px',
                'right': -winwidth+'px',
            })

            if(paramObj.it_key) {
                defaultKey = paramObj.it_key;
                $(window).scrollTop($('#section2').offset().top-56.5);
            }
            // 하단 TIPS영역 정보 불러오기
            // getTips(defaultKey, 'init');

            if(paramObj.event && paramObj.event.toLowerCase() == 'y') {
                setTimeout(function() {
                    sectionMove('#section3');
                }, 200);
            }
        });


        // 헤더 햄버거 클릭 이벤트
        var menuTlEnd = true;
        $(document).off().on('click', '.gnb-toggle', function() {
            menuToggle();
        })

        // 메뉴레이어 토글
        function menuToggle(callbackFunc, targetURL) {
            if(menuTlEnd) {
                menuTlEnd = false;
                if($('html').hasClass('menu-opened')) {
                    // menu close animation
                    var closeTl = gsap.timeline({onComplete: menuTimelineEnd});
                    closeTl
                        .to($('#menu-layer li'), {duration: 0.15, y: 5, autoAlpha: 0})
                        .to($('#menu-layer .cat'), {duration: 0.1, y: 5, autoAlpha: 0, rotation: -2})
                        .set($('#menu-layer'), {display: 'none'})
                        .to($('#header .logo'), {duration: 0.45, x: 0, ease: "power3.out"})
                        .to($('.menu-transition-layer'), {duration: 0.45, scale: 0, ease: "sine"}, "-=0.3")
                } else {
                    // menu open animation
                    var openTl = gsap.timeline({onComplete: menuTimelineEnd});
                    openTl
                        .to($('.menu-transition-layer'), {duration: 0.45, scale: 1, ease: "sine"})
                        .to($('#header .logo'), {duration: 0.45, x: -($(window).width()/2-($('#header .logo').width()/2+20)), ease: "power3.out"}, "-=0.3")
                        .set($('#menu-layer'), {display: 'block'}, "-=0.3")
                        .to($('#menu-layer .cat'), {duration: 0.1, y: 0, autoAlpha: 1}, "-=0.3")
                        .to($('#menu-layer .cat'), {duration: 0.2, rotation: 0, ease: "linear"}, "-=0.3")
                        .to($('#menu-layer li'), {duration: 0.35, stagger: 0.15, y: 0, autoAlpha: 1}, "-=0.2")
                }
                $('.gnb-toggle').toggleClass('is-active');
            }

            function menuTimelineEnd() {
                menuTlEnd = true;
                $('html').toggleClass('menu-opened scroll-blocking');
                if(typeof(callbackFunc) == 'function') {
                    callbackFunc(targetURL);
                }
            }
        }

        // 메뉴레이어 섹션 클릭 이벤트 -> 메뉴레이어 닫고 섹션 이동으로
        $(document).on('click', '#menu-layer li a', function(e) {
            e.preventDefault();
            var targetURL = $(this).attr('data-url');
            menuToggle(sectionMove, targetURL);
        });

        // 섹션 이동
        function sectionMove(target) {
            gsap.to(window, {duration: 1, scrollTo: { y: target, offsetY: 57 }, ease: "power2"});
        }
        
        // 상품영역 탭 이벤트
        $(document).on('click', '.tab-trigger', function() {
            var $this = $(this);
            var targetKey = $(this).attr('data-key');
            if($this.hasClass('is-active')) {
                return;
            }
            $('.tab-container .tab-trigger').not($this).removeClass('is-active');
            // $this.addClass('is-active');
            // getProductInfo(targetKey);
        });

        // 서브페이지로 이동
        $(document).on('click', '#go-sub', function() {
            
        });


        // 제품영역 정보 불러오기
        // function getProductInfo(key, init) {
        //     $('.tab-trigger[data-key="'+key+'"]').addClass('is-active');
        //     $('.product-nav li').removeClass('is-active');
        //     $('.product-nav li[data-key="'+key+'"]').addClass('is-active');
        //     if($('.slick-wrapper').hasClass('slick-initialized')) {
        //         $('.slick-wrapper').slick('unslick');
        //     }
        //     $.ajax({
        //         url: "../product_info.json",
        //         // cache: false,
        //         dataType: "json",
        //         type: 'get',
        //         beforeSend: function() {
        //         },
        //         success: function (data) {
        //             var object = data;
        //             var reviewElem = "";
        //             var reviewCount = 0;
        //             var articleElem = "";
        //             $('.section._02 [data-key="className"]').removeClass('_skin _weight _digest _neutral _fur _stress').addClass(object[key].className);
        //             $('.section._02 [data-key="productName"]').text(object[key].productName);
        //             $('.section._02 [data-key="title"]').text(object[key].title);
        //             $('.section._02 [data-key="productImage"]').attr({
        //                 'src': object[key].productImage,
        //                 'alt': object[key].productName,
        //             });
        //             $('.section._02 [data-key="buttonUrl"] button').each(function(idx, el) {
        //                 $(this).attr('data-url', object[key].buttonUrl[idx]);
        //                 $(this).attr('onclick', object[key].trackingCode[idx]+""+object[key].gaTrackingCode[idx]);
        //             });
                    
        //             object[key].review.forEach(function(item, index) {
        //                 var el = "<li class='review-slide' data-key='review' style='width: 183px;'>";
        //                     el += "<a href='"+item.url+"' data-key='url' target='_blank' onclick=\"gtag(\'event\', \'GA_RCK_2020CCN_BTN_Review_"+key+'_'+(index+1)+"\');\">";
        //                     el += "<div class='img'><img src='"+item.img+"' alt='"+item.text2+"' class='' data-key='img'></div>";
        //                     el += "<div class='text'><div class='tt' data-key='text1'>"+item.text1+"</div><div class='sub' data-key='text2'>"+item.text2+"</div></div>";
        //                     el += "</a></li>";
        //                 reviewElem += el;
        //                 reviewCount++;
        //             });
        //             if(reviewCount<1) {
        //                 $('.review-block').hide();
        //             } else {
        //                 $('.review-block').show();
        //             }
        //             $('.section._02 [data-key="reviewList"]').empty().html(reviewElem);
        //             if(object[key].issue) {
        //                 $('.article-block').show();
        //                 $('.section._02 [data-key="issue"]').text(object[key].issue);
        //                 object[key].article.forEach(function(item, index) {
        //                     var txt = "<div class='text'>"+item.text+"</div>";
        //                     var btn = "<span>보기</span>";
        //                     // var btn = "<a href='"+item.url+"' target='_blank' onclick=lbReload(\'RCK_2020CCN_BTN_Tips\',\'\',\'\',\'\');>보기</a>";
        //                     articleElem += "<a href='"+item.url+"' target='_blank' onclick=\"lbReload(\'RCK_2020CCN_BTN_Tips\',\'\',\'\',\'\');gtag(\'event\', \'GA_RCK_2020CCN_BTN_Tips_"+key+'_'+(index+1)+"\');\"><li>"+txt+btn+"</li></a>";
        //                 });
        //                 $('.section._02 [data-key="articleList"]').empty().html(articleElem);
        //             } else {
        //                 $('.article-block').hide();
        //             }
        //             reviewSwiperSetting(reviewCount);
                    
        //             // if(!init) {
        //             player.poster(object[key].video.poster);
        //             player.src({
        //                 type: 'video/mp4',
        //                 src: object[key].video.src
        //             });
                    
        //             setTimeout(function() {
        //                 player.play();
        //             }, 1500);

        //             // if(!init) {
        //             //     $(window).scrollTop($('#section2').offset().top-56.5);
        //             // }
        //                 // var videoId = object[key].video.src;
        //                 // player.loadVideoById(videoId, 0);
        //             // }
        //             currentKey = key;
        //         },
        //         error: function(jqXHR, errMsg) {
        //             // Handle error
        //             alert(errMsg);
        //         }
        //     });
        // }

        // 제품영역 리뷰 세팅
        function reviewSwiperSetting(count) {
            var reviewCount = Number(count);
            var infiniteVal = false,
                dotsVal = true,
                initialSlideVal = 0;

            
            if(reviewCount<2) {
                dotsVal = false;
                $('.review-slide').css('opacity', '1');
            }
            if(reviewCount<3) {
                infiniteVal = false;
            }
            if(reviewCount>2) {
                infiniteVal = false;
                initialSlideVal = 1;
            }
            $('.slick-wrapper').slick({
                infinite: infiniteVal,
                slidesToShow: 1,
                centerMode: true,
                initialSlide: initialSlideVal,
                centerPadding: '84px',
                variableWidth: true,
                arrows: false,
                dots: dotsVal,
            });
        }
        
    </script>
</body>
</html>