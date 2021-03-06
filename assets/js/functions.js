jQuery(function($) {
    $(document).ready(function() {
        // ドロワーナビ
        if ($('.drawer').length) {
            $('.drawer').drawer();
            // オーバーレイ作成
            $('#header').prepend('<div class="overlay drawer-toggle"></div>');
            // ハンバーガーナビ
            $('#header > .overlay').click(function() {
                $('.drawer').drawer('toggle');
            });
        };
        $('.js-header-search-toggle').click(function() {
            $('.drawer').drawer('close');
            $('.js-drawer-search').toggleClass('shown');
        });
        $('.drawer-toggle').click(function() {
            $('.js-drawer-search').removeClass('shown');
        });

        // ページ内リンク　#にダブルクォーテーションが必要
        $('a[href^="#"]').click(function() {
            var headerHight = 100; //ヘッダの高さ
            var speed = 800;
            var href = $(this).attr("href");
            var target = $(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top - headerHight;
            $('body,html').animate({ scrollTop: position }, speed, 'swing');
            return false;
        });

        //Swiper
        if ($('.swiper-container-top-kv').length) {
            var mySwiper_top_kv = new Swiper('.swiper-container-top-kv', {
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                autoplay: true,
                autoplay: {
                    delay: 5000,
                },
                speed: 3000,
            });
        }
        if ($('.swiper-container-top-recommended').length) {
            var mySwiper_top_recommended = new Swiper('.swiper-container-top-recommended', {
                // autoplay: true,
                // autoplay: {
                //     delay: 5000,
                // },
                speed: 1000,
                slidesPerView: 1.1,
                allowTouchMove: true,
                spaceBetween: 20,
                breakpoints: {
                    // when window width is <= 768px
                    768: {
                        slidesPerView: 5,
                        spaceBetweenSlides: 30
                    },
                    // when window width is <= 999px
                    // 999: {
                    //     slidesPerView: 2,
                    //     spaceBetweenSlides: 40
                    // }
                }
            });
        }
        if ($('.swiper-container-top-local-professionals').length) {
            var mySwiper_local_professionals = new Swiper('.swiper-container-top-local-professionals', {
                // autoplay: true,
                // autoplay: {
                //     delay: 5000,
                // },
                speed: 1000,
                slidesPerView: 1.1,
                spaceBetween: 20,
                breakpoints: {
                    // when window width is <= 768px
                    768: {
                        slidesPerView: 5,
                        spaceBetweenSlides: 30
                    },
                    // when window width is <= 999px
                    // 999: {
                    //     slidesPerView: 2,
                    //     spaceBetweenSlides: 40
                    // }
                }
            });
        }
        if ($('.swiper-container-top-local-professionals-news').length) {
            var mySwiper_local_professionals_news = new Swiper('.swiper-container-top-local-professionals-news', {
                // autoplay: true,
                // autoplay: {
                //     delay: 5000,
                // },
                speed: 1000,
                slidesPerView: 1.1,
                spaceBetween: 20,
                breakpoints: {
                    // when window width is <= 768px
                    768: {
                        slidesPerView: 5,
                        spaceBetweenSlides: 30
                    },
                    // when window width is <= 999px
                    // 999: {
                    //     slidesPerView: 2,
                    //     spaceBetweenSlides: 40
                    // }
                }
            });
        }
        if ($('.swiper-container-search-navi-tab').length) {
            var mySwiper_search_navi_tab = new Swiper('.swiper-container-search-navi-tab', {
                loop: false,
                speed: 1000,
                // autoplay: {
                //     delay: 5000,
                // },
                //autoplay: true,
                //allowTouchMove: true,
                centeredSlides: false,
                spaceBetween: 0,
                slidesPerView: 'auto',
                slideToClickedSlide: true,
                breakpoints: {
                    // when window width is <= 768px
                    768: {
                        slidesPerView: 5,
                        spaceBetweenSlides: 30
                    },
                    // when window width is <= 999px
                    // 999: {
                    //     slidesPerView: 2,
                    //     spaceBetweenSlides: 40
                    // }
                }
            });
        }
        if ($('.swiper-container-top-local-professionals-news').length) {
            var mySwiper_search_navi_tab_contnets = new Swiper('.swiper-container-search-navi-tab-contents', {
                loop: false,
                speed: 1000,
                // autoplay: {
                //     delay: 5000,
                // },
                //autoplay: true,
                allowTouchMove: false,
                //centeredSlides: true,
                spaceBetween: 0,
                slidesPerView: 'auto',
                slideToClickedSlide: true,
            });
        }
        if ($('.swiper-container-top-local-professionals-news').length) {
            var mySwiper_search_navi_tab02 = new Swiper('.swiper-container-search-navi-tab02', {
                loop: false,
                speed: 1000,
                // autoplay: {
                //     delay: 5000,
                // },
                //autoplay: true,
                //allowTouchMove: true,
                centeredSlides: false,
                spaceBetween: 0,
                slidesPerView: 'auto',
                slideToClickedSlide: true,
                breakpoints: {
                    // when window width is <= 768px
                    768: {
                        slidesPerView: 5,
                        spaceBetweenSlides: 30
                    },
                    // when window width is <= 999px
                    // 999: {
                    //     slidesPerView: 2,
                    //     spaceBetweenSlides: 40
                    // }
                }
            });
        }
        if ($('.swiper-container-search-navi-tab-contents02').length) {
            var mySwiper_search_navi_tab_contnets02 = new Swiper('.swiper-container-search-navi-tab-contents02', {
                loop: false,
                speed: 1000,
                // autoplay: {
                //     delay: 5000,
                // },
                //autoplay: true,
                allowTouchMove: false,
                //centeredSlides: true,
                spaceBetween: 0,
                slidesPerView: 'auto',
                slideToClickedSlide: true,
            });
        }
        // slideToメソッドを実行する関数を定義
        if ($('.swiper-container-search-navi-tab-contents').length) {
            $('.swiper-container-search-navi-tab .swiper-slide.tab').on('click', function() {
                var index = $(this).index(); //クリックした要素のインデックスを取得
                mySwiper_search_navi_tab_contnets.slideTo(index); //指定のスライドを呼び出し
            });
        }
        if ($('.swiper-container-local-professionals-news-top-articles').length) {
            var mySwiper = new Swiper('.swiper-container-local-professionals-news-top-articles', {
                loop: true,
                speed: 1000,
                autoplay: {
                    delay: 5000,
                },
                autoplay: true,
                allowTouchMove: true,
                //centeredSlides: true,
                spaceBetween: 0,
                slidesPerView: 1,
                slideToClickedSlide: true,
                breakpoints: {
                    // when window width is <= 768px
                    768: {
                        slidesPerView: 3
                    }
                    // when window width is <= 999px
                    // 999: {
                    //     slidesPerView: 2,
                    //     spaceBetweenSlides: 40
                    // }
                }
            });
        }

        if ($('.swiper-container-local-professionals-news-pickup').length) {
            var mySwiper = new Swiper('.swiper-container-local-professionals-news-pickup', {
                loop: true,
                speed: 1000,
                autoplay: {
                    delay: 5000,
                },
                navigation: {
                    nextEl: '.swiper-container-local-professionals-news-pickup-wrapper .swiper-button-next',
                    prevEl: '.swiper-container-local-professionals-news-pickup-wrapper .swiper-button-prev',
                },
                autoplay: true,
                allowTouchMove: true,
                //centeredSlides: true,
                spaceBetween: 16,
                slidesPerView: 1.2,
                slideToClickedSlide: true,
                breakpoints: {
                    // when window width is <= 768px
                    768: {
                        slidesPerView: 3
                    }
                    // when window width is <= 999px
                    // 999: {
                    //     slidesPerView: 2,
                    //     spaceBetweenSlides: 40
                    // }
                }
            });
        }

        if ($('.swiper-container-local-professionals-news-latest').length) {

            var mySwiper = new Swiper('.swiper-container-local-professionals-news-latest', {
                loop: true,
                speed: 1000,
                autoplay: {
                    delay: 5000,
                },
                autoplay: true,
                allowTouchMove: true,
                //centeredSlides: true,
                spaceBetween: 16,
                slidesPerView: 1.2,
                slideToClickedSlide: true,
                navigation: {
                    nextEl: '.swiper-container-local-professionals-news-latest-wrapper .swiper-button-next',
                    prevEl: '.swiper-container-local-professionals-news-latest-wrapper .swiper-button-prev',
                },
                breakpoints: {
                    // when window width is <= 768px
                    768: {
                        slidesPerView: 3
                    }
                    // when window width is <= 999px
                    // 999: {
                    //     slidesPerView: 2,
                    //     spaceBetweenSlides: 40
                    // }
                }
            });
        }

        if ($('.swiper-container-travel-content-post').length) {

            var mySwiper = new Swiper('.swiper-container-travel-content-post', {
                loop: true,
                speed: 1000,
                autoplay: {
                    delay: 5000,
                },
                autoplay: true,
                allowTouchMove: true,
                //centeredSlides: true,
                spaceBetween: 0,
                slidesPerView: 1,
                slideToClickedSlide: true,
                navigation: {
                    nextEl: '.swiper-container-travel-content-post-wrapper .swiper-button-next',
                    prevEl: '.swiper-container-travel-content-post-wrapper .swiper-button-prev',
                },
                pagination: {
                    el: ".swiper-pagination-travel-content-post",
                    clickable: true,
                },
            });
        }

        if ($('.swiper-container-local-professionals-agent-post').length) {

            var mySwiper = new Swiper('.swiper-container-local-professionals-agent-post', {
                loop: true,
                speed: 1000,
                autoplay: {
                    delay: 5000,
                },
                autoplay: true,
                allowTouchMove: true,
                //centeredSlides: true,
                spaceBetween: 0,
                slidesPerView: 1,
                slideToClickedSlide: true,
                navigation: {
                    nextEl: '.swiper-container-local-professionals-agent-post-wrapper .swiper-button-next',
                    prevEl: '.swiper-container-local-professionals-agent-post-wrapper .swiper-button-prev',
                },
                pagination: {
                    el: ".swiper-pagination-local-professionals-agent-post",
                    clickable: true,
                },
            });
        }

        //アコーディオン
        if ($('.js-acordion-head').length) {
            $(".js-acordion-head").next().css('display', 'none');
            $(".js-acordion-head.shown").next().css('display', 'block');

            //旅行コンテンツ – 詳細
            if ($(".js-acordion-head").hasClass('shown')) {
                $(".js-acordion-head.shown").find(":checkbox").prop("checked", true);
            }

            $(".js-acordion-head").on("click", function() {


                //旅行コンテンツ – 詳細
                if (!$(this).hasClass('shown')) {
                    $(".js-acordion-head.shown").next().slideToggle();
                    $(".js-acordion-head.shown :radio").prop("checked", false);
                    $(".js-acordion-head.shown").removeClass("shown");

                    $(this).toggleClass("shown");
                    $(this).find(":radio").prop("checked", true);
                    $(this).next().slideToggle();
                }

            });
        }

        if ($('.hashtag_wrapper').length) {
            $('.show_hashtag').click(function() {
                var show_text = $(this).parent('.hashtag_wrapper').find('.tags');
                var small_height = 90 //This is initial height.
                var original_height = show_text.css({
                    height: 'auto'
                }).height();

                if (show_text.hasClass('open')) {
                    /*CLOSE*/
                    show_text.height(original_height).animate({
                        height: small_height
                    }, 300);
                    show_text.removeClass('open');
                    $(this).html('<span class="open">ハッシュタグをもっと見る</span>').removeClass('active');
                } else {
                    /*OPEN*/
                    show_text.height(small_height).animate({
                        height: original_height
                    }, 300, function() {
                        show_text.height('auto');
                    });
                    show_text.addClass('open');
                    $(this).html('<span class="close">閉じる</span>').addClass('active');
                }
            });
        }



        //ページトップへ
        if ($('.page-top').length) {
            $(function() {
                var topBtn = $('.page-top');
                topBtn.hide();
                //スクロールが100に達したらボタン表示
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 1000) {
                        topBtn.fadeIn("slow");
                    } else {
                        topBtn.fadeOut("slow");
                    }
                });
            });
        }

        //
        if ($('.main.chiebukuro').length) {
            var orverlay = $('.orverlay');
            var inner = $('.orverlay .inner');
            var time = $('.orverlay .time');
            var chip = $('.orverlay .chip');
            var sun = $('.orverlay .sun');
            var link = $('.link');
            link.on('click', function() {
                orverlay.addClass("show");
                if ($(this).hasClass('time')) {
                    inner.hide();
                    time.show();
                } else if ($(this).hasClass('chip')) {
                    inner.hide();
                    chip.show();
                } else if ($(this).hasClass('sun')) {
                    inner.hide();
                    sun.show();
                }
            });
            orverlay.on('click', function() {
                orverlay.removeClass("show");
                inner.hide();
            });
        }
    });

    /* SOF common */

    // header drawer-search 内、地図選択部分
    if ($('.drawer-search .area .map-reagion').length) {
        var mapReagions = $('.drawer-search .area .map-reagion');
        mapReagions.on('click', function() {
            var isActive = $(this).attr('data-is-active');
            var regionName = $(this).attr('data-region-name');

            if (isActive == 'false') {
                var activeMapReagion = $('.drawer-search .area .map-reagion[data-is-active=true]');
                var activeTab = $('.drawer-search .area .tab[data-is-active=true]');
                var activeRegionContent = $('.drawer-search .search-country-wrap[data-region-name="' + activeTab.attr('data-region-name') + '"]');
                var map = $('.drawer-search .area .map');

                activeTab.attr('data-is-active', 'false');
                activeMapReagion.attr('data-is-active', 'false');
                activeRegionContent.attr('data-is-active', 'false');

                map.attr('data-active-reagion', regionName);
                $(this).attr('data-is-active', 'true');
                $('.drawer-search .search-country-wrap[data-region-name="' + regionName + '"]').attr('data-is-active', 'true');
                $('.drawer-search .area .tab[data-region-name="' + regionName + '"]').attr('data-is-active', 'true');
            }
        });

    }
    if ($('.drawer-search .area .tab').length) {
        var tabs = $('.drawer-search .area .tab');
        tabs.on('click', function() {
            var isActive = $(this).attr('data-is-active');
            var regionName = $(this).attr('data-region-name');

            if (isActive == 'false') {
                var activeMapReagion = $('.drawer-search .area .map-reagion[data-is-active=true]');
                var activeTab = $('.drawer-search .area .tab[data-is-active=true]');
                var activeRegionContent = $('.drawer-search .search-country-wrap[data-region-name="' + activeTab.attr('data-region-name') + '"]');
                var map = $('.drawer-search .area .map');

                activeTab.attr('data-is-active', 'false');
                activeMapReagion.attr('data-is-active', 'false');
                activeRegionContent.attr('data-is-active', 'false');

                map.attr('data-active-reagion', regionName);
                $(this).attr('data-is-active', 'true');
                $('.drawer-search .search-country-wrap[data-region-name="' + regionName + '"]').attr('data-is-active', 'true');
                $('.drawer-search .area .map-reagion[data-region-name="' + regionName + '"]').attr('data-is-active', 'true');

            }
        });
    }

    /* EOF common */


    /* SOF home.php */
    if ($('.home .section-content .area .map-reagion').length) {
        var mapReagions = $('.home .section-content .area .map-reagion');
        mapReagions.on('click', function() {
            var isActive = $(this).attr('data-is-active');
            var regionName = $(this).attr('data-region-name');

            if (isActive == 'false') {
                var activeMapReagion = $('.home .section-content .area .map-reagion[data-is-active=true]');
                var activeTab = $('.home .section-content .area .tab[data-is-active=true]');
                var activeRegionContent = $('.home .section-content .search-country-wrap[data-region-name="' + activeTab.attr('data-region-name') + '"]');
                var map = $('.home .section-content .area .map');

                activeTab.attr('data-is-active', 'false');
                activeMapReagion.attr('data-is-active', 'false');
                activeRegionContent.attr('data-is-active', 'false');

                map.attr('data-active-reagion', regionName);
                $(this).attr('data-is-active', 'true');
                $('.home .section-content .search-country-wrap[data-region-name="' + regionName + '"]').attr('data-is-active', 'true');
                $('.home .section-content .area .tab[data-region-name="' + regionName + '"]').attr('data-is-active', 'true');
            }
        });

    }
    if ($('.home .section-content .area .tab').length) {
        var tabs = $('.home .section-content .area .tab');
        tabs.on('click', function() {
            var isActive = $(this).attr('data-is-active');
            var regionName = $(this).attr('data-region-name');

            if (isActive == 'false') {
                var activeMapReagion = $('.home .section-content .area .map-reagion[data-is-active=true]');
                var activeTab = $('.home .section-content .area .tab[data-is-active=true]');
                var activeRegionContent = $('.home .section-content .search-country-wrap[data-region-name="' + activeTab.attr('data-region-name') + '"]');
                var map = $('.home .section-content .area .map');

                activeTab.attr('data-is-active', 'false');
                activeMapReagion.attr('data-is-active', 'false');
                activeRegionContent.attr('data-is-active', 'false');

                map.attr('data-active-reagion', regionName);
                $(this).attr('data-is-active', 'true');
                $('.home .section-content .search-country-wrap[data-region-name="' + regionName + '"]').attr('data-is-active', 'true');
                $('.home .section-content .area .map-reagion[data-region-name="' + regionName + '"]').attr('data-is-active', 'true');

            }
        });
    }

    /* EOF home.php */

    /* SOF local-professionals-news-post.php */
    //お気に入りボタン
    if ($('.local-professionals-news-post .like').length) {
        var favoriteBtn = $('.local-professionals-news-post .like');
        favoriteBtn.on('click', function() {
            if ($(this).hasClass('liked')) {
                $(this).removeClass('liked');
            } else {
                $(this).addClass('liked');
            }
        });
    }
    /* EOF local-professionals-news-post.php */

    /* SOF travel-content-post.php */
    //お気に入りボタン
    if ($('.travel-content-post .like').length) {
        var favoriteBtn = $('.travel-content-post .like');
        favoriteBtn.on('click', function() {
            if ($(this).hasClass('liked')) {
                $(this).removeClass('liked');
            } else {
                $(this).addClass('liked');
            }
        });
    }
    /* EOF travel-content-post.php */

    /* SOF local-professionals-agent-post.php */
    if ($('.local-professionals-agent-post .like').length) {
        var favoriteBtn = $('.local-professionals-agent-post .like');
        favoriteBtn.on('click', function() {
            if ($(this).hasClass('liked')) {
                $(this).removeClass('liked');
            } else {
                $(this).addClass('liked');
            }
        });
    }

    if ($('.js-button-float').length) {

        //スクロールが1000に達したらスライドダウン
        $(window).scroll(function() {

            var targetBtn = $('.js-button-float-target')
            var floatBtn = $('.js-button-float');
            var scrollPosition = window.pageYOffset;
            var hidePoint = targetBtn.position().top - $(window).height() + 260;

            if (scrollPosition >= hidePoint) {
                floatBtn.hide();
            } else {
                floatBtn.show();
            }
        });

    };

    if ($('.js-aside-box-travel-content-post').length) {
        var aside = $('.js-aside-box-travel-content-post')
        var footer = $('.js-footer')
        $(window).scroll(function() {

            footer.on('inview', function(event, isInView) {
                if (isInView) {
                    aside.hide();
                } else {
                    aside.show();
                }
            });
        });

        window.addEventListener('scroll', function() {
            let once = false;
            var aside = $('.js-aside-box-travel-content-post')
                // ターゲットの画面トップからの距離
            taeget_position = document.querySelector('.js-footer').getBoundingClientRect().top;

            // 画面トップからの距離から画面の高さより小さければ実行する
            if (taeget_position <= window.innerHeight) {
                aside.removeClass('shown');
            } else {
                aside.addClass('shown');
            }
        });

    };



    /* EOF travel-content.php */


    /* SOF 共通スワイパー */
    //Swiper
    //スワイパーリスト
    var travelSwiperArr = [];
    //共通となるステータスをオブジェクトで設定
    var travelSwiperStatus = {
        loop: true,
        speed: 1000,
        autoplay: {
            delay: 5000,
        },
        autoplay: true,
        allowTouchMove: true,
        //centeredSlides: true,
        spaceBetween: 16,
        slidesPerView: 1.2,
        slideToClickedSlide: true,
        breakpoints: {
            // when window width is <= 768px
            768: {
                slidesPerView: 3
            }
            // when window width is <= 999px
            // 999: {
            //     slidesPerView: 2,
            //     spaceBetweenSlides: 40
            // }
        }
    };
    var travelContentSwiperClassName = [
        '.swiper-container-recentry-checked',
        '.swiper-container-travel-content-popular',
        '.swiper-container-travel-content-recommended',
        '.swiper-container-travel-content-latest',
        '.swiper-container-travel-content-themes01',
        '.swiper-container-travel-content-themes02',
        '.swiper-container-travel-content-themes03',
        '.swiper-container-travel-content-themes04',
        '.swiper-container-travel-content-themes05',
        '.swiper-container-travel-content-themes06',
        '.swiper-container-travel-content-themes07',
        '.swiper-container-travel-content-themes08',
        '.swiper-container-travel-content-themes09',
        '.swiper-container-travel-content-themes10',
        '.swiper-container-travel-content-themes11',

        '.swiper-container-local-professionals-agent-themes01',
        '.swiper-container-local-professionals-agent-themes02',
        '.swiper-container-local-professionals-agent-themes03',
        '.swiper-container-local-professionals-agent-themes04',
        '.swiper-container-local-professionals-agent-themes05',
        '.swiper-container-local-professionals-agent-themes06',
        '.swiper-container-local-professionals-agent-themes07',
        '.swiper-container-local-professionals-agent-themes08',
        '.swiper-container-local-professionals-agent-themes09',

    ];
    travelContentSwiperClassName.map(function(swipName, index) {
        if ($(swipName).length) {
            //共通設定を複製し、必要な設定を追加
            var travelSwiperStatusDepend = travelSwiperStatus;
            travelSwiperStatusDepend.navigation = {
                nextEl: swipName + '-wrapper .swiper-button-next',
                prevEl: swipName + '-wrapper .swiper-button-prev'
            }

            // 特定のスワイパーにだけ設定する場合
            if (swipName == '.swiper-container-recentry-checked') {
                travelSwiperStatusDepend.slidesPerView = 4;
            }

            // スワイパーの実装とオブジェクトの格納
            travelSwiperArr.push(
                new Swiper(
                    swipName,
                    travelSwiperStatusDepend
                )
            );
        }
    });
    /* EOF 共通スワイパー */

});