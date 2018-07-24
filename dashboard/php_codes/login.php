
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin | Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../includes/font_awesome/css/font-awesome.min.css">
    <link href="../css/fonts.css" rel="stylesheet">
    <style type="text/css">

     .navbar-brand {
      transform: translateX(-50%);
      left: 50%;
      position: absolute;
    } 

    @media(max-width: 540px){
      .navbar-brand {
    font-size: 11px;
    
         }
         .footer p{
          font-size: 11px;
         }
    }
</style>
  </head>

  <body>

      <nav class="navbar navbar-default ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
            <a class="navbar-brand"  id="brand"href="#">HIGHSCHOOL</a>

        </div>
        <div id="navbar" class="collapse navbar-collapse">
        </div><!--/.nav-collapse -->
      </div>
    </nav>

   

    <section id="main" name="main">
    <br/>
    <br/>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form id="login" class="well">
                <div id="result" style="color:red;"></div>
                <div class="form-group">
                  <label for="username"><i class="fa fa-user" aria-hidden="true"></i> Username </label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="jwizard">
                </div>
                <div class="form-group">
                  <label for="password"><i class="fa fa-key" aria-hidden="true"></i> Password</label>
                  <input type="password" class="form-control" id="password"  name="password" placeholder="Enter Password">
                </div>
                 <button type="submit" class="btn btn-default btn-block" name="login" id="login" ><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>

            </form>
          </div>
          </div>
        </div>
      </div>
    </section>

     <footer class="footer">
      <div class="container text-center">
        <p class="text-muted">© 2017 - System Built by: Nation Chirara.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
            <script type="text/javascript">
            $('document').ready(function() {
                                $("#login").validate({
                                    rules:{
                                        username:{required:true},
                                        password:{required:true}
                                    },
                                    messages:{
                                        username: "Username is required!",
                                        password: "Password can't be empty!"

                                    },

                                    submitHandler:function(form){
                                        var username=$("#username").val();
                                        var password=$("#password").val();
                                        $.ajax({
                                            type: 'POST',
                                            url: 'login_base.php',
                                            dataType:'JSON',
                                            data : {username:username,password:password},
                                            success: function(data){
                                                console.log(data.msg);
                                                if (data.st=='tt') {
                                                    location.href="index.php";
                                                }else{
                                                    $("#result").html(data.msg);
                                                }

                                            },
                                            error: function(data){
                                               console.log(data); 
                                               $("#result").html(" Failed to Submited");
                                               location.href="login.php";
                                            }
                                        });
                                    }
                                });
                            });

            </script>

  </body>
</html>
