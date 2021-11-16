<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add users page</title>
    
</head>
<body>
    <nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#">Student Management</a>
        </div>
        <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li class="active"><a href="<?php echo base_url()."user/create"; ?>">Add student</a></li>
        </ul>
    </div>
    </nav>
    <h4>Add student</h4>
    <form method="post" action="<?php echo base_url()."user/create";?>" name="create-user">
       <input type="text" name="name" value="<?php echo set_value("name");  ?>" placeholder="Enter name">
       <?php echo form_error("name"); ?>
       <br>
       <br>
       <input type="email" name="email"  value="<?php echo set_value("email");  ?>" placeholder="Enter email">
       <?php echo form_error("email"); ?>
       <br>
       <br>
       <button type="submit" class="btn btn-default">Submit</button>
    </form>
       
</body>
</html>