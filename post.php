<?php
    include "header.php";
 ?>
  <body style="background: #f1f1f1;">
  <div class="container mt-4" >
    <div class="row h-100 justify-content-center">
      <a href='index.php'><img src="images/quranportal.png" alt="" class="img-responsive img-fluid" style="height:165px; margin-bottom:30px;"></a>
    </div>
<div class="article-container">
  <?php
  $title = mysqli_real_escape_string($conn,$_GET['title']);
  $date = mysqli_real_escape_string($conn,$_GET['date']);
    $sql = "SELECT post.post_id, post.post_title, post.post_description,post.post_date,
    user.username FROM post
    LEFT JOIN user ON post.author = user.user_id
    WHERE post_title = '$title'AND post_date='$date'";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);

    if($queryResults > 0){
      while($row = mysqli_fetch_assoc($result)){
        echo "<div class='article-box text-justify mt-5'>
          <h2>".$row['post_title']."</h2>
          <p>".$row['post_description']."</p>
          <p>"."<b>Date :</b> ".$row['post_date']."<b> , Author : </b>".$row['username']."</p>
        </div></a>";
      }

    }
  ?>
</div>
</div>

<?php include "footer.php";?>
