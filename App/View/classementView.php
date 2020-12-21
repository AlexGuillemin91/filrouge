<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sondage</title>
    <link rel="stylesheet" href="../public/css/main.css" />
    <link rel="stylesheet" href="../public/css/classement.css" />
</head>

<body>
    <?php
    include "../public/inc/nav.php";
    ?>
    <div id="page">
        <?php
        include "../public/inc/header.php"
        ?>
        <main>
            <div class="presentation">
                <h1>Retrouvez le classement des 10 meilleurs joueurs</h1>
                <br>
                <p>Créez des sondages pour gagner des points</p>
            </div>
            <div class="content">
                <div class="podium">
                    <div class="trophy2">
                        <img src="img/trophy2-solid.svg">
                        <div class="second">
                            <h1>2</h1>
                            <br>
                            <br>
                            <h3>Dylan</h3>
                        </div>
                    </div>
                    <div class="trophy1">
                        <img src="img/trophy1-solid.svg">
                        <div class="first">
                            <h1>1</h1>
                            <br>
                            <br>
                            <h3>TheGrayAlex</h3>
                        </div>
                    </div>
                    <div class="trophy3">
                        <img src="img/trophy3-solid.svg">
                        <div class="third">
                            <h1>3</h1>
                            <br>
                            <br>
                            <h3>Laura</h3>
                        </div>
                    </div>
                </div>
                <div class="classement">
                    <table cellpadding="5" cellspacing="0">
                        <tr>
                            <th>N°</th>
                            <th>Username</th>
                            <th>Points</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>TheGrayAlex</td>
                            <td>1587</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Dylan</td>
                            <td>945</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Laura</td>
                            <td>912</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>libelt</td>
                            <td>897</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>jin-woo</td>
                            <td>857</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>morjiana</td>
                            <td>748</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>killua</td>
                            <td>721</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>sakamoto</td>
                            <td>583</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>akame</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>shoyo</td>
                            <td>416</td>
                        </tr>
                    </table>
                </div>
            </div>
        </main>
        <?php
        include "../public/inc/footer.php"
        ?>
</body>