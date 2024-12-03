<?php

$email = isset($_POST['email']) ? $_POST['email'] : '';
$subject = isset($_POST['subject']) ? $_POST['subject'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

$erro_messages = [];

if ($email == "") {
    $erro_messages[]  = ' O Email está vazio! <br>';
}

if ($subject == "") {
    $erro_messages[]  = ' O Assundo está vazio! <br>';
}

if ($message == "") {
    $erro_messages[] = ' A mensagem está vazia! <br>';
}

if (isset($_POST['submit_validate'])) {
    foreach ($erro_messages as $erro) {
        echo "<div class='notice notice-error is-dismissible'><p> {$erro} </p></div>";
    }
}
