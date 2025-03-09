<?php

// Function to save guestbook messages
function saveData($name, $message) {
    
    // Check if either name or message is empty
    if (empty($name) || empty($message)) {
        return "All fields are required";
    }

    // Create a new array with user input and timestamp
    $newInfo = [
        "name" => $name,
        "message" => $message,
        "received-on" => date("l d M Y H:i:s") // Adds current date and time
    ];

    // Sanitize the input 
    $clean_message = array_map(function ($item) {
        return htmlspecialchars($item);
    }, $newInfo);

    // Define the file path to store messages
    $file_path = "messages.json";

    // Check if the file is empty or not
    if (!file_exists($file_path) || filesize($file_path) == 0) {
        $data_to_save = array($clean_message); // If empty, start with a new array
    } else {
        // Read the existing file contents and decode JSON
        $old_records = json_decode(file_get_contents($file_path), true);

        // Ensure the old records are a valid array
        if (!is_array($old_records)) {
            $old_records = [];
        }

        // Add the new message to the existing records
        array_push($old_records, $clean_message);
        $data_to_save = $old_records;
    }

    // Encode the updated data back to JSON format
    $encoded_data = json_encode($data_to_save, JSON_PRETTY_PRINT);

    // Save the JSON data back to the file
    if (!file_put_contents($file_path, $encoded_data)) {
        return "Error storing message, please try again"; // Handle file save error
    } else {
        return "Success"; // Success message on successful save
    }
}


// Function to get and display guestbook messages
function getMessages() {
    $file_path = "messages.json";

    if (!file_exists($file_path) || filesize($file_path) == 0) {
        return [];
    }

    $messages = json_decode(file_get_contents($file_path), true);

    // Ensure it's a valid array
    if (!is_array($messages)) {
        return [];
    }

    // Reverse the array to show the latest messages first
    return array_reverse($messages);
}

