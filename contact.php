<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="images/fav.png" sizes="16x16">
    <meta name="description"
        content="Multiverse is a website design and development company offering web and mobile app solutions.">
    <meta name="robots" content="index, follow">
    <title>Contact</title>


    <link rel="stylesheet" href="assets/css/contact.css">
   <link rel="stylesheet" href="assets/css/style.css">


</head>



<body class="iti-mobile dark_theme">

<style>
            .page-warper {
                margin-top: 9rem;
            }
            /* Default Dark Theme */
body.dark_theme {
    background-color: #111;
    color: #fff;
}

body.dark_theme .header-menu ul li a {
    color: #ffffff;
}

/* Light Theme */
body.light_theme {
    background-color: #ffffff;
    color: #000;
}

body.light_theme .header-menu ul li a {
    color: #000000;
}

#fullName::placeholder {
  color: #333;
  opacity: 1;
}
#email::placeholder {
  color: #333;
  opacity: 1;
}
#phone::placeholder {
  color: #333;
  opacity: 1;
}
#fullName::placeholder {
  color: #333;
  opacity: 1;
}
        </style>



    <div class="bg">


   <!-- header -->
      <!-- marquee -->
      <!-- menu open humberger -->
         <?php include("includes/header.php"); ?>
      <!-- header end -->





        <div class="page-warper" >
            <div class="inner-warper">
                <section class="get-quote-box-sec">
                    <div class="container">
                        <div class="get-quote-box-block">
                            <div class="row">
                                <div class="col-md-6" >
                                    <div class="get-quote-form-box">
                                        <div class="get-quote-form-inner">
                                            <div class="get-quote-form-header">
                                                <h1 class="mb-3 h4-headline">Let’s Partner For Your Next Amazing Project </h1>
                                                <p>Allow us to be your technical aid in another of your successful
                                                    business venture. Mail, Chat, Call or better meet us over a cup of
                                                    coffee and share with us your development plan.</p>
                                            </div>

                                            <div id="overlay">
                                                <div class="cv-spinner">
                                                    <span class="spinner"></span>
                                                </div>
                                            </div>
                                            <form class="footer-form sample-form contact-form" method="post"
                                                enctype="multipart/form-data">
                                                <div submit-success="">
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group input-group">
                                                            <input type="text" minlength="3" maxlength="55"
                                                                name="fullName" id="fullName" class="input form-control"
                                                                placeholder="Full Name">
                                                            <div class="display-error" id="nameError"
                                                                style="display: none; color: red;"></div>
                                                        </div>
                                                    </div>

                                                    <input type="hidden" name="serviceType" id="serviceType" value="">
                                                    <div class="col-md-12">
                                                        <div class="form-group input-group">
                                                            <input type="email" name="email" id="email"
                                                                class="input form-control" placeholder="Email">
                                                            <div class="display-error" id="emailError"
                                                                style="display: none; color: red;"></div>
                                                        </div>
                                                    </div>

                                                    <input type="hidden" name="serviceType" id="serviceType" value="">
                                                    <div class="col-md-12">
                                                        <div class="form-group input-group">
                                                            <input type="phone" name="phone" id=""
                                                                class="input form-control" placeholder="phone number">
                                                            <div class="display-error" id="emailError"
                                                                style="display: none; color: red;"></div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form-group input-group">
                                                    <textarea class="input form-control" name="allabout" id="allabout"
                                                        placeholder="Whats your project all about ?"></textarea>
                                                    <div class="display-error" id="contentError"
                                                        style="display: none; color: red;"></div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div id="fileuploader" style="display:none;">Upload</div>
                                                </div>

                                                <p class="google-alert body-2 mt-0"><span>✅</span> Your ideas are fully
                                                    protected under our NDA.</p>


                                                <div class="ReqBtn captchSendBg text-center d-flex">
                                                    <div class="send-btn-form">
                                                        <input type="hidden" name="recaptcha_response"
                                                            id="recaptchaResponse">
                                                        <input id="btnSubmit" type="submit" class="btn"
                                                            value="Send Your Inquiry  ">
                                                    </div>
                                                </div>
                                                <div class="display-success" style="display: none; color: green;">
                                                    Success</div>
                                                <div id="loader" class="lds-dual-ring display-none overlay"></div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 get-quote-content">
                                    <div class="get-quote-info-block">
                                        <div class="get-quote-rating-blk owl-carousel owl-theme">
                                            <div class="item">
                                                <div class="get-quote-rating-item">
                                                    <div class="get-quote-rating-item-head">
                                                        <div class="get-quote-rating-nm">
                                                            <h6>Client's </h6>
                                                            <h2>Huda Al Lawati</h2>
                                                        </div>
                                                        <div class="get-quote-rating-star">
                                                            <img alt="" class="lazyload lazyloading"
                                                                src="images/2021-new/request-a-quote/star-rating.svg"
                                                                width="95" height="15">
                                                        </div>
                                                    </div>
                                                    <p> multiverse delivered everything they promised and their team
                                                        did an excellent job of breaking down the project requirements
                                                        to build useful software. In-house agents have reported greater
                                                        efficiency and increased profit thanks to the site’s ability to
                                                        manage properties and payments. </p>
                                                    <img alt="" class="lazyload lazyloading"
                                                        src="images/2021-new/request-a-quote/google-reviews.png"
                                                        width="94" height="47">
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="get-quote-rating-item">
                                                    <div class="get-quote-rating-item-head">
                                                        <div class="get-quote-rating-nm">
                                                            <h6>Client's </h6>
                                                            <h2>Karl Kukner</h2>
                                                        </div>
                                                        <div class="get-quote-rating-star">
                                                            <img alt="" class="lazyload lazyloading"
                                                                src="images/2021-new/request-a-quote/star-rating.svg"
                                                                width="95" height="15">
                                                        </div>
                                                    </div>
                                                    <p>I am pleased with the quality multiverse and its team has
                                                        produced on my project and your Project Management capability.
                                                        This team has excellent communication skills and quick response
                                                        with fast turnaround time has really impressed me.</p>
                                                    <img alt="" class="lazyload lazyloading"
                                                        src="images/2021-new/request-a-quote/google-reviews.png"
                                                        width="94" height="47">
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="get-quote-rating-item">
                                                    <div class="get-quote-rating-item-head">
                                                        <div class="get-quote-rating-nm">
                                                            <h6>Client's </h6>
                                                            <h2>Cedric Thomas</h2>
                                                        </div>
                                                        <div class="get-quote-rating-star">
                                                            <img alt="" class="lazyload lazyloading"
                                                                src="images/2021-new/request-a-quote/star-rating.svg"
                                                                width="95" height="15">
                                                        </div>
                                                    </div>
                                                    <p>Excellent team as usual. Had to end the project prematurely due
                                                        to changes on our side. They suit all of our needs and are
                                                        incredibly receptive, savvy and knowledgeable. This is one of
                                                        the best development teams that I have ever worked with.
                                                        Extremely diligent and professional. Couldn’t ask for a better
                                                        development partner.</p>
                                                    <img alt="" class="lazyload lazyloading"
                                                        src="images/2021-new/request-a-quote/google-reviews.png"
                                                        width="94" height="47">
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="get-quote-rating-item">
                                                    <div class="get-quote-rating-item-head">
                                                        <div class="get-quote-rating-nm">
                                                            <h6>Client's </h6>
                                                            <h2>Jesse Leal</h2>
                                                        </div>
                                                        <div class="get-quote-rating-star">
                                                            <img alt="" class="lazyload lazyloading"
                                                                src="images/2021-new/request-a-quote/star-rating.svg"
                                                                width="95" height="15">
                                                        </div>
                                                    </div>
                                                    <p> are the best web developers I have worked with, no
                                                        exception. I had some very convoluted requirements. Their
                                                        communication, reliability and skills are excellent which
                                                        allowed us to get the job done for our clients. Their
                                                        punctuality and response times where great – when they said they
                                                        would have it done tomorrow – it was done.</p>
                                                    <img alt="" class="lazyload lazyloading"
                                                        src="images/2021-new/request-a-quote/google-reviews.png"
                                                        width="94" height="47">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="get-quote-awards-block">
                                            <h4>Awards and Recognition</h4>
                                            <ul>
                                                <li>
                                                    <img alt="" class="lazyload lazyloading"
                                                        src="assets/images/sunial/logo multi.png" width="120"
                                                        height="80">
                                                </li>
                                                <li>
                                                    <img alt="" class="lazyload lazyloading"
                                                        src="assets/images/sunial/Name Big TANWAR GROUP Logo.png"
                                                        width="120" height="80">
                                                </li>



                                            </ul>

                                            <marquee direction="down" height="400px" scrollamount="3">

                                                <p class="body-2 mb-4" style="color: red;">
                                                    Computer Education & IT Training
                                                </p>
                                                <p class="body-2 mb-4" style="color: blue;">
                                                    Computer Repair & Maintenance
                                                </p>
                                                <p class="body-2 mb-4" style="color: green;">
                                                    Computer Sales & Accessories
                                                </p>
                                                <p class="body-2 mb-4" style="color: orchid;">
                                                    Networking Solutions
                                                </p>
                                                <p class="body-2 mb-4" style="color: black;">
                                                    CCTV Camera Solutions
                                                </p>
                                                <p class="body-2 mb-4" style="color: rgb(0, 127, 138);">
                                                    Affordable Computer Offers
                                                </p>

                                            </marquee>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>





          <!-- LETS COLLABORATE -->
      <!-- footer -->
       <!-- footer bottom -->
     <?php include("includes/footer.php"); ?>


    </div>

    <script defer src="js/jquery-3.6.0.min.js"></script>


    <!-- menu open krne k liye  -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuContainer = document.querySelector(".menu-container");
            if (!menuContainer) return;

            const tabs = menuContainer.querySelectorAll(".nav-tabs .nav-link");
            const tabContent = menuContainer.querySelectorAll(".tab-pane");
            const tabMenu = document.getElementById("myTab");
            const menuBox = document.querySelector(".menu-bg-box");
            const menuBtns = document.querySelectorAll(".menu-btn");
            const closeBtns = document.querySelectorAll(".menu-btn-close");

            // Handle Tab Switching
            tabs.forEach(tab => {
                tab.addEventListener("click", function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute("href");
                    const targetPane = menuContainer.querySelector(targetId);

                    if (targetPane) {
                        // Desktop & Mobile: Update Tab Links
                        tabs.forEach(t => t.classList.remove("active"));
                        this.classList.add("active");

                        // Desktop & Mobile: Update Tab Panes
                        tabContent.forEach(pane => {
                            pane.classList.remove("active", "show", "active-tab");
                        });
                        targetPane.classList.add("active", "show", "active-tab");

                        // Mobile Specific: Hide Tab Navigation and show content
                        if (window.innerWidth <= 767) {
                            tabMenu.classList.add("hide-tabs");
                        }
                    }
                });
            });

            // Handle Back Button in Mobile
            menuContainer.querySelectorAll(".back-to-menu").forEach(btn => {
                btn.addEventListener("click", function () {
                    tabMenu.classList.remove("hide-tabs");
                    tabContent.forEach(pane => pane.classList.remove("active-tab"));
                });
            });

            // Handle Menu Toggle (Open)
            menuBtns.forEach(btn => {
                btn.addEventListener("click", function () {
                    if (menuBox) {
                        menuBox.style.display = "block";
                        document.body.style.overflow = "hidden"; // Prevent scroll when menu is open
                    }
                });
            });

            // Close button logic
            closeBtns.forEach(btn => {
                btn.addEventListener("click", function () {
                    if (menuBox) {
                        menuBox.style.display = "none";
                        document.body.style.overflow = ""; // Restore scroll
                    }
                });
            });
        });
    </script>




    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <script defer src="js/owl.carousel.min.js"></script>
    <script defer src="assets/js/custom.min.js"></script>
    <!-- <script defer src="assets/js/snow.js"></script> -->
    <script async src="js/lazysizes.min.js"></script>
    <script defer src="js/bootstrap.min.js"></script>
    <script defer src="js/function.min.js"></script>
    <script defer src="js/function-2023.min.js"></script>
    <script defer src="js/intlTelInput.js"></script>
    <script defer src="js/phone.min.js"></script>
    <script defer src="cta/custom-script.min.js"></script>
    <script defer src="Include/custom-script.min.js"></script>

    <script defer src="assets-2026/js/swiper-bundle.min.js"></script>
    <script defer src="assets-2026/js/custom.js"></script>

</body>

</html>