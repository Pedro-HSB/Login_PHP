<?php

class Connect
{

    //Aqui é onde o PHP está buscando os dados do banco
    public $dsn = "mysql:host=localhost;dbname=login";
    private $user = "root";
    private $passwd = "10I`mdontnow";
    protected $dao;

    public function __construct()
    {
        try {
            $this->dao = new PDO($this->dsn, $this->user, $this->passwd);
            $this->dao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $erro) {
            echo $erro->getMessage();
            exit();
        }
    }
    public function verificalogin($email, $senha)
    {
        $sql = "SELECT * FROM cliente WHERE email = :email AND senha = :senha";
        $sql = $this->dao->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $senha);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $_SESSION['user'];
            header('location: listaUsuario.php?session');
        } else {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('location: inserirUsuario.php?session');
        }
    }
    public function listalogin()
    {
        $sql = "SELECT * FROM cliente ";
        $sql = $this->dao->prepare($sql);
        $sql->execute();
        foreach ($sql as $key => $row) {
            $email = $row['email'];
?>
<tr>
    <th scope="row">
    <td class="col-8">
        <?php
            echo $email;
                        ?>
    </td>

    </th>
</tr>
<?php
        }
    }
    public function inserirlogin($email, $senha)
    {
        $sql = "INSERT INTO cliente (id,email,senha) VALUES (NULL,:email, :senha)";
        $sql = $this->dao->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $senha);
        $sql->execute();
        if ($sql == true) {
            header('location: listaUsuario.php?session');
        }
    }
}