<!-- 
    -creazione form con method GET, 2 input (ex: paragraph e badword) e bottone submit in index.php ( primo file )
- al submit stampare a schermo i valori dei due input ( $_GET['cosa-ci-mettiamo-qui'])
- creare un secondo file ( ex: censura:php )
- settare l'action del form al percorso del secondo file e stampare a schermo i due valori degli input al submit del form
- stampare la lunghezza di paragraph nel secondo file
- sostituire le ricorrenza del badword in paragraph con asterischi usando una funziona specifica php nel secondo file 
-->

<?php
echo 'ciao'
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <form action="censura.php" method="GET">
        <input type="text" name="paragrafo" placeholder="inserisci qui il testo">
        <input type="text" name="censura" placeholder="parola da censurare">
        <input type="submit" value="Invia">
    </form>
</body>

</html>