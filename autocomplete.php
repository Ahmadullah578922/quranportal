<?php
  $conn = mysqli_connect("localhost", "root", "", "quranportalsearch");

  if(isset($_POST['query'])){
    $output = '';
    $sql = "SELECT * FROM post WHERE post_title LIKE '%".$_POST["query"]."%'";
    $result = mysqli_query($conn, $sql);
    $output = '<ul class="list-unstyled mb-5">';
    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_array($result)){
        $output .= '<li>' . $row["post_title"].'</li>';
      }
    }
    else{
      $output .= '<li>খুঁজে পাওয়া যায়নি</li>'; 
    }
    $output .='</ul>';
    echo $output;
  }
?>
