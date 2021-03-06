<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Beauty Concepts</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="{{url('css/style.css')}}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>
    jQuery(document).ready(function ($) {
      $(".counter").counterUp({
        delay: 10,
        time: 2000,
      });
    });
  </script>
</head>

<body>
    <body>
        <header>
          <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
          <div class="overlay"></div>
          <div id="audio-control"  class=" mute-btn muted"><i onclick="myFunction(this)" class="fa-solid fa-volume-mute"></i>
          </div>

          <!-- The HTML5 video element that will create the background video on the header -->
          <video playsinline="playsinline" id="myVideo" autoplay muted preload="yes"  loop="loop"  class="video-js" data-setup='{"autoplay":"any"}'>
            <source src="video/CR_MOON.mp4" type="video/mp4" />
          </video>

          <!-- The header content -->
          <div class="container-fluid headercontainer">
            <header>
              <div class="firstnav mt-4 pe-5 text-center">
                <nav>
                  <ul class="nav-links">
                    <li>
                      <a href="{{route('about')}}" class="leftmenu active">ABOUT US</a>
                    </li>
                    <li><a href="{{route('Brands')}}" class="leftmenu">BRANDS</a></li>
                    <li>
                      <a href="{{route('Maisondeperfums')}}" class="leftmenu">MAISON DES PARFUMS</a>
                    </li>
                    <li>
                      <a href="{{route('Index')}}" class="centermenu"><img src="pictures/logo.svg" alt="" /></a>
                    </li>
                    <li><a href="{{route('Retail')}}"  class="rightmenu">RETAIL</a></li>
                    <li>
                      <a href="{{ route('createForm') }}" class="rightmenu">CONTACT US</a>
                    </li>
                    <li>
                      <a href="{{route('Storelocator')}}" class="rightmenu">STORE LOCATOR</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="secondnav">
                <nav class="navbar navbar-expand-xm navbar-dark p-md-3">
                  <div class="container">
                    <a class="navbar-brand" width="20%" class="centermenu" href="{{route('Index')}}"><img src="pictures/logo.svg"
                        width="40%" alt="" /></a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                      <div class="mx-auto"></div>
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link text-white"  href="{{route('about')}}">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="{{route('Brands')}}">BRANDS</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="{{route('Maisondeperfums')}}">MAISON DES PARFUMS</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="{{route('Retail')}}">RETAIL</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="{{ route('createForm') }}">CONTACT US</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="{{route('Storelocator')}}">STORE LOCATOR</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
              </div>
            </header>
          </div>
        </header>

  <!-- Main Content Area -->

  <div class="container mt-5">
    <p class="text-center brandhead">Brands who trust us</p>
    <div class="owl-carousel owl-theme slidercard2 pb-2">

      <div class="item ">
       <img src="/pictures/Luxury/Logo/Bvlgari.png" alt="">
      </div>
      <div class="item ">
        <img src="/pictures/Luxury/Logo/Chopard.png" alt="">
       </div>
       <div class="item ">
        <img src="/pictures/Luxury/Logo/Ermenegildo-Zegna.png" alt="">
       </div>
       <div class="item ">
        <img src="/pictures/Luxury/Logo/Guerlain.png" alt="">
       </div>
       <div class="item ">
        <img src="/pictures/Luxury/Logo/Hermes.png" alt="">
       </div>
       <div class="item ">
        <img src="/pictures/Luxury/Logo/Lalique.png" alt="">
       </div>
       <div class="item ">
        <img src="/pictures/Luxury/Logo/Salvatore-Ferragamo.png" alt="">
       </div>

    </div>
  </div>

  <div class="container-fluid text-center counter-section">
    <div class="container text-center">
      <div class="row pt-5 pb-5">
        <div class="col-md-7 col-sm-12">
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <span class="counter-number counter">70 </span><span class="counter-number">+</span>
              <p class="counter-name">Brands</p>
            </div>
            <div class="col-md-4 col-sm-4">
              <span class="counter-number counter">3000</span><span class="counter-number">+</span>
              <p class="counter-name">Point of sales</p>
            </div>
            <div class="col-md-4 col-sm-4">
              <span class="counter-number counter">10</span><span class="counter-number">+</span>

              <p class="counter-name">Warehouses</p>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-sm-12">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <span class="counter-number counter">3500 </span><span class="counter-number">+</span>
              <p class="counter-name">Team Strength</p>
            </div>
            <div class="col-md-6 col-sm-6">
              <span class="counter-number counter">50000</span><span class="counter-number">+</span>
              <p class="counter-name">SKUs</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5 mb-5">
    <div class="row knowusallcontent">
      <div class="col-md-6 col-sm-12 mb-3">
        <p class="knowushead">Know About Us</p>
        <p class="knowuscontent">
          BEAUTY CONCEPTS, established in the year 1998 is a member of the Bahety Group of Companies, Kolkata. The
          Bahety Group of Companies with a heritage of over 70 years is one of the most respected and trusted business
          houses from Kolkata, working in multiple business sectors. We partner with more than 45 International
          Lifestyle Groups in fragrances, beauty & cosmetics to service the lifestyle needs of India.
          <br><br>
          Today, BCPL is one of India???s largest distribution houses in the categories of beauty, fragrances, cosmetics
          and lifestyle accessories. Distinguished for trust, business ethics and long term brand building focus BCPL is
          the preferred partner for Internationals Brands in the Indian market.
        </p>
        <a href="Aboutus"><button class="knowusbtn">Know More</button></a>
      </div>
      <div class="col-md-6 col-sm-12 mt-4 text-center">
        <img src="pictures/Group 1.png" width="80%" alt="" />
      </div>
    </div>
  </div>

  <div class="container mb-5">
    <div class="mt-3 mb-3 text-center justify-content-between">
      <span><img src="pictures/ring.png" style="width: 10%" /></span>&nbsp;
      &nbsp;&nbsp;<span class="chooseushead">Why Choose Us</span>&nbsp;
      &nbsp;&nbsp;<span><img src="pictures/ring.png" style="width: 10%" /></span>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 mt-2">
        <div class="card text-white whychooseusimg">

          <div class="flip-cardf">
            <div class="flip-card-innerf">
              <div class="flip-card-frontf">
                <p>We're great at building brands</p>
              </div>
              <div class="flip-card-backf">

                <p>We love brands, and we love to build them. At BCPL, your customers are our priority and so are you.
                  Wanting to build your own brand? We???re in charge!</p>

              </div>
            </div>


          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 mt-2">
        <div class="card text-white whychooseusimg">
          <div class="flip-cards">
            <div class="flip-card-inners">
              <div class="flip-card-fronts">
                <p>We???re everywhere </p>
              </div>
              <div class="flip-card-backs">

                <p>Our fantastic logistics infrastructure ensures that our supply chain makes regular, and on time
                  delivery for our rapidly growing network of retail partners.</p>

              </div>
            </div>


          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 mt-2">
        <div class="card text-white whychooseusimg">
          <div class="flip-cardt">
            <div class="flip-card-innert">
              <div class="flip-card-frontt">
                <p>We???re financially stable</p>
              </div>
              <div class="flip-card-backt">

                <p>BCPL, as part of the Bahety Group of Companies, is independently funded. We???re not dependent on any
                  brand???s financial resources and thus market each brand purely based on its merit.</p>

              </div>
            </div>


          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 mt-2">
        <div class="card text-white whychooseusimg">
          <div class="flip-cardl">
            <div class="flip-card-innerl">
              <div class="flip-card-frontl">
                <p>We believe in customer and brand bonding</p>
              </div>
              <div class="flip-card-backl">

                <p>We believe in long term association and creation of value through mutual respect & understanding,
                  trust & transparency between the brand and the customer.</p>

              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid clientbg pt-3 pb-3">
    <p class="text-center clienthead">Client Reviews</p>
    <div class="container">
      <div class="owl-carousel owl-theme slidercard3">
        <div class="item">
          <div class="m-3">
            <div class="card cardbg">
              <img src="pictures/Rectangle 51.png" class="card-img-top ps-5 pe-5" alt="..." />
              <div class="card-body">
                <p class="card-text clienttext">
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                  diam nonumy eirmod tempor invidunt ut labore et dolore magna
                  aliquyam erat, sed diam voluptua. At vero eos et accusam et
                  justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                  sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                  ipsum dolor sit
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="m-3">
            <div class="card cardbg">
              <img src="pictures/Rectangle 52.png" class="card-img-top ps-5 pe-5" alt="..." />
              <div class="card-body">
                <p class="card-text clienttext">
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                  diam nonumy eirmod tempor invidunt ut labore et dolore magna
                  aliquyam erat, sed diam voluptua. At vero eos et accusam et
                  justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                  sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                  ipsum dolor sit
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="m-3">
            <div class="card cardbg">
              <img src="pictures/Rectangle 53.png" class="card-img-top ps-5 pe-5" alt="..." />
              <div class="card-body">
                <p class="card-text clienttext">
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                  diam nonumy eirmod tempor invidunt ut labore et dolore magna
                  aliquyam erat, sed diam voluptua. At vero eos et accusam et
                  justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                  sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                  ipsum dolor sit
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="m-3">
            <div class="card cardbg">
              <img src="pictures/Rectangle 51.png" class="card-img-top ps-5 pe-5" alt="..." />
              <div class="card-body">
                <p class="card-text clienttext">
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                  diam nonumy eirmod tempor invidunt ut labore et dolore magna
                  aliquyam erat, sed diam voluptua. At vero eos et accusam et
                  justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                  sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                  ipsum dolor sit
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="m-3">
            <div class="card cardbg">
              <img src="pictures/Rectangle 52.png" class="card-img-top ps-5 pe-5" alt="..." />
              <div class="card-body">
                <p class="card-text clienttext">
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                  diam nonumy eirmod tempor invidunt ut labore et dolore magna
                  aliquyam erat, sed diam voluptua. At vero eos et accusam et
                  justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                  sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                  ipsum dolor sit
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="m-3">
            <div class="card cardbg">
              <img src="pictures/Rectangle 53.png" class="card-img-top ps-5 pe-5" alt="..." />
              <div class="card-body">
                <p class="card-text clienttext">
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                  diam nonumy eirmod tempor invidunt ut labore et dolore magna
                  aliquyam erat, sed diam voluptua. At vero eos et accusam et
                  justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                  sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                  ipsum dolor sit
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <p class="text-center segmenthead">Product Segments</p>
    <div class="row ms-3 me-3">
      <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
        <div class="card text-white segmentimg">
          <div>
            <figure>
              <img src="pictures/fragrances.png" class="card-img" alt="..." />
            </figure>
            <div class="card-img-overlay">
              <p class="card-text segmenttext">Fragrances</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
        <div class="card text-white segmentimg">
          <figure>
            <img src="pictures/beauty-products.png" class="card-img" alt="..." />
          </figure>
          <div class="card-img-overlay">
            <p class="card-text segmenttext">Beauty products</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
        <div class="card text-white segmentimg">
          <figure>
            <img src="pictures/cosmetics.png" class="card-img" alt="..." />
          </figure>
          <div class="card-img-overlay">
            <p class="card-text segmenttext">Cosmetics</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
        <div class="card text-white segmentimg">
          <figure>
            <img src="pictures/luggage.png" class="card-img" alt="..." />
          </figure>
          <div class="card-img-overlay">
            <p class="card-text segmenttext">Luggages</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5 mb-5">
    <p class="text-center instahead mb-4">Insta Updates</p>
    <div class="owl-carousel owl-theme slidercard">
      <div class="item">
        <div class="m-3"><img src="pictures/Rectangle 44.png" /></div>
      </div>
      <div class="item">
        <div class="m-3"><img src="pictures/Rectangle 45.png" /></div>
      </div>
      <div class="item">
        <div class="m-3"><img src="pictures/Rectangle 46.png" /></div>
      </div>
      <div class="item">
        <div class="m-3"><img src="pictures/Rectangle 44.png" /></div>
      </div>
      <div class="item">
        <div class="m-3"><img src="pictures/Rectangle 45.png" /></div>
      </div>
      <div class="item">
        <div class="m-3"><img src="pictures/Rectangle 46.png" /></div>
      </div>
    </div>
  </div>

  <!-- footer -->

  <div class="container-fluid ftoor pb-4 bg-black text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="row">
            <div class="col-md-8 col-sm-6 text-center mt-5">
              <img src="pictures/logobig.svg" width="80%" alt="" />
              <p class="mt-5 afterlogo">
                Vardaan 403 25A, Camac Street <br />
                Kolkata- 700016, India <br />
                ph: +91-33-2287-2358
              </p>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="row text-center">
                <div class="col-lg-12 col-xm-6">
                  <div class="fabev foot-about">
                    <div class="ftheadabout">
                      <span class="foothead">ABOUT US</span>
                    </div>
                    <div class="footdataaa">
                      <a href="{{route('about')}}" class="fbrands">
                        <li>Mission</li>
                      </a>
                      <a href="{{route('about')}}" class="fbrands">
                        <li>vision</li>
                      </a>
                      <a href="{{route('about')}}" class="fbrands">
                        <li>CSR</li>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 col-xm-6">
                  <div class="fabev">
                    <div class="ftheadevent">
                      <span class="footheadevent">Retail</span>
                    </div>
                    <div class="footdataaa">
                      <a href="{{route('Retail')}}" class="fbrands">
                        <li>MDP</li>
                      </a>
                      <a href="{{route('Retail')}}" class="fbrands">
                        <li>Beauty Luxe</li>
                      </a>
                      <a href="{{route('Retail')}}" class="fbrands"><li>Beauty Scentiments</li></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="row brandmaison">
                <div class="col-lg-12">
                  <div class="ftheadbrands">
                    <span class="foothead">BRANDS</span>
                  </div>
                  <div class="footdataaa">
                    <a href="{{route('Brands')}}" class="fbrands">
                      <li>Luxury</li>
                    </a>
                    <a href="{{route('Brands')}}" class="fbrands">
                      <li>Prestige</li>
                    </a>
                    <a href="{{route('Brands')}}" class="fbrands">
                      <li>Popular</li>
                    </a>
                    <a href="{{route('Brands')}}" class="fbrands">
                      <li>Fashion</li>
                    </a>
                    <a href="{{route('Brands')}}" class="fbrands">
                      <li>Lifestyle</li>
                    </a>
                  </div>
                </div>
                <div class="col-lg-12">
                  <!-- <div class="ftheadmaison">
                      <span class="footheadmaison">MAISON DE PARFUMS</span>
                      <div class="footdataaa">
                        <a href="#" class="fbrands"><li>Mumbai store</li></a>
                        <a href="#" class="fbrands"><li>delhi store</li></a>
                      </div>
                    </div> -->
                </div>
              </div>
            </div>
            <div class="col-md-8 col-sm-6 mt-3">

              <div class="text-center mt-3">
                <div class="fabev">
                  <div class="mb-3">
                    <span class="icontext">Follow us: </span>&nbsp;&nbsp;
                    <span>
                      <a href="https://www.instagram.com/beautyconcepts_india/" target="_blank"><img
                          src="/pictures/insta.png" width="12%" alt=""></a>&nbsp;&nbsp;

                      <a href="https://www.facebook.com/BeautyConceptsIndia" target="_blank"><img src="/pictures/fb.png"
                          width="12%" alt=""></a>&nbsp;&nbsp;

                      <a href="https://www.linkedin.com/company/beauty-concepts-pvt.-ltd./" target="_blank"><img
                          src="/pictures/linkedin.png" width="12%" alt=""></a>

                    </span>
                  </div>
                  <img src="pictures/letterbox.png" width="20%" alt="" />
                  <p class="mt-3">Subscribe to our newsletter</p>
                  <input type="email" class="femail" placeholder="Email to...." /><br />
                  <button class="fbtn">Subscribe</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-white text-black">
    <div class="row text-center p-3">
      <div class="col-md-4 wfoot">Copyright 2021</div>
      <div class="col-md-4 wfoot">Rights reserved by beauty concepts</div>
      <div class="col-md-4 wfoot">Powered by roots and stalks digital</div>
    </div>
  </div>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://use.fontawesome.com/abfdd2ac1e.js"></script>
  <script>
    const nextIcon = '<img class="iconnext" src="./pictures/right.svg">';
    const prevIcon = '<img class="iconprev" src="./pictures/left.svg">';

    $(".slidercard").owlCarousel({
      loop: true,
      margin: 10,
      dots: true,
      nav: true,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      navText: [prevIcon, nextIcon],

      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 2,
        },
        1000: {
          items: 3,
        },
      },
    });
  </script>

  <script>
    $(".slidercard2").owlCarousel({
      loop: true,
      margin: 10,
      dots: false,
      nav: true,
      autoplay: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: true,
      navText: [prevIcon, nextIcon],
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 2,
        },
        1000: {
          items: 4,
        },
      },
    });
  </script>

  <script>
    $(".slidercard3").owlCarousel({
      loop: true,
      margin: 10,
      dots: true,
      nav: true,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      navText: [prevIcon, nextIcon],
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 2,
        },
        1000: {
          items: 3,
        },
      },
    });
  </script>

<script>
  $('#audio-control').click(function(){
  if( $("#myVideo").prop('muted') ) {
        $("#myVideo").prop('muted', false);

    // or toggle class, style it with a volume icon sprite, change background-position
  } else {
    $("#myVideo").prop('muted', true);

  }
});
</script>
<script>
  function myFunction(x) {
  x.classList.toggle("fa-volume-up");
}
</script>

  <!-- -------------------------------------- -->

  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- <script type="text/javascript">
      var nav = document.querySelector("nav");

      window.addEventListener("scroll", function () {
        if (window.pageYOffset > 100) {
          nav.classList.add("bg-dark", "sticky");
        } else {
          nav.classList.remove("bg-dark", "sticky");
        }
      });
    </script> -->

  <!-- ------------------------------------------- -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <script src="jquery.counterup.min.js"></script>


</body>

</html>
