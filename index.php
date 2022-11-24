<?php
require_once "head.php";
include_once "erros.php";
$alert = new erros();
$alert->login();
$alert->existe();
?>

<link rel="stylesheet" type="text/css" href="form.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<?php
require_once "form.php";
require_once "footer.php";
?>