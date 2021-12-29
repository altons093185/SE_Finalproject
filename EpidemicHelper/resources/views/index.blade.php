<?php session_start(); ?>
<!DOCTYPE html>
<html>
<a href="/hotel-list" ><button type="submit" class="btn btn-primary btn_login">查詢</button></a>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Tour 360</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="../img/favicon.ico" />

    <!--Normalise CSS-->
    <link rel="stylesheet" type="text/css" href="../libs/normalize.css">

    <!-- Font awesome 5.9-->
    <link rel="stylesheet" href="../libs/fontawesome/css/all.css">

    <!--Bootstrap-->
    <link rel="stylesheet" href="../libs/bootstrap.min.css">

    <!--Material Design for Bootstrap -->
    <link rel="stylesheet" href="../libs/mdb.min.css">

    <link rel="stylesheet" href="../libs/carousel/owl.carousel.css">

    <!--Style css-->
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
    <link rel="stylesheet" href="../css/homestyle.css">

    <!--Media Query -->
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">

</head>

<body>
    
    <!-- 菜單 -->
    <div id="index_menu"></div>   

    <!-- Epidemic Helper標題 + 一大塊圖片背景 -->
    <section id="home" class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-between">
                <div class="col-md-6 banner-left">
                    <h6 class="text-white"></h6>
                    <h1 class="text-white">Epidemic Helper</h1>
                    <h6 class="text-white mb-3">防疫時期的最佳小幫手</h6>
                    <!-- <a href="vendor/profile-page/profile.php" class="btn btn-info btn-lg text-uppercase smooth-scroll">Explore Nepal</a> -->
                </div>
            </div>
        </div>
        <!-- Arrow Down -->
        <a href="#services" id="arrow-down" class="smooth-scroll">
            <i class="fa fa-angle-down"></i>
        </a>
    </section>
    <!-- End banner Area -->


    <!-- 航班搜尋欄 -->
    <section id="search-section" class="py-5">
        <div class="container">
            <br/>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <form autocomplete="off" class="card card-sm">
                        <div class="card-body row no-gutters align-items-center">
                            <div class="col-auto mr-2">
                                <i class="fa fa-search fa-2x text-body"></i>
                            </div> 
                                <div class="col">
                                <input id="myInput" class="form-control form-control-lg form-control-borderless"  type="text" name="myCountry" placeholder="Search places">
                            </div> 
                            <div class="col-auto">
                                <a class="btn btn-block btn-dark" type="submit" id="recommendationEngine" href="./vendor/profile-page/profile.php">Search</a>
                            </div> 
                            </div>
                    </form>
                </div> 
                </div>
        </div>
    </section> 

    <!-- 防疫等級資訊 -->
    <div id="index_severity"></div>

    <!-- 防疫旅館資訊 -->
    <div id="index_hotel"></div>

    <!-- 載入很多東西 -->
    <!-- JQuery -->
    <script type="text/javascript" src="../libs/jquery-3.4.1.min.js"></script>
    <!--Bootstrap JS-->
    <script src="../libs/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../libs/mdb.min.js"></script>
    <!--Popper JS-->
    <script src="../libs/popper.min.js"></script>
    <script src="../libs/carousel/owl.carousel.min.js"></script>
    <!--Custom JS -->
    <script src="../js/custom.js"></script>
    <!--Extra JS Libraries-->
    <script src="../js/hoverIntent.js"></script>
    <script src="../js/superfish.min.js"></script>
    <script src="../js/jquery.ajaxchimp.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>


    <!-- 載入區塊 -->
    <script>
        $(function () {
            $("#index_menu").load("./vendor/indexMenu.php"); // 載入菜單
            $("#index_severity").load("./vendor/indexSeverity.php"); // 載入防疫等級
            $("#index_hotel").load("./vendor/indexHotel.php"); // 載入防疫旅館
        });   
    </script>

</body>

</html>
