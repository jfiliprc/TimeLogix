<main class="content">
    <?php
    renderTitle('Clock In', 'Keep your time consistent!', 'icofont-check-alt');
    include(TEMPLATE_PATH . "/messages.php");
    ?>
    <div class="card">
        <div class="card-header">
            <h3><?= date('l, d/m/Y') ?></h3>
            <p class="mb-0">Clock punches made on <?= date('l, d/m/Y') ?></p>
        </div>
        <div class="card-body">
            <div class="d-flex m-5 justify-content-around">
                <span class="record">Entry 1: <?= $workingHours->time1 ?? '--:--:--' ?></span>
                <span class="record">Exit 1: <?= $workingHours->time2 ?? '--:--:--' ?> </span>
            </div>
            <div class="d-flex m-5 justify-content-around">
                <span class="record">Entry 2: <?= $workingHours->time3 ?? '--:--:--' ?> </span>
                <span class="record">Exit 2: <?= $workingHours->time4 ?? '--:--:--' ?> </span>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-center">
            <a href="InNOutController.php" class="btn btn-success btn-lg">
                <i class="icofont-check mr-1"></i>Clock In/Out
            </a>
        </div>
    </div>
    <form class="mt-5" action="InNOutController.php" method="post">
        <div class="input-group no-border">
            <input class="form-control" type="text" name="forcedTime" placeholder="Enter the time to simulate the clock punch...">
            <button class="btn btn-danger ml-3">Simulate clock punch</button>
        </div>
    </form>
</main>