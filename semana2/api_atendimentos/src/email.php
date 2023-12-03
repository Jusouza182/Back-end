<?php 

require_once '../vendor/autoload.php';

function sendEmail ($destinatario, $nomeDestinatario, $subtitulo){
   $phpmailer = new PHPMailer\PHPMailer\PHPMailer(); // semelhante ao axios from axios 

   $phpmailer->isSMTP();
   $phpmailer->Host = 'sandbox.smtp.mailtrap.io';  // informação disponivel no https://mailtrap.io/
   $phpmailer->SMTPAuth = true;
   $phpmailer->Port = 587;
   $phpmailer->SMTPAuth = true;
   $phpmailer->Username = 'e6e994733003de';  // informação disponivel no https://mailtrap.io/
   $phpmailer->Password = '61f2e511f3f9a3';  // informação disponivel no https://mailtrap.io/

   $phpmailer->setFrom('banco@gmail.com', 'Banco Meu Dinheiro'); // email e nome de quem está enviando
   $phpmailer->addAddress($destinatario, $nomeDestinatario ); // email e nome de quem está recebendo
   $phpmailer->Subject = $subtitulo;  // Assunyo do e-mail
   $phpmailer -> Body = /*corpo do e-mail*/ 
   ' <html>
   <head>
       <meta charset="UTF-8">
       <style>
           body {
               font-family: Arial, sans-serif;
               background-color: #f0f0f0;
           }
           .container {
               background-color: #ffffff;
               padding: 20px;
               border-radius: 5px;
               box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
           }
           h1 {
               color: red;
           }
           p {
               color: #666;
           }
       </style>
   </head>
   <body>
       <div class="container">
           <h1>Olá,</h1>
           <p>Este é um exemplo de e-mail com estilo.</p>
       </div>
   </body>
</html>';

   if ($phpmailer->send()) {
       echo "Email enviado com sucesso!";
   } else {
       echo "Erro ao enviar o email: " . $phpmailer->ErrorInfo;
   }
}

?>