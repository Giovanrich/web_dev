<?php require_once 'login_check.php'; ?>
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
     <link rel="stylesheet" type="text/css" href="../includes/font_awesome/css/font-awesome.min.css">
     <link href="../css/fonts.css" rel="stylesheet">
    
  
    
  </head>

  <body onload="loadData()">

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" id="brand"href="#">HIGHSCHOOL</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
           <ul class="nav navbar-nav">
            <li ><a href="index.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
            <!--<li><a href="pages.php">Pages</a></li>-->
            <li class="active"><a href="post.php"><i class="fa fa-bullhorn" aria-hidden="true"></i> Post</a></li>
            <li><a href="users.php"><i class="fa fa-users" aria-hidden="true"></i> Users</a></li>
            <li><a href="messages.php"><i class="fa fa-envelope" aria-hidden="true"></i> Messages</a></li>
            <li><a href="comments.php"><i class="fa fa-comments" aria-hidden="true"></i> Comments</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li ><a href="#" id="welc"><?php echo "Welcome: ".$_SESSION['user_name']; ?></a></li>
             <li>
                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#" data-toggle="modal" data-target="#changePasswordModal"><i class="fa fa-key" aria-hidden="true"></i>  Change </a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                  </ul>
                </li>
             </li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <br/>
    <div class="container">
      <header id ="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1 id="heading"><i class="fa fa-bullhorn" aria-hidden="true"></i> Posts <small>Manage Your Site Posts.</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Create Content
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a href="#" data-toggle="modal" data-target="#addPost">Add Post </a></li>
                
            </ul>
          </div>
          </div>
        </div>
      </div>
    </header>
    </div>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <?php require_once 'category.php'; ?>

          </div>
          <div class="col-md-9">

          <!--Site overwiew-->
            <div class="panel panel-default ">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Posts</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
                        <input id="filter" type="text" class="form-control" placeholder="Type here...">
                    </div>
                  </div>
                </div>
                  <br/>
                <table class="table table-striped table-hover" style="width: 100%; word-wrap:break-word;
              table-layout: fixed;">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Content/Body</th>
                            <th>Exp. Date</th>
                            <th>Action</th>
                          </tr>

                        </thead>
                         <tbody class="searchable">
                        </tbody>
                    </table>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


  
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
    
    <?php require_once 'change_password_form.php'; ?>

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
    <script type="text/javascript">
    $(document).ready(function () {

    (function ($) {

        $('#filter').keyup(function () {

            var rex = new RegExp($(this).val(), 'i');
            $('.searchable tr').hide();
            $('.searchable tr').filter(function () {
                return rex.test($(this).text());
            }).show();

        })

    }(jQuery));

});</script>
    
   </body>
</html>
