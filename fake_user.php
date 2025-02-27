<?php
require 'vendor/autoload.php';
$faker = Faker\Factory::create('en_PH'); // Use Filipino names
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fake User Profiles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="mb-4 text-center">Fake User Profiles</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Birthdate</th>
                <th>Job Title</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < 5; $i++) {
                echo "<tr>";
                echo "<td>" . $faker->name . "</td>";
                echo "<td>" . $faker->email . "</td>";
                echo "<td>+63 " . $faker->numerify('9## ### ####') . "</td>";
                echo "<td>" . $faker->address . "</td>";
                echo "<td>" . $faker->date('Y-m-d') . "</td>";
                echo "<td>" . $faker->jobTitle . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>