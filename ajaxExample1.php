<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
<script language="javascript">
	function load_ajax(){
		$.ajax({
			url : "ajaxExample1_result.php",
			type : "POST",
			dataType : "text",
			data : {				
			},
			success: function(result){
				$('#result').html(result);
			}
		})
	}
</script>
<title>AJAX Example</title>
</head>
<body>
	<div id="result">Nội dung ajax sẽ được load ở đây</div>
    <input type="button" name="clickme" id="clickme" onclick="load_ajax()" value="Click Me"/>
</body>
</html>