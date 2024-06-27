document.addEventListener("DOMContentLoaded", function() {
    const tabs = document.querySelectorAll("nav ul li a");
    const tabContents = document.querySelectorAll(".tab-content");
    const menuToggle = document.getElementById("menu-toggle");
    const sideNav = document.querySelector("nav ul");

    tabs.forEach(tab => {
        tab.addEventListener("click", function(event) {
            event.preventDefault();
            const target = this.getAttribute("href").substring(1);

            tabContents.forEach(content => {
                content.classList.remove("active");
                if (content.id === target) {
                    content.classList.add("active");
                }
            });

            if (window.innerWidth <= 768) {
                sideNav.classList.remove("active");
            }
        });
    });

    // Automatically show the dashboard tab content on load
    document.getElementById("dashboard").classList.add("active");

    // Handle form submission for test request
    const form = document.getElementById("test-request-form");
    form.addEventListener("submit", function(event) {
        event.preventDefault();
        alert("Test requested successfully!");
        // Implement the request submission logic here
    });

    // Toggle side navigation menu
    menuToggle.addEventListener("click", function() {
        sideNav.classList.toggle("active");
    });
});
