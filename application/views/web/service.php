<style>
  .row.gy-4.abut-row-gy-4 {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column-reverse;
}
h3.color-txt{
  font-size: 2.75rem;
  color: #009649;
}
.col-lg-6.position-relative.align-self-start.order-lg-last.order-first.col-full-width {
  width: 100%;
    display: flex;
    justify-content: space-around;

}
.col-lg-6.content.order-last.order-lg-first.col-full-width {
    width: 100%;
   
    /* padding-top: 15px; */
}

.ul-none {
  margin-top: 10px;
padding-bottom: 15px;
}

.ul-none li {
    list-style: none;
    /* padding-top:10px; */
}
.col-lg-6.content.order-last.order-lg-first.col-full-width.bprder-div {
    border: 1px solid blue;
    border-radius: 30px;
    margin-top: 25px;
    background: #2424a5;
    color: #fff;
    font-size: 1.3rem;
    padding: 18px;
}

h3.color-txt.hpadding {
    padding: 50px 0;
}
h3.color-txt.pd-top {
    padding-top: 20px;
}
section#about {
    padding: 0px 0;
}
.section-header {
    text-align: center;
    padding: 20px 0;
    position: relative;
    margin-top: 20px;
}
.section-header span {
    top: 35px;

}

.features .features-item .ul-none li {
    list-style: none;
    padding-bottom: 0px!important;
}

.txt-colp{

font-size: 18px;
line-height: 24px;   
 color: #777777;
 }

 .img-logo-service {
    display: flex;
    justify-content: space-around;
    margin-bottom: 30px;
}
.img-logo-service img{
    width:40%;
}
img.img-fluid.img-truhaul {
    height: 90vh;
}
.col-md-12.col-lg-6.img-truhaulw {
    display: flex;
    justify-content: space-around;
}
.col-md-12.col-lg-6.txt-colp.truesense-width {
    width: 40%;
}
.col-md-12.col-lg-6.truesense-width-img {
    width: 60%;
}
.col-md-12.col-lg-6.txt-colp.truesense-width2 {
    width: 80%;
}
.col-md-12.col-lg-6.truesense-width2-img {
    width: 20%;
}
.widthOemBox{
    height:45vh !important;
}
/* Mobile view hide span */

@media (max-width: 700px) {
  .dis-none{
    display: none !important;
    /* color: #dc3545 !important; */
  }
}
</style>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
       <div class="page-header d-flex align-items-center" style="background-image: url('<?=base_url("assets/img/bg.jpg");?>');">
          <div class="container position-relative">
              <div class="row d-flex justify-content-center">
                  <div class="col-lg-6 text-center">
                      <h2>Service</h2>
                  </div>
              </div>
          </div>
        </div>
         <nav>
               <div class="container">
                     <ol>
                         <li><a href="<?= base_url(); ?>">Home</a></li>
                          <li>Service</li>
                      </ol>
                </div>
          </nav>
    </div><!-- End Breadcrumbs -->

 <!-- ======= About Us Section ======= -->
<!-- ------------------------------------------------------------------------------------------------- -->
 <section id="features" class="features">
    <div class="container">

      <div class="section-header">

         <span class="dis-none">Digitising Shopfloor Maintenance.</span>
         <h2>Digitising Shopfloor Maintenance.</h2>

      </div>
      
       <div class="row gy-4 align-items-center features-item" id="trucare" data-aos="fade-up">
         
          <div class="col-md-12 col-lg-6 txt-colp">
            <div class="img-logo-service">
               <img src="<?=base_url("assets/img/truecaretxt.png"); ?>" class="img-fluid" alt="">
            </div>
            <p>
            TruCare will create a Digitized Shop Floor Maintenance System, to enable the most comprehensive range of Preventive, Curative and Predictive Diagnostic Services through health reports by analysing the machine maintenance history and recommended service practices by manufacturers for printing, converting and packaging industry. It aims to reduce, unplanned breakdowns, there by improving machine uptime and also reduce over all cost of ownership by timely intervention of engineers through its network of engineers and spare parts inventory.
            </p>
            
            <button class="open-btn" onclick='openPopup("<?= base_url("assets/video/Truecare.mp4"); ?>")'>Watch Video</button>

              <!-- Fullscreen Popup -->
              <div class="popup" id="videoPopup">
                <div class="popup-content">
                  <button class="close-btn" onclick="closePopup()">
                    <i class="fa-solid fa-xmark"></i>
                  </button>
                  <div class="video-container">
                    <video id="popupVideo" autoplay controls>
                      <source src="" type="video/mp4">
                      Your browser does not support the video tag.
                    </video>
                  </div>
                </div>
              </div>
          
          </div>
          <div class=" col-md-12 col-lg-6">
                <img src="<?=base_url("assets/img/updateTrucarebox.webp"); ?>" class="img-fluid" alt="">
          </div>

          
        </div>
    </div>  
