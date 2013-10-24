<html>
	<head>
		<title></title>
		<style>
			body{
				margin: 0px;
				font-family: verdana;
				font-size: 12px;
				color: #fff;
			}
			#content{
				width: 80%;
				background: #000;
				margin: 0px auto;
			}
			#mainContentHolder{
				width: 80%;
				float: left;
				background: #ff0000;
			}
			#leftContentBar{
				width: 20%;
				float: left;
				background: #efefef;
			}
			@media all and (max-width: 800px) and (min-width: 600px){
				#content{
					width: 100%;
					background: #efefef;
				}
				#leftContentBar{
					width: 20%;
					background: #ff0000;
				}
				#mainContentHolder{
					width: 80%;
					float: left;
					background: #ff0000;
				}
			}
			@media all and (max-width: 599px) and (min-width: 0px){
				#content{
					width: 100%;
					background: #efefef;
				}
				#leftContentBar{
					width: 100%;
					background: #ff0000;
					clear: both;
				}
				#mainContentHolder{
					width: 100%;
					float: left;
					background: #ff0000;
				}
			}
		</style>
		<script type="text/javascript" src="js/jquery.js"></script>
	</head>
	<body>
		<div id="content">
			<?php echo $content->contents; ?>
		</div>
	</body>
</html>