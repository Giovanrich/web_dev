<?php require_once 'login_check.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin | Users</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
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
            <li><a href="post.php"><i class="fa fa-bullhorn" aria-hidden="true"></i> Post</a></li>
            <li class="active"><a href="users.php"><i class="fa fa-users" aria-hidden="true"></i> Users</a></li>
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
            <h1 id="heading"><i class="fa fa-users" aria-hidden="true"></i> Users <small>Manage Your Site Users.</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Create Content
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
               
              <li><a href="#" data-toggle="modal" data-target="#addModal">Add User</a></li>
             
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
                <h3 class="panel-title">System Users</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="input-group"> <span class="input-group-addon">Filter</span>
                        <input id="filter" type="text" class="form-control" placeholder="Type here...">
                    </div>
                  </div>
                </div>
                  <br/>
                <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Action</th>
                          </tr>

                        </thead>
                        <tbody class="searchable">
                         <!--Data is coming here from PHP-->
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
   <!-- Add User Modal -->
   <form id="addUserForm">
      <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addModalLabel">Add new user</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
                
                    <div class="form-group">
                      <label for="username" class="form-control-label">Username:</label>
                      <input type="text" class="form-control" id="username" name="username" placeholder="Username...">
                    </div>
                    <div class="form-group">
                      <label for="name" class="form-control-label">Name:</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name..." >
                    </div>
                    <div class="form-group">
                      <label for="surnname" class="form-control-label">Surname:</label>
                      <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname...">
                    </div>
                    <div class="form-group">
                      <label for="password" class="form-control-label">Password:</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password...">
                    </div>
                    <div class="form-group">
                      <label for="confirm" class="form-control-label">Confirm Password:</label>
                      <input type="password" class="form-control" id="confirm" name="confirm" placeholder="Confirm your password...">
                    </div>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
              
            </div>

            <div class="modal-footer">
              
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
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="change_password_base.js"></script>
    <script type="text/javascript" src="users_base.js"></script>
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
