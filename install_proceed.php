<?php
error_reporting(E_ALL);
if (isset($_POST['domain'])&&$_POST['domain']!=''
    &&isset($_POST['db_host'])&&$_POST['db_host']!=''
    &&isset($_POST['db_name'])&&$_POST['db_name']!=''
    &&isset($_POST['db_user'])&&$_POST['db_user']!=''
    &&isset($_POST['db_pass']))
    {
        function write_to_file($filename, $data){
            $fp = fopen($filename, 'w');
                fwrite($fp, $data);
                fclose($fp);
        }
        $host = $_POST['db_host'];
        $db   = $_POST['db_name'];
        $user = $_POST['db_user'];
        $pass = $_POST['db_pass'];
        $charset = 'utf8';
    
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $pdo = new PDO($dsn, $user, $pass, $opt);
        $sql = file_get_contents('database.sql');
        $pdo->exec($sql);
        $text="<?php
                ".'$'."db['default']['hostname']= '$host';                         // HOSTNAME HERE
                ".'$'."db['default']['username']=  '$user';                      // USERNAME HERE
                ".'$'."db['default']['password']=  '$pass';                     // PASSWORD HERE
                ".'$'."db['default']['database']=  '$db';                     // DB NAME HERE
                ".'$'."db['default']['dbdriver']=  'mysqli'; 
        ";
        write_to_file('application/config/db.php', $text);
        $text="<?php
        ".'$'."config['base_url'] = '".$_POST['domain']."';
        ";
        write_to_file('application/config/siteurl.php', $text);
        $text="RewriteEngine on
RewriteCond $1 !^(index\.php|resources|robots\.txt) 
RewriteCond %{REQUEST_FILENAME} !-f 
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_URI} !/assets
RewriteRule ^(.*)$ index.php?/$1 [L,QSA]
RewriteRule page/assets/img/([^.]+\.(jpe?g|gif|bmp|png))$ /assets/img/$1 [R=301,L,NC]
RewriteRule page/assets/img/uploads/([^.]+\.(jpe?g|gif|bmp|png))$ /assets/img/uploads/$1 [R=301,L,NC]
RewriteRule admin/assets/img/([^.]+\.(jpe?g|gif|bmp|png))$ /assets/img/$1 [R=301,L,NC]
RewriteRule admin/assets/img/uploads/([^.]+\.(jpe?g|gif|bmp|png))$ /assets/img/uploads/$1 [R=301,L,NC]
        ";
        write_to_file('.htaccess', $text);
        $file = file("index.php");
        $fp=fopen("index.php","w");
        unset($file[55]);
        fputs($fp,implode("",$file));
        fclose($fp);
        header("Location: ".$_POST['domain']);
        unlink("install.php");
        unlink("install_proceed.php");
    }else{
        echo "You missed something, <a style='color: red; font-weight: bold; font-size: 20px;' href='install.php'>go back and try again.</a> If you have no ideas why it happening email me - support@deep64.com";
    }


