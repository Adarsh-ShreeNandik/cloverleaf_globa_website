  <style>
   /* nav#navbar {
    margin-left: 30px;
} */

.flex-container {
  display: flex;
  overflow: hidden;
  width: 205%;
  height:25vh;
}

.home-ban-ul {
  display: flex;
  list-style: none;
  padding: 0;
  margin: 0;
  animation: moveList 120s linear infinite; /* Adjust the animation duration and timing function as needed */
  align-items: end;
}

@keyframes moveList {
  0% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-100%);
  }
}

.home-ban-ul li {
  font-weight:700;
  padding: 10px;
  
  margin-right: 10px;
  white-space: nowrap;
  
}

.col-md-4.order-1.width-r {
    display: flex;
    justify-content: space-around;
}
.col-md-4.order-1.width-r img{
  height:50vh;
}
.imghomediv{
  width:100%;
}
.col-md-7 h6{
  font-weight: 700;
  margin-bottom: 5px;
  text-transform: uppercase;
  color: #038466;
}
.dms-head-p{
  font-size:20px;
}

p.home-service-txt {
    font-size: 13px !important;
    /* line-height: 6px; */
    color: #777777 !important;
}
  </style>
  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">"Building the Future of Machine Service"
          </h2>

          <div class="flex-container">
                 <ul class="home-ban-ul">
                    <li>Reduce Overall Ownership Cost</li>
                    <li>Increase Firsttime Fix Rate</li>
                    <li>Reduce Restoration Mean Time</li>
                    <li>Increase Mean Time Between Failure</li>    
                    <li>Enhance Machine Productivity</li>
                    <li>Reduce Overall Ownership Cost</li>
                    <li>Increase Firsttime Fix Rate</li>
                    <li>Reduce Restoration Mean Time</li>
                    <li>Increase Mean Time Between Failure</li>    
                    <li>Enhance Machine Productivity</li>
                    <li>Reduce Overall Ownership Cost</li>
                    <li>Increase Firsttime Fix Rate</li>
                    <li>Reduce Restoration Mean Time</li>
                    <li>Increase Mean Time Between Failure</li>    
                    <li>Enhance Machine Productivity</li>
                    <li>Reduce Overall Ownership Cost</li>
                    <li>Increase Firsttime Fix Rate</li>
                    <li>Reduce Restoration Mean Time</li>
                    <li>Increase Mean Time Between Failure</li>    
                    <li>Enhance Machine Productivity</li>

                  </ul>
          </div>      
        </div>
             
           
      </div>
     
    </div>
  
  </section><!-- End Hero Section -->

  <main id="main">
    
    <section id="features" class="features">
        <div class="container">
          
          <div class="section-header">
            <span>Are these situations familiar to you ...</span>
            <h2>Are these situations familiar to you ...</h2>
          </div>
          <img src="<?=base_url("assets/img/approch.png"); ?>" style="width:100%" alt="qwerty">


        </div>
  </section>




    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Our Services</span>
          <h2>Our Services</h2>
          <!-- <div class="col-md-12 col-lg-6 imghomediv">
    <img src="<?= base_url("assets/img/about2.png"); ?>" class="img-fluid mx-auto" style="max-width: 70%; margin:20px 0" alt="">
</div>
          <h5>To address the problems and their underlying causes, we have divided our services in to 3 broad categories.</h5> -->
        </div>

        <div class="row gy-4">
  <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
    <div class="card">
      <div class="card-img">
        <img src="assets/img/Truecare-01-01-01-01.png" alt="" class="img-fluid">
      </div>
      <h3><a href="<?=base_url('trucare/'); ?>" class="stretched-link">TRUCARE</a></h3>
      <p class="home-service-txt">TruCare aims to enhance maintenance efficiency using digital calendars, schedulers and
work logs.
It helps in real time monitoring and collaborative working for curative maintenance during
breakdown. It brings together Customers own maintenance teams, Cloverleaf crew, and
qualified Freelancers, to form knowledge pools and solve critical problems.
Thereby it optimizes machine performance and enhances productivity.
Post curative tracking strengthened by sensor/IoT records can continue to provide
comprehensive insights.
</p>
    </div>
  </div><!-- End Card Item -->

  <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
    <div class="card">
      <div class="card-img">
        <img src="assets/img/true haul-01-01-01.png" class="img-fluid">
      </div>
      <h3><a href="<?=base_url('truhaul/'); ?>" class="stretched-link">TRUHAUL</a></h3>
      <p class="home-service-txt">TruHaul extends the life of the machine by overhauling, retrofitting, and parts upgrade to keep up with technology advancements. It solves for consistent machine performance.</p>
    </div>
  </div><!-- End Card Item -->

  <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
    <div class="card">
      <div class="card-img">
        <img src="assets/img/trueassur.jpg" alt="" class="img-fluid">
      </div>
      <h3><a href="<?=base_url('trusense/'); ?>" class="stretched-link">TruAssure</a></h3>
      <p class="home-service-txt">TruAssure is a facility provided to OEMs that can map their SLAs for strict adherence to service quality. It is specially for those OEMs, who have instals or are keen to enter the market, but do not have a service back up in India.
