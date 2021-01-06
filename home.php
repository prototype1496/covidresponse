<?php


include 'db_connection/dbconfig.php';
include 'model/SuperModel.php';

$get_all_provines_stm  = SuperModel:: get_all_provinces();
$get_all_provines_stm2  = SuperModel:: get_all_provinces();
$get_all_provines_stm3  = SuperModel:: get_all_provinces();
$get_all_provines_stm4  = SuperModel:: get_all_provinces();


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/nav.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600&amp;subset=latin-ext" rel="stylesheet">

        <!-- CSS -->
        <link href="assets/css/main.css" rel="stylesheet">

        <!-- JS -->
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        
        <!-- Latest compiled and minified CSS -->

<link href="css/bostrap.css" rel="stylesheet" type="text/css"/>
<script src="js/boostrapjs.js" type="text/javascript"></script>
<link href="css/footer.css" rel="stylesheet" type="text/css"/>
<link href="css/modelcss.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       
        
        
        
        <div class="site" id="page">
            
            <div id="responseModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h6 class="modal-title">COVID-19 RESPONSE</h6>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
          <div id="response" >
              <div class="container-fluid">
	<div class="row">
            
            
		<div class="col-md-12">
                    <br>
                    <hr><br>
                    <div class="col-md-6">
                        <div class="form-group">
                              <select id="selected_province_id_t" class="form-control" name="selected_province_id" onchange="get_districts_t()">
                                        <option value="" disabled="disabled" selected="selected">Please Select Province</option>

                                        <?php
                                                    while ($row = $get_all_provines_stm2->fetch(PDO::FETCH_ASSOC)) {
                                                       // print_r($row);
                                                    ?> 

                                            <option value = "<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option>


                                                    <?php } ?>
                                                                                            
                                                        </select>
                            
                        </div>
                  
                    </div>
                   
                    <div class="col-md-6">
                        <div class="form-group">
                            
                             <div id="districts_by_provincId_t" class="col-sm-6">
                                    
                             </div>
                        </div>
                   
                    </div>
                   
                    <div class="col-md-12"> <hr><br></div>
                 
                    <div id="responses"></div>
                   
				
				
			 
                   
		
		</div>
	</div>
</div>
              
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
            
            
            
            
            
            <div id="compareModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h6 class="modal-title">COVID-19 RESPONSE</h6>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
          <div id="response" >
              <div class="container-fluid">
	<div class="row">
            
            
		<div class="col-md-12">
                    <br>
                    <hr><br>
                    <div class="col-md-3">
                        <div class="form-group">
                              <select id="selected_province_id_three" class="form-control" name="selected_province_id" onchange="get_districts_three(),get_province_responses_one()">
                                        <option value="" disabled="disabled" selected="selected">Please Select Province</option>

                                        <?php
                                                    while ($row = $get_all_provines_stm3->fetch(PDO::FETCH_ASSOC)) {
                                                       // print_r($row);
                                                    ?> 

                                            <option value = "<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option>


                                                    <?php } ?>
                                                                                            
                                                        </select>
                            
                        </div>
                  
                    </div>
                   
                    <div class="col-md-3">
                        <div class="form-group">
                            
                             <div id="districts_by_provincId_three" class="col-sm-6">
                                    
                             </div>
                        </div>
                   
                    </div>
                    
                    
                    
                    <div class="col-md-3">
                        <div class="form-group">
                              <select id="selected_province_id_four" class="form-control" name="selected_province_id" onchange="get_districts_four(),get_province_responses_two()">
                                        <option value="" disabled="disabled" selected="selected">Please Select Province</option>

                                        <?php
                                                    while ($row = $get_all_provines_stm4->fetch(PDO::FETCH_ASSOC)) {
                                                       // print_r($row);
                                                    ?> 

                                            <option value = "<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option>


                                                    <?php } ?>
                                                                                            
                                                        </select>
                            
                        </div>
                  
                    </div>
                   
                    <div class="col-md-3">
                        <div class="form-group">
                            
                             <div id="districts_by_provincId_four" class="col-sm-6">
                                    
                             </div>
                        </div>
                   
                    </div>
                   
                    <div class="col-md-12"> <hr><br></div>
                 
                    <div class="col-md-6">
                    <div id="responses_one"></div>
                    </div>
                   
                    
                    <div class="col-md-6">
                    <div id="responses_two"></div>
                    </div>
				
				
			 
                   
		
		</div>
	</div>
