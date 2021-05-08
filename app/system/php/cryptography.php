<?php


public function criptografar($textoSerCriptografado, $chave){
    $algoritmo = "AES256"; 
    $mensagem = openssl_encrypt(
        $textoSerCriptografado, 
        $algoritmo, 
        $chave, 
        OPENSSL_RAW_DATA, 
        $chave);
    return base64_encode($mensagem); 
}

public function descriptografar($textoSerDescriptografado, $chave){
    $algoritimo = "AES256";          
    $mensagem = openssl_decrypt(
        base64_decode($textoSerDescriptografado), 
        $algoritimo, 
        $chave, 
        OPENSSL_RAW_DATA, 
        $chave);
    return $mensagem ;
}  




?>