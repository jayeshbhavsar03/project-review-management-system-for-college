<?php include"connection.php";?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
  
    
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <style>
	
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
   font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
			
	 </style>
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Fname</span>
            <input type="text" name="a"placeholder="Enter your fname" required>
          </div>
          <div class="input-box">
            <span class="details">Lname</span>
            <input type="text" name="b" placeholder="Enter your lname" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="c" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">contact</span>
            <input type="text" name="d" placeholder="Enter your contact" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="e" placeholder="Enter your password" required>
          </div>
        
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Register">
		  
        </div>
		<center><div>
               Already Member <a href="rama.php">Login Here</a>
            </div></center>
      </form>
    </div>
  </div>

</body>
</html>


<?php
if(isset($_POST['submit']))
{
     $a=$_POST['a'];
	 $b=$_POST['b'];
	 $c=$_POST['c'];
	 $d=$_POST['d'];
	 $e=$_POST['e'];
	 $query="INSERT INTO `registration1`(`fname`, `lname`, `email`, `contact`, `password`) 
	 VALUES ('$a','$b','$c','$d','$e')";
	 $data=mysqli_query($conn,$query);
	 if($data)
	 {
	 //echo"Registered successfully";
	 }
	 else{
	 //echo"Registered failed";
	 }
	 
}


?>