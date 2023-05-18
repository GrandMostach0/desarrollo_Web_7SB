<?php
    require 'validarLogeo.php';

    session_destroy();
    header("location: ../index.php");
?>