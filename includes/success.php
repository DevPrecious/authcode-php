<?php if(isset($_SESSION['success'])) : ?>
    <div class="px-2 py-1 bg-green-400 text-white">
        <?= $_SESSION['success'] ?>
    </div>
<?php endif; ?>
