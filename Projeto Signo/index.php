<?php include 'layouts/header.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Descubra seu Signo</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Descubra seu Signo</h1>
        <form action="show_zodiac_sign.php" method="post" class="mt-4">
            <div class="form-group">
                <label for="birthdate">Data de Nascimento:</label>
                <input type="date" id="birthdate" name="birthdate" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Descobrir Signo</button>
        </form>
    </div>
</body>
</html>
