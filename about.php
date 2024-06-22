<!-- /about.php -->
<?php include 'includes/header.php'; ?>
<main>
    <h1>About Salman khan</h1><hr>
    <h2><p>It was last year at IIFA 2022 when Salman Khan was seen in tears as he recalled the struggle after his debut film Maine Pyar Kiya. The actor didn't have money and credited filmmaker Ramesh Taurani for saving his career and said Bhagyashree got all the credit for the film's success.</p></h2>
    <?php
    $team = [
        ["name" => "Sanjay leela bhansali", "role" => "producer"],
        ["name" => "Rashid khan", "role" => "script writer"],
        ["name" => "Jordy patel", "role" => "manager"],
    ];
    ?>
    <h2> Team Members of Salman khan </h2>
    <ul>
        <?php foreach ($team as $member): ?>
            <li><?= $member['name'] ?> - <?= $member['role'] ?></li>
        <?php endforeach; ?>
    </ul>
</main>
<?php include 'includes/footer.php'; ?>