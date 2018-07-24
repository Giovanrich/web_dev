
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> AJAX CRUD</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body onload="viewData()">
    <p><br/></p>
    <div class="container">
      <p></p>
       <button class="btn btn-primary" data-toggle="modal" data-target="#addData">Insert data</button>

       <!-- Modal -->
          <div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="addLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="addlLabel">Insert Data</h4>
                </div>
                <form>
                <div class="modal-body">
                 
                <div class="form-group">
                    <label for="nm">Name</label>
                    <input type="text" class="form-control" id="nm" placeholder="Name here">
                  </div>
                  <div class="form-group">
                    <label for="em">Email</label>
                    <input type="email" class="form-control" id="em" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="hp">Hone Number</label>
                    <input type="number" class="form-control" id="hp" placeholder="Your Phone">
                  </div>
                  <div class="form-group">
                    <label for="al">Address</label>
                    <textarea class="form-control" id="al" placeholder="Your address"></textarea>
                  </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" onclick="saveData()"class="btn btn-primary">Save</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        <div id="results"></div>
        <p></p>
        <table class="table table-bordered tablestriped">
          <thead>
            <tr>
              <th width="40">ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th width="180">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>

    </div>
     
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
      function saveData(){
        var name=$('#nm').val();
        var email=$('#em').val();
        var phone=$('#hp').val();
        var address=$('#al').val();
        //event.preventDefault();//prevent the page from refresh
        $.ajax({
           type:"post",
           url:"server.php?p=add",
           data:{nm:name,em:email,hp:phone,al:address},
           success: function(data){
            viewData();
            $('#addData').modal('hide');//close the modal.
           }
        });

      }

      function viewData(){
        $.ajax({
          type:"GET",
          url:"server.php",
          success:function(data){
            $('tbody').html(data);
          }
        });
      }
      function updateData(str){
        var id=str;
        var name=$('#nm-'+str).val();
        var email=$('#em-'+str).val();
        var phone=$('#hp-'+str).val();
        var address=$('#al-'+str).val();

        $.ajax({
          type:"POST",
          url:"server.php?p=edit",
          data:{nm:name,em:email,hp:phone,al:address,id:id},
          success:function(data){
            viewData();
          }
        });
      }

      function deleteData(str){
        var id=str;
        var option=confirm("Delete user");
        if(option){
          $.ajax({
          type:"GET",
          url:"server.php?p=del",
          data:{id:id},
          success:function(data){
            viewData();
          }
        });
        }
      }
    </script>
  </body>
</html>