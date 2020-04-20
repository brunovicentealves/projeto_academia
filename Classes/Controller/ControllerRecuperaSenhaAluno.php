<?php
require_once 'Seguranca.php';
require_once '../Modal/CrudUsuario.php';
//require 'mailer/PHPMailerAutoload.php';

$nome = $_POST['nome'];
$email = $_POST['email'];

$novaSenha = generatePassword(6);
$senha = MD5($novaSenha);

$teste = false;


BuscaEmail($nome,$email,$teste);
$teste1 = BuscaEmail($nome,$email,$teste);
 if ($teste1 == 2){

     // Incluir classe PHPMailer
     include_once 'PHPMailer/class.smtp.php';
     include_once 'PHPMailer/class.phpmailer.php';

     // Enviando o email
     $Mailer = new PHPMailer();
        $Mailer->CharSet = 'utf8';
        $Mailer->SMTPDebug = 3;
        $Mailer->Debugoutput = 'html';
        $Mailer->IsSMTP();
        $Mailer->Host = "smtp.gmail.com";
        $Mailer->SMTPAuth = true;
        $Mailer->Username = "treinosweb@gmail.com";
        $Mailer->Password = "treinos123456";
        $Mailer->SMTPSecure = "tls";
        $Mailer->Port = 587;
        $Mailer->FromName = "Sistema De Treinos WEB";
        $Mailer->From = "treinosweb@gmail.com";
        $Mailer->AddAddress($email);
        $Mailer->IsHTML(true);
        $Mailer->Subject = "Nova Senha";
        $Mailer->Body = "Sonhor <b>$nome</b>"." Uma nova senha foi gerada para você, sua nova senha é: ".$novaSenha."<br><br> Favor não responder a este e-mail";

        if ($Mailer->Send()){
            $erro = false;
            echo 'E-Mail enviado.';
        } else {
            echo 'Mensagem NÃO enviada.';
        }
     //   var_dump($Mailer);

     $_SESSION['mensagem']=RecuperaSenha($nome,$email,$senha);
     header("Location:../view/Login.php");
 }else if ($teste1 == "USUÁRIO NÃO CONSTA CADASTRADO NA NOSSA BASE DE DADOS!"){
     $_SESSION['mensagem']=BuscaEmail($nome,$email,$teste);
     header("Location:../view/Login.php");
 }

function generatePassword($qtyCaraceters = 8){

    //Letras minúsculas embaralhadas
    $smallLetters = str_shuffle('abcdefghijklmnopqrstuvwxyz');

    //Letras maiúsculas embaralhadas
    $capitalLetters = str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ');

    //Números aleatórios
    $numbers = (((date('Ymd') / 12) * 24) + mt_rand(800, 9999));
    $numbers .= 1234567890;

    //Caracteres Especiais
    $specialCharacters = str_shuffle('!@#$%*-');

    //Junta tudo
    $characters = $capitalLetters.$smallLetters.$numbers;

    //Embaralha e pega apenas a quantidade de caracteres informada no parâmetro
    $password = substr(str_shuffle($characters), 0, $qtyCaraceters);

    //Retorna a senha
    return $password;

}