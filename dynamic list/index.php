<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dynamic SelectBox</title>
<script type="text/javascript" src="jquery.js"></script><script type="text/javascript">
			$(document).ready(district_selectbox_change);
			function district_selectbox_change(){
				$('#district').change(update_sub_list);
			}
			function update_sub_list(){
				var district=$('#district').attr('value');
				$.get('get_list.php?district='+district, show_sub);
			}
			function show_sub(sub){
				$('#sub_list').html(sub);
			}
</script>
<style type="text/css">
body
{
text-align:center;
font-family:Georgia, "Times New Roman", Times, serif;
color:#000000;
background:#f1f1f1;
}
h3
{
font-size:28px;
line-height:35px;
color:#c00000;
}
</style>
</head>

<body>
<h3>Jquery Dynamic SelectBox</h3>
<form>

		<select name="district" id="district">
		<option value=""> -- please choose -- </option>
		<option value="THANE">THANE</option>
		<option value="PUNE">PUNE</option>
		</select><br>
		<div id="sub_list">
		</div>
</form>
</body>
</html>
