<?php

$url = $_SERVER['REQUEST_URI'];

if($url === '/'){
    echo '<h1>Pagina Inicial</h1>';
} else if ($url === '/login') {
    echo  '<h1>Pagina de Login</h1>';
} else if($url === '/cadastro') {
    echo '<h1>Pagina de Cadastro</h1>';
}
