// Function to handle the image preview
function previewImage(event, previewId) {
    var reader = new FileReader();
    reader.onload = function() {
        var output = document.getElementById(previewId);
        output.style.display = "block"; // Show the preview image
        output.src = reader.result;     // Set the preview image source to the selected file
    };
    reader.readAsDataURL(event.target.files[0]); // Read the file as data URL
}

// Handle file input change to display selected file info (for debugging)
document.getElementById('name_data').addEventListener('change', function() {
    var fileInput = document.getElementById('name_data');
    var file = fileInput.files[0];  // Get the first file selected
    if (file) {
        console.log("File selected:", file.name); // Log file name for debugging
        console.log("File type:", file.type);     // Log file type (e.g., image/jpeg)
        console.log("File size:", file.size);     // Log file size
    } else {
        console.log("No file selected.");
    }
});
