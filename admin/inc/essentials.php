<?php 

 function adminLogin(){
   session_start();
   if(isset($_SESSION))
 }


  function redirect($url){
    echo"<script>
      window.location.href='$url';
      </script>";
  }


function alert($type,$msg){

   $bs_class = ($type == "success") ? "alert-success" : "alert-danger";

    echo <<<alert
    <div class="alert $bs_class alert-warning alert-dismissible fade show custom-alert" role="alert">
      <strong class="mg-3">$msg</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
   alert;
}

?>