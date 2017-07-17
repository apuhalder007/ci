<!DOCTYPE html>
<html>
<head>
	<title>User Edit</title>
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <?php 
        $form_attr = array(
          'method' => 'post',
          'class' => 'form-horizontal',
          'enctype' => 'multipart/form-data'
          );

        $hidden_field = array('id' => $user['id']);
        echo form_open('users/do_update',$form_attr,$hidden_field);

        ?>
      <div class="col-md-3">
        <div class="text-center">
        <?php if($user['image']):?>
         	<img src="<?php echo base_url('assets/user_images/'.$user['image']);?>" class="avatar img-circle" alt="avatar" width="100" height="100">
      	<?php else: ?>
      		<img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
      	<?php endif;?>
          <h6>Upload a different photo...</h6>
          
          <input type="file" name="user_image" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
        <h3>Personal info</h3>
        
        
          <div class="form-group">
            <label class="col-md-3 control-label">First Name:</label>
            <div class="col-md-8">
              <input class="form-control" name="fname" type="text" value="<?php echo $user['fname'];?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Last Name:</label>
            <div class="col-md-8">
              <input class="form-control" name="lname" type="text" value="<?php echo $user['lname'];?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Username:</label>
            <div class="col-lg-8">
              <input class="form-control" name="username" type="text" value="<?php echo $user['username'];?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" type="text" value="<?php echo $user['email'];?>">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        <?php echo form_close();?>
      </div>
  </div>
</div>
<hr>
</body>
</html>