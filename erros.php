<?php

class erros
{
    public function login()
    {
        if (isset($_GET['null'])) {

?>
<script>
    alert("email ou senha vazio")
</script>
<?php
unset($_GET['null']);

        }
    }


    public function existe()
    {
        if (isset($_GET['existe'])) {

?>
<script>
    alert("usuario ja esta sendo usado")

</script>
<?php

        }
    }

    public function session()
    {
        if (isset($_GET['session'])) {

?>
<script>
    alert("session expirada")

</script>
<?php

        }
    }
}