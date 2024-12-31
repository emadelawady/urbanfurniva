import './bootstrap';
import './counter';
import 'flowbite';


// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';
// import styles bundle
import 'swiper/css/bundle';


// import Alpine from "alpinejs";

// window.Alpine = Alpine;

// Alpine.start();

// import './navbar';





const swiper = new Swiper('.hero-slider', {
    // Optional parameters
    loop: true,

    // If we need pagination
    pagination: {
      el: '.hero-slider .swiper-pagination',
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    // Navigation arrows
    // navigation: {
    //   nextEl: '.hero-slider .swiper-button-next',
    //   prevEl: '.hero-slider .swiper-button-prev',
    // },

    // And if we need scrollbar
    scrollbar: {
      el: '.hero-slider .swiper-scrollbar',
    },
  });



// new furniture items


  var swiper2 = new Swiper(".new-furniture-items", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 10,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      // Navigation arrows
    // navigation: {
    //     nextEl: '.new-furniture-items .swiper-button-next',
    //     prevEl: '.new-furniture-items .swiper-button-prev',
    //   },
    pagination: {
      el: ".new-furniture-items .swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 50,
      },
    },
  });




  // new kitchens items


  var swiper2 = new Swiper(".new-kitchens-items", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 10,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      // Navigation arrows
    // navigation: {
    //     nextEl: '.new-furniture-items .swiper-button-next',
    //     prevEl: '.new-furniture-items .swiper-button-prev',
    //   },
    pagination: {
      el: ".new-kitchens-items .swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 50,
      },
    },
  });




// document.addEventListener('DOMContentLoaded', function () {
//     document.getElementById('myCartDropdownButton1').click();
//   });


// var toggleOpen = document.getElementById('toggleOpen');
// var toggleClose = document.getElementById('toggleClose');
// var collapseMenu = document.getElementById('collapseMenu');

// function handleClick() {
//   if (collapseMenu.style.display === 'block') {
//     collapseMenu.style.display = 'none';
//   } else {
//     collapseMenu.style.display = 'block';
//   }
// }

// toggleOpen.addEventListener('click', handleClick);
// toggleClose.addEventListener('click', handleClick);




// // mega menu

// // Toggle to show and hide navbar menu
// const navbarMenu = document.getElementById("menu");
// const burgerMenu = document.getElementById("burger");

// burgerMenu.addEventListener("click", () => {
//   navbarMenu.classList.toggle("is-active");
//   burgerMenu.classList.toggle("is-active");
// });

// // Toggle to show and hide dropdown menu
// const dropdown = document.querySelectorAll(".dropdown");

// dropdown.forEach((item) => {
//   const dropdownToggle = item.querySelector(".dropdown-toggle");

//   dropdownToggle.addEventListener("click", () => {
//     const dropdownShow = document.querySelector(".dropdown-show");
//     toggleDropdownItem(item);

//     // Remove 'dropdown-show' class from other dropdown
//     if (dropdownShow && dropdownShow != item) {
//       toggleDropdownItem(dropdownShow);
//     }
//   });
// });

// // Function to display the dropdown menu
// const toggleDropdownItem = (item) => {
//   const dropdownContent = item.querySelector(".dropdown-content");

//   // Remove other dropdown that have 'dropdown-show' class
//   if (item.classList.contains("dropdown-show")) {
//     dropdownContent.removeAttribute("style");
//     item.classList.remove("dropdown-show");
//   } else {
//     // Added max-height on active 'dropdown-show' class
//     dropdownContent.style.height = dropdownContent.scrollHeight + "px";
//     item.classList.add("dropdown-show");
//   }
// };

// // Fixed dropdown menu on window resizing
// window.addEventListener("resize", () => {
//   if (window.innerWidth > 992) {
//     document.querySelectorAll(".dropdown-content").forEach((item) => {
//       item.removeAttribute("style");
//     });
//     dropdown.forEach((item) => {
//       item.classList.remove("dropdown-show");
//     });
//   }
// });

// // Fixed navbar menu on window resizing
// window.addEventListener("resize", () => {
//   if (window.innerWidth > 992) {
//     if (navbarMenu.classList.contains("is-active")) {
//       navbarMenu.classList.remove("is-active");
//       burgerMenu.classList.remove("is-active");
//     }
//   }
// });






// Kitchen product Show page

var kitchen_show_thumbs2 = new Swiper(".product-thumb", {
    spaceBetween: 30,
    slidesPerView: 4,
});



var kitchen_show_product2 = new Swiper(".product-prev", {
    loop: true,
    slidesPerView: 1,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
        },
    thumbs: {
    swiper: kitchen_show_thumbs2,
    },
});










// Furniture Sliders


// Living Room Show Page Slider

var furniture_livingroom_show_thumbs = new Swiper(".furniture-livingroom-product-thumb", {
    loop: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
        },
      spaceBetween: 30,
      slidesPerView: 4,
    });



    var furniture_livingroom_show_product = new Swiper(".furniture-livingroom-product-prev", {
      loop: true,
      slidesPerView: 1,
      autoplay: {
          delay: 3500,
          disableOnInteraction: false,
          },
      thumbs: {
        swiper: furniture_livingroom_show_thumbs,
      },
    });






// Living Room Sofa Show Page Slider

var furniture_livingroom_sofa_show_thumbs = new Swiper(".furniture-livingroom-sofa-product-thumb", {
    loop: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
        },
      spaceBetween: 30,
      slidesPerView: 4,
    });



    var furniture_livingroom_sofa_show_product = new Swiper(".furniture-livingroom-sofa-product-prev", {
      loop: true,
      slidesPerView: 1,
      autoplay: {
          delay: 3500,
          disableOnInteraction: false,
          },
      thumbs: {
        swiper: furniture_livingroom_sofa_show_thumbs,
      },
    });











