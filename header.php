<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title><?php echo isset($pageTitle) ? $pageTitle : 'The Royal Tourism'; ?></title>
    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/icon/favicon.png">

    <!-- Vendor CSS Files -->
    <link href="css/bootstrap.min.css" rel="preload stylesheet" media="all" as="style" />
    <link href="css/slick.css" rel="preload stylesheet" media="all" as="style" />
    <link href="css/all.min.css" rel="preload stylesheet" media="all" as="style" />
    <link href="css/swiper-bundle.min.css" rel="preload stylesheet" media="all" as="style" />
    <link href="css/flatpickr.min.css" rel="preload stylesheet" media="all" as="style" />
    <link href="css/style.css" rel="preload stylesheet" media="all" as="style" />
</head>

<body>
    <!-- top bar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contactno">Call Us To Get Best Deals - 8977008007, 9912008007</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hamburger icon lines -->
    <header class="main_menu">
        <div class="container menus">
            <nav class="navbar navbar-expand-lg navbar-dark w-100">
                <div class="w-100">
                    <div class="d-flex align-items-center justify-content-between justify-content-lg-end">
                        <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-fluid" alt="logo"></a>
                        <!-- <div class="serchbox">
                            <form action="#" class="serchform">
                                <button class="btn">                                        
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.9999 16.9999L12.9499 12.9499M12.9499 12.9499C13.5999 12.2998 14.1156 11.5281 14.4674 10.6788C14.8192 9.82947 15.0002 8.91917 15.0002 7.99987C15.0002 7.08057 14.8192 6.17027 14.4674 5.32095C14.1156 4.47163 13.5999 3.69991 12.9499 3.04987C12.2998 2.39983 11.5281 1.88418 10.6788 1.53238C9.82947 1.18058 8.91917 0.999512 7.99987 0.999512C7.08057 0.999512 6.17027 1.18058 5.32095 1.53238C4.47163 1.88418 3.69991 2.39983 3.04987 3.04987C1.73705 4.36269 0.999512 6.14326 0.999512 7.99987C0.999512 9.85648 1.73705 11.637 3.04987 12.9499C4.36269 14.2627 6.14326 15.0002 7.99987 15.0002C9.85648 15.0002 11.637 14.2627 12.9499 12.9499Z" stroke="#05073D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </button>
                                <input type="email" class="form-control" id="" placeholder="Search destinations or activities">
                            </form>
                        </div> -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button> 
                        <!-- three menu -->
                        <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll three-menu" style="--bs-scroll-height: 100px;">
                            <li class="nav-item dropdown">                                
                                <div class="menu-container">
                                    <a href="javascript:;" class="nav-link dropdown-toggle bg-transparent">Destinations <i class="fa-solid fa-angle-down"></i></a>
                                    <div class="dropdown-menu megamenu">
                                        <div class="menu-tab">
                                            <div class="tabs-container">
                                                <!-- Vertical Pills Navigation -->
                                                <ul class="cds-nav-pills">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link active" id="active-element" data-tab="tab1">Domestic</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-tab="tab2">International</a>
                                                    </li>
                                                </ul>                                                    
                                                <!-- Tab Contents -->
                                                <div class="tab-contents">
                                                    <div id="tab1" class="innertab-pane active">
                                                        <div class="citys">
                                                            <ul class="city-list active">
                                                                <li><a href="javascript:void(0)" class="city-nav active">Kerala</a></li>
                                                                <li><a href="javascript:void(0)" class="city-nav">Goa</a></li>
                                                                <li><a href="javascript:void(0)" class="city-nav">Himachal Pradesh</a></li>
                                                                <li><a href="javascript:void(0)" class="city-nav">Jammu & Kashmir</a></li>
                                                                <li><a href="javascript:void(0)" class="city-nav">Ladakh</a></li>
                                                                <li><a href="javascript:void(0)" class="city-nav">Delhi - Agra - Jaipur</a></li>
                                                                <li><a href="javascript:void(0)" class="city-nav">Rajasthan</a></li>
                                                                <li><a href="javascript:void(0)" class="city-nav">Coorg</a></li>
                                                                <li><a href="javascript:void(0)" class="city-nav">Andaman</a></li>
                                                                <li><a href="javascript:void(0)" class="city-nav">Kodaikanal</a></li>
                                                                <li><a href="javascript:void(0)" class="city-nav">Mysore</a></li>
                                                                <li><a href="javascript:void(0)" class="city-nav">Ooty</a></li>
                                                            </ul>
                                                            <div class="city-imgbox">
                                                                <img src="images/city.jpeg" class="img-fluid rounded-4" alt="city" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="tab2" class="innertab-pane">
                                                        <div class="citys">
                                                            <ul class="city-list">
                                                                <li><a href="javascript:void(0)" class="city-nav">Singapore</a></li>
                                                                <li><a href="javascript:void(0)" class="city-nav">Malaysia</a></li>
                                                                <li><a href="javascript:void(0)" class="city-nav">Srilanka</a></li>
                                                                <li><a href="javascript:void(0)" class="city-nav">Maldives</a></li>
                                                                <li><a href="javascript:void(0)" class="city-nav">Dubai</a></li>
                                                                <li><a href="javascript:void(0)" class="city-nav">Bali</a></li>
                                                                <li><a href="javascript:void(0)" class="city-nav">Bangkok</a></li>
                                                                <li><a href="javascript:void(0)" class="city-nav">Thailand</a></li>
                                                                <li><a href="javascript:void(0)" class="city-nav">Europe</a></li>
                                                            </ul>
                                                            <div class="city-imgbox">
                                                                <img src="images/city.jpeg" class="img-fluid rounded-4" alt="city" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                          
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Trips & Tours <i class="fa-solid fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Corporate Tours</a></li>
                                    <li><a class="dropdown-item" href="#">Weekend Trips</a></li>
                                    <li><a class="dropdown-item" href="#">HonnyMoon Packages</a></li>
                                    <li><a class="dropdown-item" href="#">Hydrabad</a></li>
                                    <li><a class="dropdown-item" href="#">Mumbai</a></li>                                    
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Special Offers <i class="fa-solid fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Any Festival</a></li>
                                    <li><a class="dropdown-item" href="#">Gift Cards</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Explore<i class="fa-solid fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Explore 1</a></li>
                                    <li><a class="dropdown-item" href="#">Explore 2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- side main menu -->
            <nav class="navbar ms-5" aria-label="Light offcanvas navbar">
                <div class="coust-offcanvas">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarLight" aria-controls="offcanvasNavbarLight" aria-label="Toggle navigation">
                        <span class="line-icon"><svg width="26" height="14" viewBox="0 0 26 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.5 1.5H25.5M0.5 12.5H20.5" stroke="black" stroke-width="3"/>
                            </svg></span>
                    </button>
                    <div class="offcanvas offcanvas-end offcanvas-mobile-start" tabindex="-1" id="offcanvasNavbarLight" aria-labelledby="offcanvasNavbarLightLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title fw-semibold" id="offcanvasNavbarLightLabel">Main Menu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="d-block d-md-none">
                                    <nav class="navbar navbar-expand-lg navbar-light bg-light d-block d-md-none three-menumobile">
                                        <div class="container-fluid ps-0 pe-0">
                                            <a class="navbar-brand" href="#">Destinations</a>
                                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="arrow"><i class="fa-solid fa-angle-down fa-lg"></i></span>
                                            </button>
                                            <div class="collapse navbar-collapse" id="navbarNav">
                                                <ul class="navbar-nav">
                                                    <!-- Domestic Dropdown -->
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="parentDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Domestic <span class="arrow"><i class="fa-solid fa-angle-down"></i></span>
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="parentDropdown">
                                                            <!-- Submenu 1 -->
                                                            <li class="dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#" id="childDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Kerala
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#" id="childDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Goa
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#" id="childDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Himachal Pradesh
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#" id="childDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Jammu & Kashmir
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#" id="childDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Ladakh
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#" id="childDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Delhi - Agra - Jaipur
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#" id="childDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Rajasthan
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#" id="childDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Coorg
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#" id="childDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Andaman
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#" id="childDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Kodaikanal
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#" id="childDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Mysore
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#" id="childDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Ooty
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!-- International Dropdown -->
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="parentDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            International <span class="arrow"><i class="fa-solid fa-angle-down"></i></span>
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="parentDropdown">
                                                            <!-- Submenu 1 -->
                                                            <li class="dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#" id="childDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Kerala
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#" id="childDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Goa
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#" id="childDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Himachal Pradesh
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#" id="childDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Jammu & Kashmir
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#" id="childDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Ladakh
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#" id="childDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Delhi - Agra - Jaipur
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#" id="childDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Rajasthan
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#" id="childDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Coorg
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#" id="childDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Andaman
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#" id="childDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Kodaikanal
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#" id="childDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Mysore
                                                                </a>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#" id="childDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Ooty
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                </li>
                                <li class="nav-item dropdown d-block d-md-none">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Trips & Tours <span class="arrow"><i class="fa-solid fa-angle-down fa-lg"></i></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Corporate Tours</a></li>
                                        <li><a class="dropdown-item" href="#">Weekend Trips</a></li>
                                        <li><a class="dropdown-item" href="#">HonnyMoon Packages</a></li>
                                        <li><a class="dropdown-item" href="#">Hydrabad</a></li>
                                        <li><a class="dropdown-item" href="#">Mumbai</a></li>                                    
                                    </ul>
                                </li>
                                <li class="nav-item dropdown d-block d-md-none">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Special Offers <span class="arrow"><i class="fa-solid fa-angle-down fa-lg"></i></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Any Festival</a></li>
                                        <li><a class="dropdown-item" href="#">Gift Cards</a></li>
                                    </ul>
                                </li>                                                               
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="aboutus.php">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="blog.php">News & Blogs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Gallery.php">Gallery </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contactus.php">Contact Us</a>
                                </li>
                            </ul>
                            <div class="bottom-data">
                                <div class="left-contactno">
                                    <span class="callicon me-3">                                        
                                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M36.0625 12.625H35.9688C35.5712 9.1991 33.9285 6.03876 31.353 3.74489C28.7775 1.45102 25.4489 0.183594 22 0.183594C18.5511 0.183594 15.2225 1.45102 12.647 3.74489C10.0715 6.03876 8.42883 9.1991 8.03125 12.625H7.9375C5.8655 12.625 3.87836 13.4481 2.41323 14.9132C0.9481 16.3784 0.125 18.3655 0.125 20.4375C0.125 22.5095 0.9481 24.4967 2.41323 25.9618C3.87836 27.4269 5.8655 28.25 7.9375 28.25H11.0625V14.1875C11.0625 11.2867 12.2148 8.5047 14.266 6.45353C16.3172 4.40235 19.0992 3.25001 22 3.25001C24.9008 3.25001 27.6828 4.40235 29.734 6.45353C31.7852 8.5047 32.9375 11.2867 32.9375 14.1875V29.8125C32.9364 31.2441 32.444 32.6319 31.5424 33.744C30.6408 34.856 29.3848 35.6248 27.9844 35.9219C27.5673 34.459 26.631 33.1985 25.351 32.3766C24.071 31.5546 22.5352 31.2277 21.0314 31.4571C19.5277 31.6865 18.1592 32.4564 17.1825 33.6226C16.2057 34.7888 15.6879 36.2711 15.7259 37.7918C15.7639 39.3125 16.3552 40.7671 17.389 41.8831C18.4227 42.999 19.828 43.6996 21.3413 43.8535C22.8547 44.0075 24.3723 43.6042 25.6096 42.7194C26.8469 41.8345 27.719 40.5288 28.0625 39.0469C30.2797 38.7182 32.3057 37.606 33.7734 35.9119C35.241 34.2178 36.0531 32.0539 36.0625 29.8125V28.25C38.1345 28.25 40.1216 27.4269 41.5868 25.9618C43.0519 24.4967 43.875 22.5095 43.875 20.4375C43.875 18.3655 43.0519 16.3784 41.5868 14.9132C40.1216 13.4481 38.1345 12.625 36.0625 12.625ZM3.25 20.4375C3.25 19.1943 3.74386 18.002 4.62294 17.1229C5.50201 16.2439 6.6943 15.75 7.9375 15.75V25.125C6.6943 25.125 5.50201 24.6311 4.62294 23.7521C3.74386 22.873 3.25 21.6807 3.25 20.4375ZM22 40.75C21.3819 40.75 20.7777 40.5667 20.2638 40.2234C19.7499 39.88 19.3494 39.3919 19.1129 38.8209C18.8764 38.2499 18.8145 37.6215 18.935 37.0154C19.0556 36.4092 19.3533 35.8523 19.7903 35.4153C20.2273 34.9783 20.7842 34.6806 21.3903 34.5601C21.9965 34.4395 22.6249 34.5014 23.1959 34.7379C23.7669 34.9744 24.255 35.375 24.5983 35.8889C24.9417 36.4028 25.125 37.0069 25.125 37.625C25.125 38.4538 24.7958 39.2487 24.2097 39.8347C23.6237 40.4208 22.8288 40.75 22 40.75ZM36.0625 25.125V15.75C37.3057 15.75 38.498 16.2439 39.3771 17.1229C40.2561 18.002 40.75 19.1943 40.75 20.4375C40.75 21.6807 40.2561 22.873 39.3771 23.7521C38.498 24.6311 37.3057 25.125 36.0625 25.125Z" fill="black"/>
                                            </svg>    
                                    </span> <span>Speak to our expert Travel Guide&nbsp;<a href="tel:+918977008007" class="telno">+91 8977008007</a></span>
                                </div>
                                <div class="right-sociallink">
                                <ul>
                                    <li>Follow Us :</li>
                                    <li><a href="https://www.facebook.com/theroyaltourism07" target="_blank" class="sociallink"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.youtube.com/@theroyaltourism007" target="_blank" class="sociallink"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="https://www.instagram.com/theroyaltourism07/" target="_blank" class="sociallink"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="https://goo.gl/maps/sdT1wN3Pze6ZM4e87" target="_blank" class="sociallink"><i class="fa fa-map-marker"></i></a></li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- # side main menu -->
        </div>
    </header>