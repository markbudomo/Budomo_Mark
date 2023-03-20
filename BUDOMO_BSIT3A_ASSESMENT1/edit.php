<?php
    $db = mysqli_connect("localhost", "root", "", "phpcrud_db");
    if(!$db){
        die('error in db'. mysqli_error($db));
    }else{
    $id = $_GET['id'];
    $qry = "select * from member where member_id = $id";
			$run =  $db-> query($qry); 
			if($run -> num_rows > 0){
				 while($row = $run -> fetch_assoc()){
						$membername = $row['member_name'];
                        $memberemail = $row['member_email'];
                        $memberaddress = $row['member_address'];
                 }
                }
  
            }
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Edit Member</title>
        </head>
    <body>
    <form method="post">
		<label>Name</label>
		<input type="text" name="name" value="<?php echo $membername; ?>">
		<br><br>
        <label>Email</label>
		<input type="text" name="email" value="<?php echo $memberemail; ?>">
		<br><br>
        <label>Address</label>
		<input type="text" name="address" value="<?php echo $memberaddress; ?>">
		<br><br>
        <input type="submit" name="update" value="Update">

	</form>
        </body>
    </html>

<?php

    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        $qry = "update member set member_name='$name', member_email='$email', 
        member_address='$address' where member_id = $id";
        if (mysqli_query($db, $qry)){
            header('location: member.php');
        }else{
            echo mysqli_error($db);
        }
       }

?>


