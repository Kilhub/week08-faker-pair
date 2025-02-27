<?php
require 'vendor/autoload.php';
$faker = Faker\Factory::create('en_PH');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fake User Accounts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">   

    <h2 class="mb-4 text-center">Fake User Accounts</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>User ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password (Encrypted)</th>
                <th>Account Created</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < 10; $i++) {
                $email = $faker->email;
                $username = explode('@', $email)[0];
                $password = hash('sha256', $faker->password);
                echo "<tr>";
                echo "<td>" . $faker->uuid . "</td>";
                echo "<td>" . $faker->name . "</td>";
                echo "<td>" . $email . "</td>";
                echo "<td>" . strtolower($username) . "</td>";
                echo "<td>" . $password . "</td>";
                echo "<td>" . $faker->dateTimeBetween('-2 years', 'now')->format('Y-m-d H:i:s') . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>