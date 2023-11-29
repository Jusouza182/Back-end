<?php

header("Content-Type: application/json"); // a aplicação retorna json
header("Access-Control-Allow-Origin: *"); // vai aceitar requisições de todas origens
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // habilita métodos
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");


$method = $_SERVER['REQUEST_METHOD']; // salva o método

if ($method === 'POST') {

    $body = json_decode(file_get_contents("php://input"));

    $name =  filter_var($body->name, FILTER_SANITIZE_SPECIAL_CHARS);
    $cpf =  filter_var($body->cpf, FILTER_SANITIZE_SPECIAL_CHARS);
    $type = filter_var($body -> type, FILTER_VALIDATE_INT);
};



if(!$name || !$cpf || !$type){
    echo json_encode(['error'=>"Todos os campos são obrigatórios"]);
}
$filaDeAtendimento = json_decode(file_get_contents('fila.txt'));

if($type === 1){
    array_push($filaDeAtendimento, ['name' => $name, 'cpf' => $cpf]);
}else{
    array_unshift($filaDeAtendimento, ['name' => $name, 'cpf' => $cpf]); //coloca no inicio do array
}
file_put_contents('fila.txt', json_encode($filaDeAtendimento)); //salva os dados no arquivo txt

http_response_code(201);
// echo json_encode( ['ficha'=> count($filaDeAtendimento) ])// o count equivale ao .lenght
echo json_encode(['ficha' => 'Aguarde sua vez'] )
?>