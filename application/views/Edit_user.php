<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update user</title>
    
</head>
<body>
    <nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#">Student Management</a>
        </div>
        <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li class="active"><a href="<?php echo base_url()."user/create" ?>">Update user</a></li>
        </ul>
    </div>
    </nav>
    <h4>Edit student</h4>
    <form method="post" action="<?php echo base_url()."user/edit/".$user["user_id"];?>" name="create-user">
       <input type="text" name="name" value="<?php echo set_value("name",$user["name"]);  ?>" placeholder="Enter name">
       <?php echo form_error("name"); ?>
       <br>
       <br>
       <input type="email" name="email"  value="<?php echo set_value("email",$user["email"]);  ?>" placeholder="Enter email">
       <?php //echo //form_error("email"); ?>
       <br>
       <br>
       <button type="submit" class="btn btn-default">Update</button>
    </form>
       
</body>
</html>