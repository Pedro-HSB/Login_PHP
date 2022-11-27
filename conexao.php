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
        if ($sql->rowCount() > 0) {
            header('location: index.php?existe');
        } else {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('location: inserirUsuario.php');
        }
    }
    public function listalogin()
    {
        $sql = "SELECT * FROM cliente ";
        $sql = $this->dao->prepare($sql);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            foreach ($sql as $key => $row) {
                $email = $row['email'];
                if (isset($email)) {?>
                    <td><?php
                    for ($i=1; $i<=10; $i++) {
                        for ($a = $sql->rowCount(); $a <> $i; $a++) { 
                            print $email . "<br>";
                        }
                    }
                      ?></td><?php
                }
            }
        }
    }
    public function inserirlogin($email,$senha)
    {
        $sql = "INSERT INTO cliente (id,email,senha) VALUES (NULL,:email, :senha)";
        $sql = $this->dao->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $senha);
        $sql->execute();
        if ($sql == true) {
            header('location: listaUsuario.php');
        }
        
    }
}


// if ($sql->rowCount() > 0) {
//     foreach ($sql as $key => $row) {
//         $linhas = $row['email'];
//         echo $linhas;
//         var_dump($linhas);
//         if($linhas > 0){
//             echo 'tem';
//         }
//         else
//         {
//             echo 'nao tem';
//         }
