
function get_responses()
{
   
     var district_id = document.getElementById("district_id").value;
     var temp_parm = "district_id="+district_id;
     
     
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "controller/super/GetResponses.php?"+temp_parm, false);
    xmlhttp.send(null);
    document.getElementById("responses").innerHTML = xmlhttp.responseText;
    
    
    
    
}






        