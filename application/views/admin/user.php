<?php
require_once("admin_header.php");
require_once("admin_sidebar.php");
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Edit: <?php echo $title; ?>
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
          User was successfully saved!
        </div>
      </div>
    </div>
       <?php echo form_open('admin/user/'.$id); ?>
       <div class="form-group">
        <label>BTC address </label><i class="fa fa-info-circle" title="Be super careful editing this." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
        <input type="text" class="form-control" required  name="username" value="<?php echo $username; ?>" size="50" />
        <input type="hidden" value="<?php echo $id;?>" name="id">
        <?php echo isset($new) ? '<input type="hidden" value="1" name="new">':  " ";?>
       </div>
       <div class="form-group">
        <label>Balance </label><i class="fa fa-info-circle" title="User balance (in satoshi)." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
        <input type="number" class="form-control" required  name="balance" value="<?php echo $balance; ?>" size="50" />
       </div>
       <div class="form-group">
        <label>Personal withdraw threshold </label><i class="fa fa-info-circle" title="0 to disable." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
        <input type="number" class="form-control" required  name="threshold" value="<?php echo $threshold; ?>" size="50" />
       </div>
       <div class="form-group">
        <label>Referal </label><i class="fa fa-info-circle" title="Referal address" data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
        <input type="text" class="form-control" placeholder=""  name="referal" value="<?php echo $referal; ?>" size="50" />
       </div>
       <div class="form-group">
        <label>Payment system </label><i class="fa fa-info-circle" title="Withdraw system code.    1 - FaucetHUB, 2 - EPay, 3 - XAPO" data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
        <input type="number" class="form-control" required  name="withdraw sys" value="<?php echo $withdraw_sys; ?>" size="50" />
       </div>
        <br>
        <button class="btn btn-success">Save</button>
       <?php echo form_close();?>
    </section>
  </div>
<script>
  // Replace the <textarea id="editor1"> with a CKEditor
  // instance, using default configuration.
  CKEDITOR.replace( 'content' );
</script>
<?php
require_once("admin_footer.php");
?>