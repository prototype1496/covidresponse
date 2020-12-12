
function get_responsestwo()
{
   
     var district_id = document.getElementById("district_id_two").value;
     var temp_parm = "district_id="+district_id;
     
     
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "controller/super/GetResponses_2.php?"+temp_parm, false);
    xmlhttp.send(null);
    document.getElementById("responses_two").innerHTML = xmlhttp.responseText;
    
    
    
    
}




function get_province_responses_two()
{
   
     var district_id = document.getElementById("selected_province_id_four").value;
     var temp_parm = "province_id="+district_id;
     
     
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "controller/super/GetResponses_2.php?"+temp_parm, false);
    xmlhttp.send(null);
    document.getElementById("responses_two").innerHTML = xmlhttp.responseText;
    
    
    
    
}


        