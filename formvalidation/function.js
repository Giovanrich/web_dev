
    <script type="text/javascript">
    $(document).ready(function() {

    $('#loginForm').validate({
        rules: {
            username: {
                minlength: 4,
                maxlength: 15,
                required: true
            },
            password: {
                minlength: 4,
                maxlength: 15,
                required: true
            }
        },
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

});
</script>