// Bed Room Show Page Slider

var furniture_bedroom_show_thumbs = new Swiper(".furniture-bedroom-product-thumb", {
    loop: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
        },
      spaceBetween: 30,
      slidesPerView: 4,
    });



    var furniture_bedroom_show_product = new Swiper(".furniture-bedroom-product-prev", {
      loop: true,
      slidesPerView: 1,
      autoplay: {
          delay: 3500,
          disableOnInteraction: false,
          },
      thumbs: {
        swiper: furniture_bedroom_show_thumbs,
      },
    });








// Diningroom Show Page Slider

var furniture_diningroom_show_thumbs = new Swiper(".furniture-diningroom-product-thumb", {
    loop: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
        },
      spaceBetween: 30,
      slidesPerView: 4,
    });



    var furniture_diningroom_show_product = new Swiper(".furniture-diningroom-product-prev", {
      loop: true,
      slidesPerView: 1,
      autoplay: {
          delay: 3500,
          disableOnInteraction: false,
          },
      thumbs: {
        swiper: furniture_diningroom_show_thumbs,
      },
    });




// Officefurniture Show Page Slider

var furniture_officefurniture_show_thumbs = new Swiper(".furniture-officefurniture-product-thumb", {
    loop: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
        },
      spaceBetween: 30,
      slidesPerView: 4,
    });



    var furniture_officefurniture_show_product = new Swiper(".furniture-officefurniture-product-prev", {
      loop: true,
      slidesPerView: 1,
      autoplay: {
          delay: 3500,
          disableOnInteraction: false,
          },
      thumbs: {
        swiper: furniture_officefurniture_show_thumbs,
      },
    });




// Outdoorfurniture Show Page Slider

var furniture_outdoorfurniture_show_thumbs = new Swiper(".furniture-outdoorfurniture-product-thumb", {
    loop: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
        },
      spaceBetween: 30,
      slidesPerView: 4,
    });



    var furniture_outdoorfurniture_show_product = new Swiper(".furniture-outdoorfurniture-product-prev", {
      loop: true,
      slidesPerView: 1,
      autoplay: {
          delay: 3500,
          disableOnInteraction: false,
          },
      thumbs: {
        swiper: furniture_outdoorfurniture_show_thumbs,
      },
    });








// Entrywayfurniture Show Page Slider

var furniture_livingroom_cupboard_show_thumbs = new Swiper(".furniture-livingroom-cupboard-product-thumb", {
    loop: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
        },
      spaceBetween: 30,
      slidesPerView: 4,
    });



    var furniture_livingroom_cupboard_show_product = new Swiper(".furniture-livingroom-cupboard-product-prev", {
      loop: true,
      slidesPerView: 1,
      autoplay: {
          delay: 3500,
          disableOnInteraction: false,
          },
      thumbs: {
        swiper: furniture_livingroom_cupboard_show_thumbs,
      },
    });












// Entrywayfurniture Show Page Slider

var furniture_entrywayfurniture_show_thumbs = new Swiper(".furniture-entrywayfurniture-product-thumb", {
    loop: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
        },
      spaceBetween: 30,
      slidesPerView: 4,
    });



    var furniture_entrywayfurniture_show_product = new Swiper(".furniture-entrywayfurniture-product-prev", {
      loop: true,
      slidesPerView: 1,
      autoplay: {
          delay: 3500,
          disableOnInteraction: false,
          },
      thumbs: {
        swiper: furniture_entrywayfurniture_show_thumbs,
      },
    });















// Table Show Page Slider

var furniture_livingroom_table_show_thumbs = new Swiper(".furniture-livingroom-table-product-thumb", {
    loop: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
        },
      spaceBetween: 30,
      slidesPerView: 4,
    });



    var furniture_livingroom_table_show_product = new Swiper(".furniture-livingroom-table-product-prev", {
      loop: true,
      slidesPerView: 1,
      autoplay: {
          delay: 3500,
          disableOnInteraction: false,
          },
      thumbs: {
        swiper: furniture_livingroom_table_show_thumbs,
      },
    });


















// Chair Show Page Slider

var furniture_livingroom_chair_show_thumbs = new Swiper(".furniture-livingroom-chair-product-thumb", {
    loop: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
        },
      spaceBetween: 30,
      slidesPerView: 4,
    });



    var furniture_livingroom_chair_show_product = new Swiper(".furniture-livingroom-chair-product-prev", {
      loop: true,
      slidesPerView: 1,
      autoplay: {
          delay: 3500,
          disableOnInteraction: false,
          },
      thumbs: {
        swiper: furniture_livingroom_chair_show_thumbs,
      },
    });





// new furniture items


// var category_swipper = new Swiper(".category-swipper", {
//     loop: true,
//     slidesPerView: 1,
//     spaceBetween: 10,
//     autoplay: {
//         delay: 2000,
//         disableOnInteraction: false,
//       },
//       height: '40',
//       // Navigation arrows
//     // navigation: {
//     //     nextEl: '.new-furniture-items .swiper-button-next',
//     //     prevEl: '.new-furniture-items .swiper-button-prev',
//     //   },
//     pagination: {
//       el: ".category-swipper .swiper-pagination",
//       clickable: true,
//     },
//     breakpoints: {
//       640: {
//         slidesPerView: 2,
//         spaceBetween: 20,
//       },
//       768: {
//         slidesPerView: 3,
//         spaceBetween: 40,
//       },
//       1024: {
//         slidesPerView: 3,
//         spaceBetween: 50,
//       },
//     },
//   });










