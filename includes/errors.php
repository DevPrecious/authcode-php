<?php if (count($errors) > 0) : ?>
    <div class="grid bg-red-400 text-white px-2 py-1 rounded-md">
    <?php foreach ($errors as $error) : ?>
        <span class="">
            <?= $error ?>
        </span>
    <?php endforeach; ?>
    </div>
<?php endif; ?>


<?php if(isset($_SESSION['error'])) : ?>
    <div class="px-2 py-1 bg-red-400 text-white">
        <?= $_SESSION['error'] ?>
    </div>
<?php endif; ?>