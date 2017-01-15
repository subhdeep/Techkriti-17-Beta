<?php
$servername = "localhost";
$username = "root";
$password = "sAhArAnTech1Kriti16";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
} 
$sql = "USE ambass17";
if ($conn->query($sql) === TRUE) {
  //echo ("Database selected successfully");
} else {
  // echo ("Error selecting database: " );
}


$sql="SELECT * FROM `ca_user`";
$result=$conn->query($sql);

//echo("abc");
  if (mysqli_num_rows($result) > 0)
{
         $response["products"] = array();
 
    while ($row = mysqli_fetch_array($result)) {
     
        $product = array();

    $product["name"] = $row["name"];
        $product["score"] = $row["score"];
      
		    $product["url"] = $row["url"];

   
       
        array_push($response["products"], $product);
        
    }

function array_sort($array, $on, $order)
{
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
            break;
            case SORT_DESC:
                arsort($sortable_array);
            break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}
array_sort($response['products'], 'score', SORT_DESC);
      echo json_encode($response["products"]);

 }
else
 {
 }



$conn->close();

?>
