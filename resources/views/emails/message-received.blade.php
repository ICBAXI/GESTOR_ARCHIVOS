<!DOCTYPE html>

<head>
    <title>Mensaje Recibido</title>
</head>

<body>
    <p>Recibiste un mensage de: {{ $msg['name'] }} - {{ $msg['email'] }}</p>
    <p><strong>Asunto:</strong>{{ $msg['subject'] }}</p>
    <p><strong>Contenido:</strong>{{ $msg['content'] }}</p>
</body>

</html>
