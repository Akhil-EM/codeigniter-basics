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
        <a class="navbar-brand" href="/">Student Management</a>
        </div>
        <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url()."user/create"; ?>">Home</a></li>
        <li class="active"><a href="<?php echo base_url()."user/create"; ?>">Add student</a></li>
        </ul>
    </div>
    </nav>
    <h4>Students</h4>
    <table>
      <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Edit</th>
          <th>Delete</th>
      </tr> 
      <?php
         if(!empty($users)){
           foreach ($users as $key => $user) {?>
              
              <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $user["name"]; ?></td>
                <td><?php echo $user["email"]; ?></td>
               
                <td><a href="<?php echo base_url()."user/edit/".$user["user_id"];; ?>">Edit</a></td>
                <td><a href="<?php echo base_url()."user/delete/".$user["user_id"]; ?>">Delete</a></td>
              </tr>
          
         <?php  } }else{ ?>
            <tr>
              <td colspan="5">Records not found !!!</td>
            </tr>
         <?php
            
         }?>
    </table>
    
</body>
</html>