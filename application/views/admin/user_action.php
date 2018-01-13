<?php
require_once("admin_header.php");
require_once("admin_sidebar.php");
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Change status: <?php echo $title; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'/admin/'; ?>"><i class="fa fa-dashboard"></i> Admin panel</a></li>
        <li><a href="<?php echo base_url().'admin/users/'; ?>"> users</a></li>
        <li class="active"><?php echo $title; ?></li>
      </ol>
    </section>
    <section class="content settings">
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-error alert-dismissible"  <?php if (validation_errors()==''){echo "style='display: none'";} ?>>
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          <h4><i class="icon fa fa-check"></i> Error.</h4>
          <?php echo validation_errors(); ?>
        </div>
        <div class="alert alert-success alert-dismissible"  <?php  echo !isset($success) ? "style='display: none; color: green;'"  : "style='display: block; color: green;'";  ?>>
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          <h4><i class="icon fa fa-check"></i> Success.</h4>
          User status successfully updated!
        </div>
      </div>
    </div>
      <h3><?php echo $username;?>
      <span style="font-size: 14px; font-weight: normal;">Current status: 
	<?php
	switch($status){
	  case 1: 
	    echo '<span class="label label-success">Active</span>';
	    break;
	  case 2:
	    echo '<span class="label label-warning">On hold</span>';
            break;
	  case -1:
	    echo '<span class="label label-danger">Banned</span>';
	    break;
    	}?>
      </span>
      </h3>
      <h4><?php echo $ip_address;?></h4>
      <br>
      <div class="user-actions">
       <?php echo form_open('admin/user_action/'.$id); ?>
        <input type="hidden" value="<?php echo $id;?>" name="id">
        <input type="hidden" value="1" name="active">
        <button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i> Activate</button>
       <?php echo form_close();?>
       <?php echo form_open('admin/user_action/'.$id); ?>
        <input type="hidden" value="<?php echo $id;?>" name="id">
        <input type="hidden" value="-1" name="active">
	<input type="hidden" value="<?php echo $ip_address;?>" name="ip">
        <button class="btn btn-danger ban-btn"><i class="fa fa-ban" aria-hidden="true"></i> Ban</button>
       <?php echo form_close();?>
       <?php echo form_open('admin/user_action/'.$id); ?>
        <input type="hidden" value="<?php echo $id;?>" name="id">
        <input type="hidden" value="2" name="active">
        <button class="btn btn-warning hold-btn"><i class="fa fa-hand-stop-o" aria-hidden="true"></i> Hold</button>
       <?php echo form_close();?>
       <?php echo form_open('admin/user_action/'.$id); ?>
        <input type="hidden" value="<?php echo $id;?>" name="id">
        <input type="hidden" value="-10" name="active">
        <button class="btn btn-danger delete-btn"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
       <?php echo form_close();?>
       </div>
    </section>
  </div>
<script>
$(".delete-btn").click(function(){
	return confirm('Are you sure you want delete this user?');
      });
$(".ban-btn").click(function(){
	return confirm('Are you sure you want ban this user?');
      });
$(".hold-btn").click(function(){
	return confirm('Are you sure you want hold this user?');
      });
</script>
<?php
require_once("admin_footer.php");
?>