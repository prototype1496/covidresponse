<?php


include 'db_connection/dbconfig.php';
include 'model/SuperModel.php';

$get_all_provines_stm  = SuperModel:: get_all_provinces();
$get_all_provines_stm2  = SuperModel:: get_all_provinces();


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600&amp;subset=latin-ext" rel="stylesheet">

        <!-- CSS -->
        <link href="assets/css/main.css" rel="stylesheet">

        <!-- JS -->
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        
        <!-- Latest compiled and minified CSS -->

<link href="css/bostrap.css" rel="stylesheet" type="text/css"/>
<script src="js/boostrapjs.js" type="text/javascript"></script>

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
            
            <a class="skip-link sr-only" href="#main">Skip to content</a>

            <!-- Options headline effects: .rotate | .slide | .zoom | .push | .clip -->
            <section class="hero-section hero-section--image clearfix clip">
                <div class="hero-section__wrap">
                    <div class="hero-section__option">
                        <img src="assets/images/index.jpg" alt="Hero section image">
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
                                    <div class="title__description">COVID-19 affects different people in different ways. Most infected people will develop mild to moderate illness and recover without hospitalization</div>

                                    <!-- Options btn color: .btn-success | .btn-info | .btn-warning | .btn-danger | .btn-primary -->
                                    <div data-toggle="modal" data-target="#responseModal" class="title__action"><a href="#" class="btn btn-success">View Response</a></div>
                                </div> <!-- .title-01 -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="button-group">
        	<a data-toggle="modal" data-target="#myModal" class="btn btn-outline-success button-sm">Give Response</a>
           
        </div>
        
        
        
      <script src="js/GetResponses.js" type="text/javascript"></script>  
    <script src="js/RelaodDistrictResponse.js" type="text/javascript"></script>
 <script src="js/RelaodDistrict.js" type="text/javascript"></script>
        <!-- JS -->
        <script src="assets/js/plugins/animate-headline.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
