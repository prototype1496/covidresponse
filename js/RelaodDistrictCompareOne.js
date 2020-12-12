
function get_districts_three()
{
   
     var provnce_id = document.getElementById("selected_province_id_three").value;
     var temp_parm = "province_id="+provnce_id;
     
     
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "controller/super/ReloadDistricts_1.php?"+temp_parm, false);
    xmlhttp.send(null);
    document.getElementById("districts_by_provincId_three").innerHTML = xmlhttp.responseText;
    
    
    
    
}

get_districts_three();




        