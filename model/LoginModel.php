<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class LoginModel {

    
       
    
    public function Loauthenticate($user) {

        $getConnection = new Connection();
        $con = $getConnection->connect();
        $sql = "CALL Login('$user->username','$user->password');";
          $stm = $con->prepare($sql);
        $stm->execute();
         
       
        if ($stm->rowCount() > 0) {

            $userData = $stm->fetch(PDO::FETCH_ASSOC);
            $helper = new LoginModel();
            $helper->redirectUser($userData);
        } 
        else {
            return FALSE;  
        }
    }

    public function redirectUser($row) {

     $_SESSION['username'] = $row['username'];
     header("location:/HSRM/home.php");
    }

}
