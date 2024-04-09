//   navbar-fixed JS Start
$(window).scroll(function () {
  // console.log($(window).scrollTop())
  if ($(window).scrollTop() > 63) {
    $('header').addClass('navbar-fixed');
  }
  if ($(window).scrollTop() < 64) {
    $('header').removeClass('navbar-fixed');
  }
});
//   navbar-fixed JS End

// BEARED-slider JS Start
// $('.beared-slider').owlCarousel({
//   loop: false,
//   margin: 10,
//   nav: false,
//   dots: true,
//   responsive: {
//     0: {
//       items: 1.15
//     },
//     540: {
//       items: 2.15
//     },
//     600: {
//       items: 2.15
//     },
//     800: {
//       items: 3.15
//     },

//     1000: {
//       items: 3.15,
//     }
//   }
// });
// BEARED-slider JS End

// BEARED-slider JS Start
// $('.other-slider').owlCarousel({
//   loop: true,
//   margin: 50,
//   nav: false,
//   dots: true,
//   responsive: {
//     0: {
//       items: 1.30,
//       margin: 20,
//     },
//     600: {
//       items: 2.30,
//       margin: 30,
//     },
//     800: {
//       items: 3.30,
//       margin: 25,
//     },
//     1000: {
//       items: 4.30,
//     }
//   }
// });
// BEARED-slider JS End

// BEARED-slider JS Start
// $('.sildenafil-slider').owlCarousel({
//   loop: true,
//   margin: 10,
//   nav: false,
//   dots: true,
//   items: 1,
// });
// BEARED-slider JS End
// premature slider
// $('.premature-slide').owlCarousel({
//   loop: true,
//   margin: 50,
//   nav: false,
//   dots: true,
//   responsive: {
//     0: {
//       items: 1.30,
//       margin: 20,
//     },
//     600: {
//       items: 2
//     },
//     800: {
//       items: 2.6
//     },
//     1000: {
//       items: 3,
//     }
//   }
// });

//  Product details page slider
$('.sildenafil-slider').owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  dots: true,
  items: 1,
});



$(document).ready(function () {
  $('a.scrollDown').click(function (event) {
    event.preventDefault();
    const targetId = $(this).attr('href');
    const targetPosition = $(targetId).offset().top;
    $('html, body').animate({
      scrollTop: targetPosition
    }, 1000);
  });
});

// Get all the steps and store them in an array
const steps = document.querySelectorAll('.qtnr-inner');
// console.log("steps", steps);
// Add event listeners to the "next" buttons
const nextBtns = document.querySelectorAll('.quest-nextbtn');
nextBtns.forEach((btn, i) => {
  btn.addEventListener('click', e => {
    e.preventDefault();
    steps[i].classList.remove('active');
    steps[i + 1].classList.add('active');

  });
});
// Add event listeners to the "previous" buttons
const prevBtns = document.querySelectorAll('.quest-backbtn');
prevBtns.forEach((btn, i) => {
  btn.addEventListener('click', e => {
    e.preventDefault();
    steps[i].classList.remove('active');
    steps[i - 1].classList.add('active');
  });
});


// const visibleHeight = $(document).height() - ($(window).scrollTop() + $(window).height());
const scaledWindowHeight = $(window).height() / 0.9; // Divide by the scaling factor (0.9) to get the scaled height
$(".homepage-banner").css('height', scaledWindowHeight + 'px');
const scalelayoutHeight = ($(window).height() / 0.9) - 127;
$(".main-layout").css('min-height', scalelayoutHeight + 'px');
const scaleFullWidth = $(window).height() / 0.9;
$(".full-wt").css('min-height', scaleFullWidth + 'px');
const scaledWindowbnrHeight = $(window).height() / 0.9;
$(".main-div").css('min-height', scaledWindowbnrHeight + 'px');
const scaledWindowbnrHeighthair = $(window).height() / 0.9;
$(".Save-hair-banner.hair-banner-before").css('min-height', scaledWindowbnrHeighthair + 'px');


// chat js
var options = {
  series: [{
    name: 'Inflation',
    data: [2, 7, 8.3, 9.4]
  }],
  chart: {
    height: 700,
    type: 'bar',
  },
  plotOptions: {
    bar: {
      borderRadius: 0,
      dataLabels: {
        position: 'top', // top, center, bottom
      },
    }
  },
  colors: ['#242423'],
  dataLabels: {
    enabled: true,
    formatter: function (val) {
      return val + "%";
    },
    offsetY: -30,
    style: {
      fontSize: '16px',
      colors: ["#242423"]
    }
  },

  xaxis: {
    categories: ["side Effect", "minoxidil", "Finasteride", "Combined"],
    position: 'bottom',
    axisBorder: {
      show: true
    },
    axisTicks: {
      show: false
    },
    crosshairs: {
      fill: {
        type: 'gradient',
        gradient: {
          colorFrom: '#ccc',
          colorTo: '#000',
          stops: [0, 100],
          opacityFrom: 0.4,
          opacityTo: 0.5,
        }
      }
    },
    tooltip: {
      enabled: true,
    }
  },
  yaxis: {
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false,
    },
    labels: {
      show: false,
      formatter: function (val) {
        return val + "%";
      }
    }

  },
  //   title: {
  //     text: 'Monthly Inflation in Argentina, 2002',
  //     floating: true,
  //     offsetY: 330,
  //     align: 'center',
  //     style: {
  //       color: '#444'
  //     }
  //   }
};

// var chart = new ApexCharts(document.querySelector("#chart"), options);
// chart.render();


// swiper slider start




$(document).ready(function () {
  new Swiper(".swiper-slider1", {
    loop: true,
    // nextButton: ".swiper-button-next",
    // prevButton: ".swiper-button-prev",
    pagination: '.swiper-pagination',
    paginationClickable: true,
    slidesPerView: 3.2,
    spaceBetween: 20,
    breakpoints: {
      1199: {
        slidesPerView: 2.2,
      },
      575: {
        slidesPerView: 1.2,
      },
    }
  });
});

$(document).ready(function () {
  new Swiper(".swiper-slider2", {
    loop: true,
    pagination: '.swiper-pagination',
    paginationClickable: true,
    slidesPerView: 4.2,
    spaceBetween: 20,
    breakpoints: {
      1199: {
        slidesPerView: 3.2,
      },
      767: {
        slidesPerView: 2.2,
      },
      575: {
        slidesPerView: 1.2,
      },
    }
  });
});

$(document).ready(function () {
  new Swiper(".swiper-slider3", {
    loop: true,
    pagination: '.swiper-pagination',
    paginationClickable: true,
    slidesPerView: 2.4,
    spaceBetween: 50,
    breakpoints: {

      767: {
        slidesPerView: 1.2,
        spaceBetween: 0,
      }
    }
  });
});


$(document).ready(function () {
  new Swiper(".swiper-slider4", {
    loop: true,
    pagination: '.swiper-pagination',
    paginationClickable: true,
    slidesPerView: 2,
    spaceBetween: 50,
    breakpoints: {
      1024: {
        slidesPerView: 1,
        spaceBetween: 20,
      }
    }
  });
});

$(document).ready(function () {
  new Swiper(".swiper-slider6", {
    loop: true,
    pagination: '.swiper-pagination',
    paginationClickable: true,
    slidesPerView: 1,
    spaceBetween: 30,
    breakpoints: {
      1024: {
        slidesPerView: 1,
        spaceBetween: 15,
      }
    }
  });
});

$(document).ready(function () {
  (function ($) {
    $(window).on("load", function () {
      $(".content").mCustomScrollbar();
    });
  })(jQuery);
});









