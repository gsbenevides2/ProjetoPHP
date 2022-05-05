>?php

if(isset($_POST['email'])&& !empty($POST['email'])

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

$to="contato@media3.com.br";
$subject="Contato - Media3 - Maquete Eletrônica";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email."\r\n".
        "Mensagem: ".$mensagem;

        $header =   "From:contato@media3.com.br"."\r\n".
                    "Reply-to:" .$email."\r\n".
                    "X=Mailer: PHP/".phpversion();

                    if(mail($to, $subject, $body, $header)){
                        echo ("Email Enviado com sucesso...");
                    }else{
                        echo ("Email NÃO Enviado...");
                    }
                    }
)

