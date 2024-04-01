const ratingInputs = document.querySelectorAll(".rating input[type=radio]");
ratingInputs.forEach((input) => {
    input.addEventListener("change", function () {
        const item = input.closest(".singel-items");
        const selectedRating = item.querySelector(".rating-value-1 span");
        const selectedValue = parseInt(input.value);
        selectedRating.textContent = selectedValue;
    });
});


// **********************************************************************************************************************

document.addEventListener('DOMContentLoaded', function () {
    var preloader = document.querySelector('.preloader');
    var isFirstVisit = localStorage.getItem('isFirstVisit'); 
    if (!isFirstVisit) {      
        preloader.style.display = 'flex';  
        localStorage.setItem('isFirstVisit', 'true');
        setTimeout(function () {
            preloader.style.display = 'none';
        }, 5000); 
    } else {
   
        preloader.style.display = 'none';
    }
    preloader.addEventListener('click', function () {
        preloader.style.display = 'none';
    });
});

  // ********************************************************************************************************************

 function animateValue(element, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        element.innerText = Math.floor(progress * (end - start) + start) + "+";
        if (progress < 1) {
            requestAnimationFrame(step);
        }
    };
    requestAnimationFrame(step);
}

document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".counter");
    counters.forEach((counter) => {
        const target = parseInt(counter.innerText);
        animateValue(counter, 0, target, 3000); 
    });
});

// ***********************************************************************************************************************





// **********************************************************************************************************************

// $(document).ready(function () {
//             $('.course-slied').slick({
//                 dots: false,
//                 infinite: true,
//                 speed: 100,
//                 slidesToShow: 8,
//                 slidesToScroll: 4,
//                 autoplay: true,
//                 autoplaySpeed: 1000,
//                 arrows: true,
                
//                 responsive: [
//                     {
//                         breakpoint: 1200,
//                         settings: {
//                             slidesToShow: 8,
//                             slidesToScroll: 8,
//                         }
//                     },
//                     {
//                         breakpoint: 992,
//                         settings: {
//                             slidesToShow: 8,
//                             slidesToScroll: 8,
//                         }
//                     },
//                     {
//                         breakpoint: 768,
//                         settings: {
//                             slidesToShow: ,
//                             slidesToScroll: 1,
//                             arrows: false,
//                         }
//                     },
//                 ]
//             });
//         });

// $('.course-slied').slick({
//     dots: false,
//     infinite: true,
//     speed: 50000, // Adjust the speed (lower value means slower scrolling)
//     slidesToShow: 8,
//     slidesToScroll: 1,
//     autoplay: true,
//     autoplaySpeed: 5000, // Adjust the autoplay speed (time in milliseconds)
//     arrows: true,
//     prevArrow: '<span class="prev"><i class="fa fa-angle-left"></i></span>',
//     nextArrow: '<span class="next"><i class="fa fa-angle-right"></i></span>',
//     responsive: [
//         {
//             breakpoint: 1200,
//             settings: {
//                 slidesToShow: 3,
//                 slidesToScroll: 1,
//             }
//         },
//         {
//             breakpoint: 992,
//             settings: {
//                 slidesToShow: 2,
//                 slidesToScroll: 1,
//             }
//         },
//         {
//             breakpoint: 768,
//             settings: {
//                 slidesToShow: 1,
//                 slidesToScroll: 1,
//                 arrows: false,
//             }
//         },
//     ]
// });


//         //Function to automatically slide to the left
//         function autoSlideLeft() {
//             $('.course-slied').slick('slickPrev');
//         }

//         // Start auto sliding
//         setInterval(autoSlideLeft, 1000); // Change the interval as needed (3000 milliseconds = 3 seconds)




// **********************************************************************************************************************



document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.singel-patnar');
    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.style.opacity = 3;
            } else {
                slide.style.opacity = 1;
            }
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }

    // Automatically advance to the next slide every 3 seconds
    setInterval(nextSlide, 100);

    showSlide(currentSlide);
});


// ****************************************************************************************************************



