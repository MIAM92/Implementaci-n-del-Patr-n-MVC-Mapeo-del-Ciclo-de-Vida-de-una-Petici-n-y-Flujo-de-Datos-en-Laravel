<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ $lugar['titulo'] }} - Detalle</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 40px; background-color: #f4f6f9;">

    <div style="max-width: 600px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);">
        <a href="{{ route('lugares.index') }}" style="color: #3182ce; text-decoration: none; font-weight: bold;">⬅ Volver al catálogo</a>
        
        <h1 style="color: #2d3748; margin-top: 20px;">{{ $lugar['titulo'] }}</h1>
        <hr style="border: 0; height: 1px; background: #e2e8f0; margin: 20px 0;">
        
        <p><strong>📍 Departamento:</strong> {{ $lugar['departamento'] }}</p>
        <p><strong>Acreditación/Categoría:</strong> {{ $lugar['categoria'] }}</p>
        <p><strong>💵 Precio de Entrada:</strong> {{ $lugar['precio'] > 0 ? '$' . number_format($lugar['precio'], 2) : 'Gratis' }}</p>
        <p><strong>📝 Descripción:</strong> {{ $lugar['descripcion'] }}</p>

        <div style="margin-top: 40px; background: #edf2f7; padding: 20px; border-radius: 6px;">
            <h3 style="margin-top: 0; color: #2d3748;">📬 Solicitar más información</h3>
            <form action="#" method="POST">
                @csrf
                <div style="margin-bottom: 15px;">
                    <label style="display:block; margin-bottom:5px;">Nombre completo:</label>
                    <input type="text" style="width: 95%; padding: 8px; border: 1px solid #cbd5e0; border-radius: 4px;" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <label style="display:block; margin-bottom:5px;">Correo electrónico:</label>
                    <input type="email" style="width: 95%; padding: 8px; border: 1px solid #cbd5e0; border-radius: 4px;" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <label style="display:block; margin-bottom:5px;">Mensaje o Consulta:</label>
                    <textarea style="width: 95%; padding: 8px; border: 1px solid #cbd5e0; border-radius: 4px; height: 80px;" required></textarea>
                </div>
                <button type="submit" style="background: #38a169; color: white; padding: 10px 15px; border: none; border-radius: 4px; font-weight: bold; cursor: pointer;">Enviar Formulario</button>
            </form>
        </div>
    </div>

</body>
</html>
