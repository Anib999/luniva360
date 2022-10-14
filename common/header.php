<!-- Header
		============================================= -->
<header id="header" class="full-header transparent-header" data-sticky-class="not-dark">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <!-- Logo
						============================================= -->
                <div id="logo">
                    <a href="/home" class="standard-logo" data-dark-logo="images/luniva/lunivalogo.png"><img
                            src="images/luniva/lunivalogo.png" alt="lunivatech Logo"></a>
                    <a href="/home" class="retina-logo" data-dark-logo="images/luniva/lunivalogo.png"><img
                            src="images/luniva/lunivalogo.png" alt="lunivatech Logo"></a>
                </div><!-- #logo end -->

                <!-- <div class="header-misc"> -->

                    <!-- Top Search
							============================================= -->
                    <!-- <div id="top-search" class="header-misc-icon">
                        <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i
                                class="icon-line-cross"></i></a> -->
                    <!-- </div> -->
                    <!-- #top-search end -->

                <!-- </div> -->

                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100">
                        <path
                            d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                        </path>
                        <path d="m 30,50 h 40"></path>
                        <path
                            d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                        </path>
                    </svg>
                </div>

                <!-- Primary Navigation
						============================================= -->
                <nav class="primary-menu">

                    <ul class="menu-container">
                        <li class="menu-item">
                            <a class="menu-link" href="home">
                                <div>Home</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="about-us">
                                <div>About Us</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="#">
                                <div>Products</div>
                            </a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="products-carelab">
                                        <div><i class="icon-lab"></i>Luniva care Lab</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="products-telmed">
                                        <div><i class="icon-line-phone"></i>Luniva Telmed</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="https://lunivacare.com">
                                        <div><i class="icon-mobile-alt"></i>Luniva Mhealth</div>
                                    </a>
                                </li>
                                
                                <li class="menu-item">
                                    <a class="menu-link" href="products-hms">
                                        <div><i class="icon-heartbeat"></i>Luniva 360 HMS</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="careers">
                                <div>Careers</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="blog">
                                <div>Blog</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="contact">
                                <div>Contact</div>
                            </a>
                        </li>
                        
                            <?php 
                            $equ = '';
                            if(isset($_GET['page'])){
                                $equ = $_GET['page'];
                            }
                            if($equ != 'demo'): ?>
                            <li class="menu-item mr-3">
                                <a class="btn btn-outline-primary demo_req pl-3 pr-3" href="http://lunivacare.ddns.net:8080/mHealth/Member/memLogin">
                                    <div>Patient Login</div>
                                </a>
                            </li>
                        
                            <?php endif; ?>
                        
                        
                            <?php 
                            $equ = '';
                            if(isset($_GET['page'])){
                                $equ = $_GET['page'];
                            }
                            if($equ != 'demo'): ?>
                            <li class="menu-item">
                                <a class="btn btn-outline-primary demo_req pl-3 pr-3" href="demo">
                                    <div>Request for demo</i></div>
                                </a>
                            </li>
                            <?php endif; ?>
                     
                        

                    </ul>

                </nav><!-- #primary-menu end -->

                <!-- <form class="top-search-form" action="search.html" method="get">
                    <input type="text" name="q" class="form-control" value="" placeholder="Search..."
                        autocomplete="off">
                </form> -->

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->




