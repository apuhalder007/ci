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
    <?php //echo validation_errors();?>
	<div class="row">
      <!-- left column -->
      <?php 
        $form_attr = array(
          'method' => 'post',
          'class' => 'form-horizontal',
          'enctype' => 'multipart/form-data'
          );

        //$hidden_field = array('id' => $user['id']);
        echo form_open('users/do_update',$form_attr);
        $old_image = isset($user['image'])?  $user['image'] : set_value('old_image');
        ?>
      <div class="col-md-3">
        <div class="text-center">
        <?php if(isset($old_image)):?>
         	<img src="<?php echo base_url('assets/user_images/'.$old_image);?>" class="avatar img-circle" alt="avatar" width="100" height="100">
      	<?php else: ?>
      		<img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
      	<?php endif;?>
          <h6>Upload a different photo...</h6>
          
          <input type="file" name="user_image" class="form-control">
          <input type="hidden" name="old_image" value="<?php echo $old_image;?>" >
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
              <input class="form-control" name="fname" type="text" value="<?php echo $fname = isset($user['fname'])?  $user['fname'] : set_value('fname')?>">
              <?php echo form_error('fname','<span class="alert-danger">', '</span>');?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Last Name:</label>
            <div class="col-md-8">
              <input class="form-control" name="lname" type="text"  value="<?php echo $lname = isset($user['lname'])?  $user['lname'] : set_value('lname')?>">
              <?php echo form_error('lname','<span class="alert-danger">', '</span>');?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Username:</label>
            <div class="col-lg-8">
              <input class="form-control" name="username" type="text" value="<?php echo $username = isset($user['username'])?  $user['username'] : set_value('username')?>">
              <?php echo form_error('username','<span class="alert-danger">', '</span>');?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" type="text" value="<?php if(isset($user['id'])){ echo $user['email'];}else{echo set_value('email');}?>">
              <?php echo form_error('email','<span class="alert-danger">', '</span>');?>
            </div>
          </div>
          <input type="hidden" name="id" value="<?php if(isset($user['id'])){ echo $user['id'];}else{echo set_value('id');}?>" >
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