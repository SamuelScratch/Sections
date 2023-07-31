<!DOCTYPE html>
<html>

<?php include "./template/header.php" ?>

<body>
    <?php include "./template/navbar.php" ?>

    <main>
        <section>
            <header>
                <h1>
                    Modifier votre profil
                </h1>
            </header>
            <h2>Compte</h2>
            <form action="/edit/user" method="post" enctype="multipart/form-data">
                <label for="name">Nom d'utilisateur</label>
                <input type="text" name="name" value="<?php echo $user->name;?>">
                <label for="password">Mot de passe</label>
                <input type="password" name="password">
                <input type="submit" value="Enregistrer">
            </form>
            <h2>Profile</h2>
            <form action="/edit/profile" method="post" enctype="multipart/form-data">
                <label for="description">Bio</label>
                <input type="text" name="description" value="<?php echo $profile->description;?>">
                <label for="image">Image de profil</label>
                <input type="file" name="image">
                <input type="submit" value="Enregistrer">
            </form>
        </section>
    </main>

    <?php include "./template/footer.php" ?>
</body>

</html>