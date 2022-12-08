<?php
session_start();
if (isset($_SESSION['session'])) {
  header('location: index.php?session');
  session_destroy();
}
?>
<link rel="stylesheet" type="text/css" href="inserir.css">
<?php
if (isset($_SESSION['email']) || isset($_SESSION['senha'])) {
?>

        <?php echo "<a href='inserirUsuario.php?true'><button>cadastrar usuario</button></a>"; ?>
        <?php echo "<a href='index.php'><button type='reset'> nao cadastrar</button></a>"; ?>

    <a href="http://" target="_blank" rel="noopener noreferrer"></a>
<?php
    if (isset($_GET['true'])) {
        require_once "conexao.php";
        $con = new Connect();
        $email = $_SESSION['email'];
        $senha = $_SESSION['senha'];
        $con->inserirlogin($email, $senha);
    }
}
