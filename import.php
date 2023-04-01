<?php require 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Import Excel To MySQL</title>
	<link rel="stylesheet" href="css/style.css">
	<style>
		.form-input{
			display: flex;
    justify-content: center;
    margin: 10rem auto;
    padding: 5rem;
    width: 40%;
    background: white;
    border-radius: 2rem;
    box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 20%);
		}
		.input-form{
			padding: 0.5rem;
    margin: 0.5rem;
	border: 1px solid;
    border-radius: 5px;
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

    <form class="form-input" action="" method="post" enctype="multipart/form-data">
        <input type="file" class="input-form" name="excel" required value="">
        <button type="submit" class="input-btn" name="import">Import</button>
    </form>
    <?php
		if(isset($_POST["import"])){
			$fileName = $_FILES["excel"]["name"];
			$fileExtension = explode('.', $fileName);
      $fileExtension = strtolower(end($fileExtension));
			$newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

			$targetDirectory = "uploads/" . $newFileName;
			move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);

			error_reporting(0);
			ini_set('display_errors', 0);

			require 'excelReader/excel_reader2.php';
			require 'excelReader/SpreadsheetReader.php';

			$reader = new SpreadsheetReader($targetDirectory);
			foreach($reader as $key => $row){
				$gr_no = $row[0];
				$roll_no = $row[1];
				$stu_name = $row[2];
				$project_name = $row[3];
				mysqli_query($conn, "INSERT INTO bsc_it_ty VALUES('', '$gr_no', '$roll_no', '$stu_name', '$project_name')");
			}

			echo
			"
			<script>
			alert('Succesfully Imported');
			document.location.href = 'fill_mark_rev1.php';
			</script>
			";
		}
		?>
</body>

</html>