jQuery(function ($) {
  /*
   * Menu
   */
  $("body").on("click", ".menu-opener", function () {
    $("body").toggleClass("opened-menu opened opened-shim");
  });

  /*
   * Close Menu
   */
  $("body").on("click", ".menu-close", function () {
    $("body").removeClass("opened-menu opened opened-shim");
  });

  /*
   * Close menu when clicking outside
   */
  $("body").on("click", ".side-menu", function (e) {
    if (e.target === this) {
      $("body").removeClass("opened-menu opened opened-shim");
    }
  });

  /*
   * Sub Menus
   */
  $("body").on("click", ".sub-opener", function () {
    $(this).next().stop().slideToggle();
  });

  /*
   * FAQ item
   */
  // $(".question").on("click", function () {
  //   if ($(this).parent().hasClass("active")) {
  //     $(this).parent().removeClass("active");
  //     $(this).next().stop().slideUp("fast");
  //   } else {
  //     $(this).parent().addClass("active");
  //     $(this).next().stop().slideDown("fast");
  //   }
  // });
});

jQuery(document).ready(function() {
    // Set fixed width for all review slides via JS to ensure Swiper loop works with slidesPerView: 'auto'

    if (window.Swiper) {
        new Swiper('.review-swiper', {
            slidesPerView: 'auto',
            spaceBetween: 17,
            loop: false,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                pauseOnMouseEnter: false,
            },
        });
    }
});
