//Begin validation
$("document").ready(function() {
    //Valid date here
    var dateRegex = /^(?=\d)(?:(?:31(?!.(?:0?[2469]|11))|(?:30|29)(?!.0?2)|29(?=.0?2.(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00)))(?:\x20|$))|(?:2[0-8]|1\d|0?[1-9]))([-.\/])(?:1[012]|0?[1-9])\1(?:1[6-9]|[2-9]\d)?\d\d(?:(?=\x20\d)\x20|$))?(((0?[1-9]|1[012])(:[0-5]\d){0,2}(\x20[AP]M))|([01]\d|2[0-3])(:[0-5]\d){1,2})?$/;
    $.validator.addMethod("CustomDate", function(value, element) {
        // put your own logic here, this is just a (crappy) example
        return value.match(dateRegex);
    }, "Please enter a date in the format yy-dd-mm.");
    CKEDITOR.instances.content.updateElement();
    $("#addPostForm").validate({
        ignore: [], //CKEditor hides the text filed, so unhide it :D
        rules: {
            title: {
                required: true,
                minlength: 10,
                maxlength: 25
            },
            content: {
                required: true
            },
            expDate: {
                required: true
            }
        },
        message: {
            content: "Required"
        },
        submitHandler: function(form) {
            var ow=$("#welc").text();
            var owner = ow.split(/\s+/).pop();
            var title = $("#title").val();
            var content = CKEDITOR.instances.content.getData();
            var expDate = $("#expDate").val();
            $.ajax({
                type: 'POST',
                url: 'server_news.php?command=add',
                data: {
                    owner: owner,
                    title: title,
                    content: content,
                    expDate: expDate
                },
                success: function(data) {
                    $("#addPost").modal('hide');
                    console.log(data);
                    loadData();
                }
            });
        }
    });
});
//Fix the Calendar to today and onwwards
var dateToday = new Date();
$(function() {
    $("#expDate").datepicker({
        numberOfMonths: 1,
        showButtonPanel: true,
        minDate: dateToday,
        dateFormat: 'yy-mm-dd'
    });
});
//Attach the CKEditor
CKEDITOR.replace('content');
//Load data o page load
function loadData() {
    $.ajax({
        type: "GET",
        url: "server_news.php?command=load",
        success: function(data) {
            $('tbody').html(data);
        }
    });
}

//Delete data.
function deleteData(str) {
    var id = str;
    $.ajax({
        type: "GET",
        url: "server_news.php?command=delete",
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
    var title = $("#title-" + str).val();
    var content = $("#content-" + str).val();
    var expDate = $("#expDate-" + str).val();
    event.preventDefault();
    $.ajax({
        type: "post",
        url: "server_news.php?command=update",
        data: {
            id: id,
            title: title,
            content: content,
            expDate: expDate
        },
        success: function(data) {
            //document.getElementsByName('editModal').modal('hide');
            console.log(data);
            loadData();
            $('.modal-backdrop').remove();
        }
    });
}