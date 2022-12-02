<?php   
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'lib/vendor/autoload.php';

session_start();
if (isset($_POST['enviar'])) {
    $mail = new PHPMailer(true);
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $_SESSION['num'] = rand(100000,600000);


    try {
        //congigurações do remetente e destinatário
        $mail->CharSet = 'UTF-8';
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
        $mail->isSMTP();                                            
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true; 
        $mail->Username = 'leonardolimagomes08@gmail.com';
        $mail->Password = 'erikxqmbnhsfosxl';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
        $mail->Port = 465; 

        $mail->setFrom('leonardolimagomes08@gmail.com', 'Grupo');
        $mail->addAddress($email, 'usuário');

        //mensagem do e-mail
        $mail->isHTML(true);                                  
        $mail->Subject = 'work - two-factor authentication';
        $mail->Body = 'Você abriu este e-mail? Sinto-lhe dizer, mas você vai nos dar nota <b>10</b><br>.' . '<br>Seu código de verificação é: ' . '<b>' . $_SESSION['num'] . '</b>' . '<br>Atenciosamente, ' . '<br><br>Grupinho.';
        $mail->send();
        header('Location: input-code.php'); 
        die();
    } catch (Exception $e) {
        echo "message has no been sent. mailer error: {$mail->ErrorInfo}";
    } else {
        echo 'error sending email, access was not through the form.';
    }
} 

?>
