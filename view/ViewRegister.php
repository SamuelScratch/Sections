<!DOCTYPE html>
<html>

<?php include_once "./template/header.php" ?>

<body>
    <?php include_once "./template/navbar.php" ?>

    <main>
        <section>
            <header>
                <h1>Inscription</h1>
            </header>
            <?php echo "<p class='msgErr'>" . $msgErr . "</p>"; ?>
            <?php echo "<p class='msgSucc'>" . $msgSucc . "</p>"; ?>
            <form action="/register" method="post">
                <label for="name">Nom d'utilisateur</label>
                <input type="text" name="name">
                <label for="mail">Adresse email</label>
                <input type="mail" name="mail">
                <label for="password">Mot de Passe</label>
                <input type="password" name="password">
                <input type="submit" value="S'inscrire">
                <a href="/login">Se connecter</a>
            </form>
        </section>
    </main>

    <?php include_once "./template/footer.php" ?>
</body>

</html>