
function get_districts_t()
{
   
     var provnce_id = document.getElementById("selected_province_id_t").value;
     var temp_parm = "province_id="+provnce_id;
     
     
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "controller/super/ReloadDistricts.php?"+temp_parm, false);
    xmlhttp.send(null);
    document.getElementById("districts_by_provincId_t").innerHTML = xmlhttp.responseText;
    
    
    
    
}

get_districts_t();




        