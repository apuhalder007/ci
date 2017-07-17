<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
	
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/auth/signin.css">
</head>
<body>
<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
      <?php 
      $attr = array('name'=>'signinForm','class'=>'signinForm','id'=>'signinForm', 'method'=>'post','role'=>'login','enctype'=>'multipart/form-data');
      echo form_open('auth/signin',$attr);
      ?>
          <img src="http://i.imgur.com/RcmcLv4.png" class="img-responsive" alt="" />
          <p><?php echo validation_errors(); ?></p>
          <?php if($this->session->flashdata('loginerror')){?>
          <p><?php echo $this->session->flashdata('loginerror');?></p>
          <?php }?>
          <input type="email" name="username" placeholder="Email" required class="form-control input-lg" value="joestudent@gmail.com" />
          
          <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password" required="" />  
          
          <div class="pwstrength_viewport_progress"></div>
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div>
            <a href="#">Create account</a> or <a href="#">reset password</a>
          </div>
          
        <?php echo form_close(); ?>
        
        <div class="form-links">
          <a href="#">www.website.com</a>
        </div>
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

  </div>
  
  <p>
    <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fbootsnipp.com%2Fiframe%2FW00op" target="_blank"><small>HTML</small><sup>5</sup></a>
    <br>
    <br>
  </p>     
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="assets/js/auth/signin.js"></script>
</body>
</html>
