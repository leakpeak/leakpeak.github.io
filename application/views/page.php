<?php
require_once("layout/header.php");
?>
    <div id="blue">
        <div class="container">
            <div class="row">
        <h3><?php echo $title;?></h3>
    </div>
            </div> 
    </div>
    <div class="container mtb">
        <div class="row">
            <div class="col-lg-12">
                <?php echo $content;?>
            </div>
        </div>
    </div>

<?php
require_once("layout/footer.php");
?>