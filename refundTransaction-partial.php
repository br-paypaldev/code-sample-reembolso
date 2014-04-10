<?php
//Incluindo o arquivo que contém a função sendNvpRequest
require 'sendNvpRequest.php';
 
//Vai usar o Sandbox, ou produção?
$sandbox = true;
 
//Baseado no ambiente, sandbox ou produção, definimos as credenciais
//e URLs da API.
if ($sandbox) {
    //credenciais da API para o Sandbox
    $user = 'conta-business_api1.test.com';
    $pswd = '1365001380';
    $signature = 'AiPC9BjkCyDFQXbSkoZcgqH3hpacA-p.YLGfQjc0EobtODs.fMJNajCx';
 
    //URL da PayPal para redirecionamento, não deve ser modificada
    $paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
} else {
    //credenciais da API para produção
    $user = 'usuario';
    $pswd = 'senha';
    $signature = 'assinatura';
 
    //URL da PayPal para redirecionamento, não deve ser modificada
    $paypalURL = 'https://www.paypal.com/cgi-bin/webscr';
}
 
//Campos da requisição da operação RefundTransaction.
$requestNvp = array(
    'USER' => $user,
    'PWD' => $pswd,
    'SIGNATURE' => $signature,
 
    'VERSION' => '108.0',
    'METHOD'=> 'RefundTransaction',
 
    'TRANSACTIONID' => 'xxxxxxxxxx',
    'REFUNDTYPE' => 'Partial',
    'AMT' => '123',
    'CURRENCYCODE' => 'BRL'
);
 
//Envia a requisição e obtém a resposta da PayPal
$responseNvp = sendNvpRequest($requestNvp, $sandbox);
 
//Verifica se a operação foi bem sucedida
if (isset($responseNvp['ACK']) && $responseNvp['ACK'] == 'Success') {
    //regras de negócio específicas para o reembolso
}
