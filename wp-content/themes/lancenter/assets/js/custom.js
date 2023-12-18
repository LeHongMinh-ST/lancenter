(function ($) {
  $('.mean-menu').meanmenu({
    meanScreenWidth: "1044"
  });

  'use strict';
  $(window).on('scroll', function () {
    if ($(this).scrollTop() > 150) {
      $('.navbar-area').addClass("is-sticky");
    } else {
      $('.navbar-area').removeClass("is-sticky");
    }

  });

  $('.department-item__btn_next').click(function () {
    $('#modelDepartment').modal('show');
  })

  $('#confirm').change(function () {
    if ($(this).is(':checked')) {
      $('#btnSubmit').removeClass('disabled');
      $('#btnSubmit').removeAttr('disabled');
    } else {
      $('#btnSubmit').addClass('disabled');
      $('#btnSubmit').attr('disabled', 'disabled');
    }
  })

  $('#btnSubmit').click(function (e) {
    if ($(this).hasClass('disabled')) {
      e.preventDefault();
    }
  })

})(jQuery);

const swiper = new Swiper('#mySwiper', {
  // Optional parameters
  slidesPerView: "auto",
  spaceBetween: 30,
  loop: true,

  // If we need pagination
  pagination: {
    enabled: false,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-next',
    prevEl: '.swiper-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    enabled: false,
  },
});

const swiper2 = new Swiper('#mySwiperBlog', {
  // Optional parameters
  slidesPerView: 4,
  spaceBetween: 10,
  loop: true,

  centeredSlides: true,
  scrollbar: {
    enabled: false,
  },
  breakpoints : {
    480: {
      slidesPerView: 1,
      spaceBetween: 10
    },

    768: {
      slidesPerView: 2,
      spaceBetween: 10
    },

    1440: {
      slidesPerView: 3,
      spaceBetween: 10
    },
  }

})



