
<?php
// define variables and set to empty values
$nomeErr = $emailErr = $assuntoErr = $empresaErr = $telefoneErr = "";
$nome = $email = $telefone = $empresa = $mensagem = $assunto = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nome"])) {
    $nomeErr = "nome is required";
  } else {
    $nome = test_input($_POST["nome"]);
    // check if nome only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$nome)) {
      $nomeErr = "Only letters and white space allowed";
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["empresa"])) {
      $empresaErr = "nome is required";
    } else {
      $empresa = test_input($_POST["empresa"]);
      // check if nome only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$empresa)) {
        $empresaErr = "Only letters and white space allowed";
      }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["telefone"])) {
          $telefoneErr = "telefone is required";
        } else {
          $telefone = test_input($_POST["telefone"]);
          // ALTERAR PARA NUMEROS --------- check if nome only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z ]*$/",$telefone)) {
            $telefoneErr = "Only letters and white space allowed";
          }
        }


  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }


  if (empty($_POST["mensagem"])) {
    $mensagem = "";
  } else {
    $mensagem = test_input($_POST["mensagem"]);
  }

  if (empty($_POST["assunto"])) {
    $assuntoErr = "assunto is required";
  } else {
    $assunto = test_input($_POST["assunto"]);
  }
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>