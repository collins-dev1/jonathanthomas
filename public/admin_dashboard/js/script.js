document.addEventListener("DOMContentLoaded", function () {
    // Mobile menu toggle
    const mobileMenuToggle = document.querySelector(".mobile-menu-toggle");
    const sidebar = document.querySelector(".sidebar");
    const overlay = document.querySelector(".sidebar-overlay");

    function toggleSidebar() {
        sidebar.classList.toggle("open");
        overlay.classList.toggle("active");
    }

    mobileMenuToggle.addEventListener("click", function () {
        toggleSidebar();
    });

    // Close sidebar when clicking on overlay
    overlay.addEventListener("click", function () {
        toggleSidebar();
    });

    // Sidebar dropdown functionality
    const dropdownItems = document.querySelectorAll(
        ".sidebar-menu .has-dropdown"
    );

    dropdownItems.forEach((item) => {
        item.addEventListener("click", function (e) {
            e.preventDefault();
            e.stopPropagation();

            const submenu = this.nextElementSibling;
            const arrow = this.querySelector(".dropdown-arrow");

            // Close other open dropdowns
            dropdownItems.forEach((otherItem) => {
                if (otherItem !== this) {
                    const otherSubmenu = otherItem.nextElementSibling;
                    const otherArrow =
                        otherItem.querySelector(".dropdown-arrow");
                    if (
                        otherSubmenu &&
                        otherSubmenu.classList.contains("open")
                    ) {
                        otherSubmenu.classList.remove("open");
                        otherArrow.classList.remove("rotate");
                    }
                }
            });

            // Toggle current dropdown
            if (submenu) {
                submenu.classList.toggle("open");
            }
            if (arrow) {
                arrow.classList.toggle("rotate");
            }
        });
    });

    // User profile dropdown
    const userProfile = document.querySelector(".user-profile");
    const userDropdown = document.querySelector(".user-dropdown");

    userProfile.addEventListener("click", function (e) {
        e.stopPropagation();
        userDropdown.classList.toggle("show");
    });

    // Close dropdowns when clicking outside
    document.addEventListener("click", function () {
        userDropdown.classList.remove("show");

        // Close all sidebar dropdowns
        dropdownItems.forEach((item) => {
            const submenu = item.nextElementSibling;
            const arrow = item.querySelector(".dropdown-arrow");
            if (submenu) {
                submenu.classList.remove("open");
            }
            if (arrow) {
                arrow.classList.remove("rotate");
            }
        });
    });

    // Prevent dropdown from closing when clicking inside
    userDropdown.addEventListener("click", function (e) {
        e.stopPropagation();
    });
});
