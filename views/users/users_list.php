<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/users/styles.css">
</head>
<body>
<hr>
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box no-header clearfix">
                <div class="main-box-body clearfix">
                    <div class="table-responsive">
                        <table class="table user-list">
                            <thead>
                                <tr>
                                    <td colspan="5">
                                        <?php
                                         if($this->session->flashdata('done')){
                                            echo '<div class="alert alert-success">';
                                            echo $this->session->flashdata('done');
                                            echo '</div>';
                                         }
                                        ?>


                                        <?php
                                         if($this->session->flashdata('error')){
                                            echo '<div class="alert alert-danger">';
                                            echo $this->session->flashdata('error');
                                            echo '</div>';
                                         }
                                        ?>

                                    </td>
                                </tr>
                                <tr>

                                    <td colspan="5">
                                        <?php
                                            $attribute = array(
                                                'class'=>'table-link danger'
                                                );

                                            $text = '<span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
                                            </span>';

                                            echo anchor('users/add_user/', $text, $attribute);
                                       ?>
                                    </td>
                                </tr>
                                <tr>
                                <th><span>User</span></th>
                                <th><span>Created</span></th>
                                <th class="text-center"><span>Status</span></th>
                                <th><span>Email</span></th>
                                <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php //var_dump($users);?>
                            <?php foreach($users as $user):?>
                                <tr>
                                    <td>
                                        <?php if($user['image']):?>
                                            <img src="<?php echo base_url('assets/user_images/'.$user['image']);?>" class="avatar img-circle" alt="avatar" >
                                        <?php else: ?>
                                            <img src="https://bootdey.com/img/Content/user_1.jpg" alt="avatar">
                                        <?php endif;?>

                                        <?php 
                                            $anchor_text = ucfirst($user['username']);

                                            $anchor_attr = array(
                                                        "class" => "user-link"
                                                ); 
                                        ?>
                                        
                                        <?php echo anchor('users/details/'.$user['id'], $anchor_text, $anchor_attr); ?>
                                    </td>
                                    <td>2013/08/12</td>
                                    <td class="text-center">
                                        <span class="label label-default">pending</span>
                                    </td>
                                    <td>
                                        <a href="#"><?php echo $user['email'];?></a>
                                    </td>
                                    <td style="width: 20%;">

                                        <?php
                                            $attribute = array(
                                                'class'=>'table-link'
                                                );

                                            $text = '<span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                            </span>';

                                            echo anchor('users/details/'.$user["id"], $text, $attribute);
                                       ?>

                                       <?php
                                            $attribute = array(
                                                'class'=>'table-link'
                                                );

                                            $text = '<span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                </span>';

                                            echo anchor('users/update/'.$user["id"], $text, $attribute);
                                       ?>


                                       <?php
                                            $attribute = array(
                                                'class'=>'table-link danger'
                                                );

                                            $text = '<span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                            </span>';

                                            echo anchor('users/delele/'.$user["id"], $text, $attribute);
                                       ?>

                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>

                       <?php echo $this->pagination->create_links();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
