<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title;?></title>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/users/styles.css">
</head>
<body>
<div class="container-fluid well span6">
    <div class="row-fluid">
        <div class="span2" >
            <?php if($user['image'] !=''):?>
                <img src="<?php echo base_url('assets/user_images/'.$user['image']);?>" class="img-circle" width="100" height="100">
            <?php else:?>
                <img src="https://secure.gravatar.com/avatar/de9b11d0f9c0569ba917393ed5e5b3ab?s=140&r=g&d=mm" class="img-circle">
            <?php endif;?>
            
        </div>
        
        <div class="span8">
            <h3><?php echo $user['username'];?></h3>
            <h6>First Name: <?php echo $user['fname'];?></h6>
            <h6>Last Name: <?php echo $user['lname'];?></h6>
            <h6>Email: <?php echo $user['email'];?></h6>
            
        </div>
        
        <div class="span2">
            <div class="btn-group">
                <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                    Action 
                    <span class="icon-cog icon-white"></span><span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#"><span class="icon-wrench"></span> Modify</a></li>
                    <li><a href="#"><span class="icon-trash"></span> Delete</a></li>
                </ul>
            </div>
        </div>
</div>
</div>
</body>
</html>
