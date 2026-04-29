<?php
require_once 'crud.php';

$idMusica = 2;

$dadosAtualizados = [
    'titulo' => 'Atummn leaves',
    'artista' => 'Little mix',
    'album' => TMBMIL2,
    'genero' => 'Kpop'
];

$linhasAfetadas = update($pdo, 'playlist', $dadosAtualizados, 'id = '.$idMusica);

if ($linhasAfetadas > 0){
    echo 'Musica atualizada com sucesso!!!';
}else{
    echo 'Não foi possível atualizar a musica!';
}
