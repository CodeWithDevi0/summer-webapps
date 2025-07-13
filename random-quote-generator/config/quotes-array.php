<?php

// Tell the browser this is JSON data
header('Content-Type: application/json');

$quotes = [
    "“The greatest glory in living lies not in never falling, but in rising every time we fall.” - Nelson Mandela",
    "“The way to get started is to quit talking and begin doing.” - Walt Disney",
    "“Your time is limited, so don’t waste it living someone else’s life.” - Steve Jobs",
    "“Be the change that you wish to see in the world.” - Mahatma Gandhi",
    "“Believe you can and you’re halfway there.” - Theodore Roosevelt",
    "“It does not matter how slowly you go as long as you do not stop.” - Confucius",
    "“Success is not final, failure is not fatal: It is the courage to continue that counts.” - Winston Churchill",
    "“Don’t watch the clock; do what it does. Keep going.” - Sam Levenson",
    "“You miss 100% of the shots you don’t take.” - Wayne Gretzky",
    "“I have not failed. I’ve just found 10,000 ways that won’t work.” - Thomas Edison",
];

// Convert to JSON and SEND it back to JavaScript
echo json_encode($quotes);

?>
