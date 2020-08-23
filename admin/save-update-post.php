<?php
  include "inc/dbh.php";

   session_start();
  $title = mysqli_real_escape_string($conn, $_POST['post_title']);
  $description = strip_tags(mysqli_real_escape_string($conn, $_POST['postdesc']));
  $date = mysqli_real_escape_string($conn, $_POST['post_date']);
  $p_id = mysqli_real_escape_string($conn, $_POST['post_id']);
  //column-field name
   $sql = "UPDATE post SET post_title='{$title}', post_description='{$description}', post_date='{$date}' WHERE post_id={$p_id}";


  $result = mysqli_query($conn,$sql);

if($result){
  header("location: {$hostname}/admin/post.php");
}else{
  echo "Query Failed";
}

 ?>
  

