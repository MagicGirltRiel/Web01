<!DOCTYPE html>
<html>
    <head>
          <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
          <title></title>
    </head>
    <body>
           <?php
           $uploaddir = './FileUpload/';
           $uploadfile = $uploaddir.basename($_FILES['image']['name']);
           move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
           ?> 
           <img src="<?=$_FILES['profile']['name']?>" />
    </body>
</html>
