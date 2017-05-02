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
    <link href="css/login.css" rel="stylesheet">

    <!-- Slick CSS -->
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">

    <!-- Materialize CSS -->
<!--     <link href="css/materialize.min.css" rel="stylesheet"> -->

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
                </button>
                <a><img class="img-responsive" src="img/logoicon.png" alt="logo" style="height:50px;width:50px;display:inline-block;">Helle</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="nav-link" href="{{ url('/') }}" id="login">Home</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('/login') }}">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <div class="login-panel" style="margin:40px;">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="login-panel">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                          <hgroup>
                            <h1>Login</h1>
                            <span><img class="img-responsive" src="img/logoicon.png" alt="logo" style="height:100px;width:100px;display:inline-block;"><p style="color:#4a89dc">Helle</p></span>
                          </hgroup>

                          <div class="group" style="margin-top: 30px" {{ $errors->has('email') ? ' has-error' : '' }}>
                            <input id="email" name="email" type="text"><span class="highlight"></span><span class="bar"></span>
                            <label>Email</label>
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                          </div>
                          <div class="group" {{ $errors->has('password') ? ' has-error' : '' }}>
                            <input id="password" name="password" type="password"><span class="highlight"></span><span class="bar"></span>
                            <label>Password</label>
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                          </div>
<!--                           <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                            </div> -->
                          <button type="submit" class="button buttonBlue">Login
                            <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                          </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->


    <!-- Footer -->
    <footer>

        <div class="container">
            <div class="row">
                          <!-- Start Client section -->


                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="index.html">Home</a>
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


  <!--   <script src="js/materialize.min.js"></script> -->

    <script type="text/javascript">
        $(window, document, undefined).ready(function() {

          $('input').blur(function() {
            var $this = $(this);
            if ($this.val())
              $this.addClass('used');
            else
              $this.removeClass('used');
          });

          var $ripples = $('.ripples');

          $ripples.on('click.Ripples', function(e) {

            var $this = $(this);
            var $offset = $this.parent().offset();
            var $circle = $this.find('.ripplesCircle');

            var x = e.pageX - $offset.left;
            var y = e.pageY - $offset.top;

            $circle.css({
              top: y + 'px',
              left: x + 'px'
            });

            $this.addClass('is-active');

          });

          $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
            $(this).removeClass('is-active');
          });

        });
    </script>

</body>

</html>
