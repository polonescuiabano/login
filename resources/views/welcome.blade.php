<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login via Discord</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/material-components-web/dist/material-components-web.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh; 
            margin: 0; 
            background-color: #f8f9fa; 
        }
        .mdc-typography {
            text-align: center; 
        }
        h1 {
            margin-bottom: 20px; 
        }
    </style>
</head>
<body>
    <div class="mdc-typography">
        <h1>Login com Discord</h1>
        <a href="{{ url('auth/discord') }}" class="mdc-button mdc-button--raised">Login com Discord</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/material-components-web/dist/material-components-web.min.js"></script>
</body>
</html>
