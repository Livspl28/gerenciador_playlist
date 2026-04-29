<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Musicas</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Outfit:wght@100..900&family=Oxanium:wght@200..800&family=Palette+Mosaic&family=Wellfleet&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>



<?php

require_once 'crud.php';

print '<table class="tabela_musicas">
<tr>
<th>ID</th>
<th>Titulo</th>
<th>Artista</th>
<th>Album</th>
<th>Genero</th>
</tr>';

$musicas = readAll($pdo, 'musica');
// print_r($livros);
foreach ($musicas as $musica) {
   echo "<tr><td>".$musica['id']."</td><td>".$musica['titulo']."</td><td>".$musica['artista'].
   "</td><td>".$musica['album']."</td><td>".$musica['genero']."</td></tr>";
}
print"</table>";

$musica = read($pdo, 'musica', 'id = 3');
if ($musica) {
    echo '<p>A música em questão é: '.$musica['titulo'].'</p>';
}