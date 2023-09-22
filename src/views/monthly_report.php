<main class="content">
    <?php
    renderTitle('Monthly Report', 'Track your hours balance', 'icofont-ui-calendar');
    ?>

    <div>
        <form class="mb-4" action="#" method="post">
            <div class="input-group">
                <?php if ($user->is_admin) : ?>
                    <select class="form-control mr-3" name="user" aria-placeholder="Select the user...">
                        <option value="">Select the user</option>
                        <?php
                        foreach ($users as $user) {
                            $selected = $user->id === $selectedUserId ? 'selected' : '';

                            echo "<option value='{$user->id}' {$selected}>{$user->name}</option>";
                        }
                        ?>
                    </select>
                <?php endif ?>
                <select class="form-control" name="period" aria-placeholder="Select the period...">
                    <?php
                    foreach ($periods as $key => $month) {
                        $selected = $key === $selectedPeriod ? 'selected' : '';

                        echo "<option value='{$key}' {$selected}>{$month}</option>";
                    }
                    ?>
                </select>
                <button class="btn btn-primary ml-3"><i class="icofont-search"></i></button>
            </div>
        </form>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>Day</th>
                <th>Entry 1</th>
                <th>Exit 1</th>
                <th>Entry 2</th>
                <th>Exit 2</th>
                <th>Balance</th>
            </thead>
            <tbody>
                <?php foreach ($report as $registry) : ?>
                    <tr>
                        <td><?= date('l, d/m/Y', strtotime($registry->work_date)) ?></td>
                        <td><?= $registry->time1 ?></td>
                        <td><?= $registry->time2 ?></td>
                        <td><?= $registry->time3 ?></td>
                        <td><?= $registry->time4 ?></td>
                        <td><?= $registry->getBalance() ?></td>
                    </tr>
                <?php endforeach ?>
                <tr class="bg-primary text-white">
                    <td>Worked Hours</td>
                    <td colspan="3"><?= $sumOfWorkedTime ?></td>
                    <td>Monthly Balance</td>
                    <td><?= $balance ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
