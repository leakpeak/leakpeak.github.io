<?php
require_once("admin_header.php");
require_once("admin_sidebar.php");
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        <?php echo $title; ?>
        <small><?php echo $title_small; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'admin/'; ?>"><i class="fa fa-dashboard"></i> Admin panel</a></li>
        <li class="active"><?php echo $title; ?></li>
      </ol>
    </section>
    <section class="content settings">
      <?php echo form_open('admin/service'); ?>
      <div class="form-group">
        <label>Admin username </label>
        <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" size="50" />
        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
      </div>
      <div class="form-group">
        <label>Admin password </label>
        <input type="password" class="form-control" name="password" value="" size="50" />
      </div>
      <div class="form-group">
        <label>Password again </label>
        <input type="password" class="form-control" name="password1" value="" size="50" />
      </div>
      <button class="btn btn-success">Save</button>
      <?php echo form_close(); ?>
    </section>
  </div>
<script>$(document).ready(function(){
      $('#users').DataTable();
      });
      
</script>
<?php
require_once("admin_footer.php");
?>