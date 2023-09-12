<?php
require 'config.php';
include("session.php");

?>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>SRMS</title>
    <!-- Custom CSS -->
    <link href="assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="assets/libs/jquery-steps/steps.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link href="dist/css/style.min.css" rel="stylesheet">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="main">
                        <!-- Logo icon -->

                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="assets/images/srms.png" alt="homepage" class="light-logo" />
                            
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                            
                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
 
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                         
                                <a class="dropdown-item" href="Logout.php"><i class="ti-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
<?php include("Aside.php"); ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Edit Profile</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile Information</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
				<?php
				$query = "SELECT * FROM basic WHERE id='$s'";
    $query_run = mysqli_query($db, $query);
	 $q = mysqli_query($db, $query);

    if(mysqli_num_rows($query_run) >= 0)
    {
        $student = mysqli_fetch_array($query_run);
		$m =$student;
	}
	
	
	?>
				
				
				
                <div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-title">Profile Information</h4>
                        <h6 class="card-subtitle"></h6>
						<div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs mb-3" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down"><i class="bi-person"></i><b> Basic</b></span></a> </li>
                                
							</ul>
                            <!-- Tab panes -->
                            <div class="tab-content tabcontent-border">
   <div class="tab-pane active" id="home" role="tabpanel">
					<form id="basic" class="needs-validation" novalidate>
							<div id="errorbasic" class="alert alert-warning d-none"></div>
							<div class="card-header">
									<h4>Personal Information </h4>
							</div>
							
								  
								  
								  <div class="form-row">
	                      
									<div class="col-md-4 mb-3">
									  <label for="validationCustom01">Name *</label>
									  <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Name" value="<?php if(mysqli_num_rows($query_run) == 1){echo $student['name'];} else{ echo "";}?>" required>
									  <div class="valid-feedback">
										Looks good!
									  </div>
									</div>
									
									
								  </div>
                                  <div class="col-md-4 mb-3">
										  <label for="validationCustom02">Mobile Number *</label>
										  <input type="text" class="form-control" name="mobile" id="validationCustom02" value="<?php if(mysqli_num_rows($query_run) == 1){echo $student['mobile'];} else{ echo "";}?>"  placeholder="Enter Mobile Number"  required>
										  <div class="valid-feedback">
											Looks good!
										  </div>
											   <div class="invalid-feedback">
											  Please enter mobile number.
											</div>
										</div>
                                        <div class="col-md-4 mb-3">
										  <label for="validationCustom02">Person count *</label>
										  <input type="number" class="form-control" name="mobile" id="validationCustom02" value="<?php if(mysqli_num_rows($query_run) == 1){echo $student['mobile'];} else{ echo "";}?>"  placeholder="Enter Person count"  required>
										  <div class="valid-feedback">
											Looks good!
										  </div>
											   <div class="invalid-feedback">
											  Please enter Person count.
											</div>
										</div>
									
									
										
  
  
  
										<div class="col-md-3 mb-3">
										  <label for="validationCustom01">Department *</label>
										  <select class="select2 form-control custom-select" name="Department" id="inputState" required>
															<option value="">Select Department</option>
															<option value="Andra Pradesh">AIML </option>
															<option value="Arunachal Pradesh">AIDS </option>
															<option value="Assam">CIVIL</option>
															<option value="Bihar">CSBS</option>
															<option value="Chhattisgarh">CSE</option>
															<option value="Goa">EEE</option>
															<option value="Gujarat">ECE</option>
															<option value="Haryana">IT</option>
															<option value="Himachal Pradesh">MECHANICAL </option>
															<option value="Jammu and Kashmir">MBA  </option>
															<option value="Jharkhand">MCA</option>
															<option value="Karnataka">ADMISSION</option>
															 
														  </select>
										  <div class="valid-feedback">
											Looks good!
										  </div>
										  <div class="invalid-feedback">
										   Please choose Department.
										  </div>
										</div>
										
											<div class="col-md-3 mb-3">
										  <label for="validationCustom02">Staff *</label>
										  <select class="select2 form-control custom-select" name="Staff" id="inputDistrict" required>
											<option value="">-- select one -- </option>
										</select>
											  <div class="valid-feedback">
											Looks good!
										  </div>
											  <div class="invalid-feedback">
										   Please choose Staff.
										  </div>
										</div>
										
                                        
                                        <div class="col-md-4 mb-3">
										  <label for="validationCustom"> Reason *</label>
										  
                                          <textarea class="form-control"></textarea>
										  <div class="valid-feedback">
											Looks good!
										  </div>
											   <div class="invalid-feedback">
											  Please enter Reason .
											</div>
										</div>
									
                                        
                                </div>
                                
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
  
  
  
  

  
 
    


					
								
  
								
								
								
								
								
   

 <!-- Edit Student Modal -->




    
              
								  
  
  
        

		
