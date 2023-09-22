<main class="content">
    <?php
    renderTitle('Managerial Report', 'Summary of employees\' worked hours', 'icofont-chart-histogram');
    ?>

    <div class="summary-boxes">
        <div class="summary-box bg-primary">
            <i class="icon icofont-users"></i>
            <p class="title">Number of Employees</p>
            <h3 class="value"><?= $activeUsersCount ?></h3>
        </div>
        <div class="summary-box bg-danger">
            <i class="icon icofont-patient-bed"></i>
            <p class="title">Absences</p>
            <h3 class="value"><?= count($absentUsers) ?></h3>
        </div>
        <div class="summary-box bg-success">
            <i class="icon icofont-sand-clock"></i>
            <p class="title">Hours Worked This Month</p>
            <h3 class="value"><?= $hoursInMonth ?></h3>
        </div>
    </div>
    <?php if (count($absentUsers) > 0) : ?>
    <div class="card mt-4">
        <div class="card-header">
            <h4 class="card-title">Absentees Today</h4>
            <p class="card-category mb-0">List of employees who have not clocked in yet today</p>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <th>Name</th>
                </thead>
                <tbody>
                    <?php foreach ($absentUsers as $name) : ?>
                    <tr>
                        <td><?= $name ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php endif ?>
</main>
