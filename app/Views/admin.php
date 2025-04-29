<?= $this->extend('layouts/content') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <h2>Welcome, Admin <?= session()->get('user')['username'] ?></h2>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>User Statistics</h5>
                </div>
                <div class="card-body">
                    <p>Total Users: <?= $stats['total_users'] ?></p>
                    <p>Active Users: <?= $stats['active_users'] ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>User List</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?= $user['id'] ?></td>
                                    <td><?= $user['name'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>