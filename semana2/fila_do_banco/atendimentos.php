<?php

header("Content-Type: application/json"); // a aplicação retorna json
header("Access-Control-Allow-Origin: *"); // vai aceitar requisições de todas origens
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // habilita métodos
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");


$method = $_SERVER['REQUEST_METHOD']; // salva o método

if ($method === 'POST') {

    $body = json_decode(file_get_contents("php://input"));

   $guiche = filter_var($body -> guiche, FILTER_VALIDATE_INT);
};

if(!$guiche){
    echo json_encode(['error'=>"Todos os campos são obrigatórios"]);
}

$fila = json_decode(file_get_contents('fila.txt'));

?>