<!-- Tabs content -->
						
						
						
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
			</div>
			</div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->

		   
		 <?php include "./footer.html" ?>


            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
      
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
 
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
	    <script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
		
		
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script>
 
        $(document).on('submit', '#saveStudent', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("save_student", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorbasic').removeClass('d-none');
                        $('#errorbasic').text(res.message);

                    }else if(res.status == 200){

                        $('#errorbasic').addClass('d-none');
                        $('#studentAddModal').modal('hide');
                        $('#saveStudent')[0].reset();

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);

                        $('#myTable').load(location.href + " #myTable");

                    }else if(res.status == 500) {
						$('#errorbasic').addClass('d-none');
                        $('#studentAddModal').modal('hide');
                        $('#saveStudent')[0].reset();
                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.editStudentBtn', function () {

            var student_id = $(this).val();
            
            $.ajax({
                type: "GET",
                url: "code.php?student_id=" + student_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if(res.status == 404) {

                        alert(res.message);
                    }else if(res.status == 200){
						
						$('#student_id').val(res.data.uid);

                       // $('#course2').val(res.data.course);
						//$('#degree2').val(res.data.Degree);
                        $('#event').val(res.data.event);
                        $('#pp').val(res.data.pp);
						
                        $('#level').val(res.data.level);
                        $('#org_det').val(res.data.org_det);
                        $('#date').val(res.data.date);
                        
						//$('#uploadFile').val(res.data.cert);

                        $('#studentEditModal').modal('show');
                    }

                }
            });

        });

        $(document).on('submit', '#updateStudent', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_student", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessageUpdate').removeClass('d-none');
                        $('#errorMessageUpdate').text(res.message);

                    }else if(res.status == 200){
                        
                        $('#errorMessageUpdate').addClass('d-none');

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                        
                        $('#studentEditModal').modal('hide');
                        $('#updateStudent')[0].reset();

                        $('#myTable').load(location.href + " #myTable");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.viewStudentBtn', function () {

            var student_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "code.php?student_id=" + student_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if(res.status == 404) {

                        alert(res.message);
                    }else if(res.status == 200){

                        $('#view_event').text(res.data.event);
                        $('#view_pp').text(res.data.pp);
                        $('#view_level').text(res.data.level);
						$('#view_orgname').text(res.data.org_det);
                        $('#view_date').text(res.data.date);
						
	

                        $('#studentViewModal').modal('show');
                    }
                }
            });
        });

