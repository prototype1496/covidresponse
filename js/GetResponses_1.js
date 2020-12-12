
function get_responses_one()
{
   
     var district_id = document.getElementById("district_id_one").value;
     var temp_parm = "district_id="+district_id;
     
     
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "controller/super/GetResponses_1.php?"+temp_parm, false);
    xmlhttp.send(null);
    document.getElementById("responses_one").innerHTML = xmlhttp.responseText;
    
    
    
    
}


function get_province_responses_one()
{
   
     var district_id = document.getElementById("selected_province_id_three").value;
     var temp_parm = "province_id="+district_id;
     
     
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "controller/super/GetResponses_1.php?"+temp_parm, false);
    xmlhttp.send(null);
    document.getElementById("responses_one").innerHTML = xmlhttp.responseText;
    
    
    
    
}






        