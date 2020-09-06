<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title></title>
</head>
<body>
	<div id="#show"></div>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			setInterval(function() {
				$('#show').load('student_requests_page.php')
			}, 3000);
		});
	</script>

</body>
</html>