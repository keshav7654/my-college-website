<?php
// Predefined student data
$students = [
    [
        "fullname" => "keshav singh",
        "email" => "singhkeshav4012@gmail.com",
        "username" => "keshav123",
        "password" => "pass123"
    ], 
    [
        "fullname" => "hemansh singh",
        "email" => "hemanshsingh123@gmail.com",
        "username" => "hemansh123",
        "password" => "pass123"
    ],
    [
        "fullname" => "isha",
        "email" => "isha123@gmail.com",
        "username" => "isha123",
        "password" => "pass123"
    ],
    [
        "fullname" => "gourav",
        "email" => "gourav123@gmail.com",
        "username" => "gourav123",
        "password" => "pass123"
    ],
    [
        "fullname" => "Vikram Yadav",
        "email" => "vikram@example.com",
        "username" => "vikram654",
        "password" => "passvikram"
    ],
    [
        "fullname" => "Simran Kaur",
        "email" => "simran@example.com",
        "username" => "simran111",
        "password" => "passsimran"
    ],
    [
        "fullname" => "Rohit Sinha",
        "email" => "rohit@example.com",
        "username" => "rohit777",
        "password" => "passrohit"
    ],
    [
        "fullname" => "Sneha Kapoor",
        "email" => "sneha@example.com",
        "username" => "sneha888",
        "password" => "passsneha"
    ],
    [
        "fullname" => "Karan Patel",
        "email" => "karan@example.com",
        "username" => "karan999",
        "password" => "passkaran"
    ],
    [
        "fullname" => "Anjali Desai",
        "email" => "anjali@example.com",
        "username" => "anjali000",
        "password" => "passanjali"
    ]
];

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm = $_POST["confirm"];

    $matched = false;

    foreach ($students as $student) {
        if (
            $student["fullname"] === $fullname &&
            $student["email"] === $email &&
            $student["username"] === $username &&
            $student["password"] === $password &&
            $password === $confirm
        ) {
            $matched = true;
            break;
        }
    }

    if ($matched) {
        echo "<script>alert('✅ Registration successful!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('❌ Registration failed! Please check your details and try again.'); window.location.href='index.html';</script>";
    }
}
?>
