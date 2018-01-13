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
        <li><a href="<?php echo base_url().'admin/pages/'; ?>"> pages</a></li>
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
          Page was successfully saved!
        </div>
      </div>
    </div>
       <?php echo form_open('admin/page/'.$id); ?>
       <div class="form-group">
        <label>Title </label>
        <input type="text" class="form-control" required  name="title" value="<?php echo $title; ?>" size="50" />
        <input type="hidden" value="<?php echo $id;?>" name="id">
        <?php echo isset($new) ? '<input type="hidden" value="1" name="new">':  " ";?>
       </div>
       <div class="form-group">
        <label>Slug </label><i class="fa fa-info-circle" title="Userfriendly page address. Like http://your.site/page/SLUG" data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
        <input type="text" class="form-control" required  name="slug" value="<?php echo $slug; ?>" size="50" />
       </div>
        <textarea id="content" name="content">
          <?php echo $content; ?>
        </textarea>
        <div class="form-group">
            <label>
              Published
            </label>
                  <select class="form-control" name="published">
                    <option value="1">Yes</option>
                    <option  <?php echo $published == '1' ? " ":  "selected ";?>value="0">No</option>
                  </select>
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