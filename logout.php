<?php

echo "Encerrando a sessão";
session_start();
session_unset($_SESSION['usuario']);
session_destroy();
header('Location: consulta.php');