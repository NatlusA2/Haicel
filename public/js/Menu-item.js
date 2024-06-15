document.addEventListener('DOMContentLoaded', function() {
    // Get all sidebar links
    const sidebarLinks = document.querySelectorAll('.sidebar-link');

    // Add event listener to each link
    sidebarLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            // Prevent default action
            event.preventDefault();
            
            // Remove active class from all links
            sidebarLinks.forEach(link => link.classList.remove('active'));
            
            // Add active class to the clicked link
            this.classList.add('active');
        });
    });
});
