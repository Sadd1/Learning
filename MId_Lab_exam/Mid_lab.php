




<html>
<head>
     
    <title>Registration form</title>
</head>
<body>
    <fieldset>
        <legend>
            <b>REGISTRATION</b>
        </legend>
        <form action='#' method='POST'>
            <table> 
                <tr>
                    <td>
                        Id:
                    </td>
                    <td>
                        <input type="Id" name='Id'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" name='password'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                      Confirm Password:
                    </td>
                    <td>
                        <input type="password" name='password'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Name:
                    </td>
                    <td>
                        <input type="Name" name='name'>
                    </td>
                </tr>
               
                <tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>
                                <b>User type</b>
                            </legend>
                            <input type='radio' name='User_type' value='user'>User
                            <input type='radio' name='User_type' value='admin'>Admin
                           
                        </fieldset>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <input type='submit' value='Submit'>
                        
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>
