<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/main.css" />
    <link rel="stylesheet" href="../public/css/resultat.css" />
    <title>Résultat</title>
</head>

<body>
    <?php
    include "../public/inc/nav.php";
    ?>
    <div class="page">
        <?php
        include "../public/inc/header.php"
        ?>
        <main>
            <section>
                <h3>Résultat</h3>
                <h4 id="survey-title"></h4>
                <div class="result-survey" id="survey-answers"></div>


            </section>
        </main>
        <?php
        include "../public/inc/footer.php"
        ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../public/ajax/resultatView.js"></script>
</body>

</html>