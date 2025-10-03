(function ($) {
    "use strict";

    $(document).ready(function () {

        var windowOn = $(window);

        $('.header-menu').on('click', function () {

            $('.mobile-offcanvas').addClass('mobile-offcanvas-open');
            $('.mobile-offcanvas-overlay').addClass('mobile-offcanvas-overlay-open');
        })
        $('.mobile-offcanvas-close button, .mobile-offcanvas-overlay').on('click', function () {

            $('.mobile-offcanvas').removeClass('mobile-offcanvas-open');
            $('.mobile-offcanvas-overlay').removeClass('mobile-offcanvas-overlay-open');

        })

        // search bar

        // sticky menu
        windowOn.on('scroll', function () {
            let scroll = windowOn.scrollTop();


            if (scroll > 100) {
                $('#header-area').addClass('header-sticky')
                $('#header-area-white').addClass('header-sticky-white')
            }
            else {
                $('#header-area').removeClass('header-sticky')
                $('#header-area-white').removeClass('header-sticky-white')

            }
        })

        // mobile menu
        var tpMenuWrap = $('.mobile-menu-active > ul').clone();
        var tpSideMenu = $('.mobile-offcanvas-menu nav');
        tpSideMenu.append(tpMenuWrap);
        if ($(tpSideMenu).find('.sub-menu, .mega-menu').length != 0) {
            $(tpSideMenu).find('.sub-menu, .mega-menu').parent().append('<button class="menu-close"><i class="fas fa-chevron-right"></i></button>');
        }

        var sideMenuList = $('.mobile-offcanvas-menu nav > ul > li > a, .mobile-offcanvas-menu nav > ul > li > button');

        $(sideMenuList).on('click', function (e) {
            if (!($(this).parent().hasClass('active'))) {
                $(this).parent().addClass('active');
                $(this).siblings('.sub-menu, .mega-menu').slideDown();

            } else {
                $(this).siblings('.sub-menu, .mega-menu').slideUp();
                $(this).parent().removeClass('active');
                e.preventDefault();
            }
        });

        /*---------- Popup Sidemenu ----------*/
        function popupSideMenu($sideMenu, $sideMunuOpen, $sideMenuCls, $toggleCls) {

            $($sideMunuOpen).on('click', function (e) {
                e.preventDefault();
                $($sideMenu).addClass($toggleCls);
            });
            $($sideMenu).on('click', function (e) {
                e.stopPropagation();
                $($sideMenu).removeClass($toggleCls)
            });
            var sideMenuChild = $sideMenu + ' > div';
            $(sideMenuChild).on('click', function (e) {
                e.stopPropagation();
                $($sideMenu).addClass($toggleCls)
            });

            $($sideMenuCls).on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                $($sideMenu).removeClass($toggleCls);
            });
        };


        popupSideMenu('.sidemenu-cart', '.sideMenuToggler', '.sideMenuCls', 'show');
        popupSideMenu('.sidemenu-info', '.sideMenuInfo', '.sideMenuCls', 'show');



        /*-----------------------------------
               Wow Animation
            -----------------------------------*/
        new WOW().init();


        /*-----------------------------------
               Set Background Image & Mask
            -----------------------------------*/
        if ($("[data-bg-src]").length > 0) {
            $("[data-bg-src]").each(function () {
                var src = $(this).attr("data-bg-src");
                $(this).css("background-image", "url(" + src + ")");
                $(this).removeAttr("data-bg-src").addClass("background-image");
            });
        }

        if ($("[data-mask-src]").length > 0) {
            $("[data-mask-src]").each(function () {
                var mask = $(this).attr("data-mask-src");
                $(this).css({
                    "mask-image": "url(" + mask + ")",
                    "-webkit-mask-image": "url(" + mask + ")",
                });
                $(this).addClass("bg-mask");
                $(this).removeAttr("data-mask-src");
            });
        }


        /*-----------------------------------
              Global Slider
            -----------------------------------*/
        function applyAnimationProperties() {
            $("[data-ani]").each(function () {
                var animationClass = $(this).data("ani");
                $(this).addClass(animationClass);
            });

            $("[data-ani-delay]").each(function () {
                var delay = $(this).data("ani-delay");
                $(this).css("animation-delay", delay);
            });
        }

        // Call the animation properties function
        applyAnimationProperties();

        // Function to initialize Swiper
        function initializeSwiper(sliderContainer) {
            var sliderOptions = sliderContainer.data("slider-options");

            console.log("Slider options: ", sliderOptions);

            var previousArrow = sliderContainer.find(".slider-prev");
            var nextArrow = sliderContainer.find(".slider-next");
            var paginationElement = sliderContainer.find(".slider-pagination");
            var numberedPagination = sliderContainer.find(
                ".slider-pagination.pagi-number"
            );

            var paginationStyle = sliderOptions["paginationType"] || "bullets";
            var autoplaySettings = sliderOptions["autoplay"] || {
                delay: 6000,
                disableOnInteraction: false,
            };

            var defaultSwiperConfig = {
                slidesPerView: 1,
                spaceBetween: sliderOptions["spaceBetween"] || 24,
                loop: sliderOptions.hasOwnProperty("loop") ? sliderOptions["loop"] !== false : true,

                speed: sliderOptions["speed"] || 1000,
                initialSlide: sliderOptions["initialSlide"] || 0,
                centeredSlides: !!sliderOptions["centeredSlides"],
                effect: sliderOptions["effect"] || "slide",
                fadeEffect: {
                    crossFade: true,
                },
                autoplay: autoplaySettings,
                navigation: {
                    nextEl: nextArrow.length ? nextArrow.get(0) : null,
                    prevEl: previousArrow.length ? previousArrow.get(0) : null,
                },
                pagination: {
                    el: paginationElement.length ? paginationElement.get(0) : null,
                    type: paginationStyle,
                    clickable: true,
                    renderBullet: function (index, className) {
                        var bulletNumber = index + 1;
                        var formattedNumber =
                            bulletNumber < 10 ? "0" + bulletNumber : bulletNumber;
                        if (numberedPagination.length) {
                            return (
                                '<span class="' +
                                className +
                                ' number">' +
                                formattedNumber +
                                "</span>"
                            );
                        } else {
                            return (
                                '<span class="' +
                                className +
                                '" aria-label="Go to Slide ' +
                                formattedNumber +
                                '"></span>'
                            );
                        }
                    },
                },
                on: {
                    slideChange: function () {
                        setTimeout(
                            function () {
                                this.params.mousewheel.releaseOnEdges = false;
                            }.bind(this),
                            500
                        );
                    },
                    reachEnd: function () {
                        setTimeout(
                            function () {
                                this.params.mousewheel.releaseOnEdges = true;
                            }.bind(this),
                            750
                        );
                    },
                },
            };

            var finalConfig = $.extend({}, defaultSwiperConfig, sliderOptions);
            console.log("Complete Swiper options: ", finalConfig);

            // Initialize the Swiper instance
            return new Swiper(sliderContainer.get(0), finalConfig);
        }

        // Initialize Swipers on page load
        var swiperInstances = [];
        $(".global-slider").each(function () {
            var sliderContainer = $(this);
            var swiperInstance = initializeSwiper(sliderContainer);
            swiperInstances.push(swiperInstance);
        });

        // Bootstrap tab show event
        $('a[data-toggle="tab"]').on("shown.bs.tab", function (e) {
            var targetTab = $(e.target).attr("href");
            $(targetTab)
                .find(".global-slider")
                .each(function () {
                    var sliderContainer = $(this);
                    if (!sliderContainer[0].swiper) {
                        initializeSwiper(sliderContainer);
                    } else {
                        sliderContainer[0].swiper.update();
                    }
                });
        });

        // Add click event handlers for external slider arrows based on data attributes
        $("[data-slider-prev], [data-slider-next]").on("click", function () {
            var targetSliderSelector =
                $(this).data("slider-prev") || $(this).data("slider-next");
            var targetSlider = $(targetSliderSelector);

            if (targetSlider.length) {
                var swiper = targetSlider[0].swiper;

                if (swiper) {
                    if ($(this).data("slider-prev")) {
                        swiper.slidePrev();
                    } else {
                        swiper.slideNext();
                    }
                }
            }
        });



        /*-----------------------------------
               Back to top
            -----------------------------------*/
        $(window).on("scroll", function () {
            if ($(this).scrollTop() > 20) {
                $("#back-top").addClass("show");
            } else {
                $("#back-top").removeClass("show");
            }
        });

        $(document).on("click", "#back-top", function () {
            $("html, body").animate({ scrollTop: 0 }, 800);
            return false;
        });



        /*-----------------------------------
                MagnificPopup  view
        -----------------------------------*/
        $(".popup-video").magnificPopup({
            type: "iframe",
            removalDelay: 260,
            mainClass: "mfp-zoom-in",
        });

        $(".img-popup").magnificPopup({
            type: "image",
            gallery: {
                enabled: true,
            },
        });



        /*-----------------------------------
                 NiceSelect
        -----------------------------------*/
        if ($(".single-select").length) {
            $(".single-select").niceSelect();
        }

        /*---------- Search Box Popup ----------*/
        function popupSarchBox($searchBox, $searchOpen, $searchCls, $toggleCls) {
            $($searchOpen).on("click", function (e) {
                e.preventDefault();
                $($searchBox).addClass($toggleCls);
            });
            $($searchBox).on("click", function (e) {
                e.stopPropagation();
                $($searchBox).removeClass($toggleCls);
            });
            $($searchBox)
                .find("form")
                .on("click", function (e) {
                    e.stopPropagation();
                    $($searchBox).addClass($toggleCls);
                });
            $($searchCls).on("click", function (e) {
                e.preventDefault();
                e.stopPropagation();
                $($searchBox).removeClass($toggleCls);
            });
        }
        popupSarchBox(".popup-search-box", ".searchBoxToggler", ".searchClose", "show");

        /*---------- Popup Sidemenu ----------*/
        function popupSideMenu($sideMenu, $sideMunuOpen, $sideMenuCls, $toggleCls) {
            // Sidebar Popup
            $($sideMunuOpen).on('click', function (e) {
                e.preventDefault();
                $($sideMenu).addClass($toggleCls);
            });
            $($sideMenu).on('click', function (e) {
                e.stopPropagation();
                $($sideMenu).removeClass($toggleCls)
            });
            var sideMenuChild = $sideMenu + ' > div';
            $(sideMenuChild).on('click', function (e) {
                e.stopPropagation();
                $($sideMenu).addClass($toggleCls)
            });
            $($sideMenuCls).on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                $($sideMenu).removeClass($toggleCls);
            });
        };
        popupSideMenu('.sidemenu-cart', '.sideMenuToggler', '.sideMenuCls', 'show');
        popupSideMenu('.sidemenu-info', '.sideMenuInfo', '.sideMenuCls', 'show');


        /*-----------------------------------
               Mouse Cursor
        -----------------------------------*/
        function mousecursor() {
            if ($("body")) {
                const e = document.querySelector(".cursor-inner"),
                    t = document.querySelector(".cursor-outer");
                let n,
                    i = 0,
                    o = !1;
                (window.onmousemove = function (s) {
                    o ||
                        (t.style.transform =
                            "translate(" + s.clientX + "px, " + s.clientY + "px)"),
                        (e.style.transform =
                            "translate(" + s.clientX + "px, " + s.clientY + "px)"),
                        (n = s.clientY),
                        (i = s.clientX);
                }),
                    $("body").on("mouseenter", "a, .cursor-pointer", function () {
                        e.classList.add("cursor-hover");
                        t.classList.add("cursor-hover");
                    }),
                    $("body").on("mouseleave", "a, .cursor-pointer", function () {
                        ($(this).is("a") && $(this).closest(".cursor-pointer").length) ||
                            (e.classList.remove("cursor-hover"),
                                t.classList.remove("cursor-hover"));
                    }),
                    (e.style.visibility = "visible"),
                    (t.style.visibility = "visible");
            }
        }
        $(function () {
            mousecursor();
        });


        /*-----------------------------------
            Progress Bar
        -----------------------------------*/
        $('.progress-bar').each(function () {
            var $this = $(this);
            var progressWidth = $this.attr('style').match(/width:\s*(\d+)%/)[1] + '%';

            $this.waypoint(function () {
                $this.css({
                    '--progress-width': progressWidth,
                    'animation': 'animate-positive 1.8s forwards',
                    'opacity': '1'
                });
            }, { offset: '75%' });
        });



        /*-----------------------------------
              Text Splitting
        -----------------------------------*/
        Splitting();


        /*-----------------------------------
            Img TO Svg Convert
        -----------------------------------*/

        // Convert All Image to SVG
        $("img.svg").each(function () {
            var $img = $(this),
                imgID = $img.attr("id"),
                imgClass = $img.attr("class"),
                imgURL = $img.attr("src");

            $.get(
                imgURL,
                function (data) {
                    var $svg = $(data).find("svg");
                    if (typeof imgID !== "undefined") {
                        $svg = $svg.attr("id", imgID);
                    }
                    if (typeof imgClass !== "undefined") {
                        $svg = $svg.attr("class", imgClass);
                    }
                    $svg = $svg.removeAttr("xmlns:a");
                    $img.replaceWith($svg);
                },
                "xml"
            );
        });



        /*-----------------------------------
              Hero Global slider js
        -----------------------------------*/
        if (typeof Swiper === "undefined") {
            console.error("Swiper is not loaded. Check if you included Swiper JS.");
            return;
        }

        var $heroBackground = $(".hero1-background-image");

        var heroSwiper = new Swiper(".hero-global-slider", {
            loop: true,
            slidesPerView: 1,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
            speed: 1000,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + '">' + (index + 1) + "</span>";
                }
            },
            on: {
                transitionStart: function () {
                    let $activeSlide = $(".hero-global-slider .swiper-slide.swiper-slide-active");
                    let newBg = $activeSlide.attr("data-bg");
                    if (newBg) {
                        $heroBackground.css("background-image", `url(${newBg})`);
                    }
                }
            }
        });

        // Set initial background image
        let $initialSlide = $(".hero-global-slider .swiper-slide.swiper-slide-active");
        let initialBg = $initialSlide.attr("data-bg");
        if (initialBg) {
            $heroBackground.css("background-image", `url(${initialBg})`);
        }


        /*-----------------------------------
            Testimonial slider js
        -----------------------------------*/
        if (typeof Swiper === "undefined") {
            console.error("Swiper is not loaded. Check if you included Swiper JS.");
            return;
        }

        var testimonialSwiper = new Swiper(".testimonial-slider", {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 20,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
            speed: 1000,
            on: {
                slideChange: function () {
                    updateActiveProfile(this.realIndex);
                }
            }
        });

        // Function to update active profile and shape
        function updateActiveProfile(index) {
            let $shapes = $(".testimonial1-profile-items__shape");
            let $profiles = $(".testimonial1-profile-items__one");

            $shapes.removeClass("active");
            $profiles.removeClass("active");

            if ($shapes.eq(index).length) {
                $shapes.eq(index).addClass("active");
            }
            if ($profiles.eq(index).length) {
                $profiles.eq(index).addClass("active");
            }
        }

        // Click event for the arrow buttons
        $("[data-slider-prev]").click(function () {
            testimonialSwiper.slidePrev();
        });

        $("[data-slider-next]").click(function () {
            testimonialSwiper.slideNext();
        });

        // Click event for profile images to navigate the slider
        $(".testimonial1-profile-items__one").each(function (index) {
            $(this).click(function () {
                testimonialSwiper.slideToLoop(index);
            });
        });

        // Set initial active profile and shape
        updateActiveProfile(testimonialSwiper.realIndex);

        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": "3500"
        };

        $(document).on('submit', '.submittable-form', function (e) {
            e.preventDefault();

            $('.member_loading_btn').show();
            var url = $(this).attr('action');
            var request = $(this).serialize();

            var form = $(this);
            var btnLoadingText = form.find('.submit-button-text').data('loading_text');
            var btnDefaultText = form.find('.submit-button-text').data('default_text');

            form.find('.submit-button-text').html(btnLoadingText);

            $.ajax({
                url: url,
                method: 'post',
                data: request,
                success: function (data) {

                    $('.error').html('');
                    form.find('.submit-button-text').html(btnDefaultText);

                    form[0].reset();

                    toastr.success(data.success);
                },
                error: function (err) {

                    form.find('.submit-button-text').html(btnDefaultText);
                    $('.error').html('');

                    if (err.status == 0) {

                        toastr.error('Net Connection Error.');
                        return;
                    } else if (err.status == 500) {

                        toastr.error('Server error. Please contact to the support team.');
                        return;
                    } else if (err.status == 403) {

                        toastr.error('Access Denied');
                        return;
                    }

                    toastr.error('Please Check all form fields.');

                    $.each(err.responseJSON.errors, function (key, error) {

                        form.find('.error-' + key + '').html(error[0]);
                    });
                }
            });
        });
    }); // End Document Ready Function

    /*-----------------------------------
    Preloader
  -----------------------------------*/
    function loader() {
        $(window).on("load", function () {
            // Animate loader off screen
            $(".preloader").addClass("loaded");
            $(".preloader").delay(300).fadeOut();
        });
    }
    loader();

})(jQuery); // End jQuery


