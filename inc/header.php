<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">TJ Hotel</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="Rooms.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="Facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="Contact.php">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="about.php">About</a>
        </li>
      </ul>
      <div class="d-flex" role="search">
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginmodel">Login</button>
        <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registermodel">Register</button>

</div>
    </div>
  </div>
</nav>

<!-- loginmodel -->
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

<!-- registermodel -->
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
