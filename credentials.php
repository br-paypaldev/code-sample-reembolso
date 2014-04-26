<?php

$version = '109.0';

//Baseado no ambiente, sandbox ou produção, definimos as credenciais
//e URLs da API.
if ($sandbox) {
    //credenciais da API para o Sandbox
    //Caso ainda nao tenha, veja como gerar a sua em: https://www.paypal-brasil.com.br/desenvolvedores/tutorial/utilizando-o-novo-paypal-sandbox/
    $user = 'xxxxxxxx';
    $pswd = 'xxxxxx';
    $signature = 'xxxxxxx';
 
    //URL da PayPal para redirecionamento, não deve ser modificada
    $paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
} else {
    //credenciais da API para produção
    //Para obte-las, apos criar a sua conta PayPal siga as instrucoes em: https://www.paypal-brasil.com.br/desenvolvedores/tutorial/criando-e-gerenciando-as-credenciais-da-api/
    $user = 'xxxxxxxx';
    $pswd = 'xxxxxxxx';
    $signature = 'xxxxxxxx';
 
    //URL da PayPal para redirecionamento, não deve ser modificada
    $paypalURL = 'https://www.paypal.com/cgi-bin/webscr';
}
