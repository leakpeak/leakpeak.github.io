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
      <a href="page/2147483647" class="btn btn-success">Create new page</a>
      <br><br>
      <div class="box">
            <div class="box-header">
            </div>
            <?php echo $pages;?>
          </div>
    </section>
  </div>
<script>$(document).ready(function(){
      $('#pages').DataTable();
      });
      $(".delete-btn").click(function(){
	return confirm('Are you sure you want delete this page?');
      });
</script>
<?php
require_once("admin_footer.php");
?>