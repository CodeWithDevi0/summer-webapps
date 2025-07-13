// This is not traditional AJAX using XMLHttpRequest, but it achieves similar functionality using the Fetch API.
document.getElementById('generate-quote').addEventListener('click', function() {
    fetch('config/quotes-array.php')
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();  // Use .json() instead of .text() for better JSON handling
    })
    .then(quotes => {
        if (quotes && quotes.length > 0) {
            var quote = quotes[Math.floor(Math.random() * quotes.length)];
            document.getElementById('quote').textContent = quote;
        } else {
            document.getElementById('quote').textContent = 'No quotes available';
        }
    })
    .catch(error => {
        console.error('Error:', error);
        document.getElementById('quote').textContent = 'Error loading quotes';
    });
});


/*
Explanation sa ai, I had to copy paste this one for future review
This is my first time trying to understand AJAX and I'm not sure if I'm doing it right.
Koan just don't mind me chatting with myself here. This is for my future reference.

AJAX vs Regular JavaScript:

AJAX (Asynchronous JavaScript and XML):
- Makes asynchronous HTTP requests to server without page reload
- Can fetch/send data in background while user continues interacting
- Uses XMLHttpRequest or Fetch API to communicate with server
- Common formats: JSON, XML, plain text
- Example above uses fetch() for AJAX-style requests

Regular JavaScript:
- Runs directly in browser without server communication
- Manipulates DOM, handles events, performs calculations
- Can't get new data without page refresh
- Works with data already loaded in page
- Example: document.getElementById(), Math.random()

Akong question for this one is "Is this code using AJAX?"
Yes, your code is using AJAX! Specifically:
1. You're using the Fetch API (fetch()) which is a modern way to make AJAX requests
2. It's asynchronous (uses .then() promises)
3. Communicates with server (quotes-array.php) without page reload
4. Handles JSON data from server
5. Updates DOM (quote element) dynamically

While it's not using the traditional XMLHttpRequest object,
it's still AJAX because it's making asynchronous requests
to get data from the server without refreshing the page.
*/

