<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Kept</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/favicon.ico" />
</head>
<body>
        <header>
            <h1><img src="assets/img/logo.svg" alt=""></h1>
            <nav>
                <ul> 
                    <?php hide_tab(is_empty(), '<li><a class=" active nav_link" id="" href="index.php?p=home">Tous</a></li>'); ?>
                    <?php get_tags(); ?>
                    <?php hide_tab(is_empty(), '<li><a class="nav_link" id="" href="index.php?p=home&type=others">Autres</a></li>'); ?>
           
                </nav>
        </header>
        <main>