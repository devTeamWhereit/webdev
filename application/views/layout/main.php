<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Whereit</title>


    <link rel="stylesheet" type="text/css" href="/asset/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/owlcarousel2/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="/asset/default.css" />
    <link rel="stylesheet" type="text/css" href="/asset/footer.css" />
<!--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->

</head>
<body>

    <header>
        <div class="row">
            <div class="container">
                <div class="main-header">

                    <!--                <a class="main-header-brand" href="#">-->
                    <img src="/asset/image/header/logo.png"  width="169" height="54" alt="">
                    <!--                </a>-->
                    <div class="hidden-xs">
                        <span> | </span>
                        <span>FIND A UNIQUE PLACE</span>

                        <!--                <div class="header-pi">  </div>-->
                        <!--                <div class="header-text"></div>-->
                        <div class="text-right"><a href="#"> 로그인</a></div>

                        <!--                <span>| FIND A UNIQUE PLACE</span>-->
                    </div>

                </div>
            </div>
        </div>
    </header>
    <div class="bg-light">
        <div class="container">
            <nav class="navbar navbar-expand-md hidden-xs">
                <!--            <a class="navbar-brand" href="#">Navbar</a>-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">랭킹 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">매거진</a>
                        </li>
                    </ul>
                    <div class="form-inline my-2 my-lg-0">
                        <ul class="navbar-nav mr-auto ">

                            <li class="nav-item">
                                <a class="nav-link" href="#">인기검색어</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>&nbsp;1&nbsp;&nbsp;</span> 가을이 오면</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown01">
                                    <a class="dropdown-item" href="#"><span>&nbsp;1&nbsp;&nbsp;</span> 가을이 오면</a>
                                    <a class="dropdown-item" href="#"><span>&nbsp;2&nbsp;&nbsp;</span> 여름이 오면</a>
                                    <a class="dropdown-item" href="#"><span>&nbsp;3&nbsp;&nbsp;</span> 겨울이 오면</a>
                                </div>
                            </li>
                        </ul>
                    </div>


                </div>
            </nav>
        </div>
    </div>

    <div class="flex-md-grow-0">
        &nbsp;
    </div>




   <div class="contents">
       <div class="owl-carousel owl-theme owl-loaded">
           <div class="item img-fluid"> <img src ='/asset/image/slide3.jpg' class="img-fluid"> </div>
           <div class="item img-fluid"> <img src ='/asset/image/slide3.jpg' class="img-fluid"> </div>
           <div class="item img-fluid"> <img src ='/asset/image/slide3.jpg' class="img-fluid"> </div>

       </div>
        <div class="container">

            <div class="form-inline mt-45">
                <div class="col-md-3">
                    <h2 >찾으시는곳이</h2>
                    <h4>있으신가요?</h4>
                </div>

                <div class="col-md-7">
                    <input type="text" class="form-control" style="width:100%">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-dark">SEARCH</button>
                </div>

            </div>

        </div>
   </div>
    <footer class="footer">
            <nav class="navbar fixed-bottom navbar-expand-sm navbar-light bg-light">
                <div class="container">
                    <span class="text-muted">Copyright 2018 BILLFISH Co,.,Ltd. All right reserved.</span>
                    <div class="form-inline my-2 my-lg-0">
                        <ul class="navbar-nav mr-auto ">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">검색지역 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">서비스정보</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">문의하기</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/asset/dist/js/vendor/jquery-slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="/asset/dist/js/vendor/popper.min.js"></script>
    <script src="/asset/dist/js/bootstrap.min.js"></script>
    <script src="/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="/owlcarousel2/docs/assets/vendors/highlight.js"></script>
    <script src="/owlcarousel2/docs/assets/js/app.js"></script>

    <script>
        $(document).ready(function(){
//            $(".owl-carousel").owlCarousel();
            $('.owl-carousel').owlCarousel({
                center: true,
                autoWidth:true,
                items: 2,
                loop: true,
                margin: 10,
                nav:true,

                dots:true,

//                responsive: {
//                    0:{
//                        items:1
//                    },
//                    600: {
//                        items: 1
//                    },
//                    1000: {
//                        items: 3
//                    }
//                },

            });
        });
    </script>
</body>
</html>