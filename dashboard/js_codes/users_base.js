 $('document').ready(function() {

//Table filter


     $("#addUserForm").validate({
         rules: {
             username: {
                 required: true,
                 minlength: 4,
                 maxlength: 10
             },
             name: {
                 required: true,
                 minlength: 2,
                 maxlength: 30
             },
             surname: {
                 required: true,
                 minlength: 2,
                 maxlength: 30
             },
             password: {
                 required: true,
                 minlength: 4,
                 maxlength: 10
             },
             confirm: {
                 required: true,
                 minlength: 4,
                 maxlength: 10,
                 equalTo: "#password"
             }
         },
         message: {
             username: {
                 required: "Username is required",
                 minlength: "Username minimun length is 4",
                 maxlength: "Username maximun length is 10"
             },
             name: {
                 required: "Name is required",
                 minlength: "Name minimun length is 2",
                 maxlength: "Name maximun length is 30"
             },
             surname: {
                 required: "Surname is required",
                 minlength: "Surname minimun length is 2",
                 maxlength: "Surname maximun length is 30"
             },
             password: {
                 required: "Password is required!",
                 minlength: "Password minimun length required is 4",
                 maxlength: "Password maximun length required is 10"
             },
             confirm: {
                 required: "Confirm your password!",
                 minlength: "Minimun length required is 4",
                 maxlength: "Maximun length required is 10",
                  equalTo: "Your password does not match!"
             }
         },
         submitHandler: function(form) {
             var username = $("#username").val();
             var name = $("#name").val();
             var surname = $("#surname").val();
             var password = $("#password").val();
             var confirm = $("#confirm").val();
             $.ajax({
                 type: "POST",
                 url: "server_users.php?command=add",
                 data: {
                     username: username,
                     name: name,
                     surname: surname,
                     password: password,
                     confirm: confirm
                 },
                success: function(data){
                  
                  if (data.status="true") {
                     $("#addModal").modal('hide');
                     loadData();
                      console.log(data);
                      
                      //some success message
                  }else{
                      //log the error on the form
                      console.log(data);
                  }
                },
                error: function(data){

                }
             });
         }
     });
 });
 //Load data o page load
 function loadData() {
     $.ajax({
         type: "GET",
         url: "server_users.php?command=load",
         success: function(data) {
             $('tbody').html(data);
         }
     });
 }
 //Save new user
 function saveData() {
     var username = $("#username").val();
     var name = $("#name").val();
     var surname = $("#surname").val();
     event.preventDefault();
     $.ajax({
         type: "POST",
         url: "server_users.php?command=add",
         data: {
             username: username,
             name: name,
             surname: surname
         },
         success: function(data) {
             $("#addModal").modal('hide');
             console.log(data);
             loadData();
         }
     });
 }
 //Delete data.
 function deleteData(str) {
     var id = str;
     $.ajax({
         type: "GET",
         url: "server_users.php?command=delete",
         data: {
             id: id
         },
         success: function(data) {
             console.log(data); //Loging Data is JUST GREAT D:)-
             loadData();
         }
     });
 }
 //Edit user
 function updateData(str) {
     var id = str;
     var username = $("#username-" + str).val();
     var name = $("#name-" + str).val();
     var surname = $("#surname-" + str).val();
     event.preventDefault();
     $.ajax({
         type: "post",
         url: "server_users.php?command=update",
         data: {
             id: id,
             username: username,
             name: name,
             surname: surname
         },
         success: function(data) {
             //document.getElementsByName('editModal').modal('hide');
             console.log(data);
             loadData();
             $('.modal-backdrop').remove();
         }
     });
 }