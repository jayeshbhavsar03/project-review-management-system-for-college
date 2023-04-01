<html>

<style>
 
   * {

        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        box-sizing: border-box;
    }

    body {
        width: 90%;
        height: 90vh;
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
        border: 2px solid black;
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
			REVIEW 1
        </center>
    </h3>
	 
	
	<center>

<table border="1">

<tr>
<th>GroupNo</th>
<th>StudentName</th>
<th>ProjectTitle</th>
<th>ReviewMarks</th>
</tr>


</center>
 
 <div class="button">
        <button ><a href="mainhome.php" target="_self">BACK</a></button>
        <button onclick="window.print()">Print</button></body>
        <button ><a href="form2.php">NEXT</a></button>
		
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
$sql="select * from r1";
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
   <td><center>$row[ProjectTitle]</center></td>
   <td><center>$row[ReviewMarks]</center></td>
   </tr>"; 
   
   
   }
  }
  ?>
  
  <?php
  $n++;
  
  ?>
  
 




