<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Brands</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
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
    <script type="text/javascript" src="js/main.js"></script>
      <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- Header section -->

  <div class="container-fluid bg-white text-black headercontainer">
    <div class="firstnav mt-3 pe-5 text-center">
      <nav class="allnav">
        <ul class="nav-links">
          <li><a href="{{route('about')}}" class="leftmenu">ABOUT US</a></li>
          <li><a href="{{route('Brands')}}" class="leftmenu">BRANDS</a></li>
          <li>
            <a href="{{route('Maisondeperfums')}}" class="leftmenu">MAISON DE PARFUMS</a>
          </li>
          <li>
            <a href="{{route('Index')}}" class="centermenu"><img src="pictures/logoblack.svg" alt="" /></a>
          </li>
          <li><a href="{{route('Retail')}}" class="rightmenu active">RETAIL</a></li>
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
      <nav class="navbar navbar-expand-xm navbar-light p-md-3">
        <div class="container">
          <a class="navbar-brand" class="centermenu" href="{{route('Index')}}" ><img src="pictures/logoblack.svg" width="40%"
              alt="" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav mt-3">
              <li class="nav-item">
                <a class="nav-link text-black" href="{{route('about')}}">ABOUT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="{{route('Brands')}}">BRANDS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="Maisondeperfums.html">MAISON DE PARFUMS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="{{route('Retail')}}">RETAIL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="{{route('createForm')}}">CONTACT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="{{route('Storelocator')}}">STORE LOCATOR</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>

  <img src="pictures/retail-banner.svg" width="100%" alt="" />

  <div class="container mt-5 mb-5">
    <p class="retailmainhead">Maison Des Parfums</p>
  </div>
  <div class="container-fluid">
    <div class="row m-5">
      <div class="left">
        <img src="pictures/Maison-De-Parfums.jpg" class="retailimg" alt="" />
      </div>
      <div class="right">
        <p class="retailtext">
          <strong> Smell good, feel good </strong>
          <br><br>

          Maison Des Parfums is a luxury retail boutique that houses a collection of ???ne artisanal niche fragrances that
          are curated from around the world.<br><br>

          Being the ???rst of its kind concept in India, Maison Des Parfums caters to the discerning Indian consumer for
          niche and luxury perfumery brands. The boutique provides a unique shopping experience with bespoke in store
          service and attention to detail to engage each & every customer.
          <br><br>
          Bringing together top quality niche brands under one roof comprising of the most exciting names in the world
          of artisanal perfumery including: Acqua di Parma, Amouage, Amouroud, Atelier Des Ors, Blend Oud, BOIS 1920,
          Bond No. 9, Etat Libre D' Orange, ETRO, Franck Boclet, Goutal Paris, Houbigant, Juliette Has A Gun, Lalique,
          Les Parfum Des Rosine, Memo Paris, Moresque, Nasomatto, Nishane, Olfactive Studio, One of Those, Orto Parisi,
          Perris Monte Carlo, Ranc?? 1795 and Xerjoff as well as many other well-known brands.
        </p>
        <div class="row maisoncontent ">
          <div class="main">
            <div class="child">
              <p class="maisontext"> To know more please connect to our website :
              </p>
            </div>
            <div class="child">
              <a href="https://mdpindia.com/" target="_blank"> <button class="maisonbtn">Maison des parfums</button>
              </a>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
  <div class="container mt-5 mb-5">
    <p class="retailmainhead">Beaute Luxe</p>
  </div>
  <div class="container-fluid">
    <div class="row m-5">
      <div class="left">
        <img src="pictures/Beauty-Luxe.jpg" class="retailimg" alt="" />
      </div>
      <div class="right">
        <p class="retailtext">
          <strong> Making Luxury Accessible </strong>
          <br><br>
          Beaute Luxe is a luxury retail store that houses Luxury and Niche brands reaching out to the most discerning
          customers at their desirable locations.
          <br><br>
          The main aim of Beauty Luxe is to bring all luxury brands in the categories of Beauty, Fragrance, Fashion and
          Lifestyle Accessories under one umbrella. With the aim to make luxury accessible to Indian folks, we are
          available in multiple stores all over the subcontinent.
        </p>
        <div class="row maisoncontent ">
          <div class="main">
            <div class="child">
              <p class="maisontext"> To know more please connect to our website :
              </p>
            </div>
            <div class="child">
              <!-- <a href="https://mdpindia.com/pages/about-us" target="_blank"> <button class="maisonbtn">Maison de parfums</button> -->
                <button type="button" class="maisonbtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                 Beaute Luxe
                </button>
                <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <div class="modal-body">
                        <strong> Website under construction</strong>
                      </div>

                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
  <div class="container mt-5 mb-5">
    <p class="retailmainhead">Beauty Scentiments</p>
  </div>
  <div class="container-fluid">
    <div class="row m-5">
      <div class="left">
        <img src="pictures/Beauty-Scentiments.jpg" class="retailimg" alt="" />
      </div>
      <div class="right">
        <p class="retailtext">
          <strong> Bringing You Everything Beautiful </strong>
          <br><br>
          Beauty Scentiments has redefined conventional shopping experience with a brand portfolio that represents the
          pinnacle of the craftsmanship and unsurpassed quality further reinforcing its position as India's most
          desirable destination for world class brands.
          <br><br>
          It is India's foremost distribution house with a brand portfolio exceeding 50+ leading International brands in
          the categories of beauty, fragrances, cosmetics and lifestyle. With over 30 years of customer understanding
          across the segments of Mass, Premium, Prestige & Luxury, it provides its partners the competitive edge in a
          challenging and emerging market like India.
        </p>
        <div class="row maisoncontent ">
          <div class="main">
            <div class="child">
              <p class="maisontext"> To know more please connect to our website :
              </p>
            </div>
            <div class="child">
              <a href="https://beautyscentiments.com/" target="_blank"> <button class="maisonbtn">Beauty Scentiments</button>
              </a>
            </div>
          </div>

        </div>

      </div>
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
</body>

</html>
