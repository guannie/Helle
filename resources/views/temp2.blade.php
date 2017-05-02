<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>ADHFP Database</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Acute Decomposition Heart Failure Patient Database
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="{{url('home')}}">
                        <i class="pe-7s-help2"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('patientrecord')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Patient Record</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{url('newpatient')}}">
                        <i class="fa fa-plus"></i>
                        <p>Create New Record</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="upgrade.html">
                        <i class="fa fa-sign-out"></i>
                        <!-- <i class="pe-7s-rocket"></i> -->
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Typography</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<p class="hidden-lg hidden-md">New Patient Record</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Create New Patient Record</h4>
                                <!-- <p class="category">for Cardiovascular Diseases</p> -->
                            </div>
                            <div class="content">

                                <br>
                                <form style="width:50%; margin-left: auto; margin-right: auto;">
                                    <div class="form-group">
                                        <label for="patientID">Patient ID</label>
                                        <input type="text" class="form-control" id="patientID" placeholder="PatientID">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="age">Age</label>
                                        <input type="text" class="form-control" id="age" placeholder="Age">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Gender</label>
                                        <input type="text" class="form-control" id="gender" placeholder="Gender">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Days in Hospital</label>
                                        <input type="text" class="form-control" id="days" placeholder="Days in Hospital">
                                    </div>
                                    <br>

                                    <div style="width:101%; margin-left: auto; margin-right: auto;">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#medicalHistory">Medical History</a></li>
                                            <li><a data-toggle="tab" href="#initialEvaluation">Initial Evaluation</a></li>
                                            <li><a data-toggle="tab" href="#hospitalCourse">Hospital Course</a></li>
                                            <li><a data-toggle="tab" href="#medication">Medication</a></li>
                                        </ul>

                                        <div class="tab-content">
                                            <div id="medicalHistory" class="tab-pane fade in active">
                                                <!-- <h3>HOME</h3> -->
                                                <br>
                                                <p>Some content.</p>
                                            </div>
                                            <div id="initialEvaluation" class="tab-pane fade">
                                                <h3>Menu 1</h3>
                                                <p>Some content in menu 1.</p>
                                            </div>
                                            <div id="hospitalCourse" class="tab-pane fade">
                                                <h3>Menu 2</h3>
                                                <p>Some content in menu 2.</p>
                                            </div>
                                            <div id="medication" class="tab-pane fade">
                                                <h3>Menu 2</h3>
                                                <p>Some content in menu 2.</p>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                               


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

 <footer class="footer">
            <div class="container-fluid">
                 <nav class="pull-left">
                    <!-- <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul> -->
                </nav>
                <!-- <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>  -->
            </div>
        </footer>


    </div>
</div>


</body>

        <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>