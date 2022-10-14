<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <!-- Document Title -->
    <title>Lunivatech | Health Care Management System | Lab Management System</title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Luniva tech is a largest tech-driven modern healthcare platform which has been providing Management software in different parts of the hospital which accelerates the smooth functioning of hospitals with the help of technology" />
    <meta name="author" content="Lunivatech | lunivacare" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8">
    <meta name="keywords" content="Software, mobile applications, web hosting, search engine optimization, seo, data management, IT, Information technology, Health Care Management System, Content Maagement System, Online Doctor Consultation, health care system in nepal, health care, health care system, Luniva health Care, web app">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-42583918-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-42583918-1');
    </script>

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/swiper.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/custom.css" type="text/css" />
    <link rel="stylesheet" href="images/luniva/luniva_edited.css" type="text/css" />
    <link rel="shortcut icon" href="images/luniva/favicon-50x50.png" type="image/x-icon" />

    <!-- <link rel="stylesheet" href="css/lightbox.min.css" type="text/css" /> -->

</head>
<?php
$link =  trim($_SERVER["REQUEST_URI"], "/");
$array = explode("/", $link);
$last_item_index = count($array) - 1;
?>

<body class="stretched">

    <!-- Document Wrapper -->
    <div id="wrapper" class="clearfix">

        <?php include('./common/header.php') ?>

        <?php
        // if (!isset($_GET["page"])) {
        //     include 'contents/home.php';
        // } else {
        $filename = "contents/{$array[$last_item_index]}.php";
        if (file_exists($filename)) {
            include $filename;
        } else {
            include 'contents/home.php';
        }
        // } 
        ?>

        <?php include('./common/footer.php') ?>

    </div>
    <!-- #wrapper end -->

    <!-- Go To Top -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts -->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.min.js"></script>

    <!-- Footer Scripts -->
    <script src="js/functions.js"></script>

    <script>
        // $('.toggle').on('mouseenter', function(e){
        //     let selHov = $(this);
        //     selHov.toggleClass('toggle-active');
        //     $(this.lastElementChild).toggle('fast');
        // })
        // $('.toggle').on('mouseleave', function(e){
        //     let selHov = $(this);
        //     selHov.toggleClass('toggle-active');
        //     $(this.lastElementChild).toggle('fast');
        // })
    </script>
    <!-- <script src="js/lightbox.min.js"></script> -->
</body>

</html>