</div>
              
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
            
            
            
            
            
            
            
            
            
            
            
            
            
             <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h6 class="modal-title">COVID-19 RESPONSE</h6>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
          <div id="response" >
              <div class="container-fluid">
	<div class="row">
            
            <form style="margin-left: 30%; border-style: outset; padding: 20px;" method="post" action="controller/super/ActionPerformed.php">
		<div class="col-md-12">
                    <div class="col-md-6">
                        <div class="form-group">
                              <select id="selected_province_id" class="form-control" name="selected_province_id" onchange="get_districts()">
                                        <option value="" disabled="disabled" selected="selected">Please Select Province</option>

                                        <?php
                                                    while ($row = $get_all_provines_stm->fetch(PDO::FETCH_ASSOC)) {
                                                       // print_r($row);
                                                    ?> 

                                            <option value = "<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option>


                                                    <?php } ?>
                                                                                            
                                                        </select>
                            
                        </div>
                  
                    </div>
                   
                    <div class="col-md-6">
                        <div class="form-group">
                            
                             <div id="districts_by_provincId" class="col-sm-6">
                                    
                             </div>
                        </div>
                   
                    </div>
                    
                    <div class="col-md-12"></div>
                 
                       
                   <div class="form-group">
					 
					<label for="name">
						Citizen Name
					</label>
                                    <input placeholder="Citizen Name" name="name" type="text" class="form-control" id="name" />
				</div>
              
                    
                    
               
                       
                   <div class="form-group">
					 
					<label for="name">
						Contact No
					</label>
                                    <input placeholder="Contact No" name="contactno" type="text" class="form-control" id="contactno" />
				</div>
                  
                    
                    
				
                    
                    
                            <div class="form-group">
					 
					<label for="Address">
						Address
					</label>
                                <textarea id="address" rows="4" name="address" class="form-control no-resize" placeholder="Adress"></textarea>
				</div>
                            
                            <div class="form-group">
					 
					<label for="Comment">
						Comment
					</label>
                                
                                
                                <textarea id="parmary_address" name="comments" rows="4" class="form-control no-resize" placeholder="Comments"></textarea>
				</div>
				
				
			 
                    <button name="btn_add_response" type="submit" class="btn btn-success">
					Submit
                    </button>
			</form>
		</div>
	</div>
</div>
              
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
            
            
            <div id="addUserModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h6 class="modal-title">Add User</h6>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
          <div id="response" >
              <div class="container-fluid">
	<div class="row">
            
            <form style="margin-top:10%; margin-left: 23%; border-style: outset; padding: 20px;" method="post" action="controller/super/ActionPerformed.php">
		<div class="col-md-12">
                    
                   
                    
                    
                  <div class="col-md-4">   
                  <div class="form-group">
					 
					<label for="name">
						Names
					</label>
                                    <input required="" placeholder="Name" name="name" type="text" class="form-control" id="name" />
				</div>
                      </div>
                       
                      
                       <div class="col-md-4">   
                   <div class="form-group">
					 
					<label for="username">
						Username
					</label>
                                    <input  required="" placeholder="Username" name="username" type="text" class="form-control" id="username" />
				</div>
              </div>
                    
                    
               
                      <div class="col-md-4">     
                   <div class="form-group">
					 
					<label for="name">
						Password
					</label>
                                    <input required="" placeholder="Password" name="password" type="password" class="form-control" id="password" />
				</div>
                  
                    
                    </div>
				
                    
                    
                            
                            
                            
				
				
			 
                    <button name="btn_add_user" type="submit" class="btn btn-success">
					Add User
                    </button>
			</form>
		</div>
	</div>
