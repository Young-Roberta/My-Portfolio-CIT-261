<?php

//fetching values from AJAX.html

$name2 = $_POST['name1'];
$park2 = $_POST['park1'];
$address2 = $_POST['address1'];
$city2 = $_POST['city1'];
$state2 = $_POST['state1'];
$date2 = $_POST['date1'];
$sport2 = $_POST['sport1'];
$hostname = "localhost";
$username = "roberta";
$password = "oh58gr123";
$dbname = "roberta_mydb";
$usertable = "visitor_form";

$link = mysqli_connect($hostname,$username,$password,$dbname) or die ("Could not connect to database"); //Creates connection to database, returns error if connection could not be made
    if (isset($_POST['name1'])){ // only continue if correct data was send to page
       $query = "insert into form_element(user_name, visitor_park, visitor_address, visitor_city, visitor_state, visitor_date, visitor_sport) values ('$name2', '$park2', '$address2', '$city2', '$state2', '$date2', '$sport2')";  //String for query
       $result = mysqli_query($link,$query); // send query to server, gets response
       echo(mysqli_error($link)); //Prints out error if one occurs
       if($result == "1"){	//only continue if the query returns the sucsess code "1"
       		echo "Form submitted sucessfully";   //inform the user the the result was a sucsesss
       }
       mysqli_close($link); //Cleanly close the db connection
    }
?>