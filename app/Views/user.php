<?= $this->extend('layouts/content') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <h2>Welcome, <?= session()->get('user')['username'] ?></h2>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Your Profile</h5>
                </div>
                <div class="card-body">
                    <p>Last Login: <?= $profile['last_login'] ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Your Tasks</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <?php foreach ($tasks as $task): ?>
                            <li class="list-group-item"><?= $task ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>