<?php
// Deteksi halaman saat ini
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="sidebar">
            <div class="sidebar-header">
                <h2><?php echo APP_NAME; ?></h2>
            </div>
            
            <ul class="sidebar-nav">
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link <?php echo ($current_page === 'dashboard.php') ? 'active' : ''; ?>">
                        <i>📊</i> Dashboard
                    </a>
                </li>
                
                <?php if ($role === 'admin' || $role === 'kasir'): ?>
                <li class="nav-item">
                    <a href="manajemen_user.php" class="nav-link <?php echo ($current_page === 'manajemen_user.php') ? 'active' : ''; ?>">
                        <i>🛒</i> Manajemen User
                    </a>
                </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link <?php echo ($current_page === 'logout.php') ? 'active' : ''; ?>">
                        <i>🚪</i> Logout
                    </a>
                </li>
            </ul>
        </nav>