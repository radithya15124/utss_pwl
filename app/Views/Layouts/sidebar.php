<!-- Sidebar -->
<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-white" href="/<?= session()->get('user')['role'] ?>">
                    Dashboard
                </a>
            </li>
            <?php if (session()->get('user')['role'] === 'admin'): ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">
                        Manage Users
                    </a>
                </li>
            <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link text-white" href="/auth/logout">
                    Logout
                </a>
            </li>
        </ul>
    </div>
</nav>