<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .user-card {
            margin-top: 20px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Página Inicial</h1>
    </div>
    <div class="container">
        <div class="card user-card">
            <div class="card-body">
                <h5 class="card-title">Bem-vindo, <?php echo e(Auth::user()->name); ?>!</h5>
                <p class="card-text">Email: <?php echo e(Auth::user()->email); ?></p>
                <a href="<?php echo e(route('logout')); ?>" class="btn btn-danger">Sair</a>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\Dell\Documents\server\resources\views/home.blade.php ENDPATH**/ ?>