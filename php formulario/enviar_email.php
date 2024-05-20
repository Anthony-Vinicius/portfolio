<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $celular = $_POST["celular"];
    $mensagem = $_POST["mensagem"];
    
    $destinatario = "anthonyprof2022@gmail.com";
    $assunto = "Nova mensagem de contato de $nome";
    $corpo_email = "Nome: $nome\n";
    $corpo_email .= "Email: $email\n";
    $corpo_email .= "Celular: $celular\n";
    $corpo_email .= "Mensagem:\n$mensagem";
    
    // Use a função mail() do PHP para enviar o email
    mail($destinatario, $assunto, $corpo_email);
    
    // Redireciona o usuário de volta para a página do formulário
    header("Location: index.html");
    exit;
}
?>
