<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

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
                <li class="active">
                    <a href="{{url('patientrecord')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Patient Record</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('newpatient')}}">
                        <i class="fa fa-plus"></i>
                        <p>Create New Record</p>
                    </a>
                </li>
                <li class="active-pro">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i>
                        <p>Logout</p>
                        </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
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
                    <a class="navbar-brand" href="#">Patient Record</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                                <p class="hidden-lg hidden-md">Search</p>
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
<!--                             <div class="header">
                                <h4 class="title">Striped Table with Hover</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div> -->
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Patient ID</th>
                                    	<th>Name</th>
                                    	<th>Age</th>
                                    	<th>Gender</th>
                                    	<th>No Of Time Admitted To Hospital</th>
                                        <th>Days In Hospital</th>
                                        <th>Details Information</th>
                                    </thead>
                                    <tbody>
                                    <?php $num=1 ?>
                                        @foreach($record as $value)
                                        <tr>
                                            <td align="center"><?php echo $num ?></td> <!--value bley letak name ap2-->
                                                <td>
                                                    <a class="" href="{{url('show', array($value->patientID))}}"></a>{{$value->name}}
                                                </td>
                                                <td>
                                                    <a class="" href=""></a>{{$value->age}}
                                                </td>
                                                <td>
                                                    <a class="" href=""></a>{{$value->gender}}
                                                </td>
                                                <td>
                                                    <a class="" href=""></a>{{$value->noOfTimeAdmittedToHospital}}
                                                </td>
                                                <td>
                                                    <a class="" href=""></a>{{$value->daysInHospital}}
                                                </td> 
                                                <td align="center">
                                                    <a class="btn btn-sm btn-default" id="myBtn{{ $value->patientID }}" href="" data-toggle="modal" data-target="#myModal" data-pid="{{ $value->patientID }}">SHOW DETAILS</a>
                                                    <!--mcm niyh ke? tpi how nak link kan modal? href n data target xsama ke?-->
                                                </td>
                                            </tr>
                                            <?php $num++?>
                                            @endforeach <!--function loop-->

                                    </tbody>
                                </table>

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

      <!-- The Modal -->
            <div id="myModal" class="modal">
              <!-- Modal content -->
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title"> Infomation of {{$value->name}}</h4>
              </div>
              <div class="modal-body" style="max-height: calc(100vh - 210px);
    overflow-y: auto;">
                <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content">

                                <br>
                                <form style="width:50%; margin-left: auto; margin-right: auto;">
 <div class="form-group">
                                        <label for="patientID">Patient ID</label>
                                        <input type="text" class="form-control" id="patientID" name="patientID" laceholder="Patient ID" disabled> @if($errors->has('patientID')) <p class="help-block">{{ $errors->first('patientID') }}</p> @endif
                                    </div>

 <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" laceholder="Name" disabled> @if($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="age">Age</label>
                                        <input type="text" class="form-control" id="age" name="age" placeholder="Age" disabled> @if($errors->has('age')) <p class="help-block">{{ $errors->first('age') }}</p> @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Gender</label>
                                        <input type="text" class="form-control" id="gender" name="gender" placeholder="Gender" disabled> @if($errors->has('gender')) <p class="help-block">{{ $errors->first('gender') }}</p> @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Days in Hospital</label>
                                        <input type="text" class="form-control" id="days" name="days" placeholder="Days in Hospital" disabled> @if($errors->has('days')) <p class="help-block">{{ $errors->first('days') }}</p> @endif
                                    </div>
                                    <br>
                                    <div style="width:105%; margin-left: auto; margin-right: auto;">
                                        <ul class="nav nav-tabs">
                                            <li><a data-toggle="tab" href="#medicalHistory">Medical History</a></li>
                                            <li><a data-toggle="tab" href="#initialEvaluation">Initial Evaluation</a></li>
                                            <li class="active"><a data-toggle="tab" href="#hospitalCourse">Hospital Course</a></li>
                                            <li><a data-toggle="tab" href="#medication">Medication</a></li>
                                        </ul>

                                        <div class="tab-content">
                                            <div id="medicalHistory" class="tab-pane fade">
                                                <br>
                                                <div class="content table-responsive table-full-width">
                                                    <table class="table table-hover"> 

                                                        <thead>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                        </thead>

                                                        <tbody>

                                                            <tr>
                                                                <td>
                                                                    <div>
                                                                        Initial CPW
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <label><input type="checkbox">&nbsp;Yes</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <label><input type="checkbox">&nbsp;No</label>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div>
                                                                        Pre Hospital LVEF
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <input class="input" type="text" name="lvef" style="width:30%;">%
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <label><input type="checkbox">&nbsp;Not known</label>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div>
                                                                        Co Morbidities
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <label><input type="checkbox">&nbsp;Coronary Artery Disease </label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <label><input type="checkbox">&nbsp;PCI</label>
                                                                    <br>
                                                                        <label><input type="checkbox">&nbsp;CABG</label>
                                                                    <br>
                                                                        <label><input type="checkbox">&nbsp;Previous MI</label>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <label><input type="checkbox">&nbsp;Renal Insufficiency
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <label><input type="checkbox">&nbsp;Creatinine > 150 umol/L</label>
                                                                    <br>
                                                                        <label><input type="checkbox">&nbsp;On Dialysis</label>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td></td>
                                                                <td>
                                                                    <div>
                                                                        <label><input type="checkbox">&nbsp;Atrial Fibrilation
                                                                    </div>
                                                                </td>
                                                                <td></td>
                                                            </tr>

                                                            <tr>
                                                                <td></td>
                                                                <td>
                                                                    <div>
                                                                        <label><input type="checkbox">&nbsp;Diabetes
                                                                    </div>
                                                                </td>
                                                                <td></td>
                                                            </tr>

                                                            <tr>
                                                                <td></td>
                                                                <td>
                                                                    <div>
                                                                        <label><input type="checkbox">&nbsp;Hypertension
                                                                    </div>
                                                                </td>
                                                                <td></td>
                                                            </tr>

                                                            <tr>
                                                                <td></td>
                                                                <td>
                                                                    <div>
                                                                        <label><input type="checkbox">&nbsp;Hyperlipidemia/<br>Dyslipidemia
                                                                    </div>
                                                                </td>
                                                                <td></td>
                                                            </tr>

                                                            <tr>
                                                                <td></td>
                                                                <td>
                                                                    <div>
                                                                        <label><input type="checkbox">&nbsp;Stroke/TIA
                                                                    </div>
                                                                </td>
                                                                <td></td>
                                                            </tr>

                                                            <tr>
                                                                <td></td>
                                                                <td>
                                                                    <div>
                                                                        <label><input type="checkbox">&nbsp;COPD/Asthma
                                                                    </div>
                                                                </td>
                                                                <td></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>

                                               
                                            </div>

                                            <div id="initialEvaluation" class="tab-pane fade">
                                                <h3>Menu 1</h3>
                                                <p>Some content in menu 1.</p>
                                            </div>

                                            

                                            <div id="medication" class="tab-pane fade">
                                                <h3>Menu 2</h3>
                                                <p>Some content in menu 2.</p>
                                            </div>


                                            <div id="hospitalCourse" class="tab-pane fade in active">
                                                <table class="table table-hover">
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>

                                                    <tr>
                                                        <td>Procedure Performed <br>during this hospitalization </td>
                                                        <td>
                                                            <div>
                                                                <label><input type="checkbox">&nbsp;dialysis
                                                            </div>
                                                            <div>
                                                                <label><input type="checkbox">&nbsp;Mechanical ventilation
                                                            </div>
                                                            <div>
                                                                <label><input type="checkbox">&nbsp;Cardiac catheterization
                                                            </div>
                                                            <div>
                                                                <label><input type="checkbox">&nbsp;Defibrilation
                                                            </div>
                                                            <div>
                                                                <label><input type="checkbox">&nbsp;Cardiopulmonary resuscitation
                                                            </div>
                                                            <div>
                                                                <label><input type="checkbox">&nbsp;VAD
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                    </tr>   

                                                    <tr>
                                                        <!-- <td></td> -->
                                                        <td>Device</td>
                                                        <td>
                                                            <div>
                                                                <label><input type="checkbox">&nbsp;PPM
                                                            </div>
                                                            <div>
                                                                <label><input type="checkbox">&nbsp;AICD
                                                            </div>
                                                            <div>
                                                                <label><input type="checkbox">&nbsp;CRTD
                                                            </div>
                                                            <div>
                                                                <label><input type="checkbox">&nbsp;CRTP
                                                            </div>
                                                            <div>
                                                                <label><input type="checkbox">&nbsp;Watchman
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                    </tr>   

                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <div>
                                                                <label><input type="checkbox">&nbsp;Coronary Angiography
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                    </tr> 

                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <div>
                                                                <label><input type="checkbox">&nbsp;PCI
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                    </tr> 

                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <div>
                                                                <label><input type="checkbox">&nbsp;IABP
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                    </tr> 

                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <div>
                                                                <label><input type="checkbox">&nbsp;MRI/MSCT/TechScan
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                    </tr> 

                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <div>
                                                                <label><input type="checkbox">&nbsp;Peritoneal Tapping
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                    </tr> 

                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <div>
                                                                <label><input type="checkbox">&nbsp;Other Procedure
                                                            </div>
                                                        </td>
                                                        <td><input placeholder="please specify"></td>
                                                    </tr> 
                                                
                                                    <tr>
                                                        <td>Patient Counselling</td>
                                                        <td>
                                                            <div>
                                                                <label><input type="checkbox">&nbsp;Activity Level
                                                            </div>
                                                            <div>
                                                                <label><input type="checkbox">&nbsp;Weight Monitoring
                                                            </div>
                                                            <div>
                                                                <label><input type="checkbox">&nbsp;Follow up appointment
                                                            </div>
                                                            <div>
                                                                <label><input type="checkbox">&nbsp;Discharge medication
                                                            </div>
                                                            <div>
                                                                <label><input type="checkbox">&nbsp;diet/fluid intake
                                                            </div>
                                                            <div>
                                                                <label><input type="checkbox">&nbsp;what to do if symptom worsen
                                                            </div>
                                                            <div>
                                                                <label><input type="checkbox">&nbsp;smoking counselling
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                    </tr> 

                                                  </table>
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
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="editBtn">Edit</button>
                <button type="button" class="btn btn-danger" id="deleteBtn">Delete</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
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
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> -->

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


    <script type="text/javascript">
       
         $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


        $('#myModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var patientID = button.data('pid') // Extract info from data-* attributes

  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

         var data = { id : button.data('pid')};
         var data = {};
        var url = '{{url('/show/')}}';
$.post(url+button.data('pid'), data, function(response){ // Shortcut for $.ajax({type: "post"})
   if(response.success)
    {
        var patientName = $('#name').empty();
        $.each(response.record, function(i, record){
            // $('<option/>', {
            //     value:record.patientID,
            //     text:record.name
            // }).appendTo(patientName);
            var modal = $('#myModal');
              modal.find('.modal-title').text('Infomation of ' + record.name);
              modal.find('#patientID').val(record.patientID);
              modal.find('#name').val(record.name);
              modal.find('#age').val(record.age);
              modal.find('#gender').val(record.gender);
              modal.find('#days').val(record.daysInHospital);
        })
    }
}, 'json');
    

     $('#deleteBtn').on('click', function(event) {
        var modal = $('#myModal');
        var id = modal.find('#patientID').val();
        var path = "{{url('/delete/')}}"+"/"+id;
        window.location.replace(path);
        // $.ajax(
        //     {
        //         type: "get",
        //         url:  "{{url('/delete/')}}"+"/"+id,
        //         success: function(data){
        //         }
        //     })
        //     .done(function(data) {
        //         location.reload();
                
        //     });
        
     });

          $('#editBtn').on('click', function(event) {
        var modal = $('#myModal');
        var id = modal.find('#patientID').val();
        var path = "{{url('/edit/')}}"+"/"+id;

        //alert(path);
        window.location.replace(path);
        // $.ajax(
        //     {
        //         type: "get",
        //         url:  "{{url('/edit/')}}"+"/"+id,
        //         success: function(data){
        //         }
        //     })
        //     .done(function(data) {
        //         location.reload();
                
        //     });
     });
  
})
    </script>
</html>