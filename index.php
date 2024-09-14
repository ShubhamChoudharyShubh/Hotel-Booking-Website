<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('inc/links.php') ?>
    <title>TJ Hotel</title>
    <style>
.availablity-form{
  margin-top: -50px;
  z-index: 2;
  position: relative;
}
@media screen and (max-width: 575px){
  .availablity-form{
    margin-top: 25px;
    padding: 0 35px;
  }
}
    </style>
</head>
<body class="bg-light">

<?php require('inc/header.php') ?>

<!-- Swiper -->
<div class="container-fluid px-lg-4 mt-4">
<div class="swiper mySwiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/IMG_15372.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
      <img src="images/carousel/IMG_40905.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
      <img src="images/carousel/IMG_55677.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
      <img src="images/carousel/IMG_62045.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
      <img src="images/carousel/IMG_93127.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
      <img src="images/carousel/IMG_99736.png" class="w-100 d-block"/>
      </div>
    </div>

    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

  </div>
</div>
<!-- Check Avaialibilty Form -->
<div class="container availablity-form">
  <div class="row">
<div class="col-lg-12 bg-white p-4 rounded">
  <h4 class="mb-4">Check Avaialibilty Form</h4>
  <form>
<div class="row align-items-end">
  <div class="col-lg-3 mb-3">
  <label class="form-label" style="font-weight: 500">Check in</label>
  <input type="date" class="form-control shadow-none" aria-describedby="emailHelp">
  </div>
  <div class="col-lg-3 mb-3">
  <label class="form-label" style="font-weight: 500">Check Out</label>
  <input type="date" class="form-control shadow-none" aria-describedby="emailHelp">
  </div>
  <div class="col-lg-3 mb-3">
  <label class="form-label" style="font-weight: 500">Adult</label>
  <select class="form-select shadow-none">
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
  </div>
  <div class="col-lg-2 mb-3">
  <label class="form-label" style="font-weight: 500">Children</label>
  <select class="form-select shadow-none">
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
  </div>
  <div class="col-lg-1 mb-lg-3 mt-2">
<button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
  </div>
</div>
  </form>
</div>
  </div>
</div>

<!-- Our Rooms -->
<h2 class="mt-4 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
     <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
     <img src="images/rooms/1.jpg" class="card-img-top">
      <div class="card-body">
       <h5>Simple Room Name</h5>
       <h6 class="mb-5">₹200 Per Night</h6>
       <div class="features mb-4">
        <h6 class="mb-1">Features</h6>
         <span class="badge rounded-pill text-bg-light text-wrap">2 Rooms</span>
         <span class="badge rounded-pill text-bg-light text-wrap">2 Bathrooms</span>
         <span class="badge rounded-pill text-bg-light text-wrap">2 Balcony</span>
         <span class="badge rounded-pill text-bg-light text-wrap">3 Sofa</span>
       </div>
       <div class="facilities mb-4">
         <h6 class="mb-1">Facilities</h6>
         <span class="badge rounded-pill text-bg-light text-wrap">Wifi</span>
         <span class="badge rounded-pill text-bg-light text-wrap">Television</span>
         <span class="badge rounded-pill text-bg-light text-wrap">AC</span>
         <span class="badge rounded-pill text-bg-light text-wrap">Heater</span>
       </div>
       <div class="guests mb-4">
         <h6 class="mb-1">Guests</h6>
         <span class="badge rounded-pill text-bg-light text-wrap">5 Adults</span>
         <span class="badge rounded-pill text-bg-light text-wrap">4 Childrens</span>
       </div>
       <div class="rating mb-4">
         <h6 class="mb-1">Rating</h6>
         <span class="badge-rounded-pill bg-light">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </span>
       </div>
        <div class="d-flex justify-content-evenly mb-2">
         <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
        </div>
   </div>
   
</div>
</div>
<div class="col-lg-4 col-md-6 my-3">
     <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
     <img src="images/rooms/1.jpg" class="card-img-top">
      <div class="card-body">
       <h5>Simple Room Name</h5>
       <h6 class="mb-5">₹200 Per Night</h6>
       <div class="features mb-4">
        <h6 class="mb-1">Features</h6>
         <span class="badge rounded-pill text-bg-light text-wrap">2 Rooms</span>
         <span class="badge rounded-pill text-bg-light text-wrap">2 Bathrooms</span>
         <span class="badge rounded-pill text-bg-light text-wrap">2 Balcony</span>
         <span class="badge rounded-pill text-bg-light text-wrap">3 Sofa</span>
       </div>
       <div class="facilities mb-4">
         <h6 class="mb-1">Facilities</h6>
         <span class="badge rounded-pill text-bg-light text-wrap">Wifi</span>
         <span class="badge rounded-pill text-bg-light text-wrap">Television</span>
         <span class="badge rounded-pill text-bg-light text-wrap">AC</span>
         <span class="badge rounded-pill text-bg-light text-wrap">Heater</span>
       </div>
       <div class="guests mb-4">
         <h6 class="mb-1">Guests</h6>
         <span class="badge rounded-pill text-bg-light text-wrap">5 Adults</span>
         <span class="badge rounded-pill text-bg-light text-wrap">4 Childrens</span>
       </div>
       <div class="rating mb-4">
         <h6 class="mb-1">Rating</h6>
         <span class="badge-rounded-pill bg-light">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </span>
       </div>
        <div class="d-flex justify-content-evenly mb-2">
         <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
        </div>
   </div>
   </div>
   </div>
   <div class="col-lg-4 col-md-6 my-3">
     <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
     <img src="images/rooms/1.jpg" class="card-img-top">
      <div class="card-body">
       <h5>Simple Room Name</h5>
       <h6 class="mb-5">₹200 Per Night</h6>
       <div class="features mb-4">
        <h6 class="mb-1">Features</h6>
         <span class="badge rounded-pill text-bg-light text-wrap">2 Rooms</span>
         <span class="badge rounded-pill text-bg-light text-wrap">2 Bathrooms</span>
         <span class="badge rounded-pill text-bg-light text-wrap">2 Balcony</span>
         <span class="badge rounded-pill text-bg-light text-wrap">3 Sofa</span>
       </div>
       <div class="facilities mb-4">
         <h6 class="mb-1">Facilities</h6>
         <span class="badge rounded-pill text-bg-light text-wrap">Wifi</span>
         <span class="badge rounded-pill text-bg-light text-wrap">Television</span>
         <span class="badge rounded-pill text-bg-light text-wrap">AC</span>
         <span class="badge rounded-pill text-bg-light text-wrap">Heater</span>
       </div>
       <div class="rating mb-4">
         <h6 class="mb-1">Rating</h6>
         <span class="badge-rounded-pill bg-light">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </span>
       </div>
        <div class="d-flex justify-content-evenly mb-2">
         <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
        </div>
   </div>
   
