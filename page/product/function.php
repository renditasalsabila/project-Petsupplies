<?php
session_start();
require_once '../../classes/Database.php';
require_once '../../classes/Product.php';
$db = new Database;
$product = new Product;
if ($_POST['action'] == 'create') {
    $insert = $product->insert($_POST);
    if ($insert === true) {
        $_SESSION['message'] = [
            'type' => 'success',
            'message' => 'Data berhasil disimpan'
        ];
        header('Location: list.php');
    } else {
        $_SESSION['message'] = [
            'type' => 'error',
            'message' =>  $insert[array_key_first($insert)][0]
        ];
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
}
if ($_POST['action'] == 'update') {
    $update = $product->update($_POST);
    if ($update === true) {
        $_SESSION['message'] = [
            'type' => 'success',
            'message' => 'Data berhasil diubah'
        ];
        header('Location: list.php');
    } else {
        $_SESSION['message'] = [
            'type' => 'error',
            'message' =>  $update[array_key_first($update)][0]
        ];
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
}
if ($_GET['action'] == 'delete') {
    $delete = $product->delete($_GET['id']);
    if ($delete === true) {
        $_SESSION['message'] = [
            'type' => 'success',
            'message' => 'Data berhasil dihapus'
        ];
        header('Location: list.php');
    } else {
        $_SESSION['message'] = [
            'type' => 'error',
            'message' =>  $delete[array_key_first($delete)][0]
        ];
        header('Location: list.php');
    }
}
