<?php
    if
    (isset($_POST['current']) && isset($_POST['new']) && isset($_POST['confirm_new']))

    {
        if
        ($_POST['current'] == $_POST['new'])
        {
            echo "Bew password different from current password<br>";
        }
        if
        ($_POST['new'] != $_POST['confirm_new'])
        {

            echo "New Password must match with the Retyped Password<br>";
        }
    }

?>

<html>
<head>
     
<title> Password</title>
</head>
<body>
    <fieldset>
        <legend> CHANGE PASSWORD  </legend>
        <form action='#' method='POST'>
            <table> 
                <tr><td>  Current Password: </td><td>
                <input type="text" name='current'>
                    </td></tr>

                <tr><td> New Password: </td><td>
                <input type="password" name='new'>
                    </td></tr>

                    <tr><td> Retype New Password: </td><td>
                <input type="paassword" name='confirm_new'>
                    </td></tr>


                <tr><td colspan="2"><hr>
                    </td></tr>
                    <tr><td colspan="2">
                    <input type='submit' value='Submit'>
                    </td></tr>
</table>
 </form>
</fieldset>
</body>
</html>