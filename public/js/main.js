(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Sidebar Toggler
    $('.sidebar-toggler').click(function () {
        $('.sidebar, .content').toggleClass("open");
        return false;
    });


    // Progress Bar
    $('.pg-bar').waypoint(function () {
        $('.progress .progress-bar').each(function () {
            $(this).css("width", $(this).attr("aria-valuenow") + '%');
        });
    }, {offset: '80%'});


    // Calender
    $('#calender').datetimepicker({
        inline: true,
        format: 'L'
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: true,
        loop: true,
        nav : false
    });


    // Chart Global Color
    Chart.defaults.color = "#6C7293";
    Chart.defaults.borderColor = "#000000";


    // Worldwide Sales Chart
    var ctx1 = $("#worldwide-sales").get(0).getContext("2d");
    var myChart1 = new Chart(ctx1, {
        type: "bar",
        data: {
            labels: ["2016", "2017", "2018", "2019", "2020", "2021", "2022"],
            datasets: [{
                    label: "USA",
                    data: [15, 30, 55, 65, 60, 80, 95],
                    backgroundColor: "rgba(235, 22, 22, .7)"
                },
                {
                    label: "UK",
                    data: [8, 35, 40, 60, 70, 55, 75],
                    backgroundColor: "rgba(235, 22, 22, .5)"
                },
                {
                    label: "AU",
                    data: [12, 25, 45, 55, 65, 70, 60],
                    backgroundColor: "rgba(235, 22, 22, .3)"
                }
            ]
            },
        options: {
            responsive: true
        }
    });


    // Salse & Revenue Chart
    var ctx2 = $("#salse-revenue").get(0).getContext("2d");
    var myChart2 = new Chart(ctx2, {
        type: "line",
        data: {
            labels: ["2016", "2017", "2018", "2019", "2020", "2021", "2022"],
            datasets: [{
                    label: "Salse",
                    data: [15, 30, 55, 45, 70, 65, 85],
                    backgroundColor: "rgba(235, 22, 22, .7)",
                    fill: true
                },
                {
                    label: "Revenue",
                    data: [99, 135, 170, 130, 190, 180, 270],
                    backgroundColor: "rgba(235, 22, 22, .5)",
                    fill: true
                }
            ]
            },
        options: {
            responsive: true
        }
    });
    


    // Single Line Chart
    var ctx3 = $("#line-chart").get(0).getContext("2d");
    var myChart3 = new Chart(ctx3, {
        type: "line",
        data: {
            labels: [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150],
            datasets: [{
                label: "Salse",
                fill: false,
                backgroundColor: "rgba(235, 22, 22, .7)",
                data: [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15]
            }]
        },
        options: {
            responsive: true
        }
    });


    // Single Bar Chart
    var ctx4 = $("#bar-chart").get(0).getContext("2d");
    var myChart4 = new Chart(ctx4, {
        type: "bar",
        data: {
            labels: ["Italy", "France", "Spain", "USA", "Argentina"],
            datasets: [{
                backgroundColor: [
                    "rgba(235, 22, 22, .7)",
                    "rgba(235, 22, 22, .6)",
                    "rgba(235, 22, 22, .5)",
                    "rgba(235, 22, 22, .4)",
                    "rgba(235, 22, 22, .3)"
                ],
                data: [55, 49, 44, 24, 15]
            }]
        },
        options: {
            responsive: true
        }
    });


    // Pie Chart
    var ctx5 = $("#pie-chart").get(0).getContext("2d");
    var myChart5 = new Chart(ctx5, {
        type: "pie",
        data: {
            labels: ["Italy", "France", "Spain", "USA", "Argentina"],
            datasets: [{
                backgroundColor: [
                    "rgba(235, 22, 22, .7)",
                    "rgba(235, 22, 22, .6)",
                    "rgba(235, 22, 22, .5)",
                    "rgba(235, 22, 22, .4)",
                    "rgba(235, 22, 22, .3)"
                ],
                data: [55, 49, 44, 24, 15]
            }]
        },
        options: {
            responsive: true
        }
    });


    // Doughnut Chart
    var ctx6 = $("#doughnut-chart").get(0).getContext("2d");
    var myChart6 = new Chart(ctx6, {
        type: "doughnut",
        data: {
            labels: ["Italy", "France", "Spain", "USA", "Argentina"],
            datasets: [{
                backgroundColor: [
                    "rgba(235, 22, 22, .7)",
                    "rgba(235, 22, 22, .6)",
                    "rgba(235, 22, 22, .5)",
                    "rgba(235, 22, 22, .4)",
                    "rgba(235, 22, 22, .3)"
                ],
                data: [55, 49, 44, 24, 15]
            }]
        },
        options: {
            responsive: true
        }
    });

    
})(jQuery);

/* Demo purposes only */
$(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  );
  const openFormButton = document.getElementById('openFormButton');
const popupForm = document.getElementById('popupForm');
const closeButton = document.querySelector('.closeButton');

openFormButton.addEventListener('click', function() {
  popupForm.style.display = 'block';
});

