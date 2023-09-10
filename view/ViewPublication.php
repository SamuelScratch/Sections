<!-- For each DtoPublication in $feed create a div with class="publication" displaying the name of the user with the link to his profile with the function DtoUser::getUser($publication->user_id) and the publication content -->
<div class="publications">
<?php foreach($feed as $publication): ?>
    <div class="publication">
        <div class="publication-user">
            <a href="/profile/<?= $publication->user_id ?>">
                <?= DtoUser::getUser($publication->user_id)->name ?>
            </a>
        </div>
        <div class="publication-content"><?= $publication->content ?></div>
    </div>
<?php endforeach; ?>
</div>