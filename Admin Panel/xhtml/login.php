<?php
session_start();

if(isset($_SESSION['userid'])){
	header("location:index.php");
}else{





?>


<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>TSS - Login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon.png">
    <link href="./assets/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="auth/signin.php" method="POST">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>User Name</strong></label>
                                            <input name="user_name" type="name" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input name="password" type="password" class="form-control" >
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               <div class="custom-control custom-checkbox ml-1">
													<input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
													<label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
												</div>
                                            </div>
                                            
                                        </div>
                                        <div class="text-center">
                                            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Sign in">
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./assets/vendor/global/global.min.js"></script>
	<script src="./assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./assets/js/custom.min.js"></script>
    <script src="./assets/js/deznav-init.js"></script>

</body>

</html>
<?php

                }
?>
