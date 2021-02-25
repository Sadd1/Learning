
<?php

	if(isset($_POST['myname']))

	{
		$name 		= $_POST['myname'];

		$n_len=strlen($name);

		if( $n_len>1 && (($name>='A'&&$name<='Z') || ($name>='a'&&$name<='z') || 
			($name>='0'&&$name<='9') || $name=='-' || $name=='_' || $name=='.')){
		echo "Successfull  Name";
				echo "<br>";
		}else{
			echo "Name at least 2 Characters";
			echo "<br>";
		}
	}else{
		echo "Requir Name ";
		echo "<br>";
	}


	if(isset($_POST['password']))
	{
		$password = $_POST['password'];
		$p_len=strlen($password);

		if($p_len>7 && (($password=='@') || ($password=='#')||  
			($password=='%')|| ($password>='A'&&$password<='Z') || ($password>='a'
			&&$password<='z') || ($password>='0'&&$password<='9') || $password=='-' 
			|| $password=='_' || $password=='.')){
				echo "Succesful Password";
				echo "<br>";
		}else{
			echo "Password at least 8 Characters";
			echo "<br>";
		}
	}
	else{
		echo "Required Password field";
		echo "<br>";
	}

    ?>

<html>
<head>

    <title> User login</title>
<body>

        <form class= "" action="" method="post">

<fieldset>

        <legend> LOGIN </legend>
        <table>
<tr>

            <td> User Name </td>

    <td><input type="text" name="myname" value=""></td>
</tr>

        <td>Password</td>

            <td><input type="password" name="password" value=""></td> <br>

</tr>

</table>

        <input type="checkbox" name="" value=""> Remember Me <br> <br>
        <input type="submit" name="submit" value="submit">

    <a href=""><u>Forgot Password?</u></a>

</fieldset>
</form>
</body>
</html>



