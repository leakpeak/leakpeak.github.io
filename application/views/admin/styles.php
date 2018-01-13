<?php
require_once("admin_header.php");
require_once("admin_sidebar.php");
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        <?php echo $title; ?>
        <small><?php echo $title_small; ?></small><i class="fa fa-info-circle" style="color :#3C8DBC;" title="Leave fields blank for defaults values" data-toggle="tooltip"  data-placement="right" aria-hidden="true"></i>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'admin/'; ?>"><i class="fa fa-dashboard"></i> Admin panel</a></li>
        <li class="active"><?php echo $title; ?></li>
      </ol>
    </section>
    <section class="content settings">
      <?php echo form_open('admin/styles'); ?>
      <div class="form-group">
        <label>Background color </label><i class="fa fa-info-circle" title="Colour here. HEX format prefered (#0h0h0h)" data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
        <input type="text" class="form-control" placeholder="#3C8DBC" name="bg_color" value="<?php echo $bg_color; ?>" size="50" />
      </div>
      <div class="form-group">
        <label>Background image </label><i class="fa fa-info-circle" title="Link to image here." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
        <input type="text" class="form-control" placeholder="http://yourfaucet.com/assets/img/bg_pattern3.jpg" name="bg_image" value="<?php echo $bg_image; ?>" size="50" />
      </div>
      <div class="form-group">
        <label>Overall text color </label><i class="fa fa-info-circle" title="Colour here. HEX format prefered (#0h0h0h)" data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
        <input type="text" class="form-control" placeholder="#3C8DBC" name="body_color" value="<?php echo $body_color; ?>" size="50" />
      </div>
      <div class="form-group">
        <label>Links color </label><i class="fa fa-info-circle" title="Colour here. HEX format prefered (#0h0h0h)" data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
        <input type="text" class="form-control" placeholder="#3C8DBC" name="links_color" value="<?php echo $links_color; ?>" size="50" />
      </div>
      <input type="hidden" name="save" value=1>
      <button class="btn btn-success">Save</button>
      <?php echo form_close(); ?>
    </section>
  </div>

<?php
require_once("admin_footer.php");
?>