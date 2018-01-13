  <?php
    $active=substr($_SERVER['REQUEST_URI'], 7);
  ?>
  <aside class="main-sidebar">

    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="header">Admin panel</li>
        <li class="<?php if ($active=='index')echo 'active';?>"><a href="<?php echo base_url(); ?>admin/index"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="<?php if ($active=='claims')echo 'active';?>"><a href="<?php echo base_url(); ?>admin/claims"><i class="fa fa-area-chart"></i> <span>Claims</span></a></li>
        <li class="<?php if ($active=='users')echo 'active';?>"><a href="<?php echo base_url(); ?>admin/users"><i class="fa fa-users"></i> <span>Users</span></a></li>
        <li class="<?php if ($active=='pages')echo 'active';?>"><a href="<?php echo base_url(); ?>admin/pages"><i class="fa fa-file"></i> <span>Pages</span></a></li>
        <li class="<?php if ($active=='menu')echo 'active';?>"><a href="<?php echo base_url(); ?>admin/menu"><i class="fa fa-list"></i> <span>Menu</span></a></li>
        <li class="<?php if ($active=='homepage')echo 'active';?>"><a href="<?php echo base_url(); ?>admin/homepage"><i class="fa fa-home"></i> <span>Homepage Layout (+footer)</span></a></li>
        <li class="<?php if ($active=='js')echo 'active';?>"><a href="<?php echo base_url(); ?>admin/js"><i class="fa fa-file-code-o"></i> <span>Add JavaScript</span></a></li>
        <li class="<?php if ($active=='settings')echo 'active';?>"><a href="<?php echo base_url(); ?>admin/settings"><i class="fa fa-gears"></i> <span>Settings</span></a></li>
        <li class="<?php if ($active=='mining')echo 'active';?>"><a href="<?php echo base_url(); ?>admin/mining"><i class="fa fa-th-large"></i> <span>Mining</span></a></li>
        <li class="<?php if ($active=='styles')echo 'active';?>"><a href="<?php echo base_url(); ?>admin/styles"><i class="fa fa-picture-o"></i> <span>Styles (design settings)</span></a></li>
        <li class="<?php if ($active=='service')echo 'active';?>"><a href="<?php echo base_url(); ?>admin/service"><i class="fa fa-wrench"></i> <span>Service</span></a></li>
        <li class="<?php if ($active=='ban')echo 'active';?>"><a href="<?php echo base_url(); ?>admin/ban"><i class="fa fa-user-secret"></i> <span>IP Ban/Add to whitelist</span></a></li>
        <!--<li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>-->
      </ul>
    </section>
  </aside>