closeButton.addEventListener('click', function() {
  popupForm.style.display = 'none';
});
function validateForm() {
    event.preventDefault();
   const fullNameInput = document.getElementById('full-name');
   const emailInput = document.getElementById('email');
   const passwordInput = document.getElementById('password');
   const confirmPasswordInput = document.getElementById('confirm-password');
 
   const fullNameError = document.getElementById('full-name-error');
   const emailError = document.getElementById('email-error');
   const passwordError = document.getElementById('password-error');
   const confirmPasswordError = document.getElementById('confirm-password-error');
 
   let isValid = true;
 
   if (fullNameInput.value.trim() === '') {
     fullNameError.textContent = 'Please enter your full name.';
     isValid = false;
   } else {
     fullNameError.textContent = '';
   }
 
   if (emailInput.value.trim() === '') {
     emailError.textContent = 'Please enter your email.';
     isValid = false;
   } else if (!validateEmail(emailInput.value.trim())) {
     emailError.textContent = 'Please enter a valid email address.';
     isValid = false;
   } else {
     emailError.textContent = '';
   }
 
   if (passwordInput.value.trim() === '') {
     passwordError.textContent = 'Please enter your password.';
     isValid = false;
   } else if (!validatePassword(passwordInput.value.trim())) {
     passwordError.textContent = 'Password must contain at least 8 characters, including at least one letter and one digit.';
     isValid = false;
   } else {
     passwordError.textContent = '';
   }
 
   if (confirmPasswordInput.value.trim() === '') {
     confirmPasswordError.textContent = 'Please confirm your password.';
     isValid = false;
   } else if (passwordInput.value !== confirmPasswordInput.value) {
     confirmPasswordError.textContent = 'Passwords do not match.';
     isValid = false;
   } else {
     confirmPasswordError.textContent = '';
   }
 
   return isValid;
 }
 
 function validateEmail(email) {
   // Email validation regular expression
   const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
   return emailPattern.test(email);
 }
 
 function validatePassword(password) {
   const passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
   return passwordPattern.test(password);
 }



 $(document).ready(function() {
   $(".toggle-password").click(function() {
     $(this).toggleClass("fa-eye fa-eye-slash");
     var input = $($(this).attr("toggle"));
     if (input.attr("type") == "password") {
       input.attr("type", "text");
     } else {
       input.attr("type", "password");
     }
   });
 });

 function validateCompany(){
    event.preventDefault();
    const fullNameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm-password');
    const aboutInput = document.getElementById('about');
    const countryInput = document.getElementById('country');
    const majorInput = document.getElementById('major');
   
 
    const fullNameError = document.getElementById('full-name-error');
    const emailError = document.getElementById('email-error');
    const passwordError = document.getElementById('password-error');
    const confirmPasswordError = document.getElementById('confirm-password-error');
    const aboutError = document.getElementById('about-error');
    const countryError = document.getElementById('country-error');
    const majorError = document.getElementById('major-error');
   
    let isValid =true;
    
    if (fullNameInput.value.trim() === '') {
        fullNameError.textContent = 'Please enter your full name.';
        isValid = false;
      } else {
        fullNameError.textContent = '';
      }

      if (aboutInput.value.trim() === '') {
        aboutError.textContent = 'Please enter your About.';
        isValid = false;
      } else {
        aboutError.textContent = '';
      }

      if (countryInput.value.trim() === '') {
        countryError.textContent = 'Please enter your Country.';
        isValid = false;
      } else {
        countryError.textContent = '';
      }

      if (majorInput.value.trim() === '') {
        majorError.textContent = 'Please enter your Major.';
        isValid = false;
      } else {
        majorError.textContent = '';
      }
    
      if (emailInput.value.trim() === '') {
        emailError.textContent = 'Please enter your email.';
        isValid = false;
      } else if (!validateEmail(emailInput.value.trim())) {
        emailError.textContent = 'Please enter a valid email address.';
        isValid = false;
      } else {
        emailError.textContent = '';
      }
    
      if (passwordInput.value.trim() === '') {
        passwordError.textContent = 'Please enter your password.';
        isValid = false;
      } else if (!validatePassword(passwordInput.value.trim())) {
        passwordError.textContent = 'Password must contain at least 8 characters, including at least one letter and one digit.';
        isValid = false;
      } else {
        passwordError.textContent = '';
      }
    
      if (confirmPasswordInput.value.trim() === '') {
        confirmPasswordError.textContent = 'Please confirm your password.';
        isValid = false;
      } else if (passwordInput.value !== confirmPasswordInput.value) {
        confirmPasswordError.textContent = 'Passwords do not match.';
        isValid = false;
      } else {
        confirmPasswordError.textContent = '';
      }
    
      return isValid;
    }
    function validateEmail(email) {
        // Email validation regular expression
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
      }
      
      function validatePassword(password) {
        const passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
        return passwordPattern.test(password);
      }
function validateUniversity() {
  event.preventDefault();
  const universityInput = document.getElementById('name-university');
    const foundedInput = document.getElementById('founded-on');
    

    const universityError = document.getElementById('name-university-error');
    const foundedError = document.getElementById('founded-on-error');
    const imageInput= document.getElementById('imageInput');
    const imageError = document.getElementById('image-error');
    const file = imageInput.files[0];
    let isValid =true;
    
    if (universityInput.value.trim() === '') {
        universityError.textContent = 'Please enter your University Name.';
        isValid = false;
      } else {
        universityError.textContent = '';
      }

      if (foundedInput.value.trim() === '') {
        foundedError.textContent = 'Please enter your Founded.';
        isValid = false;
      } else {
        foundedError.textContent = '';
      }
      if (file && file.type.includes('image')) {
        // Valid image file
        imageError.textContent = ''; // Clear any previous error message
        // Perform further actions or submit the form
      } else {
        // Invalid image file
        imageError.textContent = 'Please select a valid image file.';
      }
    }
