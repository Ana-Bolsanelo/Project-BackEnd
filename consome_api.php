<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost/api.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$produtos = json_decode($response, true);
foreach ($produtos as $produto) {
    echo "ID: " . $produto['id'] . " - Nome: " . $produto['nome'] . " - Preço: " . $produto['preco'] . "<br>";
}
?>
