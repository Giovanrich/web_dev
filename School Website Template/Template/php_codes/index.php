<?php require_once 'login_check.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>High School | Admin Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../includes/font_awesome/css/font-awesome.min.css">
    <link href="css/custom.css" rel="stylesheet">
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
          <a class="navbar-brand" id="brand" href="#">HIGHSCHOOL</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
            <!--<li><a href="pages.php">Pages</a></li>-->
            <li><a href="post.php"><i class="fa fa-bullhorn" aria-hidden="true"></i> Post</a></li>
            <li><a href="users.php"><i class="fa fa-users" aria-hidden="true"></i> Users</a></li>
            <li><a href="messages.php"><i class="fa fa-envelope" aria-hidden="true"></i> Messages</a></li>
            <li><a href="comments.php"><i class="fa fa-comments" aria-hidden="true"></i> Comments</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li ><a href="#"><?php echo "Welcome: ".$_SESSION['user_name']; ?></a></li>
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
            <h1 id="heading"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard <small>Manage Your Site.</small></h1>
          </div>
          <div class="col-md-2">
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
                <h3 class="panel-title">Site Overview</h3>
              </div>
              <div class="panel-body" style="background-color:#0c1f31;">
                <div class="col-md-3">
                  <div class="well dash-box dash-box-user">
                    <h2><i class="fa fa-users" aria-hidden="true"></i> 12</h2>
                    <h4>Users</h4>
                  </div>
                </div>
                  <div class="col-md-3">
                  <div class="well dash-box dash-box-posts">
                    <h2><i class="fa fa-bullhorn" aria-hidden="true"></i> 389</h2>
                    <h4>Posts</h4>
                  </div>
                </div>
                 <div class="col-md-3">
                  <div class="well dash-box dash-box-messages">
                    <h2><i class="fa fa-envelope" aria-hidden="true"></i> 22</h2>
                    <h4>Messages</h4>
                  </div>
                </div>
                 <div class="col-md-3">
                  <div class="well dash-box dash-box-comments">
                    <h2><i class="fa fa-comments" aria-hidden="true"></i> 341</h2>
                    <h4>Comments</h4>
                  </div>
                </div>
                </div>
                </div>
                <!-- Latest Users-->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Latest Post</h3>
                  </div>
                  <div class="panel-body">
                    <table class="table table-striped table-hover" style="width: 100%; word-wrap:break-word;
              table-layout: fixed;">
                        <thead>
                          <tr>
                            <th>Heading</th>
                            <th>Content</th>
                            <th>Posted By</th>
                            <th>Date Of Posting</th>
                            <th>Exp Date</th>
                          </tr>
                        </thead>
                        <tbody>
  
                        </tbody>
                    </table>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


     <?php require_once 'footer.php'; ?>
     <?php require_once 'change_password_form.php'; ?>


    <!--Change Password Modal-->

    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form>
        
        <input type="hidden" id="username" name="username" value="userName" />
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            
            <div class="form-group">
              <label for="pageTiltle">Page Title</label>
              <input type="text" class="form-control" id="pageTiltle" placeholder="Page Title">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Page Body</label>
              <textarea name="editor1" id="editor1" class="form-control" placeholder="Page Body"></textarea>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox"> Published
              </label>
            </div>

            <div class="form-group">
              <label for="meta">Meta Tags</label>
              <input type="text" id="meta" class="form-control" placeholder="Add Some Meta Tags...">
            </div>

            <div class="form-group">
              <label for="meta">Meta Description</label>
              <input type="text" id="meta" class="form-control" placeholder="Add Meta Description...">
            </div>

            

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="load_latest_post.js"></script>
    <script type="text/javascript" src="change_password_base.js"></script>
   
    
  </body>
</html>
