<!DOCTYPE html>
<html>
<head>
	<title>Scrollable Modal</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.bsPhotoGallery.css">
	<style type="text/css">
ul {
  padding:0 0 0 0;
  margin:0 0 0 0;
}
ul li {
  list-style:none;
  margin-bottom:25px;
}
ul li img {
  cursor: pointer;}

/*Panel tabs*/
.panel-tabs {
    position: relative;
    bottom: 30px;
    clear:both;
    border-bottom: 1px solid transparent;
}

.panel-tabs > li {
    float: left;
    margin-bottom: -1px;
}

.panel-tabs > li > a {
    margin-right: 2px;
    margin-top: 4px;
    line-height: .85;
    border: 1px solid transparent;
    border-radius: 4px 4px 0 0;
    color: #ffffff;
}

.panel-tabs > li > a:hover {
    border-color: transparent;
    color: #ffffff;
    background-color: transparent;
}

.panel-tabs > li.active > a,
.panel-tabs > li.active > a:hover,
.panel-tabs > li.active > a:focus {
    color: #fff;
    cursor: default;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    background-color: rgba(255,255,255, .23);
    border-bottom-color: transparent;
}

/* Portrait phones and smaller */
@media (max-width: 480px) {
	.panel-title{
		color: transparent;
	}

}

</style>

</head>
<body>




      <br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Panel title</h3>
                    <span class="pull-right">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab">Tab 1</a></li>
                            <li><a href="#tab2" data-toggle="tab">Tab 2</a></li>
                            <li><a href="#tab3" data-toggle="tab">Tab 3</a></li>
                            <li><a href="#tab4" data-toggle="tab">Tab 4</a></li>
                        </ul>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1"> <ul class="first">
					    
					    <li>
					        <img alt="Yellow boy" src="images/6.jpg">
					    </li>
					    <li>
					        <img "Some colors"  src="images/7.png">
					    </li>
					    <li>
					        <img alt="Night away"  src="images/8.png">
					        <p class="text">Optional text. This will also show in the modal</p>
					    </li>
					    <li>
					        <img alt="Yellow boy" src="images/9.png">
					    </li>
					    <li>
					        <img "Some colors"  src="images/6.jpg">
					    </li>
					  
					  </ul>
						</div>
                        <div class="tab-pane" id="tab2"> <ul class="first">
					    <li>
					        <img alt="Night away"  src="images/5.png">
					        <p class="text">Optional text. This will also show in the modal</p>
					    </li>
					    <li>
					        <img alt="Yellow boy" src="images/6.jpg">
					    </li>
					    <li>
					        <img "Some colors"  src="images/7.png">
					    </li>
					 
					    <li>
					        <img alt="Yellow boy" src="images/9.png">
					    </li>
					    <li>
					        <img "Some colors"  src="images/6.jpg">
					    </li>
					  
					  </ul>
						</div>
                        <div class="tab-pane" id="tab3"> <ul class="first">
					 
					    <li>
					        <img alt="Yellow boy" src="images/6.jpg">
					    </li>
					    <li>
					        <img "Some colors"  src="images/7.png">
					    </li>
					    <li>
					        <img alt="Night away"  src="images/8.png">
					        <p class="text">Optional text. This will also show in the modal</p>
					    </li>
					    <li>
					        <img alt="Yellow boy" src="images/9.png">
					    </li>
					    <li>
					        <img "Some colors"  src="images/6.jpg">
					    </li>
					  
					  </ul>
						</div>
                        <div class="tab-pane" id="tab4">

                             <ul class="first">
					    <li>
					        <img alt="Night away"  src="images/5.png">
					        <p class="text">Optional text. This will also show in the modal</p>
					    </li>
					    <li>
					        <img alt="Yellow boy" src="images/6.jpg">
					    </li>
					    <li>
					        <img "Some colors"  src="images/7.png">
					    </li>
					    <li>
					        <img alt="Night away"  src="images/8.png">
					        <p class="text">Optional text. This will also show in the modal</p>
					    </li>
					    <li>
					        <img alt="Yellow boy" src="images/9.png">
					    </li>
					    <li>
					        <img "Some colors"  src="images/6.jpg">
					    </li>
					  
					  </ul>
						</div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>







					<div class="container">
						 <ul class="first">
					    <li>
					        <img alt="Night away"  src="images/5.png">
					        <p class="text">Optional text. This will also show in the modal</p>
					    </li>
					    <li>
					        <img alt="Yellow boy" src="images/6.jpg">
					    </li>
					    <li>
					        <img "Some colors"  src="images/7.png">
					    </li>
					    <li>
					        <img alt="Night away"  src="images/8.png">
					        <p class="text">Optional text. This will also show in the modal</p>
					    </li>
					    <li>
					        <img alt="Yellow boy" src="images/9.png">
					    </li>
					    <li>
					        <img "Some colors"  src="images/6.jpg">
					    </li>
					  
					  </ul>
						
					</div>

 		<script src="js/jquery-3.1.1.min.js"></script>
 		<script src="js/jquery.bsPhotoGallery.js"></script>
 		<script src="js/bootstrap.min.js"></script>
 		<script type="text/javascript">
 		$(document).ready(function(){
  $('ul.first').bsPhotoGallery({
    "classes" : "col-lg-2 col-md-4 col-sm-3 col-xs-4 col-xxs-12",
    "hasModal" : true
  });
});</script>
 		
</body>
</html>