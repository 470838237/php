<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<title>Welcome</title>

<style type="text/css">
#info {
	width:30%;
	
	margin-top: 10em;
	margin-left: 50em;
	
}

input, select {
	width: 15em;
	height: 2.5em;
	margin-top: 2em;
	
}



label {
	margin-right: 20px;
}

#submit{
	width: 100%;
	margin-left:0em;
	text-align: center;
}


.error {color: #FF0000;}
</style>
</head>
<body>
<?php
	

	$nameErr = $birthdayErr ="";
	$name = $borthday ="" ;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["full_name"])) {
    $nameErr = "请填入姓名";
  } else {
 //   $name = test_input($_POST["name"]);
  }

  if (empty($_POST["borthday"])) {
    $birthdayErr = "请选择生日";
  } else {
  //  $borthday = test_input($_POST["borthday"]);
  }


  
}






?>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="info">
	
		<label for="full_name">姓名:</label> <input type="text" id="full_name"name="full_name">
		<span class="error">* <?php echo $nameErr;?></span><br><br>
		
		
		
		<label for="borthday">生日:</label><input type="date" id="borthday" name="borthday">
		<span class="error">* <?php echo $birthdayErr;?></span><br> <br>
		
		<label for="gender">性别:</label> <select name="gender"id="gender">
			<option value="1" selected="selected">男</option>
			<option value="2">女</option>
		</select>
		<span class="error"><br> <br>
		
		<div id="submit"><input type="submit" name="提交"></div>
	</form>



</body>
</html>

