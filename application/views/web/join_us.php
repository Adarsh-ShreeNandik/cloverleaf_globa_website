<style>
    .join-h {
        font-size: 35px !important;
    }

    .p-text p {
        font-size: 25px;
        font-weight: 700;
    }



    .form-check-input {
        /* Hide the default radio button */
        display: none;
    }

    .form-check-label {
        /* Style for the label, you can adjust this based on your design */
        display: inline-block;
        margin-bottom: 0;
    }

    /* Custom styling for the radio button */
    .form-check-input+.form-check-label:before {
        content: '';
        display: inline-block;
        width: 15px;
        height: 15px;
        border: 2px solid #636363;
        border-radius: 50%;
        margin-right: 5px;
        vertical-align: middle;
        cursor: pointer;
    }

    label.form-check-label {
        font-size: 14px;
    }

    /* Style for the checked state */
    .form-check-input:checked+.form-check-label:before {
        background-color: #009649;
        /* Black background when checked */
    }

    .form-check.pd-left {
        padding-left: 0rem !important;
    }

    /* ----------------------------------------------------------------------------- */
    @keyframes scroll {
        0% {
            transform: translateX(10%);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    .scrolling-container {
        width: 100%;
        white-space: nowrap;
        overflow: hidden;
        position: relative;
    }

    .scrolling-message {
        display: inline-block;
        animation: scroll 180s linear infinite;
        /* Adjust the initial position to make text visible from the beginning */
        transform: translateX(0);
        margin-top: 15px;
    }

    span.bold {
        font-weight: bold;
        color: #0c8f52;
    }

    .span-red {
        color: red;
    }
</style>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('<?= base_url("assets/img/bg.jpg"); ?>');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center p-text">
                        <h2 class="join-h">Looking for Career Opportunity </h2>
                        <p class=" text-center">Attractive Remuneration</p>


                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= base_url(); ?>">Home</a></li>
                    <li>Join Us</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->


    <!--ranjeet working here-->


    <!-- ------------------------------------------------------------------------------------------------- -->
    <section id="features" class="features mb-3">
        <div class="container">

            <div class="section-header" id="overview">

                <span class="dis-none">Job Opportunities</span>
                <h2>Job Opportunities</h2>

            </div>

            <div class="row gy-4 align-items-center text-center features-item" data-aos="fade-up">
                <div class=" col-md-12 col-lg-6">
                    <img src="<?= base_url("assets/img/jobs.png"); ?>" class="img-fluid px-2" alt="">
                    <!--<img src="https://www.vhv.rs/dpng/d/423-4238989_job-png-download-government-jobs-clip-art-transparent.png" class="img-fluid" alt="">-->
                </div>
                <div class="col-md-12 col-lg-6 txt-colp">
                    <p>
                        Vacancies Available for ambitious candidates in creating the future for Machine Services in India, leveraging Indutsry 4.0 Standards. Apply if you are self starter and hold a degree or diploma in Electrical, Mechanical, Instrumentation or Process Engineering or have a vast experience in the printing and packaging industry. We are also looking for experts who can handling machine PLCs.
                    </p>
                </div>


            </div>

    </section>






    <!--ranjeet working end-->

    <!--  <div class="scrolling-container">-->
    <!--  <div class="scrolling-message">-->
    <!--    Vacancies available for <span class="bold">Electrical & Mechanical Engineers / Diploma holders</span>&nbsp;Attractive Remuneration.&nbsp;&nbsp;&nbsp; Vacancies available for <span class="bold">Electrical & Mechanical Engineers / Diploma holders</span>&nbsp;Attractive Remuneration.&nbsp;&nbsp;&nbsp; Vacancies available for <span class="bold">Electrical & Mechanical Engineers / Diploma holders.</span>&nbsp;Attractive Remuneration.&nbsp;&nbsp;&nbsp; Vacancies available for <span class="bold">Electrical & Mechanical Engineers / Diploma holders</span>&nbsp;Attractive Remuneration.&nbsp;&nbsp;&nbsp; Vacancies available for <span class="bold">Electrical & Mechanical Engineers / Diploma holders</span>&nbsp;Attractive Remuneration.&nbsp;&nbsp;&nbsp; Vacancies available for <span class="bold">Electrical & Mechanical Engineers / Diploma holders</span>&nbsp;Attractive Remuneration.&nbsp;&nbsp;&nbsp; Vacancies available for <span class="bold">Electrical & Mechanical Engineers / Diploma holders</span>&nbsp;Attractive Remuneration.&nbsp;&nbsp;&nbsp; Vacancies available for <span class="bold">Electrical & Mechanical Engineers / Diploma holders</span>&nbsp;Attractive Remuneration.&nbsp;&nbsp;&nbsp; Vacancies available for <span class="bold">Electrical & Mechanical Engineers / Diploma holders</span>&nbsp;Attractive Remuneration.&nbsp;&nbsp;&nbsp; Vacancies available for <span class="bold">Electrical & Mechanical Engineers / Diploma holders</span>&nbsp;Attractive Remuneration.&nbsp;&nbsp;&nbsp; Vacancies available for <span class="bold">Electrical & Mechanical Engineers / Diploma holders</span>&nbsp;Attractive Remuneration.-->
    <!--  </div>-->
    <!--</div>-->
    <!-- ======= About Us Section ======= -->
    <div class="container pt-5 pb-5">

        <div class="row">

            <div class="col-sm-12 col-lg-8 offset-lg-2 ">

                <form class="row g-3 full-time-form py-3 px-4">
                    <div class="col-md-6">
                        <label for="inputName" class="form-label">Full Name <span class="span-red">*</span></label>
                        <input type="text" class="form-control" name="name" id="inputName">
                    </div>
                    <div class="col-md-6">
                        <label for="inputContact" class="form-label">Contact Number <span class="span-red">*</span></label>
                        <input type="text" class="form-control" name="name" id="inputContact">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email <span class="span-red">*</span></label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Job Type :</label>
                        <div class="form-check pd-left">
                            <input class="form-check-input" type="radio" name="jobType" id="partTime" value="partTime">
                            <label class="form-check-label" for="partTime">
                                Part Time
                            </label>
                        </div>
                        <div class="form-check pd-left">
                            <input class="form-check-input" type="radio" name="jobType" id="fullTime" value="fullTime">
                            <label class="form-check-label" for="fullTime">
                                Full Time
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Address <span class="span-red">*</span></label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity">City <span class="span-red">*</span></label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputJoinTime">State <span class="span-red">*</span></label>
                        <input type="text" class="form-control" id="inputState">

                    </div>
                    <div class="col-md-2">
                        <label for="inputZip">Zip <span class="span-red">*</span></label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                    <!-- <div class="col-md-6">
                            <label for="inputState">Join As</label>
                            <select id="inputState" class="form-select">
                            <option>Full Time</option>
                                <option>Part Time</option>
                                <option>Remote Assistance</option>
                            </select>
                        </div> -->

                    <div class="col-md-6">
                        <label for="inputIncome">Income</label>
                        <input type="number" class="form-control" name="income" id="inputIncome">
                    </div>
                    <div class="col-md-6">
                        <label for="inputExpectedSalary">Expected Salary <span class="span-red">*</span></label>
                        <input type="number" class="form-control" name="income" id="inputExpectedSalary">
                    </div>
                    <div class="col-md-6">
                        <label for="inputfileCv">Uplod CV <span class="span-red">*</span></label>
                        <input type="file" class="form-control" name="Resume" id="inputfileCv">
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!--<div class="col-sm-12 col-lg-5">-->
            <!--    <img src="<?= base_url("assets/img/join-us-rgt.webp"); ?>" style class="img-fluid" alt="join-us">-->
            <!--</div>-->
        </div>



    </div>

</main>