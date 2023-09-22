<aside class="sidebar">
    <nav class="menu mt-3">
        <ul class="nav-list">
            <?php if ($user->is_admin) : ?>
            <li class="nav-item">
                <a href="UsersController.php">
                    <i class="icofont-users mr-2">
                        <span class="ml-2">Users</span>
                    </i>
                </a>
            </li>
            <?php endif ?>
            <li class="nav-item">
                <a href="DayRecordsController.php">
                    <i class="icofont-ui-check">
                        <span class="ml-2">Record Time</span>
                    </i>
                </a>
            </li>
            <li class="nav-item">
                <a href="MonthlyReportController.php">
                    <i class="icofont-ui-calendar">
                        <span class="ml-2">Monthly Report</span>
                    </i>
                </a>
            </li>
            <?php if ($user->is_admin) : ?>
            <li class="nav-item">
                <a href="ManagerReportController.php">
                    <i class="icofont-chart-histogram">
                        <span class="ml-2">Managerial Report</span>
                    </i>
                </a>
            </li>
            <?php endif ?>
        </ul>
    </nav>
    <div class="sidebar-widgets">
        <div class="sidebar-widget">
            <i class="icon icofont-hour-glass text-primary"></i>
            <div class="info">
                <span class="main text-primary"
                    <?= $activeClock === 'workedInterval' ? 'active-clock' : '' ?>><?= $workedInterval ?></span>
                <span class="label text-muted">Worked Hours</span>
            </div>
        </div>
        <div class="division my-3"></div>
        <div class="sidebar-widget">
            <i class="icon icofont-ui-alarm text-danger"></i>
            <div class="info">
                <span class="main text-danger"
                    <?= $activeClock === 'exitTime' ? 'active-clock' : '' ?>><?= $exitTime ?></span>
                <span class="label text-muted">Exit Time</span>
            </div>
        </div>
    </div>
</aside>
