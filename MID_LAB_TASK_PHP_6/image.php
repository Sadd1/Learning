<?php

    if(isset($_FILES['image']))


    {
        if($_FILES['image']['type']== 'image/jpeg' || $_FILES['image']['type'] == 'image/jpg' ||$_FILES['image']['type'] == 'image/png')

        
        {
            echo"successful";
            
        }
        else
        {
            echo ' Not Supported file!';
        }
        
    }
?>
<html>
<head>
    
    <title> image Uploading</title>
</head>
<body>
    <fieldset>
        <legend> PROFILE PICTURE </legend>
        <form action='#' method='POST' >
<table> 
        <tr><td colspan="2">  <img src='user.jpg'/> </td></tr>

        <tr><td> <input type='file' name="image"/> </td></tr>

        <tr><td  colspan="2">  </td></tr>

        <tr> <td colspan="2"><input type='submit' value='Submit'> </td></tr>
</table>
</form>
</fieldset>
</body>
</html>