jQuery(function($) {
    $(document).ready(function() {
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
        // #にダブルクォーテーションが必要
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
        var mySwiper_top_kv = new Swiper('.swiper-container-top-kv', {
            //effect: 'fade',
            // fadeEffect: {
            //     crossFade: true
            // },
            autoplay: true,
            autoplay: {
                delay: 5000,
            },
            speed: 3000,
        });
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
        var mySwiper_local_professionals = new Swiper('.swiper-container-local-professionals', {
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
        var mySwiper_local_professionals_news = new Swiper('.swiper-container-local-professionals-news', {
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
        // slideToメソッドを実行する関数を定義
        if ($('.swiper-container-search-navi-tab-contents').length) {
            $('.swiper-container-search-navi-tab .swiper-slide.tab').on('click', function() {
                var index = $(this).index(); //クリックした要素のインデックスを取得
                mySwiper_search_navi_tab_contnets.slideTo(index); //指定のスライドを呼び出し
            });
        }
        // if ($('.swiper-container-search-navi-tab-contents02').length) {
        //     $('.swiper-container-search-navi-tab02 .swiper-slide.tab').on('click', function() {
        //         var index = $(this).index(); //クリックした要素のインデックスを取得
        //         mySwiper_search_navi_tab_contnets02.slideTo(index); //指定のスライドを呼び出し
        //     });
        // }
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
        var mySwiper = new Swiper('.swiper-container-local-professionals-news-latest', {
            loop: false,
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
        //BLOGサイドバー
        $('.months .links').hide();
        $('.months .toggle').click(function() {
            $(this).next('.links').slideToggle();
            $(this).toggleClass('shown');
        });
        //アコーディオン
        if ($('.js-acordion-head').length) {
            $(".js-acordion-head").next().css('display', 'none');
            $(".js-acordion-head.shown").next().css('display', 'block');
            $(".js-acordion-head").on("click", function() {
                $(this).next().slideToggle();
                $(this).toggleClass("shown"); //追加部分
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
});