$(document).on('click', '.btnimg', function () {

            var student_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "code.php?student_id=" + student_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if(res.status == 404) {

                        alert(res.message);
                    }else if(res.status == 200){


						$("#image").attr("src", res.data.cert);
                      
                        $('#studentViewModal2').modal('show');
                    }
                }
            });
        });









        $(document).on('click', '.deleteStudentBtn', function (e) {
            e.preventDefault();

            if(confirm('Are you sure you want to delete this data?'))
            {
                var student_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'delete_student': true,
                        'student_id': student_id
                    },
                    success: function (response) {

                        var res = jQuery.parseJSON(response);
                        if(res.status == 500) {

                            alert(res.message);
                        }else{
                            alertify.set('notifier','position', 'top-right');
                            alertify.success(res.message);

                            $('#myTable').load(location.href + " #myTable");
                        }
                    }
                });
            }
        });

       
        $(document).on('submit', '#saveStudent7', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("save_student7", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorbasic').removeClass('d-none');
                        $('#errorbasic').text(res.message);

                    }else if(res.status == 200){

                        $('#errorbasic').addClass('d-none');
                        $('#studentAddModal6').modal('hide');
                        $('#saveStudent7')[0].reset();

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);

                        $('#myTable7').load(location.href + " #myTable7");

                    }else if(res.status == 500) {
						$('#errorbasic').addClass('d-none');
                        $('#studentAddModal6').modal('hide');
                        $('#saveStudent7')[0].reset();
                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                    }
                }
            });

        });
        $(document).on('click', '.editStudentBtn7', function () {

var student_id = $(this).val();

$.ajax({
    type: "GET",
    url: "code.php?student_id7=" + student_id7,
    success: function (response) {

        var res = jQuery.parseJSON(response);
        if(res.status == 404) {

            alert(res.message);
        }else if(res.status == 200){
            
            $('#student_id7').val(res.data.uid);

           // $('#course2').val(res.data.course);
            //$('#degree2').val(res.data.Degree);
            $('#event').val(res.data.event);
            $('#pp').val(res.data.pp);
            
            $('#level').val(res.data.level);
            $('#org_det').val(res.data.org_det);
            $('#date').val(res.data.date);
            
            //$('#uploadFile').val(res.data.cert);

            $('#studentEditModal7').modal('show');
        }

    }
});

});
$(document).on('submit', '#updateStudent7', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_student7", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessageUpdate').removeClass('d-none');
                        $('#errorMessageUpdate').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessageUpdate').addClass('d-none');

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                        
                        $('#studentEditModal7').modal('hide');
                        $('#updateStudent7')[0].reset();

                        $('#myTable7').load(location.href + " #myTable7");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });
        $(document).on('click', '.deleteStudentBtn7', function (e) {
            e.preventDefault();

            if(confirm('Are you sure you want to delete this data?'))
            {
                var student_id3 = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'delete_family': true,
                        'student_id8': student_id8
                    },
                    success: function (response) {

                        var res = jQuery.parseJSON(response);
                        if(res.status == 500) {

                            alert(res.message);
                        }else{
                            alertify.set('notifier','position', 'top-right');
                            alertify.success(res.message);

                            $('#myTable7').load(location.href + " #myTable7");
                        }
                    }
                });
            }
        });
       

    </script>
		
		<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
    <script>
        // Basic Example with form
    var form = $("#example-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });

jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
    </script>
	
	<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<script>
var AndraPradesh = ["Anantapur","Chittoor","East Godavari","Guntur","Kadapa","Krishna","Kurnool","Prakasam","Nellore","Srikakulam","Visakhapatnam","Vizianagaram","West Godavari"];
var ArunachalPradesh = ["Anjaw","Changlang","Dibang Valley","East Kameng","East Siang","Kra Daadi","Kurung Kumey","Lohit","Longding","Lower Dibang Valley","Lower Subansiri","Namsai","Papum Pare","Siang","Tawang","Tirap","Upper Siang","Upper Subansiri","West Kameng","West Siang","Itanagar"];
var Assam = ["Baksa","Barpeta","Biswanath","Bongaigaon","Cachar","Charaideo","Chirang","Darrang","Dhemaji","Dhubri","Dibrugarh","Goalpara","Golaghat","Hailakandi","Hojai","Jorhat","Kamrup Metropolitan","Kamrup (Rural)","Karbi Anglong","Karimganj","Kokrajhar","Lakhimpur","Majuli","Morigaon","Nagaon","Nalbari","Dima Hasao","Sivasagar","Sonitpur","South Salmara Mankachar","Tinsukia","Udalguri","West Karbi Anglong"];
var Bihar = ["Araria","Arwal","Aurangabad","Banka","Begusarai","Bhagalpur","Bhojpur","Buxar","Darbhanga","East Champaran","Gaya","Gopalganj","Jamui","Jehanabad","Kaimur","Katihar","Khagaria","Kishanganj","Lakhisarai","Madhepura","Madhubani","Munger","Muzaffarpur","Nalanda","Nawada","Patna","Purnia","Rohtas","Saharsa","Samastipur","Saran","Sheikhpura","Sheohar","Sitamarhi","Siwan","Supaul","Vaishali","West Champaran"];
var Chhattisgarh = ["Balod","Baloda Bazar","Balrampur","Bastar","Bemetara","Bijapur","Bilaspur","Dantewada","Dhamtari","Durg","Gariaband","Janjgir Champa","Jashpur","Kabirdham","Kanker","Kondagaon","Korba","Koriya","Mahasamund","Mungeli","Narayanpur","Raigarh","Raipur","Rajnandgaon","Sukma","Surajpur","Surguja"];
var Goa = ["North Goa","South Goa"];
var Gujarat = ["Ahmedabad","Amreli","Anand","Aravalli","Banaskantha","Bharuch","Bhavnagar","Botad","Chhota Udaipur","Dahod","Dang","Devbhoomi Dwarka","Gandhinagar","Gir Somnath","Jamnagar","Junagadh","Kheda","Kutch","Mahisagar","Mehsana","Morbi","Narmada","Navsari","Panchmahal","Patan","Porbandar","Rajkot","Sabarkantha","Surat","Surendranagar","Tapi","Vadodara","Valsad"];
var Haryana = ["Ambala","Bhiwani","Charkhi Dadri","Faridabad","Fatehabad","Gurugram","Hisar","Jhajjar","Jind","Kaithal","Karnal","Kurukshetra","Mahendragarh","Mewat","Palwal","Panchkula","Panipat","Rewari","Rohtak","Sirsa","Sonipat","Yamunanagar"];
var HimachalPradesh = ["Bilaspur","Chamba","Hamirpur","Kangra","Kinnaur","Kullu","Lahaul Spiti","Mandi","Shimla","Sirmaur","Solan","Una"];
var JammuKashmir = ["Anantnag","Bandipora","Baramulla","Budgam","Doda","Ganderbal","Jammu","Kargil","Kathua","Kishtwar","Kulgam","Kupwara","Leh","Poonch","Pulwama","Rajouri","Ramban","Reasi","Samba","Shopian","Srinagar","Udhampur"];
var Jharkhand = ["Bokaro","Chatra","Deoghar","Dhanbad","Dumka","East Singhbhum","Garhwa","Giridih","Godda","Gumla","Hazaribagh","Jamtara","Khunti","Koderma","Latehar","Lohardaga","Pakur","Palamu","Ramgarh","Ranchi","Sahebganj","Seraikela Kharsawan","Simdega","West Singhbhum"];
var Karnataka = ["Bagalkot","Bangalore Rural","Bangalore Urban","Belgaum","Bellary","Bidar","Vijayapura","Chamarajanagar","Chikkaballapur","Chikkamagaluru","Chitradurga","Dakshina Kannada","Davanagere","Dharwad","Gadag","Gulbarga","Hassan","Haveri","Kodagu","Kolar","Koppal","Mandya","Mysore","Raichur","Ramanagara","Shimoga","Tumkur","Udupi","Uttara Kannada","Yadgir"];
var Kerala = ["Alappuzha","Ernakulam","Idukki","Kannur","Kasaragod","Kollam","Kottayam","Kozhikode","Malappuram","Palakkad","Pathanamthitta","Thiruvananthapuram","Thrissur","Wayanad"];
var MadhyaPradesh = ["Agar Malwa","Alirajpur","Anuppur","Ashoknagar","Balaghat","Barwani","Betul","Bhind","Bhopal","Burhanpur","Chhatarpur","Chhindwara","Damoh","Datia","Dewas","Dhar","Dindori","Guna","Gwalior","Harda","Hoshangabad","Indore","Jabalpur","Jhabua","Katni","Khandwa","Khargone","Mandla","Mandsaur","Morena","Narsinghpur","Neemuch","Panna","Raisen","Rajgarh","Ratlam","Rewa","Sagar","Satna",
"Sehore","Seoni","Shahdol","Shajapur","Sheopur","Shivpuri","Sidhi","Singrauli","Tikamgarh","Ujjain","Umaria","Vidisha"];
var Maharashtra = ["Ahmednagar","Akola","Amravati","Aurangabad","Beed","Bhandara","Buldhana","Chandrapur","Dhule","Gadchiroli","Gondia","Hingoli","Jalgaon","Jalna","Kolhapur","Latur","Mumbai City","Mumbai Suburban","Nagpur","Nanded","Nandurbar","Nashik","Osmanabad","Palghar","Parbhani","Pune","Raigad","Ratnagiri","Sangli","Satara","Sindhudurg","Solapur","Thane","Wardha","Washim","Yavatmal"];
var Manipur = ["Bishnupur","Chandel","Churachandpur","Imphal East","Imphal West","Jiribam","Kakching","Kamjong","Kangpokpi","Noney","Pherzawl","Senapati","Tamenglong","Tengnoupal","Thoubal","Ukhrul"];
var Meghalaya = ["East Garo Hills","East Jaintia Hills","East Khasi Hills","North Garo Hills","Ri Bhoi","South Garo Hills","South West Garo Hills","South West Khasi Hills","West Garo Hills","West Jaintia Hills","West Khasi Hills"];
var Mizoram = ["Aizawl","Champhai","Kolasib","Lawngtlai","Lunglei","Mamit","Saiha","Serchhip","Aizawl","Champhai","Kolasib","Lawngtlai","Lunglei","Mamit","Saiha","Serchhip"];
var Nagaland = ["Dimapur","Kiphire","Kohima","Longleng","Mokokchung","Mon","Peren","Phek","Tuensang","Wokha","Zunheboto"];
var Odisha = ["Angul","Balangir","Balasore","Bargarh","Bhadrak","Boudh","Cuttack","Debagarh","Dhenkanal","Gajapati","Ganjam","Jagatsinghpur","Jajpur","Jharsuguda","Kalahandi","Kandhamal","Kendrapara","Kendujhar","Khordha","Koraput","Malkangiri","Mayurbhanj","Nabarangpur","Nayagarh","Nuapada","Puri","Rayagada","Sambalpur","Subarnapur","Sundergarh"];
var Punjab = ["Amritsar","Barnala","Bathinda","Faridkot","Fatehgarh Sahib","Fazilka","Firozpur","Gurdaspur","Hoshiarpur","Jalandhar","Kapurthala","Ludhiana","Mansa","Moga","Mohali","Muktsar","Pathankot","Patiala","Rupnagar","Sangrur","Shaheed Bhagat Singh Nagar","Tarn Taran"];
var Rajasthan = ["Ajmer","Alwar","Banswara","Baran","Barmer","Bharatpur","Bhilwara","Bikaner","Bundi","Chittorgarh","Churu","Dausa","Dholpur","Dungarpur","Ganganagar","Hanumangarh","Jaipur","Jaisalmer","Jalore","Jhalawar","Jhunjhunu","Jodhpur","Karauli","Kota","Nagaur","Pali","Pratapgarh","Rajsamand","Sawai Madhopur","Sikar","Sirohi","Tonk","Udaipur"];
var Sikkim = ["East Sikkim","North Sikkim","South Sikkim","West Sikkim"];
var TamilNadu = ["Ariyalur","Chengalpattu","Chennai","Coimbatore","Cuddalore","Dharmapuri","Dindigul","Erode","Kallakurichi","Kancheepuram","Kanyakumari","Karur","Krishnagiri","Madurai","Mayiladuthurai","Nagapattinam","Namakkal","Nilgiris","Perambalur","Pudukkottai","Ramanathapuram","Ranipet","Salem","Sivagangai","Tenkasi","Thanjavur","Theni","Thoothukudi","Tiruchirappalli","Tirunelveli","Tirupathur","Tiruppur","Tiruvallur","Tiruvannamalai","Tiruvarur","Vellore","Viluppuram","Virudhunagar"];
var Telangana = ["Adilabad","Bhadradri Kothagudem","Hyderabad","Jagtial","Jangaon","Jayashankar","Jogulamba","Kamareddy","Karimnagar","Khammam","Komaram Bheem","Mahabubabad","Mahbubnagar","Mancherial","Medak","Medchal","Nagarkurnool","Nalgonda","Nirmal","Nizamabad","Peddapalli","Rajanna Sircilla","Ranga Reddy","Sangareddy","Siddipet","Suryapet","Vikarabad","Wanaparthy","Warangal Rural","Warangal Urban","Yadadri Bhuvanagiri"];
var Tripura = ["Dhalai","Gomati","Khowai","North Tripura","Sepahijala","South Tripura","Unakoti","West Tripura"];
var UttarPradesh = ["Agra","Aligarh","Allahabad","Ambedkar Nagar","Amethi","Amroha","Auraiya","Azamgarh","Baghpat","Bahraich","Ballia","Balrampur","Banda","Barabanki","Bareilly","Basti","Bhadohi","Bijnor","Budaun","Bulandshahr","Chandauli","Chitrakoot","Deoria","Etah","Etawah","Faizabad","Farrukhabad","Fatehpur","Firozabad","Gautam Buddha Nagar","Ghaziabad","Ghazipur","Gonda","Gorakhpur","Hamirpur","Hapur","Hardoi","Hathras","Jalaun","Jaunpur","Jhansi","Kannauj","Kanpur Dehat","Kanpur Nagar","Kasganj","Kaushambi","Kheri","Kushinagar","Lalitpur","Lucknow","Maharajganj","Mahoba","Mainpuri","Mathura","Mau","Meerut","Mirzapur","Moradabad","Muzaffarnagar","Pilibhit","Pratapgarh","Raebareli","Rampur","Saharanpur","Sambhal","Sant Kabir Nagar","Shahjahanpur","Shamli","Shravasti","Siddharthnagar","Sitapur","Sonbhadra","Sultanpur","Unnao","Varanasi"];
var Uttarakhand  = ["Almora","Bageshwar","Chamoli","Champawat","Dehradun","Haridwar","Nainital","Pauri","Pithoragarh","Rudraprayag","Tehri","Udham Singh Nagar","Uttarkashi"];
var WestBengal = ["Alipurduar","Bankura","Birbhum","Cooch Behar","Dakshin Dinajpur","Darjeeling","Hooghly","Howrah","Jalpaiguri","Jhargram","Kalimpong","Kolkata","Malda","Murshidabad","Nadia","North 24 Parganas","Paschim Bardhaman","Paschim Medinipur","Purba Bardhaman","Purba Medinipur","Purulia","South 24 Parganas","Uttar Dinajpur"];
var AndamanNicobar = ["Nicobar","North Middle Andaman","South Andaman"];
var Chandigarh = ["Chandigarh"];
var DadraHaveli = ["Dadra Nagar Haveli"];
var DamanDiu = ["Daman","Diu"];
var Delhi = ["Central Delhi","East Delhi","New Delhi","North Delhi","North East Delhi","North West Delhi","Shahdara","South Delhi","South East Delhi","South West Delhi","West Delhi"];
var Lakshadweep = ["Lakshadweep"];
var Puducherry = ["Karaikal","Mahe","Puducherry","Yanam"];


$("#inputState").change(function(){
  var StateSelected = $(this).val();
  var optionsList;
  var htmlString = "";

  switch (StateSelected) {
    case "Andra Pradesh":
        optionsList = AndraPradesh;
        break;
    case "Arunachal Pradesh":
        optionsList = ArunachalPradesh;
        break;
    case "Assam":
        optionsList = Assam;
        break;
    case "Bihar":
        optionsList = Bihar;
        break;
    case "Chhattisgarh":
        optionsList = Chhattisgarh;
        break;
    case "Goa":
        optionsList = Goa;
        break;
    case  "Gujarat":
        optionsList = Gujarat;
        break;
    case "Haryana":
        optionsList = Haryana;
        break;
    case "Himachal Pradesh":
        optionsList = HimachalPradesh;
        break;
    case "Jammu and Kashmir":
        optionsList = JammuKashmir;
        break;
    case "Jharkhand":
        optionsList = Jharkhand;
        break;
    case  "Karnataka":
        optionsList = Karnataka;
        break;
    case "Kerala":
        optionsList = Kerala;
        break;
    case  "Madya Pradesh":
        optionsList = MadhyaPradesh;
        break;
    case "Maharashtra":
        optionsList = Maharashtra;
        break;
    case  "Manipur":
        optionsList = Manipur;
        break;
    case "Meghalaya":
        optionsList = Meghalaya ;
        break;
    case  "Mizoram":
        optionsList = Mizoram;
        break;
    case "Nagaland":
        optionsList = Nagaland;
        break;
    case  "Orissa":
        optionsList = Orissa;
        break;
    case "Punjab":
        optionsList = Punjab;
        break;
    case  "Rajasthan":
        optionsList = Rajasthan;
        break;
    case "Sikkim":
        optionsList = Sikkim;
        break;
    case  "Tamil Nadu":
        optionsList = TamilNadu;
        break;
    case  "Telangana":
        optionsList = Telangana;
        break;
    case "Tripura":
        optionsList = Tripura ;
        break;
    case  "Uttaranchal":
        optionsList = Uttaranchal;
        break;
    case  "Uttar Pradesh":
        optionsList = UttarPradesh;
        break;
    case "West Bengal":
        optionsList = WestBengal;
        break;
    case  "Andaman and Nicobar Islands":
        optionsList = AndamanNicobar;
        break;
    case "Chandigarh":
        optionsList = Chandigarh;
        break;
    case  "Dadar and Nagar Haveli":
        optionsList = DadraHaveli;
        break;
    case "Daman and Diu":
        optionsList = DamanDiu;
        break;
    case  "Delhi":
        optionsList = Delhi;
        break;
    case "Lakshadeep":
        optionsList = Lakshadeep ;
        break;
    case  "Pondicherry":
        optionsList = Pondicherry;
        break;
}


  for(var i = 0; i < optionsList.length; i++){
    htmlString = htmlString+"<option value='"+ optionsList[i] +"'>"+ optionsList[i] +"</option>";
  }
  $("#inputDistrict").html(htmlString);

});

function fileValidation() {
            var fileInput =
                document.getElementById('validationCustomUsername');
             var fileSize = ((document.getElementById('validationCustomUsername').files[0].size)/1024);
            var filePath = fileInput.value;
         
            // Allowing file type
            var allowedExtensions =
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i;
             
            if (!allowedExtensions.exec(filePath)) {
				swal("OOPS!", "Only Image Files are allowed!", "error");
                fileInput.value = '';
                return false;
			}
			else
			{
				if (fileSize>2000) {
                swal("OOPS!", "File size should be less than 2MB!", "error");
                fileInput.value = '';
                return false;
			}
			}				
			
        }

function fileValidation2() {
            var fileInput =
                document.getElementById('uploadFile');
             var fileSize = ((document.getElementById('uploadFile').files[0].size)/1024);
            var filePath = fileInput.value;
         document.getElementById("tutorial").innerHTML= " ";
            // Allowing file type
            var allowedExtensions =
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i;
             
            if (!allowedExtensions.exec(filePath)) {
				var msg="Only Image Files are allowed!";
                fileInput.value = '';
				document.getElementById("tutorial").innerHTML= msg;
			}
			else
			{
				if (fileSize>2000) {
                var msg="File size should be less than 2MB!";
                fileInput.value = '';
				document.getElementById("tutorial").innerHTML= msg;
			}
			}	

			
			
        }

</script>
<script>
var UG = ["BE","B.Tech","B.Arch","B.S","B.A","B.Sc","BBA","BCA","B.Com","B.Com(CA)","BBM"];
var PG = ["ME","M.Tech","M.Arch","M.S","M.A","M.Sc","MBA","MCA","M.Com","M.Phil"];
var ITI = ["ITI"];
var DIPLOMA = ["Diploma"];
var SSLC = ["SSLC"];
var HSC = ["HSC"];
var PHD = ["PHD"];
var PDF = ["PDF"];

$("#course").change(function(){
  var StateSelected = $(this).val();
  var optionsList;
  var htmlString = "";

  switch (StateSelected) {
    case "SSLC":
        optionsList = SSLC;
        break;
    case "HSC":
        optionsList = HSC;
        break;
    case "ITI":
        optionsList = ITI;
        break;
    case "DIPLOMA":
        optionsList = DIPLOMA;
        break;
    case "UG":
        optionsList = UG;
        break;
    case "PG":
        optionsList = PG;
        break;
    case  "PHD":
        optionsList = PHD;
        break;
    case "PDF":
        optionsList = PDF;
        break; 
}


  for(var i = 0; i < optionsList.length; i++){
    htmlString = htmlString+"<option value='"+ optionsList[i] +"'>"+ optionsList[i] +"</option>";
  }
  $("#degree").html(htmlString);

});
</script>

<script>
var UG = ["BE","B.Tech","B.Arch","B.S","B.A","B.Sc","BBA","BCA","B.Com","B.Com(CA)","BBM"];
var PG = ["ME","M.Tech","M.Arch","M.S","M.A","M.Sc","MBA","MCA","M.Com","M.Phil"];
var ITI = ["ITI"];
var DIPLOMA = ["Diploma"];
var SSLC = ["SSLC"];
var HSC = ["HSC"];
var PHD = ["PHD"];
var PDF = ["PDF"];

$("#course2").change(function(){
  var StateSelected = $(this).val();
  var optionsList;
  var htmlString = "";

  switch (StateSelected) {
    case "SSLC":
        optionsList = SSLC;
        break;
    case "HSC":
        optionsList = HSC;
        break;
    case "ITI":
        optionsList = ITI;
        break;
    case "DIPLOMA":
        optionsList = DIPLOMA;
        break;
    case "UG":
        optionsList = UG;
        break;
    case "PG":
        optionsList = PG;
        break;
    case  "PHD":
        optionsList = PHD;
        break;
    case "PDF":
        optionsList = PDF;
        break; 
}


  for(var i = 0; i < optionsList.length; i++){
    htmlString = htmlString+"<option value='"+ optionsList[i] +"'>"+ optionsList[i] +"</option>";
  }
  $("#degree2").html(htmlString);

});
</script>

<script>

        $(document).on('submit', '#basic', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_basic", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorbasic').removeClass('d-none');
                        $('#errorbasic').text(res.message);

                    }else if(res.status == 200){

                        $('#errorbasic').addClass('d-none');

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                        
                       

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });
		


