<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vospo - Servicios de Impresión DTF</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">Vospo</div>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#mision">Misión/Valores</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="inicio" class="hero">
            <h1>Impresiones DTF de Alta Calidad</h1>
            <p>Transformamos tus diseños en impresiones perfectas</p>
            <button onclick="mostrarContacto()">¡Cotiza ahora!</button>
        </section>

        <section id="servicios">
            <h2>Nuestros Servicios</h2>
            <div class="servicios-grid">
                <div class="servicio-card">
                    <h3>Impresión DTF</h3>
                    <p>Transferencia directa a tela con la mejor calidad</p>
                </div>
                <div class="servicio-card">
                    <h3>Diseño Personalizado</h3>
                    <p>Creamos diseños únicos para tu marca</p>
                </div>
                <div class="servicio-card">
                    <h3>Producción en Masa</h3>
                    <p>Grandes volúmenes con precios competitivos</p>
                </div>
            </div>
        </section>

        <section id="contacto">
            <h2>Contacto</h2>
            <form action="procesar.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="tel" name="telefono" placeholder="Teléfono" pattern="[0-9]{10}" title="Por favor ingresa un número de teléfono válido de 10 dígitos" required>
                <textarea name="mensaje" placeholder="Mensaje" required></textarea>
                <div class="file-upload">
                    <label for="archivo">Sube tu archivo (PNG, JPG, AI, PSD, PDF)</label>
                    <input type="file" id="archivo" name="archivo" accept=".png,.jpg,.jpeg,.ai,.psd,.pdf" required>
                </div>
                <button type="submit">Enviar</button>
            </form>
        </section>

        <section id="mision">
            <h2>Nuestra Misión y Valores</h2>
            <div class="servicios-grid">
                <div class="servicio-card">
                    <h3>Misión</h3>
                    <p>Proporcionar soluciones de impresión DTF innovadoras y de alta calidad que ayuden a nuestros clientes a destacar en el mercado.</p>
                </div>
                <div class="servicio-card">
                    <h3>Valores</h3>
                    <p>• Calidad<br>• Innovación<br>• Compromiso<br>• Responsabilidad<br>• Satisfacción del cliente</p>
                </div>
                <div class="servicio-card">
                    <h3>Visión</h3>
                    <p>Ser líderes en el mercado de impresión DTF, reconocidos por nuestra excelencia y servicio al cliente.</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Vospo - Todos los derechos reservados</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>