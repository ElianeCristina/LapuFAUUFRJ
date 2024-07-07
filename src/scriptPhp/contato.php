<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitização dos dados
    $nome = htmlspecialchars($_POST['nome']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Verificação de validação do e-mail
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $para = "eliane.cristinanunescorreia@gmail.com";
        $assunto = "Contato do site LAPU";

        $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Mensagem: ".$mensagem;

        $cabecalho = "From: $email\r\n";
        $cabecalho .= "Reply-To: ".$email."\r\n";
        $cabecalho .= "X-Mailer: PHP/".phpversion();

        if (mail($para, $assunto, $corpo, $cabecalho)) {
            echo "E-mail enviado com sucesso!";
        } else {
            echo "Houve um erro ao enviar o e-mail!";
        }
    } else {
        echo "Endereço de e-mail inválido.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "eliane.cristinanunescorreia@gmail.com";
    $assunto = "Contato do site LAPU";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Mensagem: ".$mensagem;

    $cabecalho = "From: $email"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabecalho)){
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Houve um erro ao enviar o e-mail!";
    }
} else {
    echo "Método de requisição inválido.";
}

?>