</div>
              
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
            
            
            
            <a class="skip-link sr-only" href="#main">Skip to content</a>

            <!-- Options headline effects: .rotate | .slide | .zoom | .push | .clip -->
           
                <div class="wrapper">
         <header>
            <nav>
                <section class="hero-section hero-section--image clearfix clip">
                <div class="hero-section__wrap">
               <div class="menu-icon">
                  <i class="fa fa-bars fa-2x"></i>
               </div>
              
                    <div class="menu" style="z-index: 2;position: relative;">
                  <ul>
                       <div class="logo" style="z-index: 2;position: relative;">
                   <img src="images/cortofams.png" />
               </div>
                      <li><a href="controller/Logout.php"><b>Logout</b></a></li>
                       <li><a data-toggle="modal" href="#" data-target="#addUserModal" ><b>Add User</b></a></li>
                        <li><a data-toggle="modal" href="#" data-target="#compareModal" ><b>Compare</b></a></li>
                     <li><a data-toggle="modal" href="#" data-target="#myModal" ><b>Give Respons</b></a></li>
                     <li><a data-toggle="modal" href="#" data-target="#responseModal"><b>View Response</b></a></li>
                 
                  </ul>
                   
             
               </div>
                
                   
                    <!-- .hero-section__option -->

                    <div class="container">
                        <div class="row">
                            <div class="offset-lg-2 col-lg-8">
                                <div class="title-01 title-01--11 text-center">
                                    <h2 class="title__heading">
                                        <span>MASK UP</span>   
                                        <strong class="hero-section__words">
                                            <span class="title__effect is-visible">COVID-19</span>
                                            <span class="title__effect">IS</span>
                                            <span class="title__effect">REAL</span>
                                        </strong>
                                    </h2>
                             
                                </div> <!-- .title-01 -->
                            </div>
                            
                            
                        </div>
                        
                    </div>
                    
                    
                </div>
            </section>
            </nav>
             
         </header>
         
      </div>
             
        </div>
        
<footer class="footer" style="z-index: 2;position: relative;">
                  <div class="container bottom_border">
                  <div class="row">
                  <div class=" col-sm-4 col-md  col-6 col">
                  <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                  <!--headin5_amrc-->
                  <ul class="footer_ul_amrc">
                  <li><a href="https://zrdc.org/">ZRDC</a></li>
                  <li><a href="http://fims.pofarms.icu/">FIMS</a></li>
                  <li><a href="https://www.icuzambia.net/">ICU Zmabia</a></li>
                  <li><a href="http://dbms.pofarms.icu/">COVID-19 Response Monitor</a></li>
                 
                  
                  </ul>
                  <!--footer_ul_amrc ends here-->
                  </div>


                  <div class=" col-sm-4 col-md  col-6 col">
                  <h5 class="headin5_amrc col_white_amrc pt2"></h5>
                  <!--headin5_amrc-->
                  <ul class="footer_ul_amrc">
                  
                  </ul>
                  <!--footer_ul_amrc ends here-->
                  </div>


                  <div class=" col-sm-3 col-md  col-6 col">
                  <h5 class="headin5_amrc col_white_amrc pt2">Zambia</h5>
                  <!--headin5_amrc-->
                  <ul class="footer_ul_amrc">
                  <li><a href="#"><b>18,091 (+29)</b> Confirmed</a></li>
                   <li><a href="#"><b>364 (0)</b> Deaths</a></li>
                    <li><a href="#"><b>17,307</b> Recovered</a></li>
                  </ul>
                  <!--footer_ul_amrc ends here-->
                  </div>


                  <div class=" col-sm-5 col-md  col-12 col">
                  <h5 class="headin5_amrc col_white_amrc pt2">Developer</h5>
                  <!--headin5_amrc ends here-->

                   <ul class="footer_ul_amrc">
                     <li><a href="#"><b>Name: </b> Alienvern</a></li>
                
                    <li><a href="#"><b>E-Mail: </b>alienverntech@gmail.com</a></li>
                    
                    
                  </ul>
                  <!--footer_ul2_amrc ends here-->
                  </div>
                  </div>
                  </div>


                 

                  </footer>  
      
        
        
        <script>
        $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      }); 
        </script> 
        <script src="js/GetResponses_1.js" type="text/javascript"></script>
        <script src="js/GetResponses_2.js" type="text/javascript"></script>
      <script src="js/GetResponses.js" type="text/javascript"></script>  
      
    <script src="js/RelaodDistrictResponse.js" type="text/javascript"></script>
 <script src="js/RelaodDistrict.js" type="text/javascript"></script>
 <script src="js/RelaodDistrictCompareOne.js" type="text/javascript"></script>
 <script src="js/RelaodDistrictCompareTwo.js" type="text/javascript"></script>
 
        <!-- JS -->
        <script src="assets/js/plugins/animate-headline.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