$(document).on('submit', '#medical', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_medical", true);
			
			console.log(formData);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessageUpdate2').removeClass('d-none');
                        $('#errorMessageUpdate2').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessageUpdate2').addClass('d-none');

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                        
                       

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });


$(document).on('submit', '#nominee', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_nominee", true);
			
			console.log(formData);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errornominee').removeClass('d-none');
                        $('#errornominee').text(res.message);

                    }else if(res.status == 200){

                        $('#errornominee').addClass('d-none');

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                        
                       

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

		
$(document).on('submit', '#familyadd2', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("save_family", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessage').addClass('d-none');
                        $('#familyadd').modal('hide');
                        $('#familyadd2')[0].reset();

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);

                        $('#myTable1').load(location.href + " #myTable1");
						$('#nominee').load(location.href + " #nominee");

                    }else if(res.status == 500) {
						$('#errorMessage').addClass('d-none');
                        $('#familyadd').modal('hide');
                        $('#familyadd2')[0].reset();
                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                    }
                }
            });

        });	
		
	
$(document).on('click', '.editfamilyBtn', function () {

            var student_id2 = $(this).val();
            
            $.ajax({
                type: "GET",
                url: "code.php?student_id2=" + student_id2,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if(res.status == 404) {

                        alert(res.message);
                    }else if(res.status == 200){
						
						$('#student_id2').val(res.data.uid);

                        $('#name2').val(res.data.name);
                        $('#gender').val(res.data.gender);
						
                        $('#relationship').val(res.data.relationship);
                        $('#mobile').val(res.data.mobile);
                        

                        $('#studentEditModal2').modal('show');
                    }

                }
            });

        });

        $(document).on('submit', '#updatefamily', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_family", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessageUpdate').removeClass('d-none');
                        $('#errorMessageUpdate').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessageUpdate').addClass('d-none');

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                        
                        $('#studentEditModal2').modal('hide');
                        $('#updatefamily')[0].reset();

                        $('#myTable1').load(location.href + " #myTable1");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });


        $(document).on('click', '.deletefamilyBtn', function (e) {
            e.preventDefault();

            if(confirm('Are you sure you want to delete this data?'))
            {
                var student_id3 = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'delete_family': true,
                        'student_id3': student_id3
                    },
                    success: function (response) {

                        var res = jQuery.parseJSON(response);
                        if(res.status == 500) {

                            alert(res.message);
                        }else{
                            alertify.set('notifier','position', 'top-right');
                            alertify.success(res.message);

                            $('#myTable1').load(location.href + " #myTable1");
							$('#nominee').load(location.href + " #nominee");
                        }
                    }
                });
            }
        });


	
		
</script>


</body>

</html>