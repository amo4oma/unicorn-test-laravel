<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/font/Avenir/AvenirLTStd-Heavy.otf">
    <!-- Link Swiper's CSS -->

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Test</title>
</head>

<body>
    <nav id="nav" class="navbar fixed-top navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a id="logo" class="navbar-brand"><img class="img-fluid" src="./Assest/SBH logo.png" /></a>
            <button id="nav-icon3" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a id="home-link" class="nav-link nav-link-h active pl-3 pr-3 font-s-12 avevir-med" aria-current="page" href=" ">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ltr pl-3 pr-3 font-s-12 avevir-med" href="#debt-calculator" tabindex="-1" onclick="showPopUp()" aria-disabled="true">DEBT CALCULATOR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-c pl-3 pr-3 consult-nav font-s-12 avevir-med">CONSULT ME</a>
                    </li>

                    <li class="nav-item ">
                        <button type="button" class="nav-link-ltr btn btn-primary avevir" onclick="slidLedGenFormNav()">{{__(('index.LOWER MY COMMITMENTS'))}} <i class="fas fa-arrow-right"></i></button>
                    </li>
                    <li class="nav-item dropdown">
                        <a class=" nav-link nav-link-c dropbtn pl-3 pr-3 font-s-12 avevir-med" href="{{ url('/') }}">ENGLISH</a>
                        <div class="dropdown-content">
                            <a href="{{ url('/ch') }}">&#127464;&#127475; Chinese</a>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <section id="main-section">
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-lg-3 hero-header">
                    <div class="strugling-header">
                        <h1 class="white font-s-40 struggling avevir">{{__(('index.Struggling with trying to not become POKAI?'))}}</h1>
                        <p class="orang mt-5">{{__(('index.no-one-want-to be'))}}.</p>
                        <p class="white">{{__(('index.you-are-using-most-of'))}}.<br /> <br />{{__(('index.but-you-can'))}}</p>

                    </div>
                    <button type="button" class="btn btn-primary avevir" onclick="slidLedGenForm()">{{__(('index.LOWER MY COMMITMENTS'))}}
                        <i class="fas fa-arrow-right"></i></button>
                </div>
                <div class="col-lg-5">
                    <img class="main-img" src="./Assest/Group 14.png" alt="">
                </div>
                <div class="col-lg-3">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="d-flex flex-row  ">
                                    <img src="./Assest/avatar1.png" class="avatar" alt="">
                                    <div class="d-flex flex-column ">
                                        <h2 class="name">Derek Chin</h2>
                                        <p class="card-info">Aiseh new PS5 ah, swee ah bro. But now pokai how?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex flex-row ">
                                    <img src="./Assest/Ellipse 1 (5).png" class="avatar" alt="">
                                    <div class="d-flex flex-column">
                                        <h2 class="name">Natasya Ain</h2>
                                        <p class="card-info" class="card-info">Kak, jangan ikut Emily in Paris sampai Pokai di KL tu.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex flex-row ">
                                    <img src="./Assest/Ellipse 1 (1).png" class="avatar" alt="">
                                    <div class="d-flex flex-column">
                                        <h2 class="name">Jenny Chu</h2>
                                        <p class="card-info">Aiseh new PS5 ah, swee ah bro. But now pokai how?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex flex-row ">
                                    <img src="./Assest/Ellipse 1 (2).png" class="avatar" alt="">
                                    <div class="d-flex flex-column">
                                        <h2 class="name">Carl Lim</h2>
                                        <p class="card-info">Aiseh new PS5 ah, swee ah bro. But now pokai how?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex flex-row ">
                                    <img src="./Assest/Ellipse 1 (3).png" class="avatar" alt="">
                                    <div class="d-flex flex-column">
                                        <h2 class="name">Syafie</h2>
                                        <p class="card-info">Aiseh new PS5 ah, swee ah bro. But now pokai how?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex flex-row ">
                                    <img src="./Assest/Ellipse 1 (4).png" class="avatar" alt="">
                                    <div class="d-flex flex-column">
                                        <h2 class="name">Sylvia Leong</h2>
                                        <p class="card-info">Aiseh new PS5 ah, swee ah bro. But now pokai how?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex flex-row ">
                                    <img src="./Assest/Ellipse 1 (5).png" class="avatar" alt="">
                                    <div class="d-flex flex-column">
                                        <h2 class="name">Derek Chin</h2>
                                        <p class="card-info">Aiseh new PS5 ah, swee ah bro. But now pokai how?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex flex-row ">
                                    <img src="./Assest/Ellipse 1 (5).png" class="avatar" alt="">
                                    <div class="d-flex flex-column">
                                        <h2 class="name">Derek Chin</h2>
                                        <p class="card-info">Aiseh new PS5 ah, swee ah bro. But now pokai how?</p>
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
    <section class="mb-3">


        <div class="slideshow-container">

            <div class="mySlides">
                <h1 class="slider avevir">{{__(('index.Extend your repayment period'))}}</h1>
            </div>

            <div class="mySlides">
                <h1 class="slider avevir">{{__(('index.Reduce your debt interest rate'))}}</h1>
            </div>

            <div class="mySlides">
                <h1 class="slider avevir">{{__(('index.Extend your repayment period'))}}</h1>
            </div>


        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </section>
    <section id="find-out-section">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-lg-7">
                    <h1 class="white avevir font-s-40">{{__(('index.find out how much'))}}</h1>
                    <p class="orang avevir-med font-s-20">{{__(('index.let-our-financial'))}}</p>
                    <div class="d-flex inline-flex  ">
                        <div class="row col-lg-6">
                            <div class="d-flex flex-column icons ">
                                <img class="happy-customer-icon" src="./Assest/like icon.svg" alt="">
                                <span class="white">{{__(('index.Numerous-happy-customers'))}}</span>
                                <a href="#customer-review"><span class="orang">{{__(('index.See-what-they-have-to-say'))}}</span></a>
                            </div>

                        </div>
                        <div class="row col-lg-6">
                            <div class="d-flex flex-column icons">
                                <img class="lock-icon" src="./Assest/lock icon.svg" alt="">
                                <span class="white">{{__(('index.Is SBH safe?'))}}</span>
                                <a href="https://www.sbhgroup.com.my/privacypolicy/"> <span class="orang">{{__(('index.Yes, here’s why >'))}}</span></a>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-5 d-flex align-items-center justify-content-center">
                    <button id="show-me-how-btn" type="button" onclick="showPopUp()" class="btn2 btn-warning w-75 avevir-roman">{{__(('index.SHOW ME HOW'))}}</button>
                </div>
            </div>
        </div>

    </section>
    <section id="debt-calculator">
        <div class="container show-me-how-popup col-lg-7 col-sm-12">

            <div class="row">
                <div class="col-lg-6 col-sm-4">
                    <div class="show-me-how">
                        <h1 class="your-current-dept-header avevir-black">{{__(('index.Tell-us-your-current-debt'))}}</h1>
                        <p class="free-consult avevir-med">{{__(('index.Receive-a-free-no-obligation-consultation.'))}}</p>

                        <div class="chrome mt-5">
                            <h4 class="gray">{{__(('index.Total-debt-(RM):'))}}</h4>
                            <div class="d-flex flex-column">
                                <div class="d-inline-flex"><label class="gray" for="myinput">10,000</label> <label for="myinput" class="ml-auto gray">1,000,000+</label></div>



                                <input id="myinput" type="range" min="10000" value="" max="100000" oninput="showVal(this.value);" />
                                <h3 id="range-value" class="text-center mt-2 avevir-black"></h3>
                            </div>
                        </div>
                        <div class="mt-5"> <span class="gray">Assumed current interest p.a.:</span>
                            <h1 class="avevir-black blue font-s-30"> 17.5%</h1>
                            <p class="mt-5 gray font-s-12">{{__(('index.The-repayment-amount-shown'))}}</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-sm-4">
                    <div class="befor-sbh-header px-4 ">
                        <h1 class="font-s-30 your-current-dept-header pt-4 avevir-black">{{__(('index.Before-SBH'))}}</h1>
                        <h4 class="font-s-18">{{__(('index.Your-original-monthly-repayment'))}}</h4>
                        <h1 id='befor-sbh-value' class="font-s-25 avevir-black blue pb-4">RMXXX.XX</h1>
                    </div>
                    <div class="with-sbh pl-4">
                        <h1 class="font-s-25 avevir-black">{{__(('With'))}} SBH </h1>
                        <h4 class="font-s-18 avevir-roman">{{__(('index.Your monthly repayment can be as low as:'))}}</h4>
                        <h1 id="with-value" class="font-s-25 avevir-black">RMXXX.XX</h1>
                        <h4 class="font-s-20 avevir-med">{{__(('index.Assumed repayment duration:'))}}</h4>
                        <h1 class="font-s-30 avevir-black">3 years</h1>
                    </div>
                    <div class="you-save-up-to pl-5">
                        <h4 class="you-save-header">You Save up to</h4>
                        <h1>= <span id="saved-amount" class="amount-saved">RMXXX/per month*</span></h1>
                    </div>
                    <div class=" d-flex align-items-center justify-content-center mt-3">
                        <button id="consult-me-btn" type="button" onclick="showLedGenForm()" class="btn2 btn-warning avevir mt-3">{{__(('index.CONSULT ME'))}}</button>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="popup-form-container">
        <div id="led-gen-form-id" class="col-lg-3 offset-6 led-gen-form">
            <div class="led-gen">

                <h3 class="font-s-20">{{__(('index.How-our-Financial-Consultants'))}}</h3>
                <form id="led-form" action="">
                    <input type="text" class="form-control mt-3" placeholder="First name" required>
                    <input type="text" class="form-control" placeholder="Last name" required>
                    <input type="number" class="form-control" placeholder="Phone Number" required>
                    <input type="email" class="form-control" placeholder="Email" required>
                    <select id="inputState" class="form-control" required>
                        <option selected>State</option>
                        <option>Kuala Lumpur</option>
                        <option>Selengor</option>
                        <option>Penang</option>
                        <option>PutraJaya</option>
                    </select>
                    <table id="checkbox">
                        <tbody>
                            <tr>
                                <td> Yes</td>
                                <td>No</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">

                                        </div>
                                    </div>
                                </td>
                                <td class="font-s-11">{{__(('index.Are you currently unemployed?'))}}</td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">

                                        </div>
                                    </div>
                                </td>
                                <td class="font-s-11">{{__(('index.Are you more than 3'))}}</td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">

                                        </div>
                                    </div>
                                </td>
                                <td class="font-s-11">{{__(('index.I acknowledge that SBH'))}}</td>

                            </tr>
                        </tbody>
                    </table>
                    <img class="w-50 mt-4" src="./Assest/CTOS logo.png" alt="">
                    <select id="inputState" class="form-control">
                        <option selected>{{__(('Do you want a free MyCTOS Score Report?'))}}</option>
                        <option></option>

                    </select>
                    <button onclick="showThankyouMessege()" type="submit" class="btn btn-primary free-consultation-btn">GET YOUR FREE CONSULTATION
                    </button>
                </form>
                <p class="font-s-9 mt-5">{{__(('index.by-clicking'))}}</p>
            </div>
        </div>
    </div>
    <section id="how-we-serve-you">
        <div class="container text-center ">
            <h1 class="avevir">{{__(('index.How We Serve You'))}}</h1>
            <hr>
            <p class="sbh-paragraph d-flex avevir-roman">{{__(('index.SBH Advisory helps'))}}</p>

        </div>
    </section>
    <section class="mb-5">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="yellow-circle d-flex justify-content-center align-items-center ">
                        <h1 class="avevir steps-number">1</h1>
                    </div>
                    <div class="w-75 text-center mt-5">
                        <h1 class="text-center avevir steps-header blue">{{__(('index.Tell Us How Much Debt You Are Facing'))}}</h1>
                        <p class="avevir-roman steps-paragraph">{{__(('index.Call us or fill'))}}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="step-1 w-100" src="./Assest/step1.png" alt="">


                </div>
            </div>
            <div class="">
                <div class="col-lg-6">
                    <img class="line-1" src="./Assest/line-1.png" alt="">
                </div>
            </div>

        </div>

        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-6">
                    <img class="step-2" src="./Assest/step2.png" alt="">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="yellow-circle d-flex justify-content-center align-items-center ">
                        <h1 class="avevir">2</h1>
                    </div>
                    <div class="w-75 text-center mt-5">
                        <h1 class="text-center avevir steps-header blue">{{__(('index.We’ll Customise a Plan that is Right for You'))}}</h1>
                        <p class="avevir-roman steps-paragraph">{{__(('index.Plans can be modified to meet your specific needs.'))}}</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="">
            <div class="col-lg-6">
                <img class="line-2 d-flex offset-2" src="./Assest/line-2.png" alt="">
            </div>
        </div>
        <div class="container-fluid">
            <div class="step-3-container row ">

                <div class="mt-5 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="yellow-circle d-flex justify-content-center align-items-center ">
                        <h1 class="avevir">3</h1>
                    </div>
                    <div class="w-75 text-center ">
                        <h1 class="text-center avevir font-s-30 mt-5 blue">{{__(('index.You Save Money and Lower Your Monthly Repayment'))}}</h1>
                        <p class="avevir-roman steps-paragraph">{{__(('index.our-goal-is'))}}</p>
                    </div>
                </div>
                <div class="mt-5 col-lg-6 ">
                    <img class="step-3" src="./Assest/step3.png" alt="">
                </div>
            </div>
        </div>

    </section>
    <section id="customer-review">
        <h1 class="text-center avevir font-s-30">{{__(('index.What our customers say about us'))}}</h1>
        <div class="for-silk-slider">

            <div class="items">
                <img class="customer-review-img" src="./Assest/SBH Client Review.jpg" alt="">
                <div class="overlay"></div>
            </div>
            <div class="items">
                <img class="customer-review-img" src="./Assest/SBH Cust Review 2.jpg" alt="">
                <div class="overlay"></div>
            </div>
            <div class="items">
                <img class="customer-review-img" src="./Assest/SBH Cust Review 3.jpg" alt="">
                <div class="overlay"></div>
            </div>
            <div class="items">
                <img class="customer-review-img" src="./Assest/SBH Cust Review 5.jpg" alt="">
                <div class="overlay"></div>
            </div>
            <div class="items">
                <img class="customer-review-img" src="./Assest/SBH Cust Review 6.jpg" alt="">
                <div class="overlay"></div>
            </div>
            <div class="items">
                <img class="customer-review-img" src="./Assest/SBH Client Review.jpg" alt="">
                <div class="overlay"></div>
            </div>
        </div>

    </section>
    <section id="footer">
        <div class="container-fluid footer-hero-section">
            <div class=" footer-header d-flex flex-column justify-content-center align-items-center ">
                <h1 class="avevir-black footer-h1">{{__(('index.Don’t become POKAI'))}}</h1>
                <p class="avevir-med">{{__(('index.You’re a click away from lowering your monthly repayments'))}}</p>
            </div>
            <div class="footer-btn d-flex justify-content-center">
                <button type="button" onclick="showLedGenForm()" class="footer-form-btn btn btn-primary avevir">{{__(('index.LOWER MY COMMITMENTS'))}}<i class="fas fa-arrow-right"></i></button>
            </div>
            <div id="led-gen-form-footer"></div>
        </div>
        <div class="container-fluid footer-table-section">
            <table class="footer-tabel">
                <tbody id="footer-table" class="">
                    <tr>
                        <td class="white">SERVICES &nbsp;</td>
                        <td class="white">&nbsp; ABOUT</class=>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;<a href="https://www.sbhgroup.com.my/services/">Easy on Debt</a>&nbsp;</td>
                        <td>&nbsp;<a href="https://www.sbhgroup.com.my/">Home</a>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;<a href="https://www.sbhgroup.com.my/services/">Portfolio Management</a></td>
                        <td>&nbsp;<a href="https://www.sbhgroup.com.my/about-us/">About Us</a></td>
                    </tr>
                    <tr>
                        <td>&nbsp;<a href="https://www.sbhgroup.com.my/services/">Bank Loan Consultancy</a></td>
                        <td>&nbsp;<a href="https://www.sbhgroup.com.my/career/">Career</a>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;<a href="https://www.sbhgroup.com.my/services/">Account Management</a></td>
                        <td><a href="https://www.sbhgroup.com.my/latest-news-insights/">Latest News and Insights</a></td>
                    </tr>
                    <tr>
                        <td>&nbsp;<a href="https://www.sbhgroup.com.my/services/">Financial Education</a></td>
                        <td>&nbsp;<a href="https://www.sbhgroup.com.my/what-our-team-say/">Our Team</a></td>
                    </tr>
                    <tr>
                        <td>&nbsp;<a href="https://www.sbhgroup.com.my/services/">Mortgage Loans and Refinancing</a></td>
                        <td>&nbsp;<a href="https://www.sbhgroup.com.my/contact-us/">Contact Us</a></td>
                    </tr>
                    <tr>
                        <td>&nbsp;<a href="https://www.sbhgroup.com.my/services/">Passive Income Management</a></td>
                        <td>&nbsp;<a href="https://www.sbhgroup.com.my/testimonials/">Testimonials</a>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;<a href="https://www.sbhgroup.com.my/services/">Elite Business&nbsp;Financing</a>&nbsp;</td>
                        <td>&nbsp;<a href="https://www.sbhgroup.com.my/privacypolicy/">Privacy Policy</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.sbhgroup.com.my/services/">&nbsp;SBH BizAssist</a></td>
                        <td>&nbsp;<a href="https://www.sbhgroup.com.my/faq/">FAQ</a></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class=""><a href="https://www.facebook.com/sbhcorporategroup/"><i class="fab pl-2 fa-facebook-square"></i></a><a href="https://www.instagram.com/sbh.group/"><i class="fab fa-instagram pl-2"></i></a></td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div class="copyright">
            <p class="text-center avevir-roman font-s-11 pb-1">Copyright © 2021 SBH Corporate Group SDN. BHD. | All
                rights reserved.</p>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/slick.js">

    </script>
    <script type="text/javascript" src="./js/main.js">

    </script>
    <script>
        $("#consult-me-btn").click(function() {
            $('html,body').animate({
                    scrollTop: $(".led-gen-form").offset().top
                },
                'slow');
        });
        $(".footer-form-btn").click(function() {
            $('html,body').animate({
                    scrollTop: $(".popup-form-container").offset().top
                },
                'slow');
        });
        $("#show-me-how-btn").click(function() {
            $('html,body').animate({
                    scrollTop: $(".show-me-how-popup").offset().top
                },
                'slow');
            $("#led-gen-form-id").hide();
        });
        $(".consult-nav").click(function() {
            showPopUp();
            $("#led-gen-form-id").slideDown();
            $('html,body').animate({
                    scrollTop: $(".popup-form-container").offset().top
                },
                'slow');

        });
        var screenWidth = $(window).width();
        var swiper = new Swiper(".swiper-container", {

            direction: (screenWidth < 440 ? "horizontal" : "vertical"), // change the diriction on mobile 
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",

            loop: true,
            slidesPerView: 6,
            spaceBetween: 10,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },


            autoplay: {
                delay: 1500,
                disableOnInteraction: true,
                //waitForTransition: false,
                reverseDirection: true,
            },


        });
    </script>

</body>

</html>