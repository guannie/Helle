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
                                  <form style="width:50%; margin-left: auto; margin-right: auto;" method="POST" action="{{URL::route('patientInfo_create_process')}}" enctype="multipart/form-data" novalidate><!--xde validation-->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
                                    <!-- <div class="form-group @if($errors->has('patientID"')) has-error @endif">
                                        <label for="patientID">Patient ID</label>
                                        <input type="text" class="form-control" id="patientID" name="patientID" placeholder="PatientID"> @if($errors->has('patientID')) <p class="help-block">{{ $errors->first('patientID') }}</p> @endif
                                    </div> -->

                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" laceholder="Name"> @if($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="age">Age</label>
                                        <input type="text" class="form-control" id="age" name="age" placeholder="Age"> @if($errors->has('age')) <p class="help-block">{{ $errors->first('age') }}</p> @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Gender</label>
                                        <input type="text" class="form-control" id="gender" name="gender" placeholder="Gender"> @if($errors->has('gender')) <p class="help-block">{{ $errors->first('gender') }}</p> @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Days in Hospital</label>
                                        <input type="text" class="form-control" id="days" name="days" placeholder="Days in Hospital"> @if($errors->has('days')) <p class="help-block">{{ $errors->first('days') }}</p> @endif
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
                                                <br>
                                                <div class="content table-responsive table-full-width">
                                                    <table class="table table-hover"> <!-- table-striped -->

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


                       <div id="initialEvaluation" class="tab-pane fade in active">
                                                <div class="content table-responsive table-full-width">
                                                <table class="table table-hover">
                                                <thead>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><b>Reason For Admission/Presentation:</td>
                                                    <td>
                                                        <div>
                                                            <input type="checkbox" name="reason1" value="Dyspnea"> Dyspnea
                                                        </div>
                                                        <div>
                                                            <input type="checkbox" name="reason2" value="Peripheral Oedema"> Peripheral Oedema
                                                        </div>
                                                        <div>
                                                            <input type="checkbox" name="reason3" value="Ascites"> Ascites
                                                        </div>
                                                        <div>
                                                            <input type="checkbox" name="reason4" value="Lung Crepitation"> Lung Crepitation
                                                        </div>
                                                        <div>
                                                            <input type="checkbox" name="reason5" value="Elevated JVP"> Elevated JVP
                                                        </div>
                                                        <div>
                                                            <input type="checkbox" name="reason6" value="Hepatomegaly"> Hepatomegaly
                                                        </div>
                                                        <div>
                                                            <input type="checkbox" name="reason7" value="Hypotension"> Hypotension
                                                        </div>
                                                        <div>
                                                            <input type="checkbox" name="reason8" value="Poor Peripheral Perfusion"> Poor Peripheral Perfusion
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><b>Evidence of AHF on 1st CXR</td>
                                                    <td>
                                                        <div>
                                                            <input type="checkbox" name="reason1" value="Not Done"> Not Done
                                                        </div>
                                                        <div>
                                                            <input type="checkbox" name="reason2" value="Cardomegaly"> Cardomegaly
                                                        </div>
                                                        <div>
                                                            <input type="checkbox" name="reason3" value="Pleural effusion"> Pleural effusion 
                                                        </div>
                                                        <div>
                                                            <input type="checkbox" name="reason4" value="Congestion"> Congestion
                                                        </div>
                                                        <div>
                                                            <input type="checkbox" name="reason5" value="Ill-define opacity"> Ill-define opacity
                                                        </div>
                                                        <div>
                                                            <input type="checkbox" name="reason6" value="APO"> APO
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><b>Vital Sign:</td>
                                                    <td>
                                                        <div><b>Admission:</b></div><br>
                                                        <div>
                                                            Wt <input type="text" name="Wt" style="width:30%;"> 
                                                        </div>
                                                        <div>
                                                            Ht <input type="text" name="Ht" style="width:30%;"> 
                                                        </div>
                                                        <div>
                                                            BP <input type="text" name="Blood Pressure" style="width:30%;"> / <input type="text" name="Blood Pressure" style="width:30%;">
                                                        </div>
                                                        <div>
                                                            HR <input type="text" name="Heart Rate" style="width:30%;"> 
                                                        </div>
                                                        <div>
                                                            RR <input type="text" name="Respiratory Rate" style="width:30%;"> 
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <br><div><b>Disposition:</b><br><br></div>
                                                        <div>
                                                            Wt <input type="text" name="Wt" style="width:30%;"> 
                                                        </div>
                                                        <div>
                                                            Ht <input type="text" name="Ht" style="width:30%;"> 
                                                        </div>
                                                        <div>
                                                            BP <input type="text" name="Blood Pressure" style="width:30%;"> / <input type="text" name="Blood Pressure" style="width:30%;">
                                                        </div>
                                                        <div>
                                                            HR <input type="text" name="Heart Rate" style="width:30%;"> 
                                                        </div>
                                                        <div>
                                                            RR <input type="text" name="Respiratory Rate" style="width:30%;"> 
                                                        </div>
                                                        <div>
                                                            <input type="checkbox" name="reason1" value="pd"> N/A (patient died)
                                                        </div>
                                                    </td>

                                                </tr>

                                                <tr>
                                                    
                                                    <td>
                                                    <div>
                                                    <b>First ECG:</b>
                                                    <input type="checkbox" name="reason1" value="Not Done"> Not Done
                                                    </div><br>
                                                      <div class="dropdown"">
                                                            a) Rhytm    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="width: 50%"> Yes
                                                            <span class="caret"></span></button>
                                                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                                              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">No</a></li>
                                                            </ul>
                                                        </div><br>

                                                        <div>
                                                            b) Evidence of incchemia/infraction:
                                                        </div>
                                                        <div>
                                                           <input type="checkbox" name="reason1" value="No Evidence"> No Evidence 
                                                        </div>
                                                        <div>
                                                           <input type="checkbox" name="reason1" value="q wave">Q wave 
                                                        </div>
                                                        <div>
                                                           <input type="checkbox" name="reason1" value="ssd"> ST Segment Depression 
                                                        </div>
                                                        <div>
                                                           <input type="checkbox" name="reason1" value="sse"> ST Segment Elevation 
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <b><td>Laboratory result</td>
                                                    <td>Initial</td>
                                                    <td>Final</td></b>
                                                </tr>

                                                <tr>
                                                    <td>
                                                    <div>Urea (mmol/L):</div><br>
                                                    <div>Sodium (mmol/L):</div><br>
                                                    <div>Potasium (mmol/L):</div><br>
                                                    <div>Creatinine (umol/L):</div><br>
                                                    <div>Uric Acid (umol/L):</div><br>
                                                    <div>RBS (mmol/L):</div><br>
                                                    <div>Bilirubin(umol/L):</div><br>
                                                    <div>Albumin (g/L):</div><br>
                                                    <div>CK (u/L):</div><br>
                                                    <div>NT Pro BNP (pg/mL):</div><br>
                                                    <div>Hgb (g/dL):</div><br>
                                                    <div>Troponin T (ug/L):</div><br><br>
                                                    
                                                    
                                                    </td>

                                                    <td>
                                                    <!-- <div>Initial</div> -->
                                                    <br>
                                                    <div><input type="text" name="Blood Pressure" style="width:30%;height:3%"></div><br>
                                                    <div><input type="text" name="Blood Pressure" style="width:30%;height:3%"></div><br>
                                                    <div><input type="text" name="Blood Pressure" style="width:30%;height:3%"></div><br>
                                                    <div><input type="text" name="Blood Pressure" style="width:30%;height:3%"></div><br>
                                                    <div><input type="text" name="Blood Pressure" style="width:30%;height:3%"></div><br>
                                                    <div><input type="text" name="Blood Pressure" style="width:30%;height:3%"></div><br>
                                                    <div><input type="text" name="Blood Pressure" style="width:30%;height:3%"></div><br>
                                                    <div><input type="text" name="Blood Pressure" style="width:30%;height:3%"></div><br>
                                                    <div><input type="text" name="Blood Pressure" style="width:30%;height:3%"></div><br>
                                                    <div><input type="text" name="Blood Pressure" style="width:30%;height:3%"></div><br>
                                                    <div><input type="text" name="Blood Pressure" style="width:30%;height:3%"></div><br>
                                                    <div><input type="text" name="Blood Pressure" style="width:30%;height:3%"></div><br><br>
                                                    

                                                    </td>


                                                    <td><!-- <div><br>Final</div> --><br><br>
                                                    <div><input type="text" name="Blood Pressure" style="width:30%;height:3%"></div><br>
                                                    <div><input type="text" name="Blood Pressure" style="width:30%;height:3%"></div>
                                                    </td>  
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div> Echo this admission</div>
                                                    </td>
                                                    <td>
                                                        <div>LEVF <input type="text" name="Blood Pressure" style="width:30%;"> %</div>
                                                    </td>
                                                    <td>
                                                        <div> <input type="checkbox" name="reason1" value="Not Done"> Not Done</div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div>
                                                            Is Patient in Clinical Trial?
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="checkbox" name="reason1" value="Not Done"> Yes, Specify
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="text" name="Blood Pressure" style="width:150%;">
                                                        </div>
                                                    </td>
                                                    
                                                </tr>

                                                </tbody>
                                                </table></div>

                                            </div>



                     <div id="hospitalCourse" class="tab-pane fade in active">
                                                <table class="table table-hover">
                <tr>
                  <th>Procedure performed during this Hospitalization</th>
                  
                  <td>
                      <div>
                          <input type="checkbox"> Dialysis
                      </div>
                      <div>
                          <input type="checkbox"> Mechanical Vertalization
                      </div>
                    <div>
                      <input type="checkbox"> Cardiac catheterization
                     </div>
                  <div>
                      <input type="checkbox">Defibrillation
                  </div>

                  <div>
                      <input type="checkbox">
                      Cardiopulmonary resuscitation
                  </div>
               
                    <div>
                      <input type="checkbox">
                      VAD
                  </div>
                    <div>
                      <input type="checkbox">
                      Device
                  </div>
                  <div>
                      <input type="checkbox">
                      PPM
                  </div> 
                    <div>
                      <input type="checkbox">
                      AICD
                  </div>
                  <div>
                  <input type="checkbox">
                      CRTD
                  </div> 
                    <div>
                      <input type="checkbox">
                      CRTP
                  </div> 
                    <div>
                      <input type="checkbox">
                      Watchmen
                  </div> 
                    <div>
                      <input type="checkbox">
                      Coronary Angiography
                  </div>
                    <div>
                      <input type="checkbox">
                      PCI
                  </div>
                    <div>
                      <input type="checkbox">
                      IABP
                  </div>
                    <div>
                      <input type="checkbox">
                      MRI/MSCT/TechScan
                  </div>
                    <div>
                      <input type="checkbox">
                      Peritoneal Tapping
                  </div>
                    <div>
                      <input type="checkbox">
                      Other procedure
                  </div>
                  </td>
                </tr>

                <tr>
                  <th>Patient Counseling</th>
                  <td>
                  <div>
                      <input type="checkbox"> Yes,pls specify*
                  </div>
                  <div>
                      <input type="checkbox">
                      Activity Level
                  </div>
                    <div>
                      <input type="checkbox">
                      Weight Monitoring
                  </div>
                  <div>
                      <input type="checkbox">
                      Follow up apointment
                  </div>
                    <div>
                      <input type="checkbox">
                      Discharge Medications
                  </div>
                    <div>
                      <input type="checkbox">
                      Diet/fluid intake
                  </div>
                    <div>
                      <input type="checkbox">
                      What to do if symptom worsen
                  </div>
                    <div>
                      <input type="checkbox">
                      Smoking Councelling
                  </div>
                    <div>
                </tr>


                <tr>
                  <th>Please Specify</th>
                  <td>
                    <div class="form-group">
                 
                  <select class="form-control">
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                  </select>
                </div>
                  </td>
                </tr>



              </table>
                                            </div>



                                            <div id="medication" class="tab-pane fade in active">
                                                                                                <br>
                                                <div class="content table-responsive table-full-width">
                                                    <table class="table table-hover">

                                                    <thead>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </thead>

                                                    <tbody>

                                                        <tr>   
                                                            <td></td>
                                                            <td>
                                                                <div>
                                                                    Chronic
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    Presc DC
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                        </tr>

                                                        <tr>   
                                                            <td>Loop Diuretic</td>
                                                            <td>
                                                            <div></div>
                                                                <div>
                                                                    <label><input type="checkbox">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <label><input type="checkbox">
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                        </tr>

                                                        <tr>   
                                                            <td>Thia Zide</td>
                                                            <td>
                                                                <div>
                                                                    <label><input type="checkbox">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <label><input type="checkbox">
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                        </tr>

                                                        <tr>   
                                                            <td>Aldosterone Receptor</td>
                                                            <td>
                                                                <div>
                                                                    <label><input type="checkbox">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <label><input type="checkbox">
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                        </tr>

                                                        <tr>   
                                                            <td>Antagonist</td>
                                                            <td>
                                                                <div>
                                                                    <input type="text" value="If No, Please State Reason :">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="dropdown">
                                                                                <button class="btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                                                                <span class="caret"></span></button>
                                                                                <ul class="dropdown-menu">
                                                                                 <li><a href="#">Hypertension</a></li>
                                                                                 <li><a href="#">Renal</a></li>
                                                                                 <li><a href="#">Inpairment</a></li>
                                                                                 <li><a href="#">Others</a></li>
                                                                                 </ul>
                                                                     </div>                                                               
                                                             </div>
                                                            </td>
                                                            <td></td>
                                                        </tr>

                                                        <tr>   
                                                            <td>ACE Inhibitor</td>
                                                            <td>
                                                                <div>
                                                                    <label><input type="checkbox">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <label><input type="checkbox">
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            
                                                <table class="table table-hover">

                                                    <thead>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </thead>

                                                    <tbody>
                                                        <tr>   
                                                            <td></td>
                                                            <td></td>  
                                                            <td></td>
                                                        </tr>

                                                        <tr>
                                                                <td><div>
                                                                        <label><input type="checkbox">&nbsp; Diuretic</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                 Date start   
                                                                </td>
                                                                <td>
                                                                     <div>
                                                                      <input type="text" style="width:25%;">
                                                                    </div>
                                                                </td>
                                                        </tr>

                                                         <tr>
                                                                <td><div>
                                                                        <label><input type="checkbox">&nbsp; Domutamine</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                 Total dose  
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                      <input type="text" style="width:25%;">  ml
                                                                    </div>
                                                                </td>
                                                        </tr>

                                                         <tr>
                                                                <td><div>
                                                                        <label><input type="checkbox">&nbsp; Adrenaline</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                 Duration of Treatment   
                                                                </td>
                                                                <td>
                                                                     <div>
                                                                      <input type="text" style="width:25%;">  days
                                                                    </div>
                                                                </td>
                                                        </tr>

                                                         <tr>
                                                                <td><div>
                                                                        <label><input type="checkbox">&nbsp; Domutamine</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                 Max Dose   
                                                                </td>
                                                                <td>
                                                                     <div>
                                                                      <input type="text" style="width:25%;">  ml
                                                                    </div>
                                                                </td>
                                                        </tr>

                                                         <tr>
                                                                <td><div>
                                                                        <label><input type="checkbox">&nbsp; Nitropusside</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                 Date start   
                                                                </td>
                                                                <td>
                                                                     <div>
                                                                      <input type="text" style="width:25%;">
                                                                    </div>
                                                                </td>
                                                        </tr>

                                                         <tr>
                                                                <td><div>
                                                                        <label><input type="checkbox">&nbsp; Mirinone</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                 Duration of treatment   
                                                                </td>
                                                                <td>
                                                                     <div>
                                                                      <input type="text" style="width:25%;">  days
                                                                    </div>
                                                                </td>
                                                        </tr>
                                                </table>


                                                

                                                </div>
                                            </div>
                                                                                        </div>
                                        </div>
                                        <button type="submit" class="btn btn-default" >Submit</button>
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