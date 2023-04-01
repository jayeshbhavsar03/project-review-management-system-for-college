<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    
    <title>Academic Project Review</title>
</head>
<style>
    :root {
        --color-white: #e9e9e9;
        --color-black-1: #212b38;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .omkar {
        width: 100%;
        height: 100vh;
    }


    body {
        font-family: bold;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        background-color:  rgb(216, 238, 246);
    }

    .logo {
        color: var(--color-white);
        font-size: 25px;


    }


    .menu-bar {
        background-color: rgb(43, 86, 114);
        height: 100px;
        width: 100%;
        justify-content: space-between;
        align-items: center;
        display: flex;
        padding: 0 5%;
        position: relative;
        position: fixed;
    }

    .menu-bar ul {
        list-style: none;
        display: flex;
    }

    .menu-bar ul li {
        /* width: 120px; */
        padding: 10px 30px;
        /* text-align: center; */

        position: relative;
    }

    .menu-bar ul li a {
        font-size: 20px;
        color: var(--color-white);
        text-decoration: none;
        transition: all 0.3s;
    }

    .menu-bar ul li a:hover {
        color: yellow;
    }

    .fas {
        float: right;
        margin-left: 10px;
        padding-top: 3px;
    }

    /* dropdown menu style */
    .dropdown-menu {
        display: none;
    }

    .menu-bar ul li:hover .dropdown-menu {
        display: block;
        position: absolute;
        left: 0;
        top: 100%;
        background-color: #212b38;
    }

    .menu-bar ul li:hover .dropdown-menu ul {
        display: block;
        margin: 10px;
    }

    .menu-bar ul li:hover .dropdown-menu ul li {
        width: 150px;
        padding: 10px;
        border: 2px solid lightgreen;
    }

    .dropdown-menu-1 {
        display: none;
    }

    .dropdown-menu ul li:hover .dropdown-menu-1 {
        display: block;
        position: absolute;
        left: 150px;
        top: 0;

    }


    .hero {
        height: calc(100vh - 80px);
        background-image: url(./bg.jpg);
        background-position: center;
    }

    .log {
        font-size: 40px;
    }

    .btn {

        width: 100px;
        height: 7vh;
        font-size: 20px;
        font-weight: 600;
        background-color: rgb(155, 202, 83);
        border: 0.5px solid;
        cursor: pointer;

    }

    .contan {
        margin: 100px
    }



    .continer {
        position: relative;
        display: flex;
        justify-content: start;
        align-items: center;
        margin: 30px 100px;

    }

    .continer .drop {
        /* img  */

        width: 800px;
        height: 600px;
        box-shadow: inset 20px 20px 30px rgba(84, 81, 81, 0.05),
            25px 60px 20px rgba(8, 5, 5, 0.05),
            25px 60px 30px rgba(7, 3, 3, 0.05),
            inset -20px -40px 35px rgba(10, 7, 7, 0.9);

    }

    .drop {

        display: none;

    }

    .dropdown-menu ul li:hover .drop {

        display: block;
        position: absolute;
        left: 150px;
        top: 0;
        background-color: #212b38;
        cursor: pointer;
        border: 2px solid lightgreen;
    }



    .frontimg {
        width: 600px;
        height: 400px;
        margin: 200px;
        transition: 0.8s;
    }


    .frontimg:hover {
        transform: scale(1.1);
        cursor: pointer;
    }

    .other-section {
        width: 100%;
        height: 100vh;
        margin-top: 5%;
    }

    h2 {

        font-size: 35px;
        text-align: center;
        margin-bottom: 2%;

    }

    .boxes p {

        margin: 0px 200px;
        text-align: justify;
        text-indent: 50px;
        border: 2px solid blue;
        padding: 20px;
        font-size: 20px;
        transition: 0.8s;
        border-radius: 5px;
        background-color: #c6c6c7;
    }

    .boxes p:hover {
        background-color: aliceblue;
        box-shadow: 0 0 20px 0 rgb(90, 83, 83);

        cursor: pointer;
    }


    section {
        width: 100%;
        height: 100vh;
        text-align: center;

    }

    .continer1 {
        display: flex;
        justify-content: space-around;
        align-items: center;

    }

    .box2 {
        border: 2px solid blue;
        box-sizing: border-box;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        width: 350px;
        font-size: 20px;
        height: 250px;
        margin: 5px;
        transition: 0.8s;
        border-radius: 5px;
        margin-top: 3%;
        background-color:#f5f5f5;
    }

    .box2: {
        transform: scale(1.1);
        cursor: pointer;
		        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        box-shadow: 0 0 20px 0 rgb(90, 83, 83);
        border: none;
    }



    .mytext {
        padding-top: 10px;

    }

    .contact {
        margin-top: 5%;
    }

    .addres {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 20px;
        font-weight: bold;



    }

    img {
        width: 100px;
        height: 100px;
        padding-top: 8px;
        border-radius: 10px;
    }

    .footer {
       
		text-align: center;
    padding: 1.5rem;
    padding-top: 2.5rem;
    margin-top: 2rem;
    border-top: var(--border);
    font-size: 20px;
    color: white;
	
        border: 4px solid yellow;
        box-sizing: border-box;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        width: 1250px;
        font-size: 20px;
        height: 250px;
        margin: 5px;
        transition: 0.8s;
        border-radius: 5px;
        margin-top: 3%;
        background-color:rgb(43, 86, 114);
    }

    .home {
        padding-top: 10rem;
        text-align: center;
        overflow-x: hidden;

    }


    .home h3 {
        color:  #130f40;
        font-size: 80px;
		text-transform: uppercase;
	}

