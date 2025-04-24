<?php
// Predefined users for login
$users = [
    [
        "username" => "keshav123"
        "password" => "pass123"
    ],
    [
        "username" => "hemansh123",
        "password" => "pass123"
    ],
    [
        "username" => "isha123",
        "password" => "pass123"
    ],
    [
        "username" => "gourav123",
        "password" => "pass123"
    ],
    [
        "username" => "vikram654",
        "password" => "passvikram"
    ],
    [
        "username" => "simran111",
        "password" => "passsimran"
    ],
    [
        "username" => "rohit777",
        "password" => "passrohit"
    ],
    [
        "username" => "sneha888",
        "password" => "passsneha"
    ],
    [
        "username" => "karan999",
        "password" => "passkaran"
    ],
    [
        "username" => "anjali000",
        "password" => "passanjali"
    ]
];

// Check login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $valid = false;

    foreach ($users as $user) {
        if ($user["username"] === $username && $user["password"] === $password) {
            $valid = true;
            break;
        }
    }

    if ($valid) {
        echo "<script>alert('✅ Login Successful!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('❌ Login Failed. Please check your credentials.'); window.location.href='index.html';</script>";
    }
}
?>
