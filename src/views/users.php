<main class="content">
    <?php
    renderTitle('User Registration', 'Keep user data up to date', 'icofont-users');
    include(TEMPLATE_PATH . '/messages.php');
    ?>

    <a class="btn btn-lg btn-primary mb-4" href="SaveUserController.php">New user</a>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Hire Date</th>
            <th>Termination Date</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user->name ?></td>
                    <td><?= $user->email ?></td>
                    <td><?= $user->start_date ?></td>
                    <td><?= $user->end_date ?></td>
                    <td>
                        <a href="SaveUserController.php?update=<?= $user->id ?>" class="btn btn-warning rounded-circle mr-2">
                            <i class="icofont-edit"></i>
                        </a>
                        <a href="?delete=<?= $user->id ?>" class="btn btn-danger rounded-circle">
                            <i class="icofont-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>
