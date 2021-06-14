<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Inscription</title>
</head>
<body>
    <?php require_once './templates/header.html' ?>
    <main>

        <h1>Inscrivez-vous !</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" placeholder="Nom" name="name" value="Jon">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" value="1234">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" class="form-control" placeholder="Age" name="age" value="12">
            </div>
            <div class="form-group">
                <div>
                    <input type="radio" name="gender" value="man" checked>
                    <label for="man">Homme</label>
                </div>
                <div>    
                    <input type="radio" name="gender" value="woman">
                    <label for="woman">Femme</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
    </main>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>