</section>


<section id="features" class="features">
    <div class="container">

      <div class="section-header">

         <span class="dis-none">INFUSE LIFE INTO YOUR GOLDEN MACHINE</span>
         <h2>INFUSE LIFE INTO YOUR GOLDEN MACHINE</h2>

      </div>

       <div class="row gy-4 align-items-center features-item" id="truehaul" data-aos="fade-up">

       <div class=" col-md-12 col-lg-6 img-truhaulw">
                <img src="<?=base_url("assets/img/truhaulUpdateBox.webp"); ?>" class="img-fluid img-truhaul" alt="">
          </div>
         
          <div class="col-md-12 col-lg-6 txt-colp">
          <div class="img-logo-service">
               <img src="<?=base_url("assets/img/truehaultxt.png"); ?>" class="img-fluid" alt="">
            </div>
            <p>
            TruHaul will provide Retrofit, Upgrade and Overhaul Services, through
performance and breakdown history analysis, that will extend life of assets,
enable guaranteed output standards for printing, converting and packaging
industry, to ensure you can better your Return on Capital Employed, through
postponed capital expenditure.
            </p>
          <button class="open-btn" onclick='openPopup("<?= base_url("assets/video/TruHaul.mp4"); ?>")' >Watch Video</button>
          </div>
        

          
        </div>
    </div>  
</section>

<section id="features" class="features">
    <div class="container" id="oem" >

      <div class="section-header">

         <span class="dis-none">OEM EXTENDED SERVICE</span>
         <h2>OEM EXTENDED SERVICE</h2>

      </div>

       <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

       <!-- <div class=" col-md-12 col-lg-6 img-truhaulw">
                <img src="<?=base_url("assets/img/boxTrueSense.webp"); ?>" class="img-fluid img-truhaul widthOemBox" alt="">
          </div> -->
         
          <div class="col-md-12 col-lg-6 txt-colp">
          <div class="img-logo-service">
               <img src="<?=base_url("assets/img/trueassurelogo.jpg"); ?>" class="img-fluid" alt="">
            </div>
            <p>
            
            TruAssure is an OEM Extended Service. It seeks to service all or any OEM machine that gets installed, by being their single window maintenance point. It will prepare and provide remote access to OEMs for advice when required. The Service will undertake to deliver all SLAs that are mapped with respective OEMs.
            </p>
          
          </div>

          <div class=" col-md-12 col-lg-6 img-truhaulw">
                <img src="<?=base_url("assets/img/boxTrueSense.webp"); ?>" class="img-fluid img-truhaul widthOemBox" alt="">
          </div>
        

          
        </div>
    </div>  
</section>


<section id="features" class="features" >
    <div class="container" id="truesense">

      <div class="section-header">

         <span class="dis-none">Third Eye For Your Production System</span>
         <h2>Third Eye For Your Production System</h2>

      </div>

       <div class="row gy-4 align-items-center features-item" id="truehaul" data-aos="fade-up">

       <div class=" col-md-12 col-lg-6 img-truhaulw">
                <img src="<?=base_url("assets/img/oemservice.webp"); ?>" class="img-fluid img-truhaul widthOemBox" alt="">
          </div>
         
          <div class="col-md-12 col-lg-6 txt-colp">
          <div class="img-logo-service">
               <img src="<?=base_url("assets/img/truesenstxt.png"); ?>" class="img-fluid" alt="">
            </div>
            <p>
            Designing a production system of interactive resources and department
requires visibility to performance of each resource. An effective production
management, is backed by an effective industry 4.0 standards, it aims to
monitor and improve the efficiency of activities of material and machine
management, staff resources, and budgets to produce goods better and at
lower costs. It ensures that manufacturing stays on schedule, within budget,
and achieves the desired output goals.
Jobs come on the production line at various specifications and print run sizes,
this makes the environment dynamic. Aligning machines with jobs and raw
material is important.
TruSense helps bring on line all these aspects.
            </p>
          
          </div>
        

          
        </div>
    </div>  
</section>  
 <section id="features" class="features" id="what">
        <div class="container">
          
          <!-- <div class="section-header">
            <span>What are we solving for</span>
            <h2>What are we solving for</h2>
          </div> -->
          <img src="<?=base_url("assets/img/cloverBg.webp"); ?>" style="width:100%" alt="qwerty">


        </div>
  </section>



 </main>
