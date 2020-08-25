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
            <h1><span>K</span>ept</h1>
            <ul>
                <h2>Vos moodboards</h2>
                <li class="active"><a class="nav_link" href="index.php?p=home">Tous</a></li>
                <?php get_tags(); ?>
            </ul>
        </header>
        <main>