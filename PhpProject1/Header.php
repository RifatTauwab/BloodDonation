
<?php ob_start(); ?>
<h1>My page</h>
<?php

$redirect=TRUE;
$redirect_page='http://www.google.com';
if($redirect==TRUE){
    header('Location: '.$redirect_page);
}
?>
