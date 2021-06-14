<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Connexion</title>
</head>
<body>
    <?php require_once './templates/header.php' ?>
    <main>
        <h1>Se connecter</h1>
        <form action="controllers/login.php" method="POST">
            <div class="form-group">
                <label for="name">Login</label>
                <input type="text" class="form-control" placeholder="Nom" name="name" value="Jon">
            </div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
    </main>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>