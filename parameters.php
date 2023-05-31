<?php
//Parametros con las cajas de texto
$to = $_POST['to'];
$from = $_POST['from'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$files = $_FILES['files']['tmp_name'];

//almacenar los parametros en la variable parameters
$parameters = '/to "' . $to . '" /from "' . $from . '" /subject "' . $subject . '" /message "' . $message . '"';
if (!empty($files)) {
    $parameters .= ' /files "' . implode(',', $files) . '"';
}
//ejecucion del archivo .exe con los parametros
$result = shell_exec('FilemailCli.exe ' . $parameters);

echo '<pre>' . $result . '</pre>';

// $command = "FilemailCli.exe /files \"$files\" /to \"$to\" /from \"$from\" /subject \"$subject\" /message \"$message\" /transferpassword \"$transferpassword\" /notify \"$notify\" /confirmation \"$confirmation\" /days \"$days\"";
// exec($command);
?>
