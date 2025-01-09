<?php


// URL DNS
define('IP','http://domain.com:80'); 

// Themes
$template = 'blue'; 

// WhatsApp Number
define("WHATSAPP", '995720681'); //Numero WhatsApp

// Website 
define("NOME_IPTV", 'MXPRO'); 

// MercadoPago Integration

define("LINK_PAGAR1", ''); // Link 1
define("LINK_PAGAR2", ''); // Link 2
define("LINK_PAGAR3", ''); // Link 3
define("LINK_PAGAR4", ''); // Link 4

$nome1 = "Mensal";
$valor1 = "14.99"; // Valor Mensal
$nome2 = "Trimestral";
$valor2 = "39.99"; // 3 meses: descuento respecto a pagar 3 meses individuales ($14.99 x 3 = $44.97)
$nome3 = "Semestral";
$valor3 = "74.99"; // 6 meses: descuento respecto a pagar 6 meses individuales ($14.99 x 6 = $89.94)
$nome4 = "Anual";
$valor4 = "139.99"; // 12 meses: descuento respecto a pagar 12 meses individuales ($14.99 x 12 = $179.88)

// Settings Xtream-Codes CMS 

define("ATIVAR_TESTE", '0');  // 1 = YES / 0 = NO
define("HORAS", '2');  // Trial Duration in hours
define("XTREAM_URL", 'https://cms-eu.xtream-codes.com/'); //URL CMS do Xtream-Codes
define("XTREAM_USER", ''); //Usuário do Xtream-Codes
define("XTREAM_PWD", ''); //Senha do Xtream-Codes
define("XTREAM_PLANO", '1'); //Número do Plano do Xtream-Codes em caso de dúvidas contate o suporte.
define("ATIVA_BLOQUEIO_TESTE", '0'); // Se Ativado (1) = Bloqueia novos cadastros apartir do computador do usuário por 30 dias, evitar testes a todo momento

// CONFIGURAÇÕES DO EMAIL SMTP ENVIO DE TESTES:
define("SMTP_HOST", 'mail.revenda.com');
define("SMTP_USER", '');
define("SMTP_SENHA", '');
define("SMTP_PORTA", '587');
define("SMTP_SEGURANCA", 'tls');
define("EMAIL_ASSUNTO", 'Bem Vindo ao ITV - WebPlayer');
define("EMAIL_REVENDA", 'contato@revenda.com');
define("NOME_REVENDA", 'WebPlayer');

// Adults categories
define("AVISO_ADULTOS_CANAL", 'XXX: ADULTOS'); // Should be the same as XC
define("AVISO_ADULTOS_FILME", 'FILMES: ADULTOS'); // Should be the same as XC
// Você pode ver esta nome quando o sistema gerar as categorias


// ATENÇÃO AO EDITAR O CORPO DO EMAIL
// Dont change the variables
//
// %VENCIMENTO%, %NOME%, %USUARIO%, %SENHA%
//
// Ask a developer for help if needed.


define("CORPO_EMAIL", "Hola %NOME%, su prueba se ha creado con éxito.<br><br>
    Puede iniciar sesión en nuestro webplayer utilizando los siguientes datos:<br>
    <br>
    Usuario: <b>%USUARIO%</b> <br>
    Contraseña: <b>%SENHA%</b> <br><br><br>
    También puede probar nuestra lista descargándola en el siguiente enlace:<br><br>
    %URL_LISTA%<br><br><br>
    Aproveche su prueba, válida hasta: %VENCIMENTO%<br><br><br>
    
    Gracias,<br>
    MAXPRO.
    
    ");