<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/cba-logo-final.png">
    <title>Community Builders Alliance</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <style>
    html,
    body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
        width: 100%;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: fixed;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links>a {
        color: blue;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .login-button {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        line-height: 44px;
        border-radius: 30px;
        background-color: #F69438;
        border: none;
        width: 190px;
    }

    .register-button {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        line-height: 44px;
        border-radius: 30px;
        background-color: white;
        width: 190px;
        border: solid 1px #F69438;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    .m-b-about {
        margin-bottom: -5%;
    }

    .p-mission {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        line-height: 44px;
        margin: auto;
    }

    .p-vision {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        line-height: 44px;
        margin: auto;
    }


    .about-us-h3 {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 800;
        font-size: 64px;
        line-height: 44px;
        color: #F79438;
    }

    .benefits-list {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 900;
        font-size: 64px;
        line-height: 44px;
        color: #F69438;
    }

    .h1-commu {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 900;
        font-size: 40px;
        margin: auto;
        color: #F69438;
    }

    .h4-commu {
        font-family: 'Inter';
        font-style: italic;
        font-weight: 200;
        font-size: 20px;
        line-height: 44px;
        color: #F69438;
    }

    html {
        scroll-behavior: smooth;
    }

    #nav-menu {
        font-size: 20px;

    }


    @media (max-width: 767px) {
        .m-b-md {
            margin-bottom: 5px;
            font-size: 30px;
        }

        .about-us-h3 {
            font-size: 30px;
        }

        .benefits-list {
            font-size: 20px;
        }

        .image {
            width: 400px;
        }
    }

    @media (max-width: 1024px) {
        .m-b-md {
            margin-bottom: 5px;
            font-size: 40px;
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <a class="navbar-brand" href="/"> <img src="../assets/images/cba-logo.png" width="150" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="col">
                    <ul class="navbar-nav" id="nav-menu">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#benefits">Benefits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#special-offers">Special Offers</a>
                        </li>
                    </ul>
                </div>
                <div class="col"></div>
                <div class="col">
                    @if (Route::has('login'))
                    @auth
                    <a href="{{ url('/home') }}">Home</a>
                    @else
                    <a href="{{ route('login') }}"><button class="login-button">Login</button></a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"><button class="register-button">Register</button></a>
                    @endif
                    @endauth
                    @endif
                </div>
            </div>
        </nav>
    </div>
    <div id="home" class="flex-center position-ref full-height">

        <!-- @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}"><button class="login-button">Login</button></a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}"><button class="register-button">Register</button></a>
            @endif
            @endauth
        </div>
        @endif   -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title m-b-md">
                        <h1 class="h1-commu">COMMUNITY BUILDERS <br />ALLIANCE</h1>
                        <h4 class="h4-commu">"Building Homes, Hopes and Future"</4>
                    </div>
                </div>
                <div class="col">
                    <img src="../assets/images/homepage_picture.png" width="600" class="image" />
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="flex-center position-ref full-height">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="../assets/images/about_us.png" width="500" class="image" />
                </div>
                <div class="col">
                    <h3 class="about-us-h3">Mission</h3>
                    <br />
                    <p class="p-mission">
                        To provide secure and elegant low cost housing and give chance
                        to everyone to earn extra income for their living by providing effective system , products and
                        services.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3 class="about-us-h3">Vision</h3>
                    <br />
                    <p class="p-vision">
                        Our vision is to become the number 1 real
                        estate<br /> developer and livelihood provider in the
                        country.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <div id="benefits" class="flex-center position-ref full-height">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="about-us-h3">Benefits for you</h3>
                    <br />
                    <ul class="benefits-list">
                        <li>
                            <h3>Company ID</h3>
                        </li>
                        <li>
                            <h3>5-10% Total Construction Cost Discount</h3>
                        </li>
                        <li>
                            <h3><span>&#8369;</span>50,000 House Calamity Assistance</h3>
                        </li>
                        <li>
                            <h3><span>&#8369;</span>10,000 Personal Accident Death Insurance</h3>
                        </li>
                        <li>
                            <h3>Business Opportunity and Unlimited Income</h3>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <img src="../assets/images/benefits-picture.png" width="500" class="image" />
                </div>
            </div>
        </div>
    </div>

    <div id="special-offers" class="flex-center position-ref full-height">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="about-us-h3">Special Offers and Prices</h3>
                    <br />
                    <ul class="benefits-list">
                        <li>
                            <h3>Bellow Standard Finish <span>&#8369;</span>499,999 and below</h3>
                        </li>
                        <li>
                            <h3>Standard Finish <span>&#8369;</span>500,000 up to <span>&#8369;</span>999,999</h3>
                        </li>
                        <li>
                            <h3>Luxury Finish <span>&#8369;</span>1M up to <span>&#8369;</span>5M</h3>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

<div>
    <footer class="text-center text-lg-start bg-dark text-muted" style="width:100%;">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
    <h3 style="color:orange">Community Builders <br />Alliance</h3>
    <span style="color:white;">Valencia City, Bukidnon Ph. 8709</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
        <h3 style="color:orange">Contact us</h3>
        <span class="fa fa-phone" style="color:white;"> +63 967 671 8602 (TM)</span>
        <br/>
        <span class="fa fa-phone" style="color:white;"> +63 991 621 2612 (DITO)</span>
    </div>

    <div>
        <a href="" class="me-4 text-reset col-md-6">
        <i class="fa fa-facebook-f"></i>
      </a>
      <a href="mailto:communitybuilders0@gmail.com" class="me-4 text-reset col-md-6">
        <i class="fa fa-google"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
    </footer>
</div>

</html>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>