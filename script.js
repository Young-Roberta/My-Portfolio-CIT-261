
function myFunction(){
    var name = document.getElementById("name").value;
    var park = document.getElementById("park").value;
    var address = document.getElementById("address").value;
    var city = document.getElementById("city").value;
    var state = document.getElementById("state").value;
    var date = document.getElementById("date").value;
    var sport = document.getElementById("sport").value;
    
    var dataString = 'name1=' + name + '&park1=' + park + '&address1=' + address
    + '&city1=' + city + '&state1=' + state + '&date1=' + date + '&sport1=' + sport;
    
    if (name === '' || park === '' || address === '' || city === '' || state === '' || date === '' || sport === ''){
        alert("Please fill all fields");
    }else{
//AJAX code here
        $.ajax({
            type: "POST",
            url: "ajaxjs.php",
            data: dataString,
            cache: false,
            success: function(html){
                alert(html);
            }
        });
    }
    return false;
}