</style>





<div class="menu-bar">
    <h1 class="logo"><span>Review Portal</span></h1>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="about.php">About</a></li>
		
        <li><a href="contact.php">Contact us</a></li>
    </ul>
    <div class="continer">
        <button class="btn"><a href="rama.php" target="_self"> Login </a></button>
    </div>
</div>


<section class="home" id="home">

    <h3>Academic Project <br> Reviewer<h3>
 
</section>

<hr>
<hr>


<section class="other-section">

    <h2>About</h2>

    <div class="boxes">
        <p>An academic project reviewer management system is a valuable tool for institutions and organizations that
            rely on a review process to evaluate academic projects, such as research papers or thesis proposals. The
            system helps to streamline the review process and improve the efficiency and fairness of the evaluation
            process.

            One of the key benefits of an academic project reviewer management system is the ability to easily
            identify and select reviewers who are experts in the relevant field. The system typically includes a
            database of reviewers and their areas of expertise, which allows for the assignment of reviewers who
            have the necessary knowledge and experience to provide valuable feedback.

            In addition to facilitating the selection of reviewers, an academic project reviewer management system
            also includes a submission portal for authors to submit their work and a workflow management system to
            track the review process. This helps to ensure that all submissions are properly reviewed in a timely
            manner and that the review process is transparent and fair.

            Overall, an academic project reviewer management system is a useful tool for improving the quality of
            academic projects and ensuring that they are fairly and accurately eval</p>
    </div>


</section>

<hr>
<hr>



<section>

    <h2 class="contact">Contact-us</h2>
    <div class="continer1">
        <div class="box2">
            <img src="srs\sahil4.png.jpeg" alt="" class="myimg">
            <h1>Contact NO</h1>
            <h3 class="mytext">+8379032656</h3>
            <h3 class="mytext">+8379032656</h3>
        </div>
        <div class="box2">
            <img src="srs\sahil3.png.jpeg" alt="" class="myimg">
            <h1> Email</h1>
            <h3 class="mytext">datarsahil92@gmail.com</h3>
            <h3 class="mytext">amolklende@gmail.com</h3>
        </div>

        <div class="box2">
           <img src="srs\sahil5.png.jpeg" alt="" class="myimg">
            <h1>Address</h1>
            <pre class="addres">      Deogiri college Aurangabad 
near Rachanakar colony,
   Garkhada premises 431001. </pre>
            <h3 class="mytext"></h3>
        </div>
    </div>
</section>




<section class="footer">

	
		<h1><div>copyright | 2023 by Sahil Datar And Amol Lende .</div></h1><br>
		<h3><div> Academic Project Reviewer System </div><h3>

</section>

</body>

</html>