<?php
function ejecutarConsulta($sql)
{
    @$link = mysqli_connect("localhost", "root", "", "web_agus");
    @$rs = mysqli_query($link, $sql);
    @mysqli_close($link);
    return $rs;
}

if ($_POST) {
    $nombre = $_POST['nombreContacto'];
    $mail = $_POST['mailContacto'];
    $pedido = $_POST['pedidoContacto'];

    // $para      = 'poupee_gurumis@gmail.com';
    // $titulo    = 'Pedido de la Web';
    // $mensaje   = 'Nombre de la persona: ' . $nombre . "\r\n";
    // $mensaje .= 'Nombre de la persona: ' . $email . "\r\n";
    // $mensaje .= 'Nombre de la persona: ' . $pedido . "\r\n";
    // $cabeceras = 'From: ' . $mail . "\r\n" .
    //     'Reply-To: ' . $mail . "\r\n" .
    //     'X-Mailer: PHP/' . phpversion();

    // mail($para, $titulo, $mensaje, $cabeceras);
    $sql = 'INSERT INTO `contactos`(`nombreContacto`, `mailContacto`) VALUES ("' . $nombre . '","' . $mail . '")';
    ejecutarConsulta($sql);
    $arrResponse = array('status' => true, 'data' => 'Su mensaje se envio con exito'); //'El mensaje fue enviado');
} else {
    $arrResponse = array('status' => false, 'data' => 'Su mensaje no ha sido enviado');
}
echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);