<?php require 'connection.php'; ?>

<?php
if(isset($_POST['submit'])){

    $roll_n = mysqli_real_escape_string($conn, $_POST['roll_n']);
    $rev1 = $_POST['rev1'];

    $select_event_name = mysqli_query($conn, "SELECT roll_n FROM `bsc_it_ty_rev1` WHERE roll_n = '$roll_n'") or die('query failed');

    if(mysqli_num_rows($select_event_name) > 0){
        echo
			"
			<script>
			alert('Already given marks!');
			document.location.href = 'fill_mark_rev1.php';
			</script>
			";
     }else{
        $add_event_query = mysqli_query($conn, "INSERT INTO `bsc_it_ty_rev1`(roll_n, rev1) VALUES('$roll_n', '$rev1')") or die('query failed');
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>First Review</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">
    <style>
    .main_head {
        color: black;
        text-align: center;
        margin: 2rem 0rem;
    }

    .container {
        display: flex;
        justify-content: center;
        margin: 2rem 0;
    }
    </style>
</head>

<body>

    <!-- navbar start -->
    <div class="menu-bar">
        <h1 class="logo"><span>Review Portal</span></h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Faculty <i class="fas fa-caret-down"></i></a>



                <div class="dropdown-menu">
                    <ul>
                        <li><a href="#" target="_self" class="box">Bsc.IT <i class="fas fa-caret-right"></i></a>

                            <div class="drop">


                                <ul>
                                    <li><a href="import.php">Bsc.IT.SY</a></li>
                                    <li><a href="import.php">Bsc.IT.TY</a></li>
                                </ul>


                            </div>
                        </li>

                        <li><a href="#" target="_self" class="box">BCS<i class="fas fa-caret-right"></i></a>
                            <div class="drop">


                                <ul>
                                    <li><a href="import.php">BCS.SY</a></li>
                                    <li><a href="import.php">BCS.TY</a></li>
                                </ul>


                            </div>
                        </li>

                        <li><a href="#" target="_self" class="box">BCA<i class="fas fa-caret-right"></i></a>
                            <div class="drop">


                                <ul>
                                    <li><a href="import.php">BCA.SY</a></li>
                                    <li><a href="import.php">BCA.TY</a></li>
                                </ul>


                            </div>
                        </li>
                        <li><a href="#" target="_self" class="box">MSC<i class="fas fa-caret-right"></i></a>
                            <div class="drop">


                                <ul>
                                    <li><a href="import.php">MSC.SY</a></li>
                                    <li><a href="import.php">MSC.TY</a></li>
                                </ul>


                            </div>
                        </li>
                    </ul>

                </div>
            </li>

            <li><a href="#">Contact us</a></li>
        </ul>
    </div>
    <!-- navbar end -->

    <div>
        <h1 class="main_head"><span>B.Sc. I.T (T.Y.) First Review</span></h1>
    </div>

    <table border=1>
        <tr>
            <th>#</th>
            <th>Group Number</th>
            <th>Roll Number</th>
            <th>Student Name</th>
            <th>Project Title</th>
            <th>Review 1</th>
            <th>Submit marks</th>
        </tr>
        <?php
			$i = 1;
			$rows = mysqli_query($conn, "SELECT * FROM bsc_it_ty");
			foreach($rows as $row) :
			?>
        <tr>
            <td> <?php echo $i++; ?> </td>
            <td> <?php echo $row["gr_no"]; ?> </td>
            <td> <?php echo $row["roll_no"]; ?> </td>
            <td> <?php echo $row["stu_name"]; ?> </td>
            <td> <?php echo $row["project_name"]; ?> </td>
            <form action="" method="post">
                <input type="hidden" class="inp" name="roll_n" value="<?php echo $row["roll_no"]; ?>" id="">
                <td><input type="number" class="inp" name="rev1" id=""></td>
                <td><input type="submit" class="input-btn" name="submit" value="submit"></td>
            </form>
        </tr>
        <?php endforeach; ?>
    </table>

    <div class="container">
        <a href="fill_mark_rev2.php" class="input-btn">Fill the marks of next review</a>
    </div>

</body>

</html>