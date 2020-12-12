
function get_districts_four()
{
   
     var provnce_id = document.getElementById("selected_province_id_four").value;
     var temp_parm = "province_id="+provnce_id;
     
     
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "controller/super/ReloadDistricts_2.php?"+temp_parm, false);
    xmlhttp.send(null);
    document.getElementById("districts_by_provincId_four").innerHTML = xmlhttp.responseText;
    
    
    
    
}

get_districts_four();




        