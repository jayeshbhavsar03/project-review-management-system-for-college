<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  background-color: black;  
  //height:50px;
  //width:50px;
}  
.container {  
    padding: 50px; 
	
  background-color: lightblue;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 50%;  
  padding: 12px;  
  margin: 7px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: lightyellow;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid black;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #5579C6;  
  color: white;  
  width: 50%;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  

.register1{  
  background-color: #5579C6;  
  color: white;  
  width: 50%;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  
  opacity: 0.9;  
}  
.register1:hover {  
  opacity: 1;  
}  


</style>  
</head>  
<body>  

<form action="" method="POST">  
  <div class="container">  
  <center>  <h2>REVIEW FORM 1</h2> </center>  
  <hr>  
<center>  <label>Group No:</label>   <br>
<input type="text" class="0" name="a" placeholder= "Group No." size="15" required />   <br>
<label> Student Name : </label>   <br>
<input type="text" name="b" placeholder="Student Name " size="15" required />   <br>
<label> Project Title: </label>   <br> 
<input type="text" name="c" placeholder="Project Title" size="15"required />  <br> 
<label> Review Marks : </label>  <br>  
<input type="text" name="d" placeholder="Review Marks" size="15"required />   
<div>  
    <button type="submit" name="submit" class="registerbtn">Submit</button>  
	 <button type="View Data" name="View Data" class="register1"><a href="TY.php" >View Data</a></button>
	 
	
	
	
	
</center>	
</form>  
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

if(isset($_POST['submit']))
{
     $a=$_POST['a'];
	 $b=$_POST['b'];
	 $c=$_POST['c'];
	 $d=$_POST['d'];
	 $query="INSERT INTO `r1`(`GroupNo`, `StudentName`, `ProjectTitle`, `ReviewMarks`) VALUES('$a','$b','$c','$d')";
	 $data=mysqli_query($conn,$query);
	 
	 if($data)
	 {
		 echo"inserted";
	 }
	 else
	 {
		 echo"not inserted";
		 
	 }
}
	 ?>