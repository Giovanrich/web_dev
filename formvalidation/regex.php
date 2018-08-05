<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet"  href="css/bootstrap-theme.min.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <script type="text/javascript">
        $().ready(function() {
            $.validator.addMethod("EMAIL", function(value, element) {
                return this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/i.test(value);
            }, "Email Address is invalid: Please enter a valid email address.");

            $.validator.addMethod("PASSWORD",function(value,element){
                return this.optional(element) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$/i.test(value);
            },"Passwords are 8-16 characters with uppercase letters, lowercase letters and at least one number.");

            $.validator.addMethod("SUBMIT",function(value,element){
                return this.optional(element) || /[^ ]/i.test(value);
            },"You did not click the submit button.");

            // Validate signup form on keyup and submit
            $("#LOGIN").validate({
                rules: {
                    EMAIL: "required EMAIL",
                    PASSWORD: "required PASSWORD",
                    SUBMIT: "required SUBMIT",
                },
            });
        });
    </script>
</head>
<body>
    <div id="LOGIN_FORM" class="form">
        <form id="LOGIN" name="LOGIN" method="post" action="">
            <h1>Log In</h1>
            <div id="LOGIN_EMAIL">
                <label for="EMAIL">Email Address</label>
                <input id="EMAIL" name="EMAIL" type="text" value="" tabindex="1" />
            </div>
            <div id="LOGIN_PASSWORD">
                <label for="PASSWORD">Password</label>
                <input id="PASSWORD" name="PASSWORD" type="password" value="" tabindex="2" />
            </div>
            <div id="LOGIN_SUBMIT">
                <input id="SUBMIT" name="SUBMIT" type="submit" value="Submit" tabindex="3" />
            </div>
        </form>
    </div>
</body>
</html>