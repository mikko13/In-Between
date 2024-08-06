<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In - Between</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link your custom stylesheet -->
    <link rel="stylesheet" href="history_styles.css">
    <link rel="icon" href="favicon.png" type="image/x-icon">

</head>
<body>
<!-- Loading screen -->
<div class="loading-overlay" id="loadingOverlay">
<img src="loading.gif" alt="Loading..." class="loading-message" draggable="false">
</div>

<div class="container" id="container"> <!-- Added id attribute -->
</div>

<script>
    // Wait for the page to load
    window.addEventListener('load', function() {
        var container = document.getElementById('container');
        container.style.transition = 'opacity 0.5s ease'; // Apply CSS transition for opacity change
        container.style.opacity = '1'; // Set opacity to 1 for fade-in effect

        // Hide loading overlay when page is fully loaded
        var loadingOverlay = document.getElementById('loadingOverlay');
        loadingOverlay.classList.add('hidden');
    });

    function fadeAndRedirect(destination) {
        var container = document.getElementById('container');
        container.style.transition = 'opacity 0.5s ease'; // Apply CSS transition for opacity change
        container.style.opacity = '0'; // Set opacity to 0 for fade-out effect
        var loadingOverlay = document.getElementById('loadingOverlay');
        loadingOverlay.classList.remove('hidden'); // Show loading overlay
        setTimeout(function() {
            window.location.href = destination; // Redirect to the destination after the animation completes
        }, 500); // Wait for 500 milliseconds (same duration as the transition)
    }
</script>

<!-- Add Bootstrap's JavaScript (optional) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
