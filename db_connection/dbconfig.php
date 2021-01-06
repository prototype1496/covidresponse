<?php

class Connection{
    
    
  public function connect() {
        $servername = "j5zntocs2dn6c3fj.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
        $username = "bm5s611zkqt42wa8";
        $password = "gpzer2l28th3fbpn";
        $dbname = "czfn6g96tuk6wybk";

//Create connection
        
        try{
        $conn = new PDO(    'mysql:host='.$servername.';dbname='.$dbname.';charset=latin1',
                            ''.$username.'',
                            ''.$password.'',
                    array(
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_PERSISTENT => false
                    )
                );
        

//        }
            return  $conn;
         } catch (PDOException $e) {
            print "Connection Error: ". "<br/>";
            $conn=Null;
            die();
}
  


         }   
  
}
