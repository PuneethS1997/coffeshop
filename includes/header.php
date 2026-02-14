<?php
$BASE_URL = "";
$css_file = $_SERVER['DOCUMENT_ROOT'] . "/assets/css/style.css";
$css_version = file_exists($css_file) ? filemtime($css_file) : time();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FifthGen Coffee</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <base href="/fifthgen/">

<link rel="preconnect" href="https://cdn.jsdelivr.net">
<link rel="dns-prefetch" href="https://cdn.jsdelivr.net">



  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="<?= $BASE_URL ?>/assets/css/style.css"> -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/style.css?v=<?= $css_version ?>">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-nav">
  <div class="container">
    <a class="navbar-brand fw-bold" href="<?= $BASE_URL ?>index">FifthGen ☕</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="nav" class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link" href="<?= $BASE_URL ?>about-us">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= $BASE_URL ?>product">Shop</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= $BASE_URL ?>login">Login</a></li>
        <li class="nav-item">
        <a href="<?= $BASE_URL ?>/cart" class="position-relative text-dark text-decoration-none">
            🛒
            <span id="cart-count"
                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                0
            </span>
            </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
