<?php



 require_once '../../model/SuperModel.php';
 require_once '../../db_connection/dbconfig.php';




$super_maodel = new SuperModel();


if ($super_maodel->get_districts_by_provinceid($_GET['province_id'])){
    
    
    
}  else {
    
}