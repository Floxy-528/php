<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    //sanitize data
    $name = trim(htmlspecialchars($_POST['name']));
    $messages = trim(htmlspecialchars($_POST['message']));

    // Store the data in response var 
    $response = [
        'name' => $name,
        'message'=> $messages,
        "timestamp" => date("Y-m-d H:i:s")
    ];
    
    //validate data
    if (!empty($response['name']) && !empty($response['message'])) { //empty - handles, Empty string, Null value, Boolean false, Integer zero, Integer zero, String zero 
    echo "<p style = 'font-size: 1.43rem; color:#124f02; font-family: Georgia; font-style: italic; margin-left: 5%';>Thank you ". $response['name'] . ", your message has been received. 😊</p>";
}

else {
    echo "<p style = 'font-size: 1.4rem; color:#ff0000; font-family: Georgia; font-style: italic; margin-left: 5%'> ❌ All fields are required </p>";
}

// Save to JSON file

 $dataDoc = 'data.json'; //sets json file in a variable for easy access or reuse 
 if (!file_exists($dataDoc)) { //if not, creates it with an empty JSON array ([]
    file_put_contents($dataDoc, '[]'); // Initialize with an empty array
}

 $data = file_get_contents($dataDoc); //file_get_contents() grabs contents in the file and stores in the variable
 $array_data = json_decode($data, true); //json_decode converts JSON string into a PHP associative array so to be worked with easily. True - returns an associative array (not an object)
    if (!is_array($array_data)) { //initialize as an array, if file is empty
        $array_data = [];
    }
        // add new data and save
        $array_data[] = $response;

 file_put_contents($dataDoc, json_encode($array_data, JSON_PRETTY_PRINT)); //Converts the updated $array_data back into a JSON string and saves it to the file (data.json).
}

