document.addEventListener("DOMContentLoaded", function() {
    var overlay = document.getElementById("overlay");
    var openOverlayBtn = document.getElementById("openOverlay");
    var closeOverlayBtn = document.getElementById("closeOverlay");

    // Open the overlay
    openOverlayBtn.onclick = function() {
        overlay.style.display = "block";
    }

    // Close the overlay
    closeOverlayBtn.onclick = function() {
        overlay.style.display = "none";
    }

    // Close the overlay when clicking outside of the overlay content
    window.onclick = function(event) {
        if (event.target == overlay) {
            overlay.style.display = "none";
        }
    }
});
