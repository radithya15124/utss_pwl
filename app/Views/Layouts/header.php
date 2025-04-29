<!-- Header -->
<header class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?= $title ?? 'Dashboard' ?></h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <?= session()->get('user')['username'] ?> (<?= session()->get('user')['role'] ?>)
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="/auth/logout">Logout</a></li>
            </ul>
        </div>
    </div>
</header>
<!-- Menampilkan flash data error -->
<?php if (session()->getFlashdata('error')) : ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>