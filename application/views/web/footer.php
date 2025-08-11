<style>

.float {
  
    position: fixed;
    width: 40px;
    height: 40px;
    bottom: 15px;
    left: 15px;
    background-color: #009649;
    color: #FFF;
    border-radius: 5px;
    text-align: center;
    font-size: 20px;
    /* box-shadow: 2px 2px 3px #999; */
    z-index: 100;
   
    padding: 10px;
    }
.float i {
    font-size: 16px;
    color: #fff;
    line-height: 0;
}
    /* .my-float {
      margin-top: 16px;
    } */

    .footer .footer-info .logo h2 span{
      
        position: absolute;
        right: 24px;
      
        bottom: -10px;
       
        font-size: 12px;
        color: rgb(43, 139, 207);
      
    }
    .footer .footer-info .logo h1 {
  position: relative;
    font-size: 24px !important;
    font-weight: bolder;
    /* border:1px solid red !important; */
}
.footer .footer-info .logo h1 span {
  position: absolute;
    left: 2px !important;
    top: 25px !important;
    font-size:9px !important;
    color: fff !important;
    top: 0;
    padding: 0;
    margin: 0;
    bottom: unset !important;
    letter-spacing: 1px !important;
   
}
.footer .footer-info .logo h1 span + span{
  letter-spacing: 1.2px !important;
    position: relative !important;
    top: 12px !important;
    font-size: 10px !important;
    display: block !important;
}

   .footer .footer-info .logo img {
    max-height: 49px !important;
}
h1.cName {
    color: white !important;
}
.txt-col{
  color: yellow;
  font-weight: 700;
}
</style>

<footer id="footer" class="footer">

<div class="container">
  <div class="row gy-4">
    <div class="col-lg-5 col-md-12 footer-info">
    <a href="<?=base_url(); ?>" class="logo d-flex ">
        <img src="<?=base_url("assets/img/newLogo.png"); ?>" class="img-fluid mb-3 mb-lg-0" alt="">
        <h1 class="cName">CLOVERLEAF<span style="width:120%"> GLOBAL SOLUTIONS PVT LTD. </span> <span>An Industry 4.0 Initiative</span></h1>
      </a>
      <p>Cloverleaf is led by a group of experienced founding members rich in industry and management experience.
        Not only in India but also abroad.</p>
      <div class="social-links d-flex mt-4">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

    <div class="col-lg-2 col-6 footer-links">
      <h4>Useful Links</h4>
      <ul>
        <li><a href="<?=base_url(); ?>">Home</a></li>
        <li><a href="<?=base_url("about/"); ?>">About us</a></li>
        <li><a href="<?= base_url("service"); ?>">Services</a></li>
        <li><a href="#">E-Store</a></li>
        <li><a href="<?= base_url("blog"); ?>">Blog</a></li>
        <li><a href="<?= base_url("policy"); ?>">Privacy Policy</a></li>
        <li><a href="<?= base_url("condition"); ?>">Terms & Condition</a></li>
      </ul>
    </div>



    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
      <h4>Contact Us</h4>
      <p>
        <!-- <span class="txt-col">Delhi Ncr:</span> <br>  -->
        <strong>Registered Office:</strong> 202, 2nd Floor, Tower-C, ITHUM,
        Plot No. A-40, Sector 62, Noida,
        U.P. 201301 <br>
        <strong>Corporate Office:</strong> 208, 2nd Floor A-1,
        Sector 3, Noida, U.P. 201301 <br>
        <strong>Branch Office:</strong> 403, City Tower, 250C,
        Boat Club Rd, Bund Garden, Sangamwadi,
        Pune Maharashtra. 411001 <br>
       
        <!-- <span class="txt-col">Pune:</span> <br>
        <strong>Address:</strong> 403, 4th floor, City Tower, Kolte Patil 
Commercial Complex, Boat club Road, 
Sangamwadi, Pune, 411001
        <br> -->
        <strong>Phone:</strong> +91 9911786123 <br>
        <strong>Email:</strong> contact@cloverleafglobal.in
      </p>

    </div>

  </div>
</div>

<div class="container mt-4">
  <div class="copyright">
    &copy; Copyright <strong><span>CLOVERLEAF</span></strong>. All Rights Reserved
  </div>
  <div class="credits">

    Designed by <a href="#">Shree Nandik Technology</a>
  </div>
</div>

</footer>

<!-- whatsapp -->
<a href="https://wa.me/9911786123?text=Name of Organisation : %0aAddress : %0aContact : %0aHow can we Help you : " class="float " target="_blank">
<i class="bi bi-whatsapp my-float"></i>
</a>


<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
  class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>


<script src="<?=base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js");?>"></script>
<script src="<?=base_url("assets/vendor/purecounter/purecounter_vanilla.js");?>"></script>
<script src="<?=base_url("assets/vendor/glightbox/js/glightbox.min.js");?>"></script>
<script src="<?=base_url("assets/vendor/swiper/swiper-bundle.min.js");?>"></script>
<script src="<?=base_url("assets/vendor/aos/aos.js");?>"></script>
<script src="<?=base_url("assets/vendor/php-email-form/validate.js");?>"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script src="<?=base_url("assets/js/main.js");?>"></script>

</body>

</html>