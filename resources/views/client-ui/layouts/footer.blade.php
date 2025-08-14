<footer class="about-section py-5 bg-dark text-white">
    <div class="container">
        <div class="row">
            <!-- Quick Links -->
            <div class="col-md-4 mb-4">
                <h4>Quick Links</h4>
                <ul class="list-unstyled">
                    <li><a href="{{ route('index') }}" class="text-white text-decoration-none">Home</a></li>
                    <li><a href="{{ route('fee-status') }}" class="text-white text-decoration-none">Fee Status</a></li>
                    <li><a href="{{ route('apply-biometric') }}" class="text-white text-decoration-none">Apply
                            Bomatric</a></li>
                    <li><a href="{{ route('account-department') }}" class="text-white text-decoration-none">Accounts
                            Department</a></li>
                    <li><a href="{{ route('lmia-approval') }}" class="text-white text-decoration-none">LMIA Approval</a>
                    </li>
                    <li><a href="{{ route('offer-letter') }}" class="text-white text-decoration-none">Offer Letter</a>
                    </li>
                    <li><a href="{{ route('work-permit') }}" class="text-white text-decoration-none">Work Permit</a>
                    </li>
                    <li><a href="{{ route('visa-status') }}" class="text-white text-decoration-none">Visa Status</a>
                    </li>
                    <li><a href="{{ route('ticket-status') }}" class="text-white text-decoration-none">Ticket Status</a>
                    </li>
                    <li><a href="{{ route('hicc-card') }}" class="text-white text-decoration-none">HICC Cards</a></li>
                    <li><a href="{{ route('jobs') }}" class="text-white text-decoration-none">Jobs</a></li>
                    <li><a href="{{ route('apply-now') }}" class="text-white text-decoration-none">ApplyNow!</a></li>

                </ul>
            </div>

            <!-- Social Media Links -->
            <div class="col-md-4 mb-4">
                <h4>Working Hours</h4>
                <ul class="list-unstyled d-flex">
                    <li class="me-3">
                        <p><strong>Monday &#8211; Friday:</strong></p>
                        <p>Day Shift 9AM to 5PM</p>
                        <p>Night Shift 10PM to 6AM</p>
                        <p> </p>
                        <p><strong>Saturday:</strong></p>
                        <p>Only Night Shift 10PM to 5AM</p>

                        <p><strong>Sunday: <span style="color: #ff0000;">Closed</span></strong> </p>
                        <p><strong>National Public Holidays: <span style="color: #ff0000;">Closed</span></strong></p>
                    </li>

                </ul>
            </div>

            <!-- About Us -->
            <div class="col-md-4 mb-4">
                <h4>About Us</h4>
                <p>Navigating Success Together Your partner in achieving immigration goals. Discover excellence with
                    Eden Foods Canada.</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer -->
<footer class="footer py-3 bg-black text-white text-center">
    <div class="container">
        <p class="mb-0">
            &copy; <span id="currentYear"></span> Eden Food Company. All Rights Reserved.
            <br>
            <span id="dateTime"></span>
        </p>
    </div>
</footer>



<!-- WhatsApp Button -->
<a href="https://wa.me/18253091838?text=Hello%20I%20need%20help" class="whatsapp-button" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Logo"
        class="whatsapp-logo">
    <span class="whatsapp-text">Need Help?</span>
</a>



<!-- Bootstrap 5 JS (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ url('client-ui/script.js') }}"></script>

</body>

</html>
