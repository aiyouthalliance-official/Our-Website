document.addEventListener('DOMContentLoaded', function () {
    // Add other functionality here that is specific to site-wide events
    console.log('Page loaded and ready for interaction!');
    
    // Example: Handling clicks for navigation links
    const navLinks = document.querySelectorAll('header nav ul li a');
    navLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = e.target.getAttribute('href').slice(1); // Get target section ID
            document.getElementById(targetId).scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    });
});
