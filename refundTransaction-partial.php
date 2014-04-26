<?php
///Vai usar o Sandbox, ou produção?
$sandbox = true;

//Incluindo o arquivo que contém a função sendNvpRequest
require './sendNvpRequest.php';

//Incluindo o arquivo que contem as credenciais
require './credentials.php';

//Campos da requisição da operação RefundTransaction.
$requestNvp = array(
    'USER' => $user,
    'PWD' => $pswd,
    'SIGNATURE' => $signature,
 
    'VERSION' => $version,
    'METHOD'=> 'RefundTransaction',
 
    'TRANSACTIONID' => $_POST["transactionId"],
    'REFUNDTYPE' => 'Partial',
    'AMT' => str_replace(",", ".", str_replace(".", "", $_POST["vAmount"])),
    'CURRENCYCODE' => 'BRL'
);

//Envia a requisição e obtém a resposta da PayPal
$responseNvp = sendNvpRequest($requestNvp, $sandbox);
 
//Verifica se a operação foi bem sucedida
if (isset($responseNvp['ACK']) && $responseNvp['ACK'] == 'Success') {
    echo "<html><body><h3>A transação " . $_POST["transactionId"] . " foi estonada com sucesso. O transactionId do estorno é: " . $responseNvp['REFUNDTRANSACTIONID'] . "</h3></body></html>";
} 
