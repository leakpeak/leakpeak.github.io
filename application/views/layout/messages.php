<?php
if (isset($error)||isset($info)){
require_once(APPPATH."libraries/messages.php");
if(!isset($additional)){
    $additional='';
}else{
    $additional.=' ';
}
?><div class="error-box" style="<?php if (isset($info)){echo "background: rgba(59, 140, 73, 0.98);";};?>">
	<div class="row">
	    <div class="col-md-2">
	    </div>
	    <div class="col-md-8">
		<?php if (isset($error)){messages::show($error,$additional);}else{messages::show($info,$additional);}?>
	    </div>
	    <div class="col-md-2">
		<a href="#">X</a>
	    </div>
	    <br>
	</div>
</div>
<?php }
?>