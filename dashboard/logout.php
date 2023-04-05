<?php
    session_start();
    session_destroy();
    echo "<script>location.href='http://localhost/Estudiez/index.php'</script>";
    exit();
?>
