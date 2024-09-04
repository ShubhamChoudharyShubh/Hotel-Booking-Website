<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
    <title>TJ Hotel</title>
    <style>
*{
    font-family: 'Poppins', sans-serif;
}
.h-font{
    font-family: 'Merienda', cursive;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
.custom-bg{
  background-color: #2ec1ac;
}
.custom-bg:hover{
  background-color: #279e8c;
}

    </style>
</head>
<body class="bg-light">
    
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">TJ Hotel</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">About</a>
        </li>
      </ul>
      <div class="d-flex" role="search">
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginmodel">Login</button>
        <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registermodel">Register</button>

</div>
    </div>
  </div>
</nav>

<div class="modal fade" id="loginmodel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="">
      <div class="modal-header">
        <h5 class="modal-title fs-5 d-flex align-items-center">
            <i class="bi bi-person-circle fs-3 me-2"></i>User Login
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control shadow-none" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control shadow-none" aria-describedby="emailHelp">
  </div>
  <div class="d-flex align-items-center justify-content-between mb-2">
    <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
    <a href="javascript: void(0)" class="text-secoundary text-decoration-none" >Forgot Password?</a>
  </div>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="registermodel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form action="">
      <div class="modal-header">
        <h5 class="modal-title fs-5 d-flex align-items-center">
            <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Regitration
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <span class="badge rounded-pill text-bg-light mb-3 text-wrap ls-base">Note: Your detais must match with ID (Adhar Card, passport, Driving Licence, etc) that will be required during check in.</span>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 ps-0 mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control shadow-none" aria-describedby="emailHelp">
          </div>
          <div class="col-md-6 ps-0 mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control shadow-none" aria-describedby="emailHelp">
          </div>    
          <div class="col-md-6 ps-0 mb-3">
          <label class="form-label">Phone Number</label>
          <input type="number" class="form-control shadow-none" aria-describedby="emailHelp">
          </div>
          <div class="col-md-6 ps-0 mb-3">
          <label class="form-label">Profile Image</label>
          <input type="file" class="form-control shadow-none" aria-describedby="emailHelp">
          </div>
          <div class="col-md-12 ps-0 mb-3">
          <label class="form-label">Address</label>
          <textarea class="form-control shadow-none" rows="1"></textarea>
          </div> 
          <div class="col-md-6 ps-0 mb-3">
          <label class="form-label">Pincode</label>
          <input type="number" class="form-control shadow-none" aria-describedby="emailHelp">
          </div>    
          <div class="col-md-6 ps-0 mb-3">
          <label class="form-label">Date of birth</label>
          <input type="date" class="form-control shadow-none" aria-describedby="emailHelp">
          </div>   
          <div class="col-md-6 ps-0 mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control shadow-none" aria-describedby="emailHelp">
          </div>    
          <div class="col-md-6 ps-0 mb-3">
          <label class="form-label">Confirm Password</label>
          <input type="password" class="form-control shadow-none" aria-describedby="emailHelp">
          </div>
        </div>
      </div>
      <div class="text-center">
      <button type="submit" class="btn btn-dark shadow-none">Register</button>
      </div>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="container-fluid px-lg-4 mt-4">
<!-- Swiper -->
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
<div class="container">
  <div class="row">
<div class="col-lg-12 bg-white p-4 rounded">
  <h4 class="mb-4">Check Avaialibilty Form</h4>
  <form>
<div class="row align-items-end">
  <div class="col-lg-3">
  <label class="form-label" style="font-weight: 500">Check in</label>
  <input type="date" class="form-control shadow-none" aria-describedby="emailHelp">
  </div>
  <div class="col-lg-3">
  <label class="form-label" style="font-weight: 500">Check Out</label>
  <input type="date" class="form-control shadow-none" aria-describedby="emailHelp">
  </div>
  <div class="col-lg-3">
  <label class="form-label" style="font-weight: 500">Adult</label>
  <select class="form-select shadow-none">
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
  </div>
  <div class="col-lg-2">
  <label class="form-label" style="font-weight: 500">Adult</label>
  <select class="form-select shadow-none">
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
  </div>
  <div class="col-lg-1">
<button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
  </div>
</div>
  </form>
</div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
  </script>
</body>
</html>