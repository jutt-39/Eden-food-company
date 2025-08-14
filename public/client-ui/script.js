
    // Function to update the current year
    document.getElementById('currentYear').textContent = new Date().getFullYear();

    // Function to update the date and time
    function updateDateTime() {
        const now = new Date();
        const dateTimeString = now.toLocaleString(); // Format: MM/DD/YYYY, HH:MM:SS AM/PM
        document.getElementById('dateTime').textContent = dateTimeString;
    }

    // Update the date and time every second
    setInterval(updateDateTime, 1000);

    // Initial call to display the date and time immediately
    updateDateTime();



    //  <!-- Custom JS for Status Check -->

        // Mock PDF file for demonstration
        const mockPdfUrl = "AjmalCVLatest.pdf";

        // Handle form submission
        document.getElementById('statusCheckForm').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent form submission

            // Get the search input value
            const searchInput = document.getElementById('searchInput').value.trim();

            // Simulate a search (replace with actual backend logic)
            if (searchInput) {
                // Show the PDF preview
                const pdfPreview = document.getElementById('pdfPreview');
                const pdfViewer = document.getElementById('pdfViewer');
                const openPdf = document.getElementById('openPdf');
                const downloadPdf = document.getElementById('downloadPdf');

                // Set the PDF file URL
                pdfViewer.src = mockPdfUrl;
                openPdf.href = mockPdfUrl;
                downloadPdf.href = mockPdfUrl;

                // Show the PDF preview section
                pdfPreview.style.display = 'block';
            } else {
                alert('Please enter your email or passport number.');
            }
        });


