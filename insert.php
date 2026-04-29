<?php
require_once 'crud.php';

$novaMusica = [
    'titulo' => 'Numb',
    'artista' => 'Linkin park',
    'album' => 'Meteora',
    'genero' => Rock,
];

$idMusicaNova = create($pdo, 'musica', $novaMusica);
echo 'nova Música inserido com ID: '.$idMusicaNova;