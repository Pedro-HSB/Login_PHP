<link rel="stylesheet" type="text/css" href="table.css">
<table>
<thead>
    <tr>
      <th scope="col"> email</th>
    </tr>
  </thead>
  <tbody>
    <tr>

            <?php
            require_once "conexao.php";
            $con = new Connect();
            $con->listalogin();
            ?>

    </tr>
    </tbody>
</table>