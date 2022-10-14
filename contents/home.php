<!-- <section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header">
    <div class="slider-inner">

        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide dark">
                    <div class="container">
                        <div class="slider-caption slider-caption-center">
                            <h2 data-animate="fadeInUp">Democratising Healthcare</h2>
                            <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Digital healthcare</p>
                        </div>
                    </div>
                    <div class="swiper-slide-bg" style="background-image: url('images/luniva/lunivawider.jpg'); background-position: center top;">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="slider-caption slider-caption-center">
                            <h2 data-animate="fadeInUp">Luniva 360</h2>
                            <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">A complete solution</p>
                        </div>
                    </div>
                    <div class="swiper-slide-bg" style="background-image: url('images/luniva/mask.jpg'); background-position: center top;">
                    </div>
                </div>
                <div class="swiper-slide dark">
                    <div class="container">
                        <div class="slider-caption">
                            <h2 data-animate="fadeInUp">Luniva Care</h2>
                            <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">
                                A Clinic Solution
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide-bg" style="background-image: url('images/luniva/labtest.jpg'); background-position: center top;">
                    </div>
                </div>
            </div>
            <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
            <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
        </div>

        <a href="#" data-scrollto="#content" data-offset="100" class="one-page-arrow dark">
            <i class="icon-angle-down infinite animated fadeInDown"></i>
        </a>

    </div>
</section> -->

<section id="">
    <div class="content-wrapper">
        <div class="top">
            <img src="images/luniva/project2.jpg" alt="">
        </div>
        <div class="left">
            <div class="heading costom">
                <h2>Best Versatile</h2>
            </div>
            <div class="heading costom">
                <h1>Healthcare Management System</h1>
            </div>
            <hr>

            <?php
            $equ = '';
            if (isset($_GET['page'])) {
                $equ = $_GET['page'];
            }
            if ($equ != 'demo') : ?>

                <a class="button button-3d button-luniva mt-4" href="demo">
                    <div>Request for demo</i></div>
                </a>
            <?php endif; ?>
            <p>Trusted by A grade and ISO Certified <br> <span class='boldSpan'>healthcare institution of Nepal</span></p>
        </div>
        <div class="right">
            <img src="images/luniva/project1.jpg" alt="Landing page logo">
        </div>

    </div>
</section>

