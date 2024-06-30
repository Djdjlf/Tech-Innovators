<?php
// Verificar si se ha especificado un archivo para descargar
if(isset($_GET['file'])) {
    $file = $_GET['file'];

    // Ruta a la carpeta donde están almacenados los archivos para descargar
    $filepath = 'archivos/' . $file;

    // Verificar si el archivo existe
    if(file_exists($filepath)) {
        // Configurar encabezados para la descarga
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        readfile($filepath); // Leer el archivo y enviarlo al navegador
        exit;
    } else {
        // Si el archivo no existe, redirigir o mostrar un mensaje de error
        echo "El archivo no existe.";
    }
} else {
    // Si no se especificó ningún archivo, redirigir o mostrar un mensaje de error
    echo "No se especificó ningún archivo para descargar.";
}
?>
