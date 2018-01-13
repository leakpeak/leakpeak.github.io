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
      <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Customize query</h3>&nbsp;&nbsp;<button class="btn btn-info">Show</button><i class="fa fa-info-circle" title="You can leave any of fileds blank. Default time from - yesterday. Default ime to - now." data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
              </div>
            <div class="box-body search_param">
              <?php echo form_open('admin/claims'); ?>
              <div class="row">
                <div class="col-md-4">
                  <?php echo isset($_POST['id'])? '<input type="hidden" name="id" value="'.$_POST['id'].'">': '';?>
                  <div class="form-group">
                    <label>Date from:</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" name="time_from" id="datepicker1">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Date to:</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" name="time_to" id="datepicker2">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>IP:</label>
                    <input type="text" class="form-control" name="ip" value="<?php echo $this->input->post('ip')!=''? $this->input->post('ip'):'';?>">
                  </div>
                  <div class="form-group">
                    <label>BTC address:</label>
                    <input type="text" class="form-control" name="btc_address" value="<?php echo $this->input->post('btc_address')!=''? $this->input->post('btc_address'):'';?>">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Status:</label><i class="fa fa-info-circle" title="1 for success. 0 for error" data-toggle="tooltip"  data-placement="left" aria-hidden="true"></i>
                    <input type="number" class="form-control" name="success" value="<?php echo $this->input->post('success')!=''? $this->input->post('success'):'';?>">
                  </div>
                  <div class="form-group">
                    <label>User-agent:</label>
                    <input type="text" class="form-control" name="user_agent" value="<?php echo $this->input->post('user_agent')!=''? $this->input->post('user_agent'):'';?>">
                  </div>
                </div>
              </div>
              
              <button class="btn btn-success">Go</button>
              <?php echo form_close();?>
              
            </div>
            
      </div>
      <div class="box">
            <div class="box-header">
            </div>
            <?php echo $claims;?>
          </div>
    </section>
  </div>
<script>
$(document).ready(function(){
      $('#claims').DataTable({
       
         "order": [[ 1, "desc" ],[ 2, "desc" ]]
      } );
  });
  $('.btn-info').click(function(){
    if ($('.search_param').css('display')=='block'||$('.search_param').css('display')=='inline-block') {
      $('.btn-info').html("Show");
      $('.search_param').hide();
    }else{
      $('.search_param').show();
      $('.btn-info').html("Hide");
    }
  });

      
</script>
<?php
require_once("admin_footer.php");
?>