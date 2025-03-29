<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta Celeste - Sporting Cristal</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap');
        
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #0a0a0a;
            color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url('https://img.freepik.com/foto-gratis/textura-papel-negro_1194-6936.jpg');
            background-size: cover;
        }
        
        .carta-container {
            width: 90%;
            max-width: 800px;
            background: rgba(26, 26, 26, 0.85);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.7);
            display: flex;
            flex-direction: column;
            border: 2px solid #0047AB;
            backdrop-filter: blur(5px);
        }
        
        .carta-header {
            background: linear-gradient(90deg, #0047AB 0%, #002D66 100%);
            padding: 25px;
            text-align: center;
            border-bottom: 3px solid #FFD700;
            position: relative;
        }
        
        .carta-header h1 {
            margin: 0;
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }
        
        .carta-header p {
            margin: 8px 0 0;
            font-size: 16px;
            opacity: 0.9;
            font-weight: 500;
        }
        
        .carta-body {
            display: flex;
            flex-direction: column-reverse;
            padding: 0;
        }
        
        .carta-texto {
            padding: 35px;
            flex: 1;
            position: relative;
        }
        
        .carta-imagen {
            height: 350px;
            position: relative;
            overflow: hidden;
            border-left: 3px solid #FFD700;
        }
        
        .carta-imagen img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center center;
            filter: sepia(15%) contrast(105%) brightness(0.9);
            transition: all 0.5s ease;
        }
        
        .carta-imagen:hover img {
            transform: scale(1.05);
            filter: sepia(0%) contrast(110%) brightness(1);
        }
        
        .carta-imagen::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to right, rgba(0, 71, 171, 0.3), transparent 30%);
            z-index: 1;
        }
        
        .firma {
            margin-top: 40px;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            border-top: 1px solid #0047AB;
            padding-top: 20px;
        }
        
        .firma-nombre {
            font-weight: 700;
            font-size: 20px;
            color: #FFD700;
            margin-bottom: 5px;
            letter-spacing: 1px;
        }
        
        .firma-cargo {
            font-size: 15px;
            opacity: 0.9;
            font-style: italic;
        }
        
        .sello {
            position: absolute;
            bottom: 25px;
            right: 25px;
            width: 90px;
            opacity: 0.9;
            filter: drop-shadow(0 0 5px rgba(255, 215, 0, 0.3));
        }
        
        .texto-destacado {
            color: #FFD700;
            font-weight: 600;
            border-left: 3px solid #0047AB;
            padding-left: 15px;
            margin: 20px 0;
            font-style: italic;
        }
        
        @media (min-width: 768px) {
            .carta-body {
                flex-direction: row;
            }
            
            .carta-imagen {
                height: auto;
                flex: 0 0 45%;
                max-height: 500px;
            }
            
            .carta-header h1 {
                font-size: 36px;
            }
        }
    </style>
</head>
<body>
    <div class="carta-container">
        <div class="carta-header">
            <h1>Sporting Cristal</h1>
            <p>Pasíon que une al Perú</p>
        </div>
        
        <div class="carta-body">
            <div class="carta-texto">
                <h2 style="color: #FFD700; margin-top: 0; font-size: 24px;">Querida Familia Celeste,</h2>
                
                <p>En este momento de gloria y desafíos, nuestra esencia se fortalece con cada uno de ustedes. La imagen de nuestro guerrero en la cancha representa el coraje que nos define.</p>
                
                <div class="texto-destacado">
                    "Cada gota de sudor en esta camiseta es por los que creen, por los que alientan, por los que llevan el celeste en el corazón"
                </div>
                
                <p>Este año hemos escrito páginas memorables juntos, y aún quedan muchas por escribir. Su energía en las tribunas es el combustible que nos impulsa a superar todos los límites.</p>
                
                <p>Los invitamos a seguir siendo parte activa de esta historia que trasciende generaciones. Juntos somos más fuertes, juntos somos Cristal.</p>
                
                <div class="firma">
                    <div class="firma-nombre">Joel Raffo</div>
                    <div class="firma-cargo">Presidente - Club Sporting Cristal</div>
                </div>
                
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Sporting_Cristal_logo.svg/1200px-Sporting_Cristal_logo.svg.png" alt="Escudo Sporting Cristal" class="sello">
            </div>
            
            <div class="carta-imagen">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRS_rGP4d4QMud4vloTkhWVszUINrBexhL9Qg&s" alt="Jugador de Sporting Cristal en acción">
            </div>
        </div>
    </div>
</body>
</html>