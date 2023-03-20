<?php $db = mysqli_connect("localhost", "root", "", "phpcrud_db") ?>
<!DOCTYPE html>
<html>
<head>
    <title>ASSESMENT CRUD</title>
</head>
<body>

	<form method="post">
		<label>Name</label>
		<input type="text" name="name" placeholder="Enter Name">
		<br><br>
        <label>Email</label>
		<input type="text" name="email" placeholder="Enter Email">
		<br><br>
        <label>Address</label>
		<input type="text" name="address" placeholder="Enter Address">
		<br><br>
        <input type="submit" name="submit" value="Submit">

	</form>

	<hr>
	<h3>Member List</h3>

		<table style="width: 80%" border="1">
		<tr>
			<th>S#</th>
			<th>Name</th>
			<th>Email</th> 
			<th>Address</th>
			<th>Operations</th>
		</tr>
		<?php 
			$i = 1;
			$qry = "select * from member";
			$run =  $db-> query($qry); 
			if($run -> num_rows > 0){
				 while($row = $run -> fetch_assoc()){
						$id = $row['member_id'];
		?>
		<tr>
			<td><?php echo $i++; ?></td>
			<td><?php echo $row['member_name'] ?> </td>
			<td><?php echo $row['member_email'] ?> </td>
			<td><?php echo $row['member_address'] ?> </td>
			<td>
				<a href="edit.php?id=<?php echo $id; ?>">Edit</a>
				<a href="delete.php?id=<?php echo $id; ?>" onclick="return
					confirm('Are you sure?')">Delete</a>
			</td>
		</tr>
		<?php 
				 }
				}
		?>
		</table>
</body>
</html>

<?php
    if (isset($_POST['submit'])) {
		$name = $_POST['name'];
        $email = $_POST['email'];
		$address = $_POST['address'];

        $qry = "insert into member values (null, '$name', '$email', '$address')"; 
		if(mysqli_query($db, $qry)){
			echo '<script>alert("Member registered successfully.");</script>'; 
			header('location: member.php');
		}else{
			echo mysqli_error($db);									
		}
}
?>