</div>
</div>
    <div class="col-lg-12 text-center mt-5">
      <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">MORE ROOMS >></a>
    </div>
  </div>
</div>
<!-- OUR FACILITIES -->
<h2 class="mt-4 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
 <div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/IMG_43553.svg" width="80px">
      <h5 class="mt-3">wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/IMG_27079.svg" width="80px">
      <h5 class="mt-3">wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/IMG_96423.svg" width="80px">
      <h5 class="mt-3">wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/IMG_49949.svg" width="80px">
      <h5 class="mt-3">AC</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/IMG_41622.svg" width="80px">
      <h5 class="mt-3">TV</h5>
    </div>
      <div class="col-lg-12 text-center mt-5">
      <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">MORE FACILITIES >></a>
      </div>
  </div>
</div>

<!-- Testimonials -->
<h2 class="mt-4 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
  <div class="container">

    <!-- Swiper -->
  <div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">

    <div class="swiper-slide bg-white p-4">
       <div class="profile d-flex align-items-center p-4">
        <img src="images/about/rating.svg" width="20px">
        <h6 class="m-0 ms-2">Rendom User 1</h6>
       </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Sint numquam amet impedit, sunt voluptas expedita dolorum 
        </p>
        <div class="rating">
          <span class="badge-rounded-pill bg-light">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
         </span>
        </div>
    </div>
    <div class="swiper-slide bg-white p-4">
       <div class="profile d-flex align-items-center p-4">
        <img src="images/about/rating.svg" width="20px">
        <h6 class="m-0 ms-2">Rendom User 1</h6>
       </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Sint numquam amet impedit, sunt voluptas expedita dolorum 
        </p>
        <div class="rating">
          <span class="badge-rounded-pill bg-light">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
         </span>
        </div>
    </div>
    <div class="swiper-slide bg-white p-4">
       <div class="profile d-flex align-items-center p-4">
        <img src="images/about/rating.svg" width="20px">
        <h6 class="m-0 ms-2">Rendom User 1</h6>
       </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Sint numquam amet impedit, sunt voluptas expedita dolorum 
        </p>
        <div class="rating">
          <span class="badge-rounded-pill bg-light">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
         </span>
        </div>
    </div>
    <div class="swiper-slide bg-white p-4">
       <div class="profile d-flex align-items-center p-4">
        <img src="images/about/rating.svg" width="20px">
        <h6 class="m-0 ms-2">Rendom User 1</h6>
       </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Sint numquam amet impedit, sunt voluptas expedita dolorum 
        </p>
        <div class="rating">
          <span class="badge-rounded-pill bg-light">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
         </span>
        </div>
    </div>

     </div>
  <div class="swiper-pagination"></div>
  </div>

  <div class="col-lg-12 text-center mt-5">
      <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">MORE Testimonials >></a>
      </div>
  </div>

  <!-- Reach Us -->
<h2 class="mt-4 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>
<div class="container">
  <div class="row">
     <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
     <iframe class="w-100 rounded" height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234700.90003017505!2d77.24107837665595!3d23.199323871050854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c428f8fd68fbd%3A0x2155716d572d4f8!2sBhopal%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1725971114998!5m2!1sen!2sin"  style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>

     <div class="col-lg-4 col-md-4">

      <div class="bg-white p-4 rounded mb-4">
        <h4>Call Us</h4>
        <a href="tel: +9178943958936" class="d-inline-block mb-2 text-decoration-none text-dark "><i class="bi bi-telephone"></i> +91 78943958936</a><br>
        <a href="tel: +9154539589342" class="d-inline-block mb-2 text-decoration-none text-dark "><i class="bi bi-telephone"></i> +91 54539589342</a>
      </div>

      <div class="bg-white p-4 rounded mb-4">
        <h4>Follow Us</h4>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-twitter"></i> Twitter
          </span>
        </a><br>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-facebook"></i> Facebook
          </span>
        </a><br>
        <a href="#" class="d-inline-block">
          <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-instagram"></i> Instagram
          </span>
        </a><br>
      </div>

     </div>
  </div>
</div>

<?php require('inc/footer.php') ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      // Option to navigate
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    });


    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
      320: {
        slidesPerView: 1,
      },
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      }
    }
    });
  </script>
</body>
</html>