<?php
$moyenne = $_GET["moyenne"];
$mention = "";
$decision="";

if ($moyenne >= 17) {
   
    $mention = "Excellent";
    $colorClass = "text-success"; 
} elseif ($moyenne >= 16) {
    $mention = "Très bien";
    $colorClass = "text-primary";
} elseif ($moyenne >= 14) {
    $mention = "Bien";
    
    $colorClass = "text-info"; 
    
    
}
elseif($moyenne>=12){
    $mention = "Assez Bien";
    $colorClass = "text-danger"; 
}
elseif($moyenne>=10){
    $mention = "Passable";
    $colorClass = "text-danger"; 

}
else 
$mention="n'affiche rien";
if ($moyenne>=10){
    $decision="Admis";

    
}
else
    $decision="Non Admis";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Inclure les fichiers CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Mentions Bootstrap</title>
</head>
<body>
<form action="" method="get">
        <input type="text" name="moyenne" id="moyenne" placeholder="Entrer la moyenne ici" >
        <input type="submit" value="valider">

    </form>
        <p class="<?php echo $colorClass; ?>"><?php echo $mention; ?> <?php echo $decision; ?></p>
    
</body>
</html>