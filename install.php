<?php

?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard | FaucetCMS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="assets/css/custom.css">
    

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="assets/js/jquery.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $(function () {
        $("[rel='tooltip']").tooltip();
    });
</script>
</head>
<body>
    <section class="content-header">
      <h1>
        FaucetCMS first setup.     </h1>
    </section>
    <section class="content settings">
    <?php if (!is_writable(getcwd()."/application/config/")) {echo "<p style='color: red;'>Looks like application has no rights to write into ".getcwd()."/application/config/"." folder, please set properly writing rights and restart installation.</p>"; die();} ?>
       <form action="install_proceed.php" method="post" accept-charset="utf-8">
       <div class="form-group">
        <label>Faucet domain. Note, if you are using your faucet in a subdirectory (e.g http://yoursite.com/faucet) include subdirectory also. </label><i class="fa fa-info-circle" title="Don't forget http://" data-toggle="tooltip" data-placement="left" aria-hidden="true" rel="tooltip"></i>
        <input type="url" class="form-control" required="" name="domain" value="<?php echo (isset($_SERVER['HTTPS']) ? 'https' : 'http') . substr("://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", 0, -11 ); ?>" placeholder="http://yoursite.com/" size="50">
       </div>
       <div class="form-group">
        <label>Database host (localhost usually, but can be different especially on free hostings). </label><i class="fa fa-info-circle" title="Database location" data-toggle="tooltip" data-placement="left" aria-hidden="true" rel="tooltip"></i>
        <input type="text" class="form-control" required="" name="db_host" placeholder="localhost" value="localhost" size="50">
       </div>
       <div class="form-group">
        <label>Database name </label><i class="fa fa-info-circle" title="Name of your database" data-toggle="tooltip" data-placement="left" aria-hidden="true" rel="tooltip"></i>
        <input type="text" class="form-control" required="" name="db_name" placeholder="db_name" size="50">
       </div>
       <div class="form-group">
        <label>Database user </label><i class="fa fa-info-circle" title="Database user" data-toggle="tooltip" data-placement="left" aria-hidden="true" rel="tooltip"></i>
        <input type="text" class="form-control" name="db_user"  placeholder="username" size="50">
       </div>
       <div class="form-group">
        <label>Database password </label><i class="fa fa-info-circle" title="Database password" data-toggle="tooltip" data-placement="left" aria-hidden="true" rel="tooltip"></i>
        <input type="text" class="form-control" name="db_pass" placeholder="password" size="50">
       </div>
        <br>
        <button class="btn btn-success">Save</button>
       </form>    </section>
</body></html>