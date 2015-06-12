<?php
header("Access-Control-Allow-Orgin: *");
header("Content-Type: application/json; charset=UTF-8");

$link = mysqli_connect("localhost", "roberta", "oh58gr123", "roberta_mydb") or die("Could not connect to database");

$query = "SELECT user_name, visitor_park, visitor_address, visitor_city, visitor_state, visitor_date, visitor_sport FROM form_element";
$result = mysqli_query($link, $query);
echo(mysqli_error($link));
$output = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)){
    
    if ($output != "["){$output .=",";}
        $output .= '{"Name":"' . $rs["user_name"] . '",';
        $output .= '"Park":"' . $rs["visitor_park"] . '",';
        $output .= '"Address":"' . $rs["visitor_address"] . '",';
        $output .= '"City":"' . $rs["visitor_city"] . '",';
        $output .= '"State":"' . $rs["visitor_state"] . '",';
        $output .= '"Date":"' . $rs["visitor_date"] . '",';
        $output .= '"Sport":"' . $rs["visitor_sport"] . '"}';
}
$output .="]";

mysqli_close($link);

echo ($output);

?>