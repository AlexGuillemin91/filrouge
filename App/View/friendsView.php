<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/main.css">
    <link rel="stylesheet" href="../public/css/friends.css">
    <title>friends</title>
</head>

<body>
    <?php
    include "../public/inc/nav.php";
    ?>
    <div class="page">
        <?php
        include "../public/inc/header.php"
        ?>
        <main class="centre">
            <section>
                <h3>My friends</h3>
                <i class="fas fa-search"></i>
                <input id="searching-input" type="text" placeholder="Qui recherchez-vous ?">
                <div id="searching-list"></div>

                <h4>Mes amis actuels</h4>
                <table id="my-friends"></table>
            </section>
        </main>
        <?php
        include "../public/inc/footer.php"
        ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../public/ajax/friendsView.js"></script>
</body>

</html>