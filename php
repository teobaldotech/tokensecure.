<?php
/**
 * Gera um token seguro em diferentes formatos
 *
 * @param int $tamanho Número de bytes aleatórios
 * @param string $formato Formato de saída: 'hex', 'base64', 'urlsafe'
 * @return string Token gerado
 */
function gerarToken(int $tamanho = 32, string $formato = 'hex'): string {
    $bytes = random_bytes($tamanho);

    switch ($formato) {
        case 'base64':
            return base64_encode($bytes);
        case 'urlsafe':
            // Base64 sem caracteres problemáticos (+, /, =) para uso em URLs
            return rtrim(strtr(base64_encode($bytes), '+/', '-_'), '=');
        case 'hex':
        default:
            return bin2hex($bytes);
    }
}

// Exemplos de uso
echo "Hex: " . gerarToken(16, 'hex') . PHP_EOL;
echo "Base64: " . gerarToken(16, 'base64') . PHP_EOL;
echo "URL-safe: " . gerarToken(16, 'urlsafe') . PHP_EOL;
?>
