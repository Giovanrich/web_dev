
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin | Edit Page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Admin Dashboard</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="index.php">Dashboard</a></li>
            <li ><a href="pages.php">Pages</a></li>
            <li><a href="post.php">Post</a></li>
            <li><a href="users.php">Usrers</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li ><a href="index.php">Welcome, Nation.</a></li>
            <li><a href="login.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id ="header">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-10">
    				<h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Edit Pages <small>About.</small></h1>
    			</div>
    			<div class="col-md-2">
    				<div class="dropdown create">
					  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					    Create Content
					    <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					    <li><a href="#">Add Post </a></li>
					    <li><a href="#">Add User</a></li>
					    <li><a type="button" data-toggle="modal" data-target="#addPage">Add Page</a></li>
					  </ul>
					</div>
    			</div>
    		</div>
    	</div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="pages.php">Pages</a></li>
          <li class="active">Edit Page</li>
        </ol>
      </div>  
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="pages.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pages <span class="badge">22</span></a>
              <a href="post.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Post <span class="badge">389</span></a>
              <a href="users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge">12</span></a>
            </div>
              
              <div class="well">
              <h4>Disk Space Used</h4>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    60%
                  </div>
                </div>
                <h4>Bandwith used</h4>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                    40%
                  </div>
                </div>
              </div>

          </div>
          <div class="col-md-9">

          <!--Site overwiew-->
            <div class="panel panel-default ">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Edit Page</h3>
              </div>
              <div class="panel-body">
                  <form>
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
                      <input type="submit" class="btn btn-default btn-block" />
                  </form>
              </div>
              </div>
            </div>
          </div>
        </div>
    </section>


  
      <footer id="footer">
        <p>Copyright Nation Chirara &copy; 2017</p>
      </footer>

    <!--Modals-->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form>
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
    <script>
            CKEDITOR.replace( 'editor1' );
    </script>
  </body>
</html>
