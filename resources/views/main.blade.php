<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferretería Mi Herramienta</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

</head>
<body>
    <header>
        <div class="container">
            <h1>Ferretería Mi Herramienta</h1>
            <nav>
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#productos">Productos</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="inicio">
        <div class="container">
            <h2>Bienvenido a Ferretería Mi Herramienta</h2>
            <p>¡Encuentra todo lo que necesitas para tus proyectos de construcción y reparación!</p>
            <div class="productos">
                <div>
                    @foreach ($productos as $key => $listaProductos)
                    <h2>{{ $key }}</h2>
                    <table border="1">
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                        </tr>
                        @foreach ($listaProductos as $producto)
                        <tr>
                            <td>{{ $producto['nombre'] }}</td>
                            <td>{{ $producto['descripcion'] }}</td>
                            <td>{{ $producto['precio'] }}</td>
                        </tr>
                        @endforeach
                    </table>
                @endforeach
                </div>
            </div>
        </div>
    </section>
    

    <section id="productos">
        <div class="container">
            <h2>Nuestros Productos</h2>
            <p>Aquí puedes encontrar una amplia gama de herramientas y materiales de construcción.</p>
            <!-- Aquí puedes agregar la lista de productos -->
        </div>
    </section>

    <section id="servicios">
        <div class="container">
            <h2>Nuestros Servicios</h2>
            <p>Ofrecemos una variedad de servicios, incluyendo:</p>
            <ul>
                <li>Venta de herramientas</li>
                <li>Asesoramiento técnico</li>
                <li>Entrega a domicilio</li>
                <li>Instalación de productos</li>
                <!-- Puedes agregar más servicios aquí -->
            </ul>
        </div>
    </section>

    <section id="contacto">
        <div class="container">
            <h2>Contacto</h2>
            <p>¡Contáctanos para más información o para realizar un pedido!</p>
            <!-- Aquí puedes agregar un formulario de contacto o información de contacto -->
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Ferretería Mi Herramienta - Calle las palmas Barrio el centro. San Miguel San Miguel 2121-2828 </p>
        </div>
    </footer>
</body>
</html>
