<?php

class SuperModel{
    
    public static function add_response($selected_province_id,$name,$address,$first_name,$comments,$contactno,$district_id) {
        //the below function creates a teacher in the database
        
        //print_r($Teacher);
        try {
            $Connection = new Connection();
            $conn = $Connection->connect();
          
            $conn->beginTransaction();

           
            //Insets data into user master tabble
            $query1 = "INSERT INTO `hsrm_zambia`.`response` (`citizen_name`, `citizen_phone`, `Citizen_address`, `Response`, `p_idd`, `d_idd`, `t_idd`) VALUES ('$name', '$contactno', '$address', '$comments', '$selected_province_id', '$district_id', '$district_id');";
            
            $stm = $conn->prepare($query1);
            
           
            $stm->execute();

            
            
            
            $conn->commit();
            $conn = Null;
            return TRUE;
        } catch (Exception $exc) {
            $conn->rollBack();
             
            echo $exc->getMessage();
            return FALSE;
        }
    }  
    
    
    public static function get_responses_by_disrict_id($distric_id) {
       
        $Connection = new Connection();
        $conn = $Connection->connect();

        $query = "CALL GetResponses('$distric_id');";
        $stm = $conn->query($query);
     
            return $stm;
      
   }
    
     public static function get_all_provinces() {
       
        $Connection = new Connection();
        $conn = $Connection->connect();

        $query = "CALL GetAllProvinces();";
        $stm = $conn->query($query);
     
            return $stm;
      
   }
    
   
   function get_districts_by_provinceid($provinceid) {
        //This function is used to load the districts whih a given province ID
         $Connection = new Connection();
        $conn = $Connection->connect();

        // this is the stored procidure from the datbaes that is loading the destrics after passing in an province ID 
        $query = "CALL GetDistrictByProvinceId(:province);";


     
        $stm = $conn->prepare($query);
        $stm->execute(array(':province' => $provinceid));

        if ($stm->rowCount() > 0) {

             //What the beow lines of code are doing is they are loading a districts and displying them in a dropdown using php

            echo "  <div class=''>  <div >    <select onChange=get_responses() class='form-control' id='district_id' name='district_id' required='required' ><option value='' selected disabled=''>Select District</option>";
            while ( $row = $stm->fetch(PDO::FETCH_ASSOC)) {


                echo "<option value=" . $row['districtId'] . ">" . $row['name'] . "</option>";
                //echo "<option vlaue='21'>".$row['name']."</option>";name
            }

            echo"</select>";
        } else {

            echo "  <div > <select class='form-control' id='district_id' name='district_id' required='required'><option value=''  selected disabled='' >Select District</option> </select>  </div>";
        }
            
        
        
    }
    
     
    }
    
       
         
   