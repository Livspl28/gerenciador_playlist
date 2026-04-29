<?php
require_once 'crud.php';

$idMusica = 2;

$deleted = delete($pdo, 'musica', 'id = '.$idMusica);

if ($deleted) {
    echo 'Não foi possivel excluir a música';
}