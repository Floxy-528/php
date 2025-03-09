<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
<h1>Inbox</h1> 
<div>
    
<?php
    $dataDoc = 'data.json';

if (file_exists($dataDoc)) {
    $data = file_get_contents($dataDoc); //read the file
    $array_data = json_decode($data, true); //decode the JSON to append a new entry then save the updated array back to the file
    if (!is_array($array_data)) {
        $array_data = [];
    }

    if (is_array($array_data) && count($array_data) > 0) {
        // Reverse array to show latest message at the top
        $array_data = array_reverse($array_data);

        echo "<h2>Guestbook Entries 📜:</h2>";
        foreach ($array_data as $entry) {
            echo "<div style='border: 1px solid #ccc; padding: 10px; margin: 10px 0;'>";
            echo "<p><strong>Name:</strong> " . htmlspecialchars($entry['name'])."</p>"; // htmlspecialchars - in case changes are made to the data.json
            echo "<p><b>Message:</b> " . nl2br(htmlspecialchars($entry['message'])) . "</p>";
            echo "<p><em>Timestamp:</em> " . ($entry['timestamp'] ?? 'Unknown') ."</p>";
            echo "</div>";
        }

} else {
    echo "<p>No messages yet. Share your message to get started ✍️</p>";
}}
?>



</body>
</html>