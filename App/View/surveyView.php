<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sondage</title>
    <link rel="stylesheet" href="../public/css/main.css" />
    <link rel="stylesheet" href="../public/css/survey.css" />
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
                <h3 id="survey-title"></h3>
                <div class="categorie" id="survey-categorie"></div>
                <div class="reponse" id="survey-answers"></div>
            </section>

        </main>
        <?php
        include "../public/inc/footer.php"
        ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../public/ajax/surveyView.js"></script>
</body>

</html>