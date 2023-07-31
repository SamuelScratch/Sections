<!DOCTYPE html>
<html>

<?php include "./template/header.php" ?>

<body>
    <?php include "./template/navbar.php" ?>

    <main>
        <section>
            <header>
                <h1>
                    <div class="profile-image">
                    <?php if ($profile->image != null):?>
                        <?php echo "<img src='data:image/". $profile->typeImage .";base64," . base64_encode($profile->image) . "'/>"; ?>
                    <?php endif;?>
                    </div>
                    <span><?php echo $user->name ?></span>
                    <?php if (isset($_SESSION["id"])):?>
                        <a href="/edit/profile" class="material-icons" style="font-size: 16px;">edit</a>
                    <?php endif;?>
                </h1>
                <div class="profile-description"><?php echo $profile->description; ?></div>
            </header>
        </section>
    </main>

    <?php include "./template/footer.php" ?>
</body>

</html>