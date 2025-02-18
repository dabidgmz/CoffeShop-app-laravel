<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('index.css') }}" rel="stylesheet">
    <meta name="description" content="Descubre el sabor suave y afrutado del Café Arabica. Nuestra cafetería ofrece bebidas artesanales con granos seleccionados de los mejores cultivos.">
    <title>El Grano Dorado</title>
    @include('icon')
</head>
<body>
    <header>
        <h1>El Grano Dorado</h1>
        <h2>Donde cada taza cuenta una historia.</h2>
    </header>
    <section class="informacion-container">
        <div class="informacion">
            <h3>Bienvenidos a El Grano Dorado</h3>
            <p>
                En nuestra cafetería, celebramos el arte del buen café. Cada grano es seleccionado con cuidado y tostado con pasión para brindarte una experiencia única en cada sorbo.
            </p>
            <p>
                Ya sea que busques un lugar acogedor para trabajar, relajarte o reunirte con amigos, El Grano Dorado es tu destino ideal. Nuestro menú incluye una variedad de cafés, tés y deliciosos acompañamientos que harán que cada visita sea especial.
            </p>
            <p>
                Nuestra misión es conectar a las personas a través del amor por el café, creando momentos que perduren y que se conviertan en parte de tu historia.
            </p>
        </div>
        <img src="{{ asset('logoCafe.png') }}" alt="logoCafe">
    </section>

    <section>
    <h3>Tipos de Café</h3>
        <div class="coffee-carousel">
            <a href="{{ route('arabica') }}">
                <div class="coffee-item">
                    <img src="https://cafesgranell.es/modules/ph_simpleblog/covers/30.png" alt="Café Arábica">
                    <div class="coffee-info">
                        <h4>Arábica</h4>
                        <p>Suave, afrutado y menos amargo. Ideal para quienes buscan una experiencia más delicada.</p>
                    </div>
                </div>
            </a>
            <a href="{{ route('robusta') }}">
                <div class="coffee-item">
                    <img src="https://www.helenacoffee.vn/wp-content/uploads/2024/01/Donde-comprar-granos-de-cafe-Robusta-3.jpg" alt="Café Robusta">
                    <div class="coffee-info">
                        <h4>Robusta</h4>
                        <p>Más fuerte, amargo y con mayor contenido de cafeína. Perfecto para los amantes del café intenso.</p>
                    </div>
                </div>
            </a>
            <a href="{{ route('liberica') }}">
                <div class="coffee-item">
                    <img src="https://5.imimg.com/data5/SELLER/Default/2024/5/415318669/OJ/AJ/ZV/212628420/liberica-beans.jpg" alt="Café Liberica">
                    <div class="coffee-info">
                        <h4>Liberica</h4>
                        <p>Un café con un sabor único, afrutado y un toque floral. Su aroma es sorprendentemente dulce.</p>
                    </div>
                </div>
            </a>
            <a href="{{ route('excelsa') }}">
                <div class="coffee-item">
                    <img src="https://mir-s3-cdn-cf.behance.net/projects/max_808/799c1494159057.Y3JvcCwxMjMyLDk2NCwxMjIsMjg5.png" alt="Café Excelsa">
                    <div class="coffee-info">
                        <h4>Excelsa</h4>
                        <p>Un café raro y exótico, con notas de frutas tropicales y un perfil de sabor muy distintivo.</p>
                    </div>
                </div>
            </a>
        </div>
    </section>
    <section class="contact-section">
        <h3>Contacto</h3>
        <p>Si tienes alguna pregunta o deseas hacer una reserva, no dudes en contactarnos.</p>
        <form>
            <input type="text" placeholder="Tu nombre" required>
            <input type="email" placeholder="Tu correo" required>
            <textarea placeholder="Tu mensaje" rows="4" required></textarea>
            <button type="submit">Enviar mensaje</button>
        </form>
    </section>
    @include('footer')
</body>
</html>
