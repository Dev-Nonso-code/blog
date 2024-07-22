<?php
// Assume you have an array of users like this:
$users = [
    ['id' => 1, 'name' => 'John Doe', 'email' => 'john.doe@example.com', "nation" => "Nigeria"],
    ['id' => 2, 'name' => 'Zoozlo MAtt', 'email' => 'jane.smith@example.com', "nation" => "Congo"],
    ['id' => 3, 'name' => 'Nonsoglobal', 'email' => 'nonso.smith@example.com', "nation" => "BIAFRA"],
    ['id' => 4, 'name' => 'Jane Smith', 'email' => 'daniel.smith@example.com', "nation" => "CANADA"],
    ['id' => 5, 'name' => 'SQI Smith', 'email' => 'godwin.smith@example.com', "nation" => "U.S.A"],
    ['id' => 6, 'name' => 'Kilo Smith', 'email' => 'root.smith@example.com', "nation" => "BRAZIL"],
    ['id' => 7, 'name' => 'Jane Smith', 'email' => 'micheal.smith@example.com', "nation" => "UK"],
    // Add more users as needed
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<h1>User List</h1>

<table class="border border-2 border-info w-100 text-center">
    <tr class="p-3 border border-2 border-info">
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>COUNTRY</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr class="p-3 border border-2 border-info">
            <td><?= htmlspecialchars($user['id']) ?></td>
            <td><?= htmlspecialchars($user['name']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
            <td><?= htmlspecialchars($user['nation']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</body>
</html>