<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap">

        <div class="section valsec">
            <div class="container clearfix">

                <div class="about-wrapper">
                    <div class="title-heading">
                        <h1>Trusted by</h1>
                        <hr class='hrOne'>
                    </div>

                    <div class="client-container">
                        <div class="client">
                            <img src="images/logo/nrl2.png" alt="National Reference Laboratory">
                        </div>
                        <div class="client">
                            <img src="images/logo/crystalDi.png" alt="Crystal Diagonistic Laboratory">
                        </div>
                        <div class="client">
                            <img src="images/logo/samjana.jpg" alt="SAMJHANA LABORATORY CLINIC">
                        </div>
                        <div class="client">
                            <img src="images/logo/matri-sisu.jpg" alt="Matri Shishu Hospital">
                        </div>
                        <div class="client">
                            <img src="images/logo/LifeCareDi.png" alt="Life Care Diagonistic">
                        </div>
                        <div class="client">
                            <img src="images/logo/manmohan.jpg" alt="Manmohan">
                        </div>
                        <div class="client">
                            <img src="images/logo/nepal.png" alt="nepal" width="50%">
                        </div>
                        <div class="client">
                            <img src="images/logo/sarobar.jpg" alt="sarobar" width="70%">
                        </div>
                        <div class="client">
                            <img src="images/logo/khangriHospital.jpg" alt="khangri Hospital" width="70%">
                        </div>
                        <div class="client">
                            <img src="images/logo/skinarts.jpg" alt="skin arts">
                        </div>
                        <div class="client">
                            <img src="images/logo/chirayupolyclinic.png" alt="Chirayu polyclinic">
                        </div>
                        <div class="client">
                            <img src="images/logo/ChinariHospital.jpg" alt="Chinari Hospital">
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <div class="costomeBkg" style="background-color: #f5f5f5">
            <!-- style="background-image: url('images/luniva/SimpleShiny.svg')" -->
            <div class="contaner clearfix container">
                <div class="title-heading">
                    <h3>Our products</h3>
                    <hr class="hrOne">
                </div>
                <div class="services-card-container row mt-4">
                    <div class="col-lg-4 col-md-4">
                        <div class="service-card ">
                            <div class="service-img">
                                <img src="images/luniva/360.png" alt="Luniva 360">
                            </div>
                            <div class="services-txt">
                                <h3>Luniva 360</h3>
                                <p>Luniva 360 HMS is a complete Integrated Solution for clinics, polyclinic, and hospitals.</p>
                            </div>
                            <?php
                            $equ = '';
                            if (isset($_GET['page'])) {
                                $equ = $_GET['page'];
                            }
                            if ($equ != 'products-hms') : ?>

                                <a class="btn btn-outline-primary demo_req pl-3 pr-3" href="products-hms">
                                    <div>learn more</i></div>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="service-card ">
                            <div class="service-img">
                                <img src="images/luniva/care.jpg" alt="luniva care">
                            </div>
                            <div class="services-txt">
                                <h3>Luniva carelab</h3>
                                <p> One-Stop solution for standalone pathology and labs within hospitals and clinics.</p>
                            </div>
                            <?php
                            $equ = '';
                            if (isset($_GET['page'])) {
                                $equ = $_GET['page'];
                            }
                            if ($equ != 'products-carelab') : ?>

                                <a class="btn btn-outline-primary demo_req pl-3 pr-3" href="products-carelab">
                                    <div>learn more</i></div>
                                </a>
                            <?php endif; ?>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="service-card ">
                            <div class="service-img">
                                <img src="images/luniva/telemed.jpg" alt="telemed">
                            </div>
                            <div class="services-txt">
                                <h3>Luniva Telemed</h3>
                                <p>Superior solution to eliminate the distance barrier between the health care providers and consumers</p>
                            </div>
                            <?php
                            $equ = '';
                            if (isset($_GET['page'])) {
                                $equ = $_GET['page'];
                            }
                            if ($equ != 'products-telmed') : ?>

                                <a class="btn btn-outline-primary demo_req pl-3 pr-3" href="products-telmed">
                                    <div>learn more</i></div>
                                </a>
                            <?php endif; ?>

                        </div>
                    </div>

                </div>
                <!--  -->
                <div class="title-heading mt-5 mb-5">
                    <h4> <i class='icon-quote-left1' style="color: #5cbcac"></i> We also specialize on <i class='icon-quote-right1' style="color: #5cbcac"></i></h4>
                </div>
                <div class="services-card-container row">
                    <div class="col-lg-4 col-md-4">

                        <div class="service-card2">
                            <div class="service-card2-img">
                                <img src="images/luniva/db.png" alt="Database Management system">
                            </div>
                            <div class="service-card2-content">
                                <p>Luniva maintains a health data repository that helps Medical representatives, patients access their medical records anywhere anytime in case of need. </p>
                                <!-- Analysis and visulization from the repository helps for clinical decision and Research. -->
                            </div>
                        </div>
                        <h3>Health Data Repository</h3>
                    </div>
                    <div class="col-lg-4 col-md-4">

                        <div class="service-card2">
                            <div class="service-card2-img">
                                <img src="images/luniva/lis.png" alt="Lab Machine Interfacing system">
                            </div>
                            <div class="service-card2-content">

                                <p> With the help of Machine interfacing, labs can handle a large volume of samples easily, increasing the efficiency of sample processing and the quality of lab reports</p>
                            </div>
                        </div>
                        <h3>Lab Machine Interfacing</h3>
                    </div>
                    <div class="col-lg-4 col-md-4">

                        <div class="service-card2">
                            <div class="service-card2-img">
                                <img src="images/luniva/DICOM.png" alt="Radiology Integration and PACS">
                            </div>
                            <div class="service-card2-content">

                                <p>Offer a much more efficient method for distributing, retrieving, and managing medical images.</p>
                            </div>
                        </div>
                        <h3>Radiology Integration and PACS</h3>
                    </div>

                    <!--  -->

                </div>
            </div>
        </div>


        <div class="container clearfix add-space">

            <div class="title-heading center mt-5">
                <h3>Luniva 360 HMS</h3>
                <p>A complete Health Management System systematically designed to obtain the best solution.</p>
            </div>

            <div class="row col-mb-50 mb-4">
                <div class="col-lg-3 col-md-6 c-indexing">

                    <div class="feature-box flex-md-row-reverse text-md-right align-items-center" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-heart"></i></a>
                        </div>
                        <div class="fbox-content">
                            <p>OPD/IPD Management</p>
                        </div>
                    </div>

                    <div class="feature-box flex-md-row-reverse text-md-right align-items-center" data-animate="fadeIn" data-delay="200">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-bill"></i></a>
                        </div>
                        <div class="fbox-content">
                            <p>Medical Billing</p>
                        </div>
                    </div>

                    <div class="feature-box flex-md-row-reverse text-md-right align-items-center " data-animate="fadeIn" data-delay="400">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-lab"></i></a>
                        </div>
                        <div class="fbox-content">
                            <p>Laboratory Management</p>

                        </div>
                    </div>
                    <div class="feature-box flex-md-row-reverse text-md-right align-items-center" data-animate="fadeIn" data-delay="200">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-file-medical"></i></a>
                        </div>
                        <div class="fbox-content">
                            <p>Online reports</p>
                        </div>
                    </div>
                    <div class="feature-box flex-md-row-reverse text-md-right align-items-center" data-animate="fadeIn" data-delay="200">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-quote-right1"></i></a>
                        </div>
                        <div class="fbox-content">
                            <p>Data visualization & Analytics</p>
                        </div>
                    </div>
                    <div class="feature-box flex-md-row-reverse text-md-right align-items-center" data-animate="fadeIn" data-delay="200">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-file-medical-alt"></i></a>
                        </div>
                        <div class="fbox-content">
                            <p>OT Management</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 d-md-none d-lg-block text-center">
                    <div class="web-conatiner">
                        <div class="top">
                            <span class='one'></span>
                            <span class='two'></span>
                            <span class='three'></span>
                        </div>
                        <div class="mid">
                            <img src="images/luniva/fullScreenOne.png" alt="Application View">
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 c-indexing">

                    <div class="feature-box" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-notes-medical"></i></a>
                        </div>
                        <div class="fbox-content">
                            <p>Nursing Management</p>
                        </div>
                    </div>

                    <div class="feature-box" data-animate="fadeIn" data-delay="200">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-x-ray"></i></a>
                        </div>
                        <div class="fbox-content">
                            <p>
                                Radiology Management
                            </p>
                        </div>
                    </div>

                    <div class="feature-box" data-animate="fadeIn" data-delay="400">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-hand-holding-medical"></i></a>
                        </div>
                        <div class="fbox-content">
                            <p>
                                Pharmacy Management
                            </p>
                        </div>
                    </div>
                    <div class="feature-box" data-animate="fadeIn" data-delay="400">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-money-bill-alt1"></i></a>
                        </div>
                        <div class="fbox-content">
                            <p>
                                Account Management
                            </p>
                        </div>
                    </div>
                    <div class="feature-box" data-animate="fadeIn" data-delay="400">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-mobile-alt"></i></a>
                        </div>
                        <div class="fbox-content">
                            <p>
                                Online Appointment
                            </p>
                        </div>
                    </div>

                    <div class="feature-box" data-animate="fadeIn" data-delay="400">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-grid-2"></i></a>
                        </div>
                        <div class="fbox-content">
                            <p>
                                Inventory Management
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="row clearfix align-items-stretch bottommargin-lg">


            <div class="col-lg-6 center col-padding" style="background: url('images/luniva/dev.jpg') center center no-repeat; background-size: cover;">
            </div>

            <div class="col-lg-6 center col-padding" style="background-color: #F5F5F5;">
                <div class="heading-block border-bottom-0">
                    <span class="before-heading">Easy to Understand &amp; Use.</span>
                    <h2>Walkthrough Videos &amp; Demos</h2>
                </div>

                <div class="center bottommargin">
                    <a class="d-block position-relative" href="https://www.youtube.com/watch?v=6WS-PBJQIKM" data-lightbox="iframe">
                    <img src="images/luniva/favicon-50x50.png" alt="luniva favicon">
                    <!-- <div class="" style="background-color: red;">"></div> -->
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark">
                                <span class="overlay-trigger-icon size-lg op-ts op-07 bg-light text-dark" data-hover-animate="op-1" data-hover-animate-out="op-07" data-hover-parent=".row"><i class="icon-line-play"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <p class="lead mb-0">We even provide videos as well as documentation.</p>
            </div>

        </div>


        <div class="container clearfix">

            <div class="title-heading center m-0 mart-3">
                <h3>Benefits of using Luniva</h3>
                <hr class="hrOne">
            </div>


            <div class="row align-items-center col-mb-50 mart-3">
                <div class="col-md-4 center offset-md-2">
                    <img data-animate="fadeInUp" src="images/luniva/happy.svg" class="hidesmall" alt="happy">
                </div>

                <div class="col-md-4 text-center text-md-left">
                    <div class="border-bottom-0">
                        <h4>Improve Customer Experience</h4>
                    </div>

                    <p>
                        Offer seamless patient experience from appointment booking, consultation, home sample collections to receiving medical reports through the luniva app, SMS, and email.
                    </p>

                    <img data-animate="fadeInUp" src="images/luniva/happy.svg" class="hidebig" alt="happy">

                    <!-- <a href="#" class="button button-border button-dark button-rounded button-large ml-0 topmargin-sm">Learn
                        more</a> -->
                </div>
            </div>

        </div>

        <div class="container">

            <div class="row align-items-center col-mb-50 mart-3">

                <div class="col-md-4 text-center text-md-left offset-md-2">
                    <div class="border-bottom-0">
                        <h4>Customizable HMS system </h4>
                    </div>

                    <p>
                        Luniva 360 includes all features that a hospital need to automate its day-to-day activities. Also, we can customize as per need to the hospital.
                    </p>

                    <img data-animate="fadeInUp" src="images/luniva/clinic_desktop_mobile.png" class="hidebig" alt="clinic_desktop_mobile">

                </div>

                <div class="col-md-4 center hidesmall">
                    <img data-animate="fadeInUp" src="images/luniva/clinic_desktop_mobile.png" alt="clinic_desktop_mobile">
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row align-items-center col-mb-50 mart-3">
                <div class="col-md-4 center offset-md-2 hidesmall">
                    <img data-animate="fadeInUp" src="images/luniva/scale.svg" alt="scale">
                </div>

                <div class="col-md-4 text-center text-md-left">
                    <div class="border-bottom-0">
                        <h4>Automate to scale the business</h4>
                    </div>

                    <p>
                        Automate to scale the business through medical instruments interfacing helps to improve TAT, reduce human errors and revenue leakages in your organization. ROI of an institution can be scaled up by automating redundant processes
                    </p>

                    <img data-animate="fadeInUp" src="images/luniva/scale.svg" class="hidebig" alt="scale">

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center col-mb-50 mart-3">

                <div class="col-md-4 text-center text-md-left offset-md-2">
                    <div class="border-bottom-0">
                        <h4>Data analysis and Visualization</h4>
                    </div>

                    <p>
                        Helps a medical person to reduce misdiagnosis and late diagnosis based on data-driven facts. Graphical and tabular view of medical history helps both doctors and patients to track health status
                    </p>

                    <img data-animate="fadeInUp" src="images/luniva/stat.svg" class="hidebig" alt="stat">

                </div>

                <div class="col-md-4 center hidesmall">
                    <img data-animate="fadeInUp" src="images/luniva/stat.svg" alt="stat">
                </div>

            </div>
        </div>

        <div class="section parallax dark mb-0" style="background-image: url('images/luniva/Moon.svg'); background-size: cover;">
        <!-- <div class="section parallax dark mb-0" style="background: linear-gradient(180deg, rgba(46,160,175,0.7155813008797269) 0%, rgba(111,178,168,0.737990264465161) 54%, rgba(146,171,218,0.7323880235688025) 100%); padding: 100px 0; background-size: cover;"> -->

            <div class="title-heading center">
                <h3>Testimonials</h3>
            </div>


            <!-- <div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
                <div class="flexslider">
                    <div class="slider-wrap">
                        <div class="slide costome-slide-container">
                            <div class="testi-image">
                                <a href="#"><img src="images/luniva/kishor.jpg" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>
                                    We can track our day-to-day business easily as our process has become faster and more efficient thanks to this software.
                                </p>
                                <div class="testi-meta">
                                    Kishor Khanal, Managing Director
                                    <span>National Reference Laboratory</span>
                                </div>
                            </div>
                        </div>
                        <div class="slide costome-slide-container">
                            <div class="testi-image">
                                <a href="#"><img src="images/luniva/baiju.jpg" alt="Customer Testimonails"></a>
                            </div>

                            <div class="testi-content">
                                <p>
                                    Connect to Grow, a UK DFID-funded program has worked with LunivaTech since the start of 2017. During this time, we have witnessed an excellent, young, social enterprise, working to address some of the big challenges faced in healthcare in Nepal. Connect has helped LunivaTech form an exciting partnership with LiveHealth in India, which could further modernize the way in which health data is managed and used in Nepal. We wish LunivaTech every success in their venture.
                                </p>
                                <div class="testi-meta">
                                    Baiju Vaidya, Deputy Team Leader
                                    <span>Connect to Grow Project</span>
                                </div>
                            </div>
                        </div>
                        <div class="slide costome-slide-container">
                            <div class="testi-image">
                                <a href="#"><img src="images/luniva/amar.jpg" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>
                                    Best LIMS software with all features integrated with a single unit. Manual error rate and Turn around time of patient were significantly reduced after using this application. <br>
                                    With Kind Regards,
                                </p>
                                <div class="testi-meta">
                                    Amar Nagila, Dean, Faculty of Health Sciences
                                    <span> Pokhara University</span>
                                </div>
                            </div>
                        </div>
                        <div class="slide costome-slide-container">
                            <div class="testi-image">
                                <a href="#"><img src="images/luniva/Elodiejpg.jpg" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>
                                    I have been working with Lunivatech for over 6 months for the design and start-up of their LunivaCare project, which aims to digitalize health information and make it accessible to health professionals as well as patients, via software, mobile apps, and online/offline system.
                                </p>
                                <p>
                                    From the onset, I have been impressed by Lunivatech innovative and proactive approach and have great hope that Lunivatech will be able to make a lasting difference to the health sector and health of the Nepalese people!”
                                </p>
                                <div class="testi-meta">
                                    Elodie Brandamir, Health Partners International
                                    <span>Connect to Grow Project</span>
                                </div>
                            </div>
                        </div>

                        <div class="slide costome-slide-container">
                            <div class="testi-image">
                                <a href="#"><img src="images/luniva/balbab.jpg" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>
                                    Easy creating patient reports and delivery. Minimizing human errors and saves out time.
                                </p>
                                <div class="testi-meta">
                                    S.P Balbab Prasad Poudel, Senior lab Technologist
                                    <span>Nepal Police Hospital</span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div> -->

            <div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
                <div class="flexslider">
                    <div class="slider-wrap">
                        <div class="slide costome-slide-container">
                            
                            <div class="testi-image">
                                <a href="#"><img src="images/luniva/kishor.jpg" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p class="dis">
                                    We can track our day-to-day business easily as our process has become faster and more efficient thanks to this software.
                                </p>
                                <div class="testi-meta">
                                    Kishor Khanal, Managing Director
                                    <span>National Reference Laboratory</span>
                                </div>
                            </div>
                        </div>
                        <div class="slide costome-slide-container">
                            <div class="testi-image">
                                <a href="#"><img src="images/luniva/baiju.jpg" alt="Customer Testimonails"></a>
                            </div>

                            <div class="testi-content">
                                <p>
                                    Connect to Grow, a UK DFID-funded program has worked with LunivaTech since the start of 2017. During this time, we have witnessed an excellent, young, social enterprise, working to address some of the big challenges faced in healthcare in Nepal. Connect has helped LunivaTech form an exciting partnership with LiveHealth in India, which could further modernize the way in which health data is managed and used in Nepal. We wish LunivaTech every success in their venture.
                                </p>
                                <div class="testi-meta">
                                    Baiju Vaidya, Deputy Team Leader
                                    <span>Connect to Grow Project</span>
                                </div>
                            </div>
                        </div>
                        <div class="slide costome-slide-container">
                            <div class="testi-image">
                                <a href="#"><img src="images/luniva/amar.jpg" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>
                                    Best LIMS software with all features integrated with a single unit. Manual error rate and Turn around time of patient were significantly reduced after using this application. <br>
                                    With Kind Regards,
                                </p>
                                <div class="testi-meta">
                                    Amar Nagila, Dean, Faculty of Health Sciences
                                    <span> Pokhara University</span>
                                </div>
                            </div>
                        </div>
                        <div class="slide costome-slide-container">
                            <div class="testi-image">
                                <a href="#"><img src="images/luniva/Elodiejpg.jpg" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>
                                    I have been working with Lunivatech for over 6 months for the design and start-up of their LunivaCare project, which aims to digitalize health information and make it accessible to health professionals as well as patients, via software, mobile apps, and online/offline system.
                                </p>
                                <p>
                                    From the onset, I have been impressed by Lunivatech innovative and proactive approach and have great hope that Lunivatech will be able to make a lasting difference to the health sector and health of the Nepalese people!”
                                </p>
                                <div class="testi-meta">
                                    Elodie Brandamir, Health Partners International
                                    <span>Connect to Grow Project</span>
                                </div>
                            </div>
                        </div>

                        <div class="slide costome-slide-container">
                            <div class="testi-image">
                                <a href="#"><img src="images/luniva/balbab.jpg" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>
                                    Easy creating patient reports and delivery. Minimizing human errors and saves out time.
                                </p>
                                <div class="testi-meta">
                                    S.P Balbab Prasad Poudel, Senior lab Technologist
                                    <span>Nepal Police Hospital</span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>

        <!-- <div class="section mt-0 border-top-0">
            <div class="container clearfix">
                <div class="heading-block center m-0">
                    <h3>Our Projects</h3>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row posts-md col-mb-30">

                <div class="col-lg-4 col-md-4">
                    <div class="entry">
                        <div class="entry-image">
                            <a href="#"><img src="images/luniva/db.png" class="blog_img" alt="Image"></a>
                        </div>
                        <div class="entry-title title-xs nott">
                            <h3><a href="#">Health Data Repository</a></h3>
                        </div>
                        <div class="entry-content">
                            <p> Luniva manitains health data repository which helps Medial representative, patients to access their medical record
                                anywhere anytime incase of need. Analysis and visulization from the repository helps for clinical decision and Research.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="entry">
                        <div class="entry-image">
                            <a href="#"><img src="images/luniva/lis.png" class="blog_img" alt="Image"></a>
                        </div>
                        <div class="entry-title title-xs nott">
                            <h3><a href="#">Lab Machine Interfacing</a></h3>
                        </div>
                        <div class="entry-content">
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="entry">
                        <div class="entry-image">
                            <a href="#"><img src="images/luniva/DICOM.png" class="blog_img" alt="Image"></a>
                        </div>
                        <div class="entry-title title-xs nott">
                            <h3><a href="#">Radiology Integration and PACS</a></h3>
                        </div>
                        <div class="entry-content">
                            <p></p>
                        </div>
                    </div>
                </div>

            </div>
        </div> -->

        <div class="conatiner padd-bot">
            <div class="container clearfix">

                <div class="title-heading topmargin-sm center mb-5">
                    <h3>Our Media Coverage</h3>
                    <hr class='hrOne'>
                </div>

                <div class="row">

                    <div class="owl-carousel image-carousel carousel-widget" data-margin="60" data-loop="false" data-nav="false" data-autoplay="4000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="4" data-items-xl="4">

                        <div class="oc-item colla"><a href="#"><img src="images/luniva/kath.png" alt=" kath media"></a>
                        </div>
                        <div class="oc-item colla"><a href="#"><img src="images/luniva/himal.jpg" alt="himal media"></a>
                        </div>
                        <div class="oc-item colla"><a href="#"><img src="images/luniva/newbus.jpg" alt="New Buisness Age media"></a>
                        </div>
                        <div class="oc-item colla"><a href="#"><img src="images/luniva/bus3602.png" alt="bus360 media"></a>
                        </div>
                    </div>

                </div>

            </div>
        </div>



    </div>
</section>
<!-- #content end -->