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
            echo  $erro->getMessage();
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
        //$row = $sql->fetch_array();

        if ($sql->rowCount() > 0) {

            foreach ($sql as $key => $row) {
                $linha = $row['email'];
                echo $linha;
                //var_dump($linha);
                //return true;
            }
            //return false;

        }
    }
}
