<?php

$version = '109.0';

//Baseado no ambiente, sandbox ou produção, definimos as credenciais
//e URLs da API.
if ($sandbox) {
    //credenciais da API para o Sandbox
    $user = 'jeffprestes_api1.gmail.com';
    $pswd = '3SZKBPGTTLMVQ66B';
    $signature = 'ATutHe2f5sqGdXTHx0Gdsr3F4EnaAPbdeidoBxokDfl3cK.mR1XmuSHH';
 
    //URL da PayPal para redirecionamento, não deve ser modificada
    $paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
} else {
    //credenciais da API para produção
    $user = 'jeffprestes_api1.novatrix.com.br';
    $pswd = 'QNQP9Y4Y2AZE4TZ9';
    $signature = 'APBKuQ1nj5ru.2babcXygk2y7ME7AH4O8F2DxLE-Dun.IYixfDZsj7-R';
 
    //URL da PayPal para redirecionamento, não deve ser modificada
    $paypalURL = 'https://www.paypal.com/cgi-bin/webscr';
}
