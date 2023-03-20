<?php
    $db = mysqli_connect("localhost", "root", "", "phpcrud_db");
    if(!$db){
        die('error in db'. mysqli_error($db));
    }
    
    $id = $_GET['id'];

    $qry = "delete from member where member_id = $id";
    if(mysqli_query($db, $qry)){
        header('location: member.php');
    }else{
        echo mysqli_error($db);
    }

    ?>