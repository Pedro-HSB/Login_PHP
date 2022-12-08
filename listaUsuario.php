<!-- <link rel="stylesheet" type="text/css" href="table.css"> -->
 
<?php
session_start();
if (isset($_SESSION['user'])) {
  header('location: index.php?session');
  session_destroy();
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<table class="table container" >
<thead>
    <tr class="row">
      <th class ='col'scope="col"> email</th>
    </tr>
  </thead>
  <tbody>
 
     <?php
            require_once "conexao.php";
            $con = new Connect();
            $con->listalogin();
            ?>

    </tr>
    </tbody>
</table>