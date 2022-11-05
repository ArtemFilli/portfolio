$(() => {
  $("#preloader").fadeOut(400)

  // header start
  let sections = $("section"),
    nav = $("#header"),
    nav_height = nav.outerHeight();
  $(window).on("scroll", function () {
    let cur_pos = $(this).scrollTop();
    sections.each(function () {
      let top = $(this).offset().top - nav_height - 220,
        bottom = top + $(this).outerHeight();
      if (cur_pos >= top && cur_pos <= bottom) {
        nav.find("a").removeClass("active");
        sections.removeClass("active");
        $(this).addClass("active");
        nav.find('a[href="#' + $(this).attr("id") + '"]').addClass("active");
      }
    });
  });

  nav.find("a").on("click", function () {
    let $el = $(this),
      id = $el.attr("href");
    $("html, body").animate(
      {
        scrollTop: $(id).offset().top - nav_height - 50,
      },
      100
    );
    return false;
  });

  nav_position = nav.offset().top;
  $(window).scroll(function (event) {
    let scroll = $(window).scrollTop();
    if (scroll > nav_position) {
      nav.addClass("header-active");
    } else {
      nav.removeClass("header-active");
    }
  });

  $("#burger").on("click", () => {
    toggleHeader();
    $(".header_burger a").on("click", () => {
      $("#header").removeClass("header_burger");
      $("#burger").removeClass("burger_active");
      $("body").removeClass("_lock");
    });
  });

  $(".overflow").on("click", () => {
    toggleHeader();
  });

  function toggleHeader() {
    $("#header").toggleClass("header_burger");
    $("#burger").toggleClass("burger_active");
    $("body").toggleClass("_lock");
  }
  // header end

  AOS.init();
});
