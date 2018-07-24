<?php 
include('header.php');
?>
<title>phpzag.com : Demo Ajax Form Submit with Bootstrap Modal using PHP & MySQL</title>
<script type="text/javascript" src="script/form_process.js"></script>
<?php include('container.php');?>

<div class="container">
	<h2>Example: Ajax Form Submit with Bootstrap Modal using PHP & MySQL</h2>	
	<br />
	<br />
	<br />		
	<div id="feedback"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#feedback-modal">Feedback Modal Form</button></div>
	<div id="feedback-modal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">				
				<div class="modal-header">
					<a class="close" data-dismiss="modal">×</a>
					<h3>Send Feedback</h3>
				</div>				
				<div class="modal-body">
					<form class="feedback" name="feedback">
						<strong>Name</strong>
						<br />
						<input type="text" name="name" class="input-xlarge" value="Laeeq">
						<br /><br /><strong>Email</strong><br />
						<input type="email" name="email" class="input-xlarge" value="phpzag@gmail.com">
						<br /><br /><strong>Message</strong><br />					
						<textarea name="message" class="input-xlarge">Thanks for tutorials and demos!</textarea>
					</form>
				</div>			
				<div class="modal-footer">
					<button class="btn btn-success" id="submit">Send</button>
					<a href="#" class="btn" data-dismiss="modal">Close</a>
				</div>
			</div>
		</div>
	</div>
	
	
	<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="http://www.phpzag.com/bootstrap-modal-form-submit-with-ajax-php" title="">Back to Tutorial</a>			
	</div>		
</div>
<?php include('footer.php');?>