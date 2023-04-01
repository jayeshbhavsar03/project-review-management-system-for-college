<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Project Reviewer</title>
	<link rel="stylesheet" href="TY1.css">
</head>


<body>

    <h3>
        <center>M.S.P Mandal's <br>
            Deogiri College Aurangabad <br>
            Department of C.S , I.T and Animation <br>
            (Major Project 2022-2023)
        </center>
    </h3>

    <div class="table">

        <table>

            <tr>
                <th>Group No</th>
                <th>Studant Name</th>
                <th>Synopsis</th>
                <th>Review Marks</th>
            </tr>

          

    <div class="button">
        <button ><a href="TY.php" target="_self">BACK</a></button>
        <button ><a href="#">SAVE</a></button>
        <button ><a href="TY2.php" target="_self">NEXT</a></button>
    </div>

</body>

</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="myproject";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
$n=1;
$sql="select * from r2";
$result=mysqli_query($conn,$sql);
?>
<?php
if(mysqli_num_rows($result)>0)
{
 while($row=mysqli_fetch_array($result))
 {
  echo"<tr>
   <td><center>$row[GroupNo]</center></td>
   <td><center>$row[StudentName]</center></td>
   <td><center>$row[Synopsis]</center></td>
   <td><center>$row[ReviewMarks]</center></td>
   </tr>"; 
   
   
   }
  }
  ?>
  
  <?php
  $n++;
  
  ?>
  
 




