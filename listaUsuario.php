<table>
    <tr>
        <td>email</td>
    </tr>
    <tr>
        <td>
            <?php
            require_once "conexao.php";
            $con = new Connect();
            $con->listalogin();
            ?>
        </td>
    </tr>
</table>
