 <pre>

<?php
$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify'; 
$recaptcha_secret = '6LcaxacoAAAAAMw-UMqXIK--6uiTSfafJT9_MmGS'; 
$recaptcha_response = $_POST['recaptcha_response']; 
$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response); 
$recaptcha = json_decode($recaptcha); 

// Guarda la respuesta de reCAPTCHA antes de modificar $_POST
$originalRecaptchaResponse = $_POST['recaptcha_response'];

if($recaptcha->score >= 0.7){
    // OK. ERES HUMANO, EJECUTA ESTE CÓDIGO
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $body="<h2>Contacto a través del formulario de la web:</h2>\n";
    $body.="<p>Nombre: <strong>".$_POST["nombre"]."</strong></p>\n";
    $body.="<p>Nombre de empresa: <strong>".$_POST["empresa"]."</strong></p>\n";
    $body.="<p>Email: <strong>".$_POST["email"]."</strong></p>\n";
    $body.="<p>Comentarios: <strong>".$_POST["comentarios"]."</strong></p>";

    // Restaura la respuesta de reCAPTCHA para mantener su valor original en $_POST
    $_POST['recaptcha_response'] = $originalRecaptchaResponse;

    if(mail("ascdigitalsolutions@gmail.com", "Prueba desde mi web", $body, $cabeceras)){
        echo "Tu mensaje ha sido enviado";

        // Índice del elemento a ocultar
        $indexToHide = 2;

        echo "Array sin mostrar el elemento en el índice $indexToHide:\n";
        foreach ($_POST as $key => $value) {
            if ($key !== 'recaptcha_response') {
                echo "$key: $value\n";
            } else {
                echo "$key: *** Respuesta de reCAPTCHA oculta ***\n";
            }
        }
    } else {
        echo "Lo sentimos...";
    }

} else {
    echo "KO. ERES ROBOT, EJECUTA ESTE CÓDIGO";
}
?>
</pre>





























