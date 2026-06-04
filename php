<?php
function gerarToken($tamanho = 32) {
    return bin2hex(random_bytes($tamanho));
}

// Exemplo de uso
$token = gerarToken();
echo $token;
?>
