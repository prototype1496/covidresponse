
<!DOCTYPE html>
<html lang="en" class="body-full-height" >
    <head>        
        


        <!-- META SECTION -->
        <title>Login</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="img/x-icon-logo.png" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/vims-theme.css"/>
        <link rel="stylesheet" type="text/css"  href="css/full_html.css"/>
        <link rel="stylesheet" type="text/css"  href="css/custom_buttons.css"/>

        <!-- EOF CSS INCLUDE v-->                                    
    </head>
    <body >

        <div class="login-container">

            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Welcome</strong>, Please Login</div>
                    <form action="controller/Login.php" name="f"  class="form-horizontal" method="post" onSubmit='return call()'>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Username" name="username"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="password" class="form-control" placeholder="Password" name="password"/>
                            </div>
                        </div>
                        <div class="form-group">
                           

                        </div>

                        <div class="form-group">
                            
                            
                            <div class="col-md-4">
                               
                                <button type="submit" class="btn btn-facebook btn-block">Log In</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="login-footer">
				
				  <?php 
				  // set timezone 
				  date_default_timezone_set('Africa/Lusaka');

					// Then call the date functions
					$year = date('Y');
					
					?>
					
                    <div class="pull-left">
                        &copy; <?php echo $year;  ?> HSRM
                    </div>
					
                    <div class="pull-right">
                        
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>
                    </div>
                </div>
            </div>

        </div>

    </body>
	
	<script >
		function call(){
				if(document.f.bid.value===""){
					alert("Please Enter Ur Name");
					return false;
				}
				if(document.f.pwd.value===""){
					alert("Please Enter Ur Password");
					return false;
				}
				if((document.f.bid.value==="")||(document.f.pwd.value==="")){
					alert("Please Enter Username& password");
					return false;
				}
			}
	</script>

</html>






