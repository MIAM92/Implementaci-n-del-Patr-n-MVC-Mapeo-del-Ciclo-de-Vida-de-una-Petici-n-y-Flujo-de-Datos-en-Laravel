<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo Turístico de El Salvador</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 40px; background-color: #f4f6f9;">

    <h1 style="color: #1a202c; text-align: center;">🇸🇻 El Salvador - Destinos Turísticos 🇸🇻</h1>
    <p style="text-align: center; color: #718096;">Explora los lugares más increíbles de nuestro país</p>

    <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; margin-top: 30px;">
        @foreach($lugares as $lugar)
            <div style="background: white; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; width: 280px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);">
                <h3 style="margin-top: 0; color: #2d3748;">{{ $lugar['titulo'] }}</h3>
                <p><strong>📍 Departamento:</strong> {{ $lugar['departamento'] }}</p>
                <p><strong>🏷️ Categoría:</strong> {{ $lugar['categoria'] }}</p>
                <a href="{{ route('lugares.show', $lugar['id']) }}" style="display: inline-block; background-color: #3182ce; color: white; padding: 8px 12px; text-decoration: none; border-radius: 4px; font-weight: bold; margin-top: 10px;">Ver detalles</a>
            </div>
        @endforeach
    </div>

</body>
</html>
