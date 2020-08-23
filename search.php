
<?php
  include "header.php";
?>
<body style="background: #f1f1f1;">
<div class="container">
  <div class="article-container">

    <?php
    
      if (isset($_POST['submit-search'])) {
        extract($_POST);
        if(empty($search)){
          echo "Please type your search topic.";
          header("Location: {$hostname}/index.php");

        }else{

        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql ="SELECT post.post_id, post.post_title, post.post_description,post.post_date,
        user.username FROM post
        LEFT JOIN user ON post.author = user.user_id
        WHERE post_title LIKE '%$search%' OR
        post_description LIKE '%$search%' OR author LIKE '%$search%' OR post_date LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        echo "<h1>There are ". $queryResult. " results for your search topic ". $search. " in <a href='index.php'>Quranportal</a>" ."</h1>";
        echo "<hr>";

        if($queryResult > 0){
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<a href='post.php?title=" .$row['post_title']."&date=" .$row['post_date']."'><div class='article-box text-justify'>
              <h3>".$row['post_title']."</h3></a>
              <p>".substr($row['post_description'],0,630). '...'."</p>
              <p>" ."<b>Date : </b>".$row['post_date']."<b> , Author : </b>".$row['username']."</p>
            </div>";
          }

        }else{
          echo "There are no results matching your search";
        }

      }
      }
    ?>
  </div>
</div>
<?php
    include "footer.php";
 ?>
