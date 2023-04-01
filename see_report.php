<?php require 'connection.php'; ?>

<?php
if(isset($_POST['submit']))
{
    $order_update_id = $_POST['gr_no'];
    $rev1 = $_POST['rev1'];
    $rev2 = $_POST['rev2'];
    $rev3 = $_POST['rev3'];
    $rev4 = $_POST['rev4'];
    $rev5 = $_POST['rev5'];
    $total = mysqli_real_escape_string($conn, $_POST['rev1']+$_POST['rev2']+$_POST['rev3']+$_POST['rev4']+$_POST['rev5']);
    mysqli_query($conn, "UPDATE `bsc_it_ty` SET rev1 = '$rev1', rev2 = '$rev2', rev3 = '$rev3', rev4 = '$rev4', rev5 = '$rev5', total='$total'  WHERE id = '$order_update_id'") or die('query failed');
    $message[] = 'payment status has been updated!';
	 
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Import Excel To MySQL</title>
    <link rel="stylesheet" href="css/style.css">
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

    <table border=1>
        <tr>
            <th>#</th>
            <th>Group Number</th>
            <th>Roll Number</th>
            <th>Student Name</th>
            <th>Project Title</th>
            <th>Review 1</th>
            <th>Review 2</th>
            <th>Review 3</th>
            <th>Review 4</th>
            <th>Review 5</th>
            <th>Total Marks</th>
        </tr>
        <?php
			$i = 1;
			$rows = mysqli_query($conn, "SELECT * FROM bsc_it_ty a 
                                        INNER JOIN bsc_it_ty_rev1 b ON a.roll_no = b.roll_n
                                        INNER JOIN bsc_it_ty_rev2 c ON a.roll_no = c.roll_n
                                        INNER JOIN bsc_it_ty_rev3 d ON a.roll_no = d.roll_n
                                        INNER JOIN bsc_it_ty_rev4 e ON a.roll_no = e.roll_n
                                        INNER JOIN bsc_it_ty_rev5 f ON a.roll_no = f.roll_n");
			foreach($rows as $row) :
			?>
        <tr>
            <td> <?php echo $i++; ?> </td>
            <td> <?php echo $row["gr_no"]; ?> </td>
            <td> <?php echo $row["roll_no"]; ?> </td>
            <td> <?php echo $row["stu_name"]; ?> </td>
            <td> <?php echo $row["project_name"]; ?> </td>
            <td> <?php echo $row["rev1"]; ?> </td>
            <td> <?php echo $row["rev2"]; ?> </td>
            <td> <?php echo $row["rev3"]; ?> </td>
            <td> <?php echo $row["rev4"]; ?> </td>
            <td> <?php echo $row["rev5"]; ?> </td>
            <td> <?php echo $row["rev1"]+$row["rev2"]+$row["rev3"]+$row["rev3"]+$row["rev5"]; ?> </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="download_btn.php" class="input-btn">Print Report</a>

</body>

</html>