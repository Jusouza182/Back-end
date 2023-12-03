<?php

require_once 'config.php';
require_once 'utils.php';

$method = $_SERVER['REQUEST_METHOD']; // salva o método

$body = getBody();

if ($method === 'POST') {
    $guiche = filter_var($body->guiche, FILTER_VALIDATE_INT);
};

if (!$guiche) {
    echo json_encode(['error' => "Todos os campos são obrigatórios"]);
}

$fila = readFileContent('fila.txt');

// pega o primeiro item do array

// deleta a pessoa do array de fila 
$primeiroItem = array_shift($fila);

saveFileContent("fila.txt", $fila);

echo '<pre>';
var_dump($fila);
var_dump($primeiroItem);
echo '</pre>';

// identifica qual é o guiche 

if ($guiche === 1) {
    $listaguiche1 = readFileContent('guiche1.txt');
    array_push($listaguiche1, $primeiroItem);
    saveFileContent('guiche1.txt', $listaguiche1);

} else if ($guiche === 2) {
    $listaguiche2 = readFileContent('guiche2.txt');
    array_push($listaguiche2, $primeiroItem);
    saveFileContent('guiche2.txt', $listaguiche2);

} else if ($guiche === 3) {
    $listaguiche3 = readFileContent('guiche3.txt');
    array_push($listaguiche3, $primeiroItem);
    saveFileContent('guiche3.txt', $listaguiche3);

}
// fazer um push do item retirado do array fila 

http_response_code(201);
echo json_encode(["Usuario enviado para o guiche com sucesso!"]);