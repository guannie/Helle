<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Helle</title>
    <link rel="icon" href="favicon.ico"/>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- Slick CSS -->
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a><img class="img-responsive" src="img/logoicon.png" alt="logo" style="height:50px;width:50px;display:inline-block;">Helle</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                                    
                    
                    <li>
                    @if (Auth::check())
                        <a href="{{ url('/home') }}" id="home">Home</a>
                    @else
                        <a href="{{ url('/login') }}" id="login">Login</a>
                        <!-- <a href="{{ url('/register') }}">Register</a> -->
                    @endif
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#services">Do you know?</a>
                    </li>
                    <li>
                        <a href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="home"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Database</h1>
                        <h3>Acute Decompensated Heart Failure</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="{{ url('/login') }}" class="btn btn-default btn-lg"><i class="fa fa-user fa-fw"></i> <span class="network-name">login</span></a>
                            </li>
                            <!-- <li>
                                <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="about"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">About<br></h2>
                    <p class="lead">Each day, thousands of medical data was recorded worldwide leading to many unsolve digital problems. Helle composed of generous enthusiatist, volunteers and medical experts who share a mission of improving the utilization of medical data, here at home and around the world. This website host one of our most crucial database system namely Acute Decompasated Heart Failure that includes a loafty amount of information on patient suffering cardiovascular disease.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/logoicon.png" alt="" style="padding:50px">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->
<a  name="services"></a>
    <div class="content-section-b" style="background-color: black">
        <div class="container" >
                <div class="row">
                    <div class="col-lg-7 col-lg-offset-5">
                    <h2 class="section-heading" style="color: white">Do You Know?</h2>
                    </div>
                </div>
        </div>
    </div>
    <!-- /.content-section-a -->
    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Cardiovascular Statistic</h2>
                    <p class="lead">Cardiovascular disease (CVD) is a class of diseases that involve the heart or blood vessels. Cardiovascular disease includes coronary artery diseases (CAD) such as angina and myocardial infarction (commonly known as a heart attack).[1] Other CVDs include stroke, heart failure, hypertensive heart disease, rheumatic heart disease, cardiomyopathy, heart arrhythmia, congenital heart disease, valvular heart disease, carditis, aortic aneurysms, peripheral artery disease, thromboembolic disease, and venous thrombosis. Cardiovascular disease have been reported as the most people infectous disease worldwide. </p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <canvas id="myChart" class="img-responsive" height="300px" width="300px" style="padding:50px" alt="pieChart"></canvas>
                    <!-- <img class="img-responsive" src="img/cvd.png" alt=""> -->
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Cardiovascular System<br></h2>
                    <p class="lead">Do you know? The cardiovascular system transports blood to almost all of the body's tissues. The blood delivers essential nutrients and oxygen and removes wastes and carbon dioxide to be processed or removed from the body.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/1.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>



    <!-- /.content-section-a -->

	<a  name="contact"></a>
    <div class="banner">
        <!-- /.container -->

          <!-- Start Contact section -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="contact-left wow fadeInLeft">
            <h2>Contact Us</h2>
            <address class="single-address">
              <h4>Postal address:</h4>
              <p>PO Box 117 Jalan Sri Resak KTDI 81310 Johor</p>
            </address>
             <address class="single-address">
              <h4>Phone</h4>
              <p>Phone Number: 018-2511754</p>
              <!-- <p>Fax Number: (06) 456 7890</p> -->
            </address>
             <address class="single-address">
              <h4>E-Mail</h4>
              <p>Support: biodb.helle@gmail.com</p>
              <p>Helps: biodb.helle@gmail.com</p>
            </address>
          </div>
        </div>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <div class="contact-right wow fadeInRight">
            <h2>Send a message</h2>
            <form action="https://formspree.io/ad.gemicid@gmail.com" method="POST" class="contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter Email" name="_replyto">
              </div>
              <div class="form-group">
                <textarea class="form-control" name="Message"></textarea>
              </div>
              <input type="hidden" name="_next" value="{{ url('/') }}" />
              <button type="submit" data-text="SUBMIT" class="btn btn-primary button button-default"><span>SUBMIT</span></button>
            </form>
          </div>
        </div>
<!--         <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                        </li>
                    </ul>
                </div> -->
      </div>
    </div>
  </section>
        <br>
<div class="container">
            <div class="row content-section-b">
            <div class="col-lg-1" ><h2>Partners</h2></div>
            <div class="col-lg-9 col-lg-offset-2">
              <div class="client-area ">
                <div class="client-table">
                  <div><img class="img-responsive" src="images/1.png" alt="client logo"></div>
                  <div><img class="img-responsive" src="images/3.png" alt="client logo"></div>
                  <div><img class="img-responsive" src="images/4.png" alt="client logo"></div>
                  <div><img class="img-responsive" src="images/5.png" alt="client logo"></div>
                  <div><img class="img-responsive" src="images/6.png" alt="client logo"></div>
                  <div><img class="img-responsive" src="images/7.png" alt="client logo"></div>
                  <div><img class="img-responsive" src="images/8.png" alt="client logo"></div>
                  <div><img class="img-responsive" src="images/1.png" alt="client logo"></div>
                  <div><img class="img-responsive" src="images/3.png" alt="client logo"></div>
                  <div><img class="img-responsive" src="images/4.png" alt="client logo"></div>
                  <div><img class="img-responsive" src="images/5.png" alt="client logo"></div>
                  <div><img class="img-responsive" src="images/6.png" alt="client logo"></div>
                  <div><img class="img-responsive" src="images/7.png" alt="client logo"></div> 
                  <div><img class="img-responsive" src="images/8.png" alt="client logo"></div>                     
                </div>
              </div>
            </div>
            </div>
        </div>

  <!-- End Contact section -->
    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>

        <div class="container">
            <div class="row">
                          <!-- Start Client section -->


                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Do you know?</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact Us</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Helle 2017. All Rights Reserved</p>
                </div>
            </div>


        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>>

    <!-- Chart.js -->
    <script src="js/Chart.min.js"></script> 
    <script>
        // initialize the doughnutchart
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [
                "Cardiovascular Disease",
                "All Other Diseases",
                "Diabetes",
                "Unintentional Injury",
                "Pneumonia",
                "Chronic Low Respiratory Disease",
                "Malignant Neoplasms"
            ],
            datasets: [
                {
                    data: [20, 3, 3, 3, 4, 23, 43],
                    backgroundColor: [
                        "#FF6384",
                        "#36A2EB",
                        "#ffcc00",
                        "#ff6600",
                        "#cc3399",
                        "#99ff33",
                        "#ff0000"
                    ],
                    hoverBackgroundColor: [
                        "#FF6384",
                        "#36A2EB",
                        "#ffcc00",
                        "#ff6600",
                        "#cc3399",
                        "#99ff33",
                        "#ff0000"
                    ]
                }]
            },
            options: {
                animation:{
                    animateScale:true
                }
            }
        });

        // initilize login button
        document.getElementById("login").onclick = function myFunction(){};

    </script>

</body>

</html>