The service provides remote access to specialists in OEM geographies for guidance and suggestions as and when required.
</p>
    </div>
  </div>

  <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
    <div class="card">
      <div class="card-img">
        <img src="assets/img/ts.jpg" alt="" class="img-fluid">
      </div>
      <h3><a href="<?=base_url('trusense/'); ?>" class="stretched-link">TRUSENSE</a></h3>
      <p class="home-service-txt">TruSense aims to optimize production systems through IoT based digital technologies, for production monitoring and is integrated with a unique ERP system that helps access inventory. Thus, creating a better Production Management System by allowing optimised asset management as reel stock management and other relevant spares focused on your model. This service is designed to leverage computer vision-based monitoring of production lines.</p>
    </div>
  </div>
 
  <!-- End Card Item -->
</div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->

    <!-- <div class="section-header">
      <span>About Us</span>
      <h2>About Us</h2>

    </div> -->
    
    <!-- <section id="about" class="about pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" style="text-align: center;">
            <img src="assets/img/Industry-4.webp" style="height: 700px;"  class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            
            <p><br>
              <br>

              Introducing Industry 4.0 Standards for the Packaging and Converting Industry.
              Widely said interchangeably as the Fourth Industrial Revolution, Industry 4.0 at its core refers to the
              “smart” and
              connected production systems that are designed to sense, predict, and interact with the physical world, so
              as to make
              decisions and take actions that support production processes.
              In the process it helps to enhance return on capital employed.
              Anticipating faults and foreseeing machine conditions, remotely by digitally wiring up a system that can
              help take
              just-in-time actions is what Cloverleaf is set to follow.
              This helps to prevent creation of back – up capacity, while putting capital for better use.

            </p>
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-diagram-3"></i>
              <div>
                  <h5>Internet of Things (IoT)</h5>
                  <p>
                    The Internet of Things (IoT) is a key component of smart factories. Machines on the factory floor are equipped with sensors that 
                    feature an IP address that allows the machines to connect with other web-enabled devices.
                  </p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h5>AI and machine learning</h5>
                  <p>AI and machine learning can create insights providing visibility, predictability and automation of operations and business processes.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>Cloud computing</h5>
                  <p>
                    Cloud computing is a cornerstone of any Industry 4.0 strategy. Full realization of smart manufacturing demands connectivity and 
                    integration of engineering, supply chain, production, sales and distribution, and service.
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section> -->

  
    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">

        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h3>Cloverleaf</h3>
            <!-- <p>  Always an epitome of efficiency 
              in a complex world
              
            </p> -->
            <a class="cta-btn" href="#">Read More</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Features Section ======= -->

    <br>
    <br>
    <section id="features" class="features">
      <div class="container">

        <div class="section-header">

          <span> DMMS</span>
          <h2>DMMS <p class="text-center dms-head-p">Solution At Fingertips</p></h2>
          <!-- <h5></h5> -->

        </div>

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
        

          <div class="col-md-5">
            <img src="assets/img/Desl-01.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
            <h3>Digital Desktop and Mobile Dashboards
            </h3>
            <p class="fst-italic">
            Advanced Digital Dashboards that work on your personal Desktop as well as Mobiles to fully manage your service when you want.
            </p>
           
            <ul>
              <li><i class="bi bi-check"></i> Access to Digital Machine Guides
              </li>
              <li><i class="bi bi-check"></i> Maintenance Calendar and Quick Access to Work Logs

              </li>
              <li><i class="bi bi-check"></i> Engineers Work Order/Status and Maintenance Schedules</li>
              <li><i class="bi bi-check"></i> Machine Performance Monitoring</li>
            </ul>
            <br><br><br>
          </div>
        </div><!-- Features Item -->
      

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
            <div class="col-md-4 order-1  width-r">
                 <img src="assets/img/mobileScreen1.webp" class="img-fluid" alt="">
            </div>
            <div class="col-md-4 order-1  width-r">
                 <img src="assets/img/mobileScreen2.webp" class="img-fluid" alt="">
            </div>
            <div class="col-md-4 order-1  width-r">
                 <img src="assets/img/mobilecreen3.webp" class="img-fluid" alt="">
            </div>

            <!-- <div class="col-md-4 order-2 order-md-1 ">
                   <h3>Digital Mobile Dashboards</h3>
                      <p class="fst-italic">
                          An Embaded mobile application for your employees to fully automate the process.<br><br>
                      </p>

                    <ul>
                         <li><i class="bi bi-check"></i> Machine Performance
                              Monitoring

                          </li>
                          <li><i class="bi bi-check"></i> Skill & Parts Just-in-Time
                              Mapping

                          </li>
                          <li><i class="bi bi-check"></i> Post Curative Monitoring
                          </li>
                          <li><i class="bi bi-check"></i> Engineers Work Order

                           </li>
                          <li><i class="bi bi-check"></i> Maintenance schedule
                          </li>
                  </ul>
                  <br><br><br>
            </div> -->
            <!-- <div class="col-md-4 order-1 order-md-2 ">
            <img src="assets/img/mobileScreen2.webp" class="img-fluid" alt="">
          </div> -->

          <!-- <div class="col-md-4 order-1 order-md-2 ">
            <img src="assets/img/mobileScreen3.webp" class="img-fluid" alt="">
          </div> -->
         
        
        
        </div><!-- Features Item -->

        
      </div><!-- Features Item -->

      
    </div>
  </section><!-- End Features Section -->
  
  
  <!-- <section id="features" class="features">
        <div class="container">
          
          <div class="section-header">
            <span>Problem-Solving</span>
            <h2>Problem-Solving</h2>
          </div>
          <img src="<?=base_url("assets/img/approch.png"); ?>" style="width:100%" alt="qwerty">


        </div>
  </section> -->





    <section class="courses">

      <section id="features" class="features">
        <div class="container">

          <div class="section-header">
            <span>Our Team</span>
            <h2>Our Team</h2>
          </div>
          <br><br>

          <div class="container courses_container">
            <article class="course">
              <div class="course_image">
                <img src="assets/img/1-01.png" />
              </div>
              <div class="course_info">
                <h3>Dipanker Mukherjee</h3>
                <h6>Co-founder</h6>

                <p>
                  Over 30 years of industry experience,
                  in sectors as Office Automation,
                  Telecom in leadership positions. An
                  alum of IIMA, worked in Fortune 500
                  companies, both Indian and
                  Multinational. Experience in
                  developing in new businesses and
                  creating technology platforms.
                </p>
              </div>
            </article>

            <article class="course">
              <div class="course_image">
                <img src="assets/img/2-01.png" />
              </div>
              <div class="course_info">
                <!-- <h4>Respponsive Social Media Website Ui Design</h4> -->
                <h3>Prem Vishwakarma</h3>
                <h6>Co-founder</h6>
                <p>
                  International exposure in converting
                  industry. Worked both in India
                  and abroad. Succesful entrepreneur
                  in machinery business.
                  Expert in machine optimisation
                  solutions over various makes.
                </p>
              </div>
            </article>
            <article class="course">
              <div class="course_image">
                <img src="assets/img/3-01.png" />
              </div>
              <div class="course_info">
                <!-- <h4>Respponsive Social Media Website Ui Design</h4> -->
                <h3>Pavan Singh</h3>
                <h6>Co-founder</h6>
                <p>
                  Technocrat with international
                  exposure, with over 30 year
                  experience in packaging and printing
                  industry. Worked in both,
                  multinational and Indian companies
                  in India and abroad.
                  Expert in sustainable packaging
                </p>
              </div>
            </article>
            <article class="course">
              <div class="course_image">
                <img src="assets/img/4-01.png" />
              </div>
              <div class="course_info">
                <!-- <h4>Respponsive Social Media Website Ui Design</h4> -->
                <h3>Subhasis Roy</h3>
                <h6>Co-founder</h6>
                <p>
                  An engineer and an IIMC alum, with
                  more than 30 years of experience,
                  with core experience in packaging
                  industry. Worked in India and abroad
                  in leadership positions. Vast
                  experience in setting up large projects
                  in various industries.
                </p>
              </div>
            </article>
          </div>
      </section>




      </div>


      </div>


      </div>


      </div>


      </div>

      </div>

      </div>
      </div>

      </div>
    </section>

  </main>
