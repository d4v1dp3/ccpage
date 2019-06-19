<?php

session_start();
include 'consultas.php';

if (!empty($_POST)) {
    extract($_POST);
    try {
        $consultar = new consultas();
        $data = $consultar->login($_POST);
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
            if (isset($_SESSION['tipo']) && $_SESSION['tipo'] === '3') {
                header('Location: ../admin/inicio.php');
            } elseif (isset($_SESSION['tipo'])) {
                header('Location: ../cuenta.php');
            }
        } else {
            header('Location: ../login.php');
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
        $_SESSION['logged_fail'];
        header('Location: ../login.php');
    }
}


