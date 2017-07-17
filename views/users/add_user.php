<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title;?></title>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1><?php echo $title;?></h1>
    <hr>
    <div class="row">
      <!-- left column -->
      <?php 
        $form_attr = array(
            'method' => 'post',
            'name' => 'add_user',
            'class' => 'form-horizontal',
            'enctype' => 'multipart/form-data'
            );

        $form_hidden = array(
                'add_user' => 1
            );

        echo form_open('users/add_user',$form_attr,$form_hidden);

        ?>
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" name="user_image" class="form-control">
          <?php echo form_error('user_image');?>
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
            <label class="col-lg-3 control-label">First Name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="fname" id="fname" type="text" value="<?php echo set_value('fname');?>">
              <?php echo form_error('fname');?>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Last Name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="lname" id="lname" type="text" value="<?php echo set_value('lname');?>">
              <?php echo form_error('lname');?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" type="text" value="<?php echo set_value('email');?>">
              <?php echo form_error('email');?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Username:</label>
            <div class="col-lg-8">
              <input class="form-control" name="username" id="username" type="text" value="<?php echo set_value('username');?>">
              <?php echo form_error('username');?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" name="password" type="password" value="<?php echo set_value('password');?>">
              <?php echo form_error('password');?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" name="confirm_password" type="password" value="<?php echo set_value('confirm_password');?>">
              <?php echo form_error('confirm_password');?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Add">
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