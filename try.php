<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Website</title>
</head>

<body>

    <h1>Welcome to My Simple Website</h1>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/dashboard">Dashboard</a></li>
        </ul>
    </nav>

    <div id="content">
        <!-- Content will be loaded dynamically here -->
    </div>

</body>

</html>

<script>
    // Function to load page content dynamically
    function loadPage(page) {
        // Check if the user is allowed to access the page
        if (page === 'dashboard' && !userIsLoggedIn()) {
            alert("You must be logged in to access the dashboard.");
            return;
        }

        window.location.replace('/dashboard.php');

        // Load the page content dynamically
        // fetch(page + '.html')
        //     .then(response => response.text())
        //     .then(html => {
        //         document.getElementById('content').innerHTML = html;
        //     })
        //     .catch(error => {
        //         console.error('Error loading page:', error);
        //     });
    }

    // Function to check if the user is logged in (placeholder)
    function userIsLoggedIn() {
        // Implement your authentication logic here
        // For simplicity, this function always returns false
        return true;
    }

    // Event listener to handle navigation
    document.addEventListener('DOMContentLoaded', () => {
        // Load the initial page based on the URL
        const page = window.location.pathname.substring(1) || 'home';
        loadPage(page);

        // Handle navigation when clicking on links
        document.querySelectorAll('nav a').forEach(link => {
            link.addEventListener('click', event => {
                event.preventDefault();
                const page = event.target.getAttribute('href').substring(1);
                loadPage(page);
            });
        });
    });
</script>