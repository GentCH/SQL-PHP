<?php
	$servername = "localhost";
	$username = "root";
	$password = FALSE;
	$dbname = "studentgrades";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Grades</title>
</head>
<body>
	<table align="center" border="1px solid black" cellpadding="10" style="font-size: 22px">
		<tr>
			<th border="1px solid black" width="120px">A 班科目</th>
			<th border="1px solid black" width="120px">A 级人数 80分以上</th>
			<th border="1px solid black" width="120px">B 级人数 60~79</th>
			<th border="1px solid black" width="120px">C 级人数 0~59</th>
			<th border="1px solid black" width="120px">A 级平均分数80分以上</th>
			<th border="1px solid black" width="120px">B 级平均分数60~79</th>
			<th border="1px solid black" width="120px">C 级平均分数0~59</th>
		</tr>

		<!--Result for subject 'English'-->
		<tr>
			<td>English</td>
			<td>
			<?php 
				$category = "SELECT COUNT(grade) FROM grades WHERE ((classid='A') && (grade>=80) && (category='English')) ";
				$result_category = mysqli_query($conn, $category);
				if($result_category){
					while($row = mysqli_fetch_array($result_category, MYSQLI_ASSOC)){
						echo $row['COUNT(grade)'];
					}
				}
			?>
			</td>
			<td>
			<?php 
				$category = "SELECT COUNT(grade) FROM grades WHERE ((classid='A') && ((grade>=60) && (grade<=79)) && (category='English')) ";
				$result_category = mysqli_query($conn, $category);
				if($result_category){
					while($row = mysqli_fetch_array($result_category, MYSQLI_ASSOC)){
						echo $row['COUNT(grade)'];
					}
				}
			?>
			</td>
			<td>
			<?php 
				$category = "SELECT COUNT(grade) FROM grades WHERE ((classid='A') && ((grade>=0) && (grade<=59)) && (category='English')) ";
				$result_category = mysqli_query($conn, $category);
				if($result_category){
					while($row = mysqli_fetch_array($result_category, MYSQLI_ASSOC)){
						echo $row['COUNT(grade)'];
					}
				}
			?>
			</td>
			<td>
			<?php 
				$category = "SELECT AVG(grade) FROM grades WHERE ((classid='A') && (grade>=80) && (category='English')) ";
				$result_category = mysqli_query($conn, $category);
				if($result_category){
					while($row = mysqli_fetch_array($result_category, MYSQLI_ASSOC)){
						if ($row['AVG(grade)'] == 0) {
							echo "NULL";
						}
						else{
							echo $row['AVG(grade)'];
						}
					}
				}
			?>
			</td>
			<td>
			<?php 
				$category = "SELECT AVG(grade) FROM grades WHERE ((classid='A') && ((grade>=60) && (grade<=79)) && (category='English')) ";
				$result_category = mysqli_query($conn, $category);
				if($result_category){
					while($row = mysqli_fetch_array($result_category, MYSQLI_ASSOC)){
						if ($row['AVG(grade)'] == 0) {
							echo "NULL";
						}
						else{
							echo $row['AVG(grade)'];
						}
					}
				}
			?>
			</td>
			<td>
			<?php 
				$category = "SELECT AVG(grade) FROM grades WHERE ((classid='A') && ((grade>=0) && (grade<=59)) && (category='English')) ";
				$result_category = mysqli_query($conn, $category);
				if($result_category){
					while($row = mysqli_fetch_array($result_category, MYSQLI_ASSOC)){
						if ($row['AVG(grade)'] == 0) {
							echo "NULL";
						}
						else{
							echo $row['AVG(grade)'];
						}
					}
				}
			?>
			</td>
		</tr>

		<!--Result for subject 'Malay'-->
		<tr>
			<td>Malay</td>
			<td>
			<?php 
				$category = "SELECT COUNT(grade) FROM grades WHERE ((classid='A') && (grade>=80) && (category='Malay')) ";
				$result_category = mysqli_query($conn, $category);
				if($result_category){
					while($row = mysqli_fetch_array($result_category, MYSQLI_ASSOC)){
						echo $row['COUNT(grade)'];
					}
				}
			?>
			</td>
			<td>
			<?php 
				$category = "SELECT COUNT(grade) FROM grades WHERE ((classid='A') && ((grade>=60) && (grade<=79)) && (category='Malay')) ";
				$result_category = mysqli_query($conn, $category);
				if($result_category){
					while($row = mysqli_fetch_array($result_category, MYSQLI_ASSOC)){
						echo $row['COUNT(grade)'];
					}
				}
			?>
			</td>
			<td>
			<?php 
				$category = "SELECT COUNT(grade) FROM grades WHERE ((classid='A') && ((grade>=0) && (grade<=59)) && (category='Malay')) ";
				$result_category = mysqli_query($conn, $category);
				if($result_category){
					while($row = mysqli_fetch_array($result_category, MYSQLI_ASSOC)){
						echo $row['COUNT(grade)'];
					}
				}
			?>
			</td>
			<td>
			<?php 
				$category = "SELECT AVG(grade) FROM grades WHERE ((classid='A') && (grade>=80) && (category='Malay')) ";
				$result_category = mysqli_query($conn, $category);
				if($result_category){
					while($row = mysqli_fetch_array($result_category, MYSQLI_ASSOC)){
						if ($row['AVG(grade)'] == 0) {
							echo "NULL";
						}
						else{
							echo $row['AVG(grade)'];
						}
					}
				}
			?>
			</td>
			<td>
			<?php 
				$category = "SELECT AVG(grade) FROM grades WHERE ((classid='A') && ((grade>=60) && (grade<=79)) && (category='Malay')) ";
				$result_category = mysqli_query($conn, $category);
				if($result_category){
					while($row = mysqli_fetch_array($result_category, MYSQLI_ASSOC)){
						if ($row['AVG(grade)'] == 0) {
							echo "NULL";
						}
						else{
							echo $row['AVG(grade)'];
						}
					}
				}
			?>
			</td>
			<td>
			<?php 
				$category = "SELECT AVG(grade) FROM grades WHERE ((classid='A') && ((grade>=0) && (grade<=59)) && (category='Malay')) ";
				$result_category = mysqli_query($conn, $category);
				if($result_category){
					while($row = mysqli_fetch_array($result_category, MYSQLI_ASSOC)){
						if ($row['AVG(grade)'] == 0) {
							echo "NULL";
						}
						else{
							echo $row['AVG(grade)'];
						}
					}
				}
			?>
			</td>
		</tr>

		<!--Result for subject 'Mathematics'-->
		<tr>
			<td>Mathematics</td>
			<td>
			<?php 
				$category = "SELECT COUNT(grade) FROM grades WHERE ((classid='A') && (grade>=80) && (category='Mathematics')) ";
				$result_category = mysqli_query($conn, $category);
				if($result_category){
					while($row = mysqli_fetch_array($result_category, MYSQLI_ASSOC)){
						echo $row['COUNT(grade)'];
					}
				}
			?>
			</td>
			<td>
			<?php 
				$category = "SELECT COUNT(grade) FROM grades WHERE ((classid='A') && ((grade>=60) && (grade<=79)) && (category='Mathematics')) ";
				$result_category = mysqli_query($conn, $category);
				if($result_category){
					while($row = mysqli_fetch_array($result_category, MYSQLI_ASSOC)){
						echo $row['COUNT(grade)'];
					}
				}
			?>
			</td>
			<td>
			<?php 
				$category = "SELECT COUNT(grade) FROM grades WHERE ((classid='A') && ((grade>=0) && (grade<=59)) && (category='Mathematics')) ";
				$result_category = mysqli_query($conn, $category);
				if($result_category){
					while($row = mysqli_fetch_array($result_category, MYSQLI_ASSOC)){
						echo $row['COUNT(grade)'];
					}
				}
			?>
			</td>
			<td>
			<?php 
				$category = "SELECT AVG(grade) FROM grades WHERE ((classid='A') && (grade>=80) && (category='Mathematics')) ";
				$result_category = mysqli_query($conn, $category);
				if($result_category){
					while($row = mysqli_fetch_array($result_category, MYSQLI_ASSOC)){
						if ($row['AVG(grade)'] == 0) {
							echo "NULL";
						}
						else{
							echo $row['AVG(grade)'];
						}
					}
				}
			?>
			</td>
			<td>
			<?php 
				$category = "SELECT AVG(grade) FROM grades WHERE ((classid='A') && ((grade>=60) && (grade<=79)) && (category='Mathematics')) ";
				$result_category = mysqli_query($conn, $category);
				if($result_category){
					while($row = mysqli_fetch_array($result_category, MYSQLI_ASSOC)){
						if ($row['AVG(grade)'] == 0) {
							echo "NULL";
						}
						else{
							echo $row['AVG(grade)'];
						}
					}
				}
			?>
			</td>
			<td>
			<?php 
				$category = "SELECT AVG(grade) FROM grades WHERE ((classid='A') && ((grade>=0) && (grade<=59)) && (category='Mathematics')) ";
				$result_category = mysqli_query($conn, $category);
				if($result_category){
					while($row = mysqli_fetch_array($result_category, MYSQLI_ASSOC)){
						if ($row['AVG(grade)'] == 0) {
							echo "NULL";
						}
						else{
							echo $row['AVG(grade)'];
						}
					}
				}
			?>
			</td>
		</tr>
	</table>

</body>
</html>
