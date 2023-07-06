<!DOCTYPE html>
<html>

<?php include "./template/header.php" ?>

<body>
    <?php include "./template/navbar.php" ?>

    <main>

        <section>
            <form action="/mvc/users<?php if (isset($user->id)) echo "/$user->id"; ?>" method="post">
                <input type="text" value="<?php echo $user->name;?>">
                <input type="text" value="<?php echo $user->mail;?>">
                <input type="submit" value="Sauvegarder">
            </form>
        </section>

    </main>


    <?php include "./template/footer.php" ?>
</body>

</html>