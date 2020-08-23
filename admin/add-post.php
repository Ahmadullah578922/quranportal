<?php include "inc/header.php"; ?>
  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Add New Post</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->
                  <form  action="save-post.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="post_title">Title</label>
                          <input type="text" name="post_title" class="form-control" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                        <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
                          <label for="exampleInputPassword1"> Description</label>
                          <textarea name="postdesc" class="form-control" required></textarea>
	                        <script>CKEDITOR.replace('postdesc');</script>

                      </div>
                      <div class="form-group">
                          <label for="post_date">Date</label>
                          <input type="datetime-local" name="post_date"  class="form-control" id="exampleInputdate">
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                  </form>
                  <!--/Form -->
              </div>
          </div>
      </div>
  </div>
<?php include "inc/footer.php"; ?>
