<?php
$user = "root"; 
$password = ""; 
$host = "localhost"; 
$dbase = "employees_assign"; 
$table = "tbl_employees";

$connect = new mysqli($host, $user, $password, $dbase);


$search_term= ($_GET['nombre']);




if ($connect->connect_error){
  echo "Failed to connect to MySQL: " . $connect->connect_error;
}
else{
  if(empty($search_term)){
    echo "<h2> You haven't search anyone </h2>";
  }
  elseif(isset($_POST["str"]) )  {
    $sql =  "SELECT * FROM tbl_employees WHERE emp_fname LIKE '%$search_term%' OR emp_lname LIKE '%$search_term%' OR CONCAT(emp_fname,' ',emp_lname) LIKE '%$search_term%'";
    $result = $connect->query($sql);

    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        echo "<div id='result'> <h2><img src='images/".$row['emp_image']."'/> <br><h2 class='des'>You Search " . $row["emp_fname"] . " " . $row["emp_lname"] . " And works in  " .$row["emp_job"]."<br />" . "<br / > </h2> </div>";  


        
      }
    }else{
      echo "<h3> We don't have anyone with that name :( </h3>";
    }
  };
};


?>