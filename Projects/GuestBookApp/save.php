<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file = "guestbook.json";
    $errors = [];

    // Collect raw inputs
    $name = $_POST["name"] ?? '';
    $message = $_POST["message"] ?? '';

    // 1. Required field validation
    if (empty(trim($name))) {
        $errors[] = "Name is required.";
    }
    if (empty(trim($message))) {
        $errors[] = "Message is required.";
    }

    // 2. Sanitize
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $message = filter_var($message, FILTER_SANITIZE_STRING);

    if (!empty($errors)) {
        // Show errors and link back
        foreach ($errors as $error) {
            echo "<p style='color:red;'>- " . htmlspecialchars($error) . "</p>";
        }
        echo "<a href='index.php'>Go back</a>";
        exit;
    }

    // 3. Prepare new entry
    $entry = [
        "name" => $name,
        "message" => $message,
        "date" => date("Y-m-d H:i:s")
    ];

    // 4. Load existing entries or create new file
    $entries = [];
    if (file_exists($file)) {
        $entries = json_decode(file_get_contents($file), true);
    }

    // 5. Add new entry at the beginning
    array_unshift($entries, $entry);

    // 6. Save back to file
    file_put_contents($file, json_encode($entries, JSON_PRETTY_PRINT));

    // 7. Redirect back to guestbook
    header("Location: index.php");
    exit;
}
