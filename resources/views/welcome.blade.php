<!DOCTYPE html>
<html lang="fa" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
        <link rel="stylesheet" href="assets/front/swiper-bundle.min.css">
    </head>
    <body class="">
    <!-- category sidebar in responsive -->
    <div id="my-side-nav" class="side-nav">

        <a href="javascript:void(0)" class="close_btn" onclick="closeNav()">&times;</a>
        <div class="side-logo ms-4 py-2 mt-2">
            <a href="#" class="mx-auto text-center">
                دیلی شاپ
            </a>
        </div>

        <div class="navigate-link-side">
            <ul class="ms-2">
                <li class="nav-link-side-item my-2">
                    <a href="#">صفحه اصلی</a>
                </li>
                <li class="nav-link-side-item my-2">
                    <a href="#">پشتیبانی</a>
                </li>
                <li class="nav-link-side-item my-2">
                    <a href="#">تماس با ما</a>
                </li>
                <li class="nav-link-side-item my-2">
                    <a href="#">درباره ما</a>
                </li>
            </ul>
        </div>

        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne"
                            aria-expanded="false"
                            aria-controls="flush-collapseOne">
                        لپ تاپ
                    </button>
                </h2>
                <div id="flush-collapseOne"
                     class="accordion-collapse collapse"
                     aria-labelledby="flush-headingOne"
                     data-bs-parent="#accordionFlushExample">
                    <div class="list-group py-1">
                        <a href="#" class="list-group-item"> لپ تاپ</a>
                        <a href="#" class="list-group-item"> لپ تاپ</a>
                        <a href="#" class="list-group-item"> لپ تاپ</a>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo"
                            aria-expanded="false"
                            aria-controls="flush-collapseTwo">
                        موبایل
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse
                        collapse" aria-labelledby="flush-headingTwo"
                     data-bs-parent="#accordionFlushExample">
                    <ul class="list-group py-1">
                        <a href="#" class="list-group-item">موبایل</a>
                        <a href="#" class="list-group-item">موبایل</a>
                        <a href="#" class="list-group-item">موبایل</a>
                    </ul>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFour"
                            aria-expanded="false"
                            aria-controls="flush-collapseThree">
                        آل این وان
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse
                        collapse" aria-labelledby="flush-headingFour"
                     data-bs-parent="#accordionFlushExample">
                    <ul class="list-group py-1">
                        <a class="list-group-item">آل این وان</a>
                        <a class="list-group-item">آل این وان</a>
                        <a class="list-group-item">آل این وان</a>
                    </ul>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFive"
                            aria-expanded="false"
                            aria-controls="flush-collapseThree">
                        کامپیوتر
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse
                        collapse" aria-labelledby="flush-headingFive"
                     data-bs-parent="#accordionFlushExample">
                    <ul class="list-group py-1">
                        <a class="list-group-item">کامپیوتر</a>
                        <a class="list-group-item">کامپیوتر</a>
                        <a class="list-group-item">کامپیوتر</a>
                    </ul>
                </div>
            </div>

        </div>

    </div>





    <div class="container-fluid header-section">

        <!-- navbar row-->
        <nav class="nav-top py-2 bg-light">

            <ul class="nav navigate-link my-3">
                <li class="nav-item">
                    <a class="nav-link" href="#">صفحه اصلی</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">پشتیبانی</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">تماس با ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">درباره ما</a>
                </li>
            </ul>

            <ul class="nav naviagte-support my-3">

                <li class="nav-item phone-supprt me-3">
                    021-555-5050
                </li>
                <li class="nav-item time-supprort me-3">
                    پشتیبانی همه روزه از ساعت 8 الی 22
                </li>

            </ul>


        </nav>





        <!-- subheader row-->
        <div class="row mt-3 sub-header-right">

            <div class="col-2 mt-2">
                <div class="logo ms-4 mt-2">
                    <a href="#" class="">
                        دیلی شاپ
                    </a>
                </div>
            </div>

            <div class="col-5 mt-2">
                <div class="search-box">
                    <input type="text" class="form-control"
                           placeholder="جستجو ...">
                </div>
            </div>

            <div class="col-5 d-flex justify-content-end">
                <div class="sub-header-left d-flex justify-content-center">
                    <div class="link-sing-up border border-1 me-3
                            rounded-3">
                        <span><i class="fa-solid fa-sign-in"></i></span>
                        <a href="#">عضویت / ورود</a>
                    </div>

                    <div class="link-basket border border-1
                            rounded-3">
                        <span><i class="fa-solid fa-shopping-cart "></i></span>
                        <a href="#">سبد خرید</a>
                    </div>
                </div>
            </div>

        </div>


        <!-- side category btn row -->
        <div class="side-nav-btn">

            <div class="responsive-btn my-2">
                <img src="../assets/front/list.svg" onclick="openNav()"
                     alt="access-category-menu">
            </div>

            <div class="side-logo ms-4 py-2 mt-2">
                <a href="#" class="">
                    DailyShop
                </a>
            </div>

        </div>


        <div class="sub-header-responsive">
            <div class="row">



                <div class="col-sm search-box my-2">
                    <div class="search-box d-flex">
                        <input type="text" class="form-control"
                               placeholder="جستجو ...">
                    </div>
                </div>


                <div class="col-sm d-flex justify-content-between my-2">
                    <div class="link-sing-up border border-1 ms-1
                            rounded-3">
                        <span><i class="fa-solid fa-sign-in"></i></span>
                        <a href="#">عضویت / ورود</a>
                    </div>

                    <div class="link-basket border border-1 rounded-3">
                        <span><i class="fa-solid fa-shopping-cart "></i></span>
                        <a href="#">سبد خرید</a>
                    </div>
                </div>

            </div>
        </div>


    </div>

    <!-- category menu -->
    <div class="container category-menu mt-5">

        <div class="dropdown mx-auto">
            <button type="button" class="btn btn-light dropdown-toggle"
                    data-bs-toggle="dropdown">
                لپ تاپ
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">لپ تاپ</a></li>
                <li><a class="dropdown-item" href="#">لپ تاپ</a></li>
                <li><a class="dropdown-item" href="#">لپ تاپ</a></li>
            </ul>
        </div>

        <div class="dropdown mx-auto">
            <button type="button" class="btn btn-light dropdown-toggle"
                    data-bs-toggle="dropdown">
                موبایل
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">موبایل</a></li>
                <li><a class="dropdown-item" href="#">موبایل</a></li>
                <li><a class="dropdown-item" href="#">موبایل</a></li>
            </ul>
        </div>

        <div class="dropdown mx-auto">
            <button type="button" class="btn btn-light dropdown-toggle"
                    data-bs-toggle="dropdown">
                آل این وان
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"> آل این وان</a></li>
                <li><a class="dropdown-item" href="#"> آل این وان</a></li>
                <li><a class="dropdown-item" href="#"> آل این وان</a></li>
            </ul>
        </div>

        <div class="dropdown mx-auto">
            <button type="button" class="btn btn-light dropdown-toggle"
                    data-bs-toggle="dropdown">
                کامپیوتر
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">کامپیوتر</a></li>
                <li><a class="dropdown-item" href="#">کامپیوتر</a></li>
                <li><a class="dropdown-item" href="#">کامپیوتر</a></li>
            </ul>
        </div>

        <div class="dropdown mx-auto">
            <button type="button" class="btn btn-light dropdown-toggle"
                    data-bs-toggle="dropdown">
                محصولات گیمینگ
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">محصولات گیمینگ</a></li>
                <li><a class="dropdown-item" href="#">محصولات گیمینگ</a></li>
                <li><a class="dropdown-item" href="#">محصولات گیمینگ</a></li>
            </ul>
        </div>
    </div>

    <!-- slider -->
    <div class="container mt-5">

        <div id="carouselExampleDark" class="carousel carousel-dark slide "
             data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide-to="0" class="active" aria-current="true"
                        aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="../assets/front/slider/slider-01.jpg" class="d-block
                            w-100" alt="image">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="../assets/front/slider/slider-02.jpg" class="d-block
                            w-100" alt="image">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="../assets/front/slider/slider-03.jpg" class="d-block
                            w-100" alt="image">
                </div>
            </div>

            <button class="carousel-control-prev" type="button"
                    data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button"
                    data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>



    <!-- banner-top -->
    <div class="container banner-top mt-4">
        <div class="row row-cols-1 row-cols-md-4 g-4">

            <div class="col">
                <a href="#">
                    <img src="../assets/front/banner/banner-1.jpg"
                         class="img-fluid rounded" alt="...">
                </a>
            </div>

            <div class="col">
                <a href="#">
                    <img src="../assets/front/banner/banner-2.jpg"
                         class="img-fluid rounded" alt="...">
                </a>
            </div>

            <div class="col">
                <a href="#">
                    <img src="../assets/front/banner/banner-3.jpg"
                         class="img-fluid rounded" alt="...">
                </a>
            </div>

            <div class="col">
                <a href="#">
                    <img src="../assets/front/banner/banner-4.jpg"
                         class="img-fluid rounded" alt="...">
                </a>
            </div>

        </div>
    </div>


    <!-- off price products -->

    <div class="container off-price-products">

        <div class="row row-cols-1 row-cols-md-4 my-3 g-4">


            <div class="price-off-image col d-flex justify-content-center
                    align-items-center">

                <div class="d-flex flex-column
                        justify-content-center
                        align-items-center">
                    <img src="../assets/front/images/box.png"
                         class="img-fluid rounded" alt="...">
                    <h2 class="h2 my-2">تخفیف ویژه</h2>
                    <p>محصولات تخفیف دار مار را ببینید.</p>
                </div>

            </div>



            <div class="col">

                <div class="custom-card">

                    <div class="product-img d-flex justify-content-center">
                        <img src="../assets/front/banner/product-off-1.jpg"
                             class="img-fluid rounded"
                             alt="...">
                    </div>


                    <div class="custom-card-body border border-2 rounded
                            mt-2 p-1">
                        <div class="poduct-title d-flex
                                justify-content-between my-3 ms-2 ">

                            <div class="title">
                                محصول شماره یک
                            </div>
                            <div class="off-title">
                                    <span class="me-1 off-value rounded-5 p-1">
                                        30
                                    </span>
                                <span class="me-1 off-symbole">
                                        <i class="fa fa-percent fa-lg"></i>
                                    </span>
                            </div>

                        </div>

                        <div class="product-price d-flex
                                justify-content-between mt-5">
                            <div class="original-price ms-2">
                                <span><del>250.000</del></span>
                                <span>تومان</span>
                            </div>

                            <div class="off-price me-2">
                                <span>175.000</span>
                                <span>تومان</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col">
                <div class="custom-card">

                    <div class="product-img d-flex justify-content-center">
                        <img src="../assets/front/banner/product-off-2.jpg"
                             class="img-fluid rounded"
                             alt="...">
                    </div>


                    <div class="custom-card-body border border-2 rounded
                            mt-2 p-1">
                        <div class="poduct-title d-flex
                                justify-content-between my-3 ms-2 ">

                            <div class="title">
                                محصول شماره یک
                            </div>
                            <div class="off-title">
                                    <span class="me-1 off-value rounded-5 p-1">
                                        30
                                    </span>
                                <span class="me-1 off-symbole">
                                        <i class="fa fa-percent fa-lg"></i>
                                    </span>
                            </div>

                        </div>

                        <div class="product-price d-flex
                                justify-content-between mt-5">
                            <div class="original-price ms-2">
                                <span><del>250.000</del></span>
                                <span>تومان</span>
                            </div>

                            <div class="off-price me-2">
                                <span>175.000</span>
                                <span>تومان</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col">
                <div class="custom-card">

                    <div class="product-img d-flex justify-content-center">
                        <img src="../assets/front/banner/product-off-3.jpg"
                             class="img-fluid rounded"
                             alt="...">
                    </div>


                    <div class="custom-card-body border border-2 rounded
                            mt-2 p-1">
                        <div class="poduct-title d-flex
                                justify-content-between my-3 ms-2 ">

                            <div class="title">
                                محصول شماره یک
                            </div>
                            <div class="off-title">
                                    <span class="me-1 off-value rounded-5 p-1">
                                        30
                                    </span>
                                <span class="me-1 off-symbole">
                                        <i class="fa fa-percent fa-lg"></i>
                                    </span>
                            </div>

                        </div>

                        <div class="product-price d-flex
                                justify-content-between mt-5">
                            <div class="original-price ms-2">
                                <span><del>250.000</del></span>
                                <span>تومان</span>
                            </div>

                            <div class="off-price me-2">
                                <span>175.000</span>
                                <span>تومان</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>


    <!-- most-visited products -->
    <div class="container most-visited-products-section">

        <div class="row border-2 border-bottom my-3">
            <div class="most-visited-products-title col-lg-3 col-md-6
                    col-sm-6 col-12 border-1 rounded-3 my-2 py-4">
                <p class="text-center">محصولات پربازدید</p>
            </div>
        </div>

        <div class="row my-5">
            <!-- Swiper -->
            <div class="swiper swiper-most-visited">
                <div class="swiper-wrapper">

                    <!-- swiper-slide-item -->
                    <div class="swiper-slide d-flex justify-content-center">
                        <div class="card">

                            <img src="../assets/front/most-visited/pro-1.jpg"
                                 class="card-img-top" alt="product-image">
                            <div class="card-body my-3 border rounded-3">
                                <h6 class="card-title my-2">Acer Nitro 5
                                    AN515-57-79TD Gaming</h6>
                                <div class="product-card-price mt-4">
                                    <span class="custom-card-price-value">30.000.000</span>
                                    <span class="custom-card-price-unit">تومان</span>
                                </div>
                                <div class="product-card-details mt-5">
                                    <a href="#" class="btn btn-light ">جزئیات
                                        محصول </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide-item -->
                    <div class="swiper-slide d-flex justify-content-center">
                        <div class="card">
                            <img src="../assets/front/most-visited/pro-2.jpg"
                                 class="card-img-top " alt="product-image">
                            <div class="card-body my-3 border rounded-3">
                                <h6 class="card-title my-2">Acer Nitro 5
                                    AN515-57-79TD Gaming</h6>
                                <div class="product-card-price mt-4">
                                    <span class="custom-card-price-value">30.000.000</span>
                                    <span class="custom-card-price-unit">تومان</span>
                                </div>
                                <div class="product-card-details mt-5">
                                    <a href="#" class="btn btn-light ">جزئیات
                                        محصول </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide-item -->
                    <div class="swiper-slide d-flex justify-content-center">
                        <div class="card">
                            <img src="../assets/front/most-visited/pro-1.jpg"
                                 class="card-img-top" alt="product-image">
                            <div class="card-body my-3 border rounded-3">
                                <h6 class="card-title my-2">Acer Nitro 5
                                    AN515-57-79TD Gaming</h6>
                                <div class="product-card-price mt-4">
                                    <span class="custom-card-price-value">30.000.000</span>
                                    <span class="custom-card-price-unit">تومان</span>
                                </div>
                                <div class="product-card-details mt-5">
                                    <a href="#" class="btn btn-light ">جزئیات
                                        محصول </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide-item -->
                    <div class="swiper-slide d-flex justify-content-center">
                        <div class="card">
                            <img src="../assets/front/most-visited/pro-2.jpg"
                                 class="card-img-top" alt="product-image">
                            <div class="card-body my-3 border rounded-3">
                                <h6 class="card-title my-2">Acer Nitro 5
                                    AN515-57-79TD Gaming</h6>
                                <div class="product-card-price mt-4">
                                    <span class="custom-card-price-value">30.000.000</span>
                                    <span class="custom-card-price-unit">تومان</span>
                                </div>
                                <div class="product-card-details mt-5">
                                    <a href="#" class="btn btn-light ">جزئیات
                                        محصول </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <!-- banner products -->
    <div class="container banner-product mt-5 mt-5">
        <div class="row">
            <div class="col-sm mt-2">
                <img src="../assets/front/banner/banner-down-1.jpg"
                     class="img-fluid rounded-1" alt="product">
            </div>
            <div class="col-sm mt-2">
                <img src="../assets/front/banner/banner-down-2.jpg"
                     class="img-fluid rounded-1" alt="product">
            </div>
        </div>
    </div>

    <!-- Best-selling products -->

    <div class="container best-selling-products">

        <!-- title -->
        <div class="row border-2 border-bottom my-3">
            <div class="best-selling-products-title col-lg-3 col-md-6
                    col-sm-6 col-12 border-1 rounded-3 my-2 py-4">
                <p class="text-center">محصولات پرفروش</p>
            </div>
        </div>


        <div class="row my-5">
            <!-- Swiper -->
            <div class="swiper swiper-best-selling">
                <div class="swiper-wrapper">

                    <!-- swiper-slide-item -->
                    <div class="swiper-slide d-flex justify-content-center">
                        <div class="card">

                            <img src="../assets/front/most-visited/pro-1.jpg"
                                 class="card-img-top" alt="product-image">
                            <div class="card-body my-3 border rounded-3">
                                <h6 class="card-title my-2">Acer Nitro 5
                                    AN515-57-79TD Gaming</h6>
                                <div class="product-card-price mt-4">
                                    <span class="custom-card-price-value">30.000.000</span>
                                    <span class="custom-card-price-unit">تومان</span>
                                </div>
                                <div class="product-card-details mt-5">
                                    <a href="#" class="btn btn-light">جزئیات
                                        محصول </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide-item -->
                    <div class="swiper-slide d-flex justify-content-center">
                        <div class="card">
                            <img src="../assets/front/most-visited/pro-2.jpg"
                                 class="card-img-top " alt="product-image">
                            <div class="card-body my-3 border rounded-3">
                                <h6 class="card-title my-2">Acer Nitro 5
                                    AN515-57-79TD Gaming</h6>
                                <div class="product-card-price mt-4">
                                    <span class="custom-card-price-value">30.000.000</span>
                                    <span class="custom-card-price-unit">تومان</span>
                                </div>
                                <div class="product-card-details mt-5">
                                    <a href="#" class="btn btn-light ">جزئیات
                                        محصول </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide-item -->
                    <div class="swiper-slide d-flex justify-content-center">
                        <div class="card">
                            <img src="../assets/front/most-visited/pro-1.jpg"
                                 class="card-img-top" alt="product-image">
                            <div class="card-body my-3 border rounded-3">
                                <h6 class="card-title my-2">Acer Nitro 5
                                    AN515-57-79TD Gaming</h6>
                                <div class="product-card-price mt-4">
                                    <span class="custom-card-price-value">30.000.000</span>
                                    <span class="custom-card-price-unit">تومان</span>
                                </div>
                                <div class="product-card-details mt-5">
                                    <a href="#" class="btn btn-light ">جزئیات
                                        محصول </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide-item -->
                    <div class="swiper-slide d-flex justify-content-center">
                        <div class="card">
                            <img src="../assets/front/most-visited/pro-2.jpg"
                                 class="card-img-top" alt="product-image">
                            <div class="card-body my-3 border rounded-3">
                                <h6 class="card-title my-2">Acer Nitro 5
                                    AN515-57-79TD Gaming</h6>
                                <div class="product-card-price mt-4">
                                    <span class="custom-card-price-value">30.000.000</span>
                                    <span class="custom-card-price-unit">تومان</span>
                                </div>
                                <div class="product-card-details mt-5">
                                    <a href="#" class="btn btn-light ">جزئیات
                                        محصول </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="swiper-pagination"></div>
            </div>

        </div>

    </div>


    <div class="container-fluid mt-5  border-top border-2 footer-wrapper">

        <!-- footer-top -->
        <div class="footer-top row">

        </div>

        <!-- footer-down -->
        <div class="footer-down row border-top border-2">

            <div class="col-sm d-flex justify-content-center footer-access-link border-2">
                <div class="py-4">
                    <a href="#" class="mx-2">صفحه اصلی</a>
                    <a href="#" class="mx-2">درباره ما</a>
                    <a href="#" class="mx-2">تماس با ما</a>
                    <a href="#" class="mx-2">پشتیبانی</a>
                </div>
            </div>

            <div class="col-sm d-flex justify-content-center footer-social-link border-2">
                <div class="py-4">
                    <a href="#" class="mx-2"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="mx-2"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="mx-2"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>

        </div>

    </div>

      <script src="assets/front/swiper-bundle.min.js"></script>
      <script src="assets/front/app.js"></script>
    </body>
</html>
