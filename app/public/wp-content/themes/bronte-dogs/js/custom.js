jQuery(function ($) {
  /*
   * Menu
   */
  $("body").on("click", ".menu-opener", function () {
    $("body").toggleClass("opened-menu opened opened-shim");
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
