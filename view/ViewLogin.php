<!DOCTYPE html>
<html>

<?php include_once "./template/header.php" ?>

<body>
    <?php include_once "./template/navbar.php" ?>

    <main>
        <section>
            <header>
                <h1>Connexion</h1>
            </header>
            <?php echo "<p class='msgErr'>" . $msgErr . "</p>"; ?>
            <?php echo "<p class='msgSucc'>" . $msgSucc . "</p>"; ?>
            <form action="/login" method="post">
                <label for="name">Nom d'utilisateur</label>
                <input type="text" name="name">
                <label for="password">Mot de Passe</label>
                <input type="password" name="password">
                <input type="submit" value="Connexion">
                <a href="/register">S'inscrire</a>
            </form>
        </section>
    </main>

    <?php include_once "./template/footer.php" ?>
</body>

</html>