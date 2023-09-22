<main class="content">
    <?php
    renderTitle('User Registration', 'Create and update user', 'icofont-user');
    include(TEMPLATE_PATH . '/messages.php');
    ?>

    <form action="#" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter the name" class="form-control <?= $errors['name'] ? 'is-invalid' : '' ?>" value="<?= isset($name) ? $name : null ?>">
                <div class="invalid-feedback">
                    <?= $errors['name'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter the email" class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>" value="<?= isset($email) ? $email : null ?>">
                <div class="invalid-feedback">
                    <?= $errors['email'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter the password" class="form-control <?= $errors['password'] ? 'is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?= $errors['password'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm the password" class="form-control <?= $errors['confirm_password'] ? 'is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?= $errors['confirm_password'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="start_date">Hire Date</label>
                <input type="date" name="start_date" id="start_date" class="form-control <?= $errors['start_date'] ? 'is-invalid' : '' ?>" value="<?= $start_date ?>">
                <div class="invalid-feedback">
                    <?= $errors['start_date'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="end_date">Termination Date</label>
                <input type="date" name="end_date" id="end_date" class="form-control <?= $errors['end_date'] ? 'is-invalid' : '' ?>" value="<?= $end_date ?>">
                <div class="invalid-feedback">
                    <?= $errors['end_date'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="is_admin">Administrator?</label>
                <input type="checkbox" name="is_admin" id="is_admin" class="form-control <?= $errors['is_admin'] ? 'is-invalid' : '' ?>" <?= isset($is_admin) ? 'checked' : '' ?>>
                <div class="invalid-feedback">
                    <?= $errors['is_admin'] ?>
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-primary btn-lg">Save</button>
            <a class="btn btn-secondary btn-lg" href="/UsersController.php">Cancel</a>
        </div>
    </form>
</main>
