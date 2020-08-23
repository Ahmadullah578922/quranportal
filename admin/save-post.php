<?php
  include "inc/dbh.php";
  session_start();
  $title = mysqli_real_escape_string($conn, $_POST['post_title']);
  $description = strip_tags(mysqli_real_escape_string($conn, $_POST['postdesc']));
  $date = mysqli_real_escape_string($conn, $_POST['post_date']);
  $author = $_SESSION['user_id'];

  $sql = "INSERT INTO post(post_title, post_description, post_date, author) VALUES('{$title}', '{$description}', '{$date}', '{$author}')";
  if(mysqli_query($conn, $sql)){
    header("Location: {$hostname}/admin/post.php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed. </div>";
  }

?>
