<?php     include("../common/header.php");   ?>

<!-- from http://www.ush.it/2009/02/08/php-filesystem-attack-vectors/ -->

<?php hint("will include the arg specified in the POST parameter \"clas\", appends .php to end, defeat with NULL byte %00"); ?>

<form action="/LFI-9/index.php" method="POST">
    <input type="text" name="clas">
</form>

<?php
include('includes/class_'.addslashes($_POST['clas']).'.php');
?>
