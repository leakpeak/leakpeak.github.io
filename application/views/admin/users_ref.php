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
      <div class="row">
        <div class="col-md-12">
        <div class="alert alert-success alert-dismissible"  <?php  echo !isset($success) ? "style='display: none; color: green;'"  : "style='display: block; color: green;'";  ?>>
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          <h4><i class="icon fa fa-check"></i> Success.</h4>
          Payment sent!
        </div>
        </div>
      </div>
      <div class="box">
            <div class="box-header">
            </div>
            <?php echo $users;?>
          </div>
    </section>
  </div>
<script>$(document).ready(function(){
      $('#users').DataTable();
      });
$(".pay-btn").click(function(){
	return confirm('Are you sure you want pay this user?');
      });
      
</script>
<?php
require_once("admin_footer.php");
?>