<?php
//var_dump($_POST);
if (empty(trim($_POST["frase"])) || empty($_POST['parola'])) {
    $frase = 'torna indietro e inserisci una frase';
    $parola_censurata = ''; //variabile censurata
} else {
    $frase=$_POST['frase'];
    $parola = $_POST['parola'];
    
};

$parola_censurata = str_replace($parola, '***', $frase)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="js/script.js" defer></script>
    <title>php Badwords</title>
</head>

<body class="container">
    <body>
        <main>
            <section>
            <h2>la tua frase é:</h2>
            <p> <?php echo $frase ?></p>
            <p> lunghezza:<?php echo strlen($frase) ?> </p>
            </section>
            <section>
            <h2>La tua frase censurata é:</h2>
            <?php
            if($parola_censurata){
                echo "<p><?php echo $parola_censurata?></p>";
                echo "<p>Lunghezza:" .strlen($parola_censurata)."</p>";
            } else {
                echo "<p> La parola non é stata inserita </p>";
            }
            ?>
            </section>


        </main>
    </body>

</body>
</html>