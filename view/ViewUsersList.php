<!DOCTYPE html>
<html>

<?php include "./template/header.php" ?>

<body>
    <?php include "./template/navbar.php" ?>

    <main>

        <section>
            <table>
                <tr>
                    <?php foreach ((new DtoUser(0, "", ""))->dtoDescription as $key => $value) : ?>
                        <th><?php echo $key; ?></th>
                    <?php endforeach; ?>
                </tr>
                <?php foreach ($lstUsers as $user) : ?>
                    <tr>
                        <?php echo "<td><a href='/mvc/users/$user->id'>$user->id</a></td>"; ?>
                        <?php echo "<td>$user->name</td>"; ?>
                        <?php echo "<td>$user->mail</td>"; ?>
                    </tr>
                <?php endforeach; ?>
            </table>
        </section>

    </main>


    <?php include "./template/footer.php" ?>
</body>

</html>