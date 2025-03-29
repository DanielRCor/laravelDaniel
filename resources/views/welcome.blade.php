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
        }
        
        .carta-container {
            width: 90%;
            max-width: 800px;
            background: linear-gradient(135deg, #1a1a1a 0%, #0d0d0d 100%);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            border: 1px solid #0047AB;
        }
        
        .carta-header {
            background: linear-gradient(90deg, #0047AB 0%, #003580 100%);
            padding: 20px;
            text-align: center;
            border-bottom: 3px solid #FFD700;
        }
        
        .carta-header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        
        .carta-header p {
            margin: 5px 0 0;
            font-size: 14px;
            opacity: 0.9;
        }
        
        .carta-body {
            display: flex;
            flex-direction: column-reverse;
            padding: 0;
        }
        
        .carta-texto {
            padding: 30px;
            flex: 1;
        }
        
        .carta-imagen {
            height: 300px;
            position: relative;
            overflow: hidden;
        }
        
        .carta-imagen img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
            filter: grayscale(20%) contrast(110%);
            transition: transform 0.5s ease;
        }
        
        .carta-imagen:hover img {
            transform: scale(1.03);
        }
        
        .carta-imagen::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100px;
            background: linear-gradient(to top, rgba(10, 10, 10, 0.9), transparent);
        }
        
        .firma {
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }
        
        .firma-nombre {
            font-weight: 600;
            font-size: 18px;
            color: #FFD700;
            margin-bottom: 5px;
        }
        
        .firma-cargo {
            font-size: 14px;
            opacity: 0.8;
        }
        
        .sello {
            position: absolute;
            bottom: 20px;
            right: 20px;
            width: 80px;
            opacity: 0.8;
        }
        
        @media (min-width: 768px) {
            .carta-body {
                flex-direction: row;
            }
            
            .carta-imagen {
                height: auto;
                flex: 0 0 40%;
            }
        }
    </style>
</head>
<body>
    <div class="carta-container">
        <div class="carta-header">
            <h1>Sporting Cristal</h1>
            <p>El más grande del Perú</p>
        </div>
        
        <div class="carta-body">
            <div class="carta-texto">
                <h2 style="color: #FFD700; margin-top: 0;">Estimado/a Celeste,</h2>
                
                <p>En este año de grandes desafíos, queremos agradecerte por ser parte de nuestra pasión. Cada grito, cada aliento y cada corazón latiendo por la franja es lo que nos impulsa a ser mejores.</p>
                
                <p>Nuestro equipo, representado aquí por uno de nuestros guerreros, lleva en cada partido el honor de vestir estos colores. Esa entrega en la cancha es el reflejo de tu apoyo incondicional desde las tribunas.</p>
                
                <p>Te invitamos a seguir siendo parte de esta historia que seguimos escribiendo juntos. ¡Vamos Cristal!</p>
                
                <div class="firma">
                    <div class="firma-nombre">Joel Raffo</div>
                    <div class="firma-cargo">Presidente - Sporting Cristal</div>
                </div>
                
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Sporting_Cristal_logo.svg/1200px-Sporting_Cristal_logo.svg.png" alt="Escudo Sporting Cristal" class="sello">
            </div>
            
            <div class="carta-imagen">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRzlFEXzyYr_A3l5NvQVcOzbeYCN7QYvGaow&s" alt="Jugador de Sporting Cristal">
            </div>
        </div>
    </div>
</body>
</html>