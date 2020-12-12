<?php

require '../../db_connection/dbconfig.php'; 
 require '../../model/SuperModel.php';

if(isset($_GET['district_id'])){
    
 $districgtID  = $_GET['district_id'];

$get_responses_by_disrict_id = SuperModel:: get_responses_by_disrict_id($districgtID);

if($get_responses_by_disrict_id->rowCount() > 0){
    
echo ' <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                             <th>Name</th>
                                            <th>Contact No</th>
                                            <th>Address</th>
                                            <th>Response</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Contact No</th>
                                            <th>Address</th>
                                            <th>Response</th>
                                         
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>';
                                                   
                                           while ($row3 = $get_responses_by_disrict_id->fetch(PDO::FETCH_ASSOC)) {
                                              // print_r($row);
                                        
                                       echo ' 
                                           

                                        <tr>
                                            
                                           <td>';  echo $row3["citizen_name"]; echo '</td>
                                            <td>'; echo $row3["citizen_phone"] ; echo '</td>
                                            <td>'; echo $row3["Citizen_address"] ; echo '</td>
                                            <td>'; echo $row3["Response"] ; echo '</td>
                                            
                                           
                                            </tr>';
                                            }
                                        
        
                                      
                                       
                                     
                                   ' </tbody>
                                </table>
                            </div>
                                    ';
                                       
} else {
    echo '<center><img alt="No Recored Founed" src="images/norecord.png"></center>';
}

    
    
}else if(isset($_GET['province_id']))
    {
    $provinceID  = $_GET['province_id'];
$get_responses_by_provicnce_id = SuperModel:: get_responses_by_procince_id($provinceID);

if($get_responses_by_provicnce_id->rowCount() > 0){
    
echo ' <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                             <th>Name</th>
                                            <th>Contact No</th>
                                            <th>Address</th>
                                            <th>Response</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Contact No</th>
                                            <th>Address</th>
                                            <th>Response</th>
                                         
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>';
                                                   
                                           while ($row3 = $get_responses_by_provicnce_id->fetch(PDO::FETCH_ASSOC)) {
                                              // print_r($row);
                                        
                                       echo ' 
                                           

                                        <tr>
                                            
                                           <td>';  echo $row3["citizen_name"]; echo '</td>
                                            <td>'; echo $row3["citizen_phone"] ; echo '</td>
                                            <td>'; echo $row3["Citizen_address"] ; echo '</td>
                                            <td>'; echo $row3["Response"] ; echo '</td>
                                            
                                           
                                            </tr>';
                                            }
                                        
        
                                      
                                       
                                     
                                   ' </tbody>
                                </table>
                            </div>
                                    ';
                                       
} else {
    echo '<center><img alt="No Recored Founed" src="images/norecord.png"></center>';
}
    }

