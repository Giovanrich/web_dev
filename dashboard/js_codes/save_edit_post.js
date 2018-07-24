CKEDITOR.replace('content');
$(function() {
    $("#expDate").datepicker({
        dateFormat: 'yy-mm-dd'
    });
});

CKEDITOR.instances.content.updateElement();
//check if the below code is working
CKEDITOR.instances["content"].on("instanceReady", function () {
this.document.on("keyup", function () { CKEDITOR.instances["content"].updateElement(); });
this.document.on("paste", function () { CKEDITOR.instances["content"].updateElement(); });
this.document.on("cut", function () { CKEDITOR.instances["content"].updateElement(); });
});
$("document").ready(function() {

    $("#editPost").validate({
        ignore:[],
        rules: {
            title: {
                required: true
            },
            content: {
                required: true,
                minlength: 50
            },
            expDate: {
                required: true
            }
        },
        message:{
            title:{
                required:'Title is required'
            },
            content:{
                required:'Content is required',
                minlength: 'Minimum body length required is 50'
            },
            expDate:{
                required:'Exp. Date  is required'
            }
        },
        submitHandler: function() {
            var id = $("#id").val();
            var title = $("#title").val();
            var content = CKEDITOR.instances.content.getData();
            var expDate = $("#expDate").val();
            $.ajax({
                type: 'POST',
                url: 'update_news.php?command=update',
                dataType:'JSON',
                data: {
                    id: id,
                    title: title,

                    content: content,
                    expDate: expDate
                },
                success: function(data) {
                	console.log(data.op);//On update, this is printing{"op":"tt"}
                	console.log(typeof data);
                	//data = $.parseJSON(data);
                    
                    if (data.op =='tt') {
                    	console.log(data);
                      window.location.href= 'post.php'
                    }else{
                    	
                    	alert("Error, no update was done.!");
                    }
                }
            });
        }
    });
});