<?php include '../app/view/header.php';?>
<div class = "container-flexbox">
<?php
include '../app/libraries/search.php';
if (isset($_GET["entry-search"]))
Pesquisa($_GET["entry-search"])
?>
</div>