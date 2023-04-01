<html>

<style>


* {

        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        box-sizing: border-box;
    }

    body {
        width: 100%;
        height: 100vh;
        background-color: lightyellow;
    }

    h2 {

        width: 30%;
        margin: 30px auto;
        text-align: center;
        font-size: 30px;
        cursor: pointer;

    }

    h2:hover {
        transform: scale(1.1);

    }



    tr,
    th,
    td {
        border: 0.2px solid black;
        width: 300px;
        height: 30px;
        border-radius: 5px;
        background-color: white;
    }

    table {
        display: flex;
        justify-content: center;
        border-collapse: collapse;
    }

    input {
        width: 300px;
        height: 30px;
        font-size: 20px;


    }

    .no {
        padding-left: 130px;

    }

    .button {

        text-align: center;
        margin-top: 30px;
        margin: 20px;


    }

    .btn {
        width: 100px;
        height: 40px;
        font-size: 20px;
        border: none;
        border-radius: 5px;
        background-color: rgb(43, 20, 255);
        font-weight: bold;
        cursor: pointer;
        color: white;
    }

    th {
        background-color: aliceblue;

    }

    a {
        text-decoration: none;
        color: aliceblue;
    }

    .s {
        width: 20px;
        height: 15px;


    }
</style>

<body>

<h3>
        <center>M.S.P Mandal's <br>
            Deogiri College Aurangabad <br>
            Department of C.S , I.T and Animation <br>
            (Major Project 2022-2023)<br>
			REVIEW 4
        </center>
    </h3>
	
	<center>
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
$sql="select * from lst";
$result=mysqli_query($conn,$sql);
?>
<table border="1">
<tr>
<th>StudentName</th>
<th>Review 1</th>
<th>Review 2</th>
<th>Review 3</th>
<th>Review 4</th>
</tr>


<?php
if(mysqli_num_rows($result)>0)
{
 while($row=mysqli_fetch_array($result))
 {
  echo"<tr>
   <td><center>$row[GroupNo]</center></td>
   <td><center>$row[StudentName]</center></td>
   <td><center>$row[ProjectTitle]</center></td>
   <td><center>$row[ReviewMarks]</center></td>
   </tr>"; 
   
   
   }
  }
  ?>
  
  <?php
  $n++;
  
  ?>
  
 </center>
  <button onclick="window.print()">print</button></body>
  </html>



