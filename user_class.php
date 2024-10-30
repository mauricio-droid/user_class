<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
</head>
<body>
    <h1>Formulario de Usuario</h1>
    <form method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <br><br>
        <label for="correo">Correo electrónico:</label>
        <input type="email" name="correo" required>
        <br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    class Usuario {
        // Atributo
        private $nombre;
        private $correo;

        // Constructor
        public function __construct($nombre, $correo) {
            $this->nombre = $nombre;
            $this->correo = $correo;
        }

        // Método para imprimir datos del Usuario
        public function imprimirInformacion() {
            echo "<h2>Información del Usuario:</h2>";
            echo "Nombre: " . htmlspecialchars($this->nombre) . "<br>";
            echo "Correo electrónico: " . htmlspecialchars($this->correo) . "<br>";
        }
    }
    // A través del método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];

        // Se crea un objeto de tipo Usuario
        $usuario = new Usuario($nombre, $correo);
        // Se muestran los datos del usuario
        $usuario->imprimirInformacion();
    }
    ?>
</body>
</html>
