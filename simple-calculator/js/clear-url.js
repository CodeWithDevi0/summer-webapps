// clear result after 5 seconds
setTimeout(function() {
    var result = document.getElementById('result');
    if (result) {
        result.value = '';
    }
}, 5000);

// clear URL after 2 seconds
setTimeout(function() {
    window.history.replaceState({}, '', window.location.pathname);
}, 5000);