<script src="../../js/Jnotify/jquery-1.12.4.min.js" type="text/javascript"></script>
<link href="../../js/Jnotify/jnoty.min.css" rel="stylesheet" type="text/css"/>
<script src="../../js/Jnotify/jnoty.min.js" type="text/javascript"></script>

<?php

    require_once '../../db_connection/dbconfig.php';
    require_once '../../model/SuperModel.php';
   
 
  if (isset ($_POST['btn_add_response']) )
 {

   
     $selected_province_id = trim(filter_input(INPUT_POST, 'selected_province_id', FILTER_DEFAULT));
    $name = trim(filter_input(INPUT_POST, 'name', FILTER_DEFAULT));
    $address = trim(filter_input(INPUT_POST, 'address', FILTER_DEFAULT));
    $first_name = trim(filter_input(INPUT_POST, 'first_name', FILTER_DEFAULT));
    $comments = trim(filter_input(INPUT_POST, 'comments', FILTER_DEFAULT));
    $contactno = trim(filter_input(INPUT_POST, 'contactno', FILTER_DEFAULT));
     $district_id = trim(filter_input(INPUT_POST, 'district_id', FILTER_DEFAULT));
    
    
    
                 if (SuperModel::add_response($selected_province_id,$name,$address,$first_name,$comments,$contactno,$district_id))
        {
            
                      echo "<script>               
            $(document).ready(
             
            function(){
                
               $.jnoty('Response Successfully Submitted :)', {
            sticky: false,
            header: 'Notification',
            theme: 'jnoty-success',
            close: function() {window.location.replace('/')},
            });   
            }); 
            </script>"; 
        }else
        {
                 echo "<script>               
            $(document).ready(
             
            function(){
                
               $.jnoty('Response Not Successfully Submitted', {
            sticky: false,
            header: 'Erro',
            theme: 'jnoty-danger',
            close: function() {window.location.replace('/')},
            });   
            }); 
            </script>"; 
        }
      
    
          
 } else if (isset ($_POST['btn_add_user']) )
 {

   
  
    $name = trim(filter_input(INPUT_POST, 'name', FILTER_DEFAULT));
    $username = trim(filter_input(INPUT_POST, 'username', FILTER_DEFAULT));
     $password = trim(filter_input(INPUT_POST, 'password', FILTER_DEFAULT));
    
    
    
                 if (SuperModel::add_user($name,$username,$password))
        {
            
                      echo "<script>              
            $(document).ready(
             
            function(){
                
               $.jnoty('User Successfully Submitted :)', {
            sticky: false,
            header: 'Notification',
            theme: 'jnoty-success',
            close: function() {window.location.replace('/home.php')},
            });   
            }); 
            </script>"; 
        }else
        {
                 echo "<script>               
            $(document).ready(
             
            function(){
                
               $.jnoty('User Not Successfully Submitted', {
            sticky: false,
            header: 'Erro',
            theme: 'jnoty-danger',
            close: function() {window.location.replace('/home.php')},
            });   
            }); 
            </script>"; 
        }
      
    
          
 }
 
 else if (isset ($_POST['Test']))
 {
   echo'test';
 }