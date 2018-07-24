$(document).ready(function(){ 	
	$("button#submit").click(function(){
		$.ajax({
			type: "POST",
			url: "feedback.php",
			data: $('form.feedback').serialize(),
			success: function(message){
				$("#feedback").html(message)
				$("#feedback-modal").modal('hide'); 
			},
			error: function(){
				alert("Error");
			}
		});
	});
	
});
