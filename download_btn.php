<?php
require('vendor/autoload.php');
$con=mysqli_connect('localhost','root','','data');
$i = 1;
$res=mysqli_query($con,"SELECT * FROM bsc_it_ty a 
INNER JOIN bsc_it_ty_rev1 b ON a.roll_no = b.roll_n
INNER JOIN bsc_it_ty_rev2 c ON a.roll_no = c.roll_n
INNER JOIN bsc_it_ty_rev3 d ON a.roll_no = d.roll_n
INNER JOIN bsc_it_ty_rev4 e ON a.roll_no = e.roll_n
INNER JOIN bsc_it_ty_rev5 f ON a.roll_no = f.roll_n");
if(mysqli_num_rows($res)>0){
	$html='<style>
		.table{
			border-collapse: collapse;
			width:100%;
		} 
		td,th{
			border: 1px solid #000;
			padding: 0.5rem;
			text-align: center;
			font-size: 0.6rem;
		}
		h2,h3,h4{
			text-align: center;
			padding: 0;
			margin: 0.3rem;
		}
		h3{
			font-size:0.7rem;
			font-wight:500;
		}
		h2{
			font-size:1.3rem;
			font-wight:500;
		}
		h4{
			font-size:0.9rem;
			font-wight:500;
			margin-bottom:1rem;
		}
		.1{
			width:5%;
		}
		.2{
			width:8%;
		}
		.5{
			width:7%;
		}
		p{
			font-size:0.8rem;
		}
		</style>
		<p>CLASS: B.Sc. I.T. (T.Y.)</p>
		<h3>M.S.P. Mandal&apos;s</h3>
		<h2>Deogiri College, Aurangabad</h2>
		<h3>Department of CS, IT & Animation</h3>
		<h4>B.Sc. Information Technology Third Year (Major Project 2022-23)</h4>
		<table class="table">';
		$html.='
		<tr>
		<th class="1">Sr.No.</th>
		<th class="2">Group Number</th>
		<th class="2">Roll Number</th>
		<th class="3">Student Name</th>
		<th class="4">Project Name</th>
		<th class="5">1st Review Marks</th>
		<th class="5">2nd Review Marks</th>
		<th class="5">3rd Review Marks</th>
		<th class="5">4th Review Marks</th>
		<th class="5">5th Review Marks</th>
		<th class="5">Total Marks</th>
		</tr>';
		while($row=mysqli_fetch_assoc($res)){
			$html.='<tr>
			<td>'.$i++.'</td>
			<td>'.$row['gr_no'].'</td>
			<td>'.$row['roll_no'].'</td>
			<td>'.$row['stu_name'].'</td>
			<td>'.$row['project_name'].'</td>
			<td>'.$row['rev1'].'</td>
			<td>'.$row['rev2'].'</td>
			<td>'.$row['rev3'].'</td>
			<td>'.$row['rev4'].'</td>
			<td>'.$row['rev5'].'</td>
			<td>'.$row["rev1"]+$row["rev2"]+$row["rev3"]+$row["rev3"]+$row["rev5"].'</td>
			</tr>';
		}
	$html.='</table>';
}else{
	$html="Data not found";
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file= time().'.pdf';
$mpdf->output($file,'I');
//D
//I
//F
//S
?>