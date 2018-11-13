<?php
if($_POST['registrasi']){
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Form Output</title>
	</head>
	<body>
		<h1>Data User</h1>
		<table border="1px solid black">
			<tr>
				<td><b>Username</b></td>
				<td><?php echo $_POST['form-fname']; ?></td>
			</tr>
			<tr>
				<td><b>Nama</b></td>
				<td><?php echo $_POST['form-lname']; ?></td>
			</tr>
			<tr>
				<td><b>Email</b></td>
				<td><?php echo $_POST['form-email']; ?></td>
			</tr>
			<tr>
				<td><b>Telephone</b></td>
				<td><?php echo $_POST['form-telp']; ?></td>
			</tr>
			<tr>
				<td><b>Subjek</b></td>
				<td><?php echo $_POST['form-subject']; ?></td>
			</tr>
			<tr>
				<td><b>Date</b></td>
				<td><?php echo $_POST['form-date']; ?></td>
			</tr>
			<tr>
				<td><b>Time</b></td>
				<td><?php echo $_POST['form-time']; ?></td>
			</tr>
			<tr>
				<td><b>Message</b></td>
				<td><?php echo $_POST['message']; ?></td>
			</tr>

		</table>
		<a href="index.html">Kembali ke Registrasi</a>
	</body>
	</html>

	<?php 
} else {
	header('location: index.html');
}
?>
