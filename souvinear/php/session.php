<?php if (!(isset($_SESSION['user']))) {
    redirect_to("index.php");
}
?>