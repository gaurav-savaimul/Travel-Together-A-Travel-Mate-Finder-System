<?php
// Simulating team member data retrieval from a database
$teamMembers = array(
    array('name' => 'Sharvari Dahe'),
    array('name' => 'Nimisha Rajgure'),
    array('name' => 'Yash Hatgaokar'),
    array('name' => 'Gaurav Savaimul'),
);

foreach ($teamMembers as $member) {
    echo "<strong>{$member['name']}</strong> <br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>About Us</h1>
    </header>
    <main>
        <section>
            <h2>Our Team</h2>
            <p>
            Sharvari Dahe , Nimisha Rajgure , Yash Hatgaokar , Gaurav Savaimul .
                <?php include 'team.php'; ?>
            </p>
        </section>
    </main>
    <footer>
        <p>&copy; R2-B 2024 Our Company</p>
    </footer>
</body>
</html>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header, footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
}

main {
    padding: 20px;
}

section {
    margin-bottom: 20px;
}

h1, h2 {
    color: #333;
}

p {
    line-height: 1.5;
}
