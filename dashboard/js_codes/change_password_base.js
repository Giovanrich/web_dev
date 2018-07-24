//Validate form for changing passowrd
$('document').ready(function() {
    /*
        *
            *jQuery.validator.setDefaults({
      // where to display the error relative to the element
      errorPlacement: function(error, element) {
          error.appendTo(element.parent().find('div.myErrors'));
         }
     });

     jQuery.validator.addMethod("mustbeBOB", function (value, element) {
    return element.value === 'BOB';
}, 'You did not enter BOB');
        */

    /*/Begin a custom rule: Name no numbers![Rule Name:NoNos]
    jQuery.validate.addMethod("NoNos",function(value,element){
        if (/^[a-z ,.'-]+$/i.test(value)) {
            return true;
        }else{
            return false;
        }

    },"Numbers are not allowed for names.");

    Usage: rules:{name:{NoNos:true}}*/

    //Form Validation
    $("#changePasswordForm").validate({
        rules: {
            confirm: {
                required: true,
                minlength: 4,
                maxlength: 8,
                equalTo: "#password"
            },
            password: {
                required: true,
                minlength: 4,
                maxlength: 8
            }
        },
        messages: {
            password: {
                required: "Password is requied.",
                minlength: "Minimum length of password is 4",
                maxlength: "Maximun length of password is 8",
            },
            confirm: {
                required: "Confirm is requied.",
                minlength: "Minimum length  is 4",
                maxlength: "Maximun length  is 8",
                equalTo: "Your password does not match"
            }
        },
        submitHandler: function(form) {
            var confirm = $("#confirm").val();
            var password = $("#password").val();
            var username = $("#username").val();
            $.ajax({
                type: 'POST',
                url: 'change_password_base.php?command=reset',
                data: {
                    confirm: confirm,
                    password: password,
                    username: username
                },
                success: function(data) {
                    console.log(data);
                    //$("#changePasswordModal").modal('hide');
                    if (data.status = 'true') {
                        $("#changePasswordModal").modal('hide');
                    } else {
                        $("#result").html(data);
                    }
                }
            });
        }
    });
});