<?php
// libro.php
/* include 'clases/Libro.php';
 */

$libroId = isset($_GET['id']) ? $_GET['id'] : null;

if ($libroId) {
    
    echo "El ID del libro es: " . $libroId;
    
    
} else {
    // Redirigir o mostrar un error si no se proporciona un ID de libro
    header('Location: ../index.php');
    exit();
}
?>
