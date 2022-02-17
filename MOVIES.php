
<?php
// MUTE NOTICES
//error_reporting(E_ALL & ~E_NOTICE);

$servername = "localhost";
$username = "root";
$password = "";
$database = "movie";

//movies -- table_name
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "connected";
    //return "connected";
}

$sql = "SELECT * FROM `movies` WHERE 1";
$query =  mysqli_query($conn, $sql);
 

   
  ?>
   <table border="1">
       <tr>
           <td>S_NO</td>
           <td>MOVIE_NAME</td>
           <td>LEADING_ACTOR</td>
           <td>LEADING_ACTRESS</td>
		   <td>DIRECTOR_NAME</td>
		   <td>RELEASE_DATE</td>
       </tr>
       <?php foreach ($query as $rows) {?>
       <tr>
           <td><?php echo $rows['S_NO'];?></td>
           <td><?php echo $rows['MOVIE_NAME'];?></td>
           <td><?php echo $rows['LEADING_ACTOR'];?></td>
           <td><?php echo $rows['LEADING_ACTRESS'];?></td>
		   <td><?php echo $rows['DIRECTOR_NAME'];?></td>
		   <td><?php echo $rows['RELEASE_DATE'];?></td>
       </tr>
       <?php }?>
   </table> 
  <?php


?>