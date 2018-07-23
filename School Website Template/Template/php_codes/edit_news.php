
<?php require_once 'login_check.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin | Edit Post</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
     <link href="includes/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../includes/font_awesome/css/font-awesome.min.css">
      <link href="../css/fonts.css" rel="stylesheet">
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
         <a class="navbar-brand" id="brand"href="#">HIGHSCHOOL</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
           <ul class="nav navbar-nav">
            <li ><a href="index.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
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

    <header id ="header">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-10">
    				<h1 id="heading"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit <small>Post.</small></h1>
    			</div>
    			<div class="col-md-2">
    				<div class="dropdown create hide">
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
        <li><a href="post.php">Post</a></li>
        
        </ol>
      </div>  
    </section>

 
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
                <h3 class="panel-title">Edit Page</h3>
              </div>
              <div class="panel-body">

                 <?php 

             include 'conn/config.php';
              if (isset($_GET['id'])) {
                  $id=$_GET['id'];

                  $sql="SELECT * FROM news WHERE id=?";
                  $stmnt=$db->prepare($sql);
                  $stmnt->bindParam(1,$id);
                  $stmnt->execute();
                  while ($row=$stmnt->fetch()) {
                    
                    ?>
                    <form id="editPost">
                        <div class="form-group">
                        <input type="hidden" id="id" name="id"value="<?php echo $row['id']; ?>">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title"value="<?php echo $row['title']; ?>">
                      </div>

                      <div class="form-group">
                        <label for="content">Content:</label>
                        <textarea class="ckeditor" name="content" id="content"><?php echo $row['content']; ?></textarea>
                      </div>
                      

                      <div class="form-group">
                        <label for="expDate">Exp. Date:</label>
                        <input type="text" id="expDate" name="expDate" class="form-control" value="<?php echo $row['expDate']; ?>">
                      </div>

                      
                      <input type="submit" class="btn btn-default btn-block" id="save" name="save" value="Save"/>
                  </form>
                 
                       <?php
                  }
              }else{
                //header('Location: login.php');
              }
             ?>
              
              </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  
      <?php require_once 'footer.php'; ?>
     <?php require_once 'change_password_form.php'; ?>
     

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="includes/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="change_password_base.js"></script>
    <script type="text/javascript" src="save_edit_post.js"></script>


  </body>
</html>
