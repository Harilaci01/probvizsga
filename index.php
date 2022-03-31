<?php 
session_start();
require 'includes/db.inc.php';
require 'model/Jelentkezes.php';
$jelentkezo= new Jelentkezes;

$page='index';

if(isset($_REQUEST['page'])){    
    if(file_exists('controller/'.$_REQUEST['page'].'.php')){
        $page=$_REQUEST['page'];
    }
}
$menupontok="Bejelentkezem";
$title="Jelentkezés";
include 'includes/htmlheader.php';
?>
<body>
<?php
include 'includes/menu.php';

include 'controller/'.$page.'.php';


?>
   
</body>
</html>	