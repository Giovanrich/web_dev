
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin | Posts</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="includes/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet">
    
  
    
  </head>

  <body >

    <button class="btn btn-primary" data-target="#addPost" data-toggle="modal">Modal</button>
  
   <?php require_once 'footer.php'; ?>
   <!--Modals-->
   <form id="addPostForm">
    <div class="modal fade" id="addPost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add Post</h4>
          </div>
          <div class="modal-body">
            
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Post Title...">
            </div>

            <div class="form-group">
              <label for="content">Content/Body</label>
              <textarea name="content" id="content" class="form-control ckeditor" placeholder="Page Body..."></textarea>
            </div>
            <div class="form-group">
              <label for="expDate">Exp. Date</label>
              <input type="text" class="form-control" id="expDate" name="expDate">
            </div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
          
        </div>
      </div>
    </div>
    </form>
    
  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="includes/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="post_base.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/additional-methods.min.js"></script>
    <script type="text/javascript" src="change_password_base.js"></script>
   </body>
</html>
