@extends('client-ui.layouts.main')
@section('main-container')
@section('title', 'Home - Eden Food Company Canada')
    <section class="carousel-section py-5">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Text on the left -->
                <div class="col-md-6 carousel-text ps-5">
                    <h1 class="display-4 fw-bold">Hiring now!</h1>
                    <p class="lead">Eden Foods will help you immigrate to
                        Canada
                        United Kingdom (UK)
                        America (USA)
                        Dubai (UAE)
                        Saudi Arabia
                        Qatar</p>
                    <a href="{{ route('apply-now') }}" class="btn btn-primary btn-lg">Apply Now</a>
                </div>

                <!-- Carousel on the right -->
                <div class="col-md-6">
                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Carousel Item 1 -->
                            <div class="carousel-item active">
                                <img src="{{ asset('client-ui/imgs/home1.jpg') }}" class="d-block w-100 rounded"
                                    alt="Image 1">
                            </div>

                        </div>
                        <!-- Carousel Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('client-ui.crosal')
    <!-- Team Members Section -->
    <section class="team-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">Our Team</h2>
            <div class="row">
                <!-- Team Member 1 -->
                <div class="col-md-4 text-center mb-4">
                    <img src="{{ asset('client-ui/imgs/team.jpg') }}" alt="Team Member 1" class="rounded-circle mb-3"
                        width="150" height="150">
                    <h4>John Bravo</h4>
                    <p class="text-muted">CEO</p>
                    <p class="text-muted">$120,000/year</p>
                </div>
                <!-- Team Member 2 -->
                <div class="col-md-4 text-center mb-4">
                    <img src="{{ asset('client-ui/imgs/team1.jpg') }}" alt="Team Member 2" class="rounded-circle mb-3"
                        width="150" height="150">
                    <h4>Emily Johnson</h4>
                    <p class="text-muted">CTO</p>
                    <p class="text-muted">$100,000/year</p>
                </div>
                <!-- Team Member 3 -->
                <div class="col-md-4 text-center mb-4">
                    <img src="{{ asset('client-ui/imgs/team2.jpg') }}" alt="Team Member 3" class="rounded-circle mb-3"
                        width="150" height="150">
                    <h4>Mike Johnson</h4>
                    <p class="text-muted">CFO</p>
                    <p class="text-muted">$110,000/year</p>
                </div>
            </div>

            <!-- Repeat for 4 rows (12 team members) -->
            <!-- Row 2 -->
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <img src="{{ asset('client-ui/imgs/team3.jpg') }}" alt="Team Member 4" class="rounded-circle mb-3"
                        width="150" height="150">
                    <h4>Sarah Lee</h4>
                    <p class="text-muted">Marketing Manager</p>
                    <p class="text-muted">$90,000/year</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <img src="{{ asset('client-ui/imgs/team4.jpg') }}" alt="Team Member 5" class="rounded-circle mb-3"
                        width="150" height="150">
                    <h4>Chris Brown</h4>
                    <p class="text-muted">Product Manager</p>
                    <p class="text-muted">$95,000/year</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <img src="{{ asset('client-ui/imgs/team5.jpg') }}" alt="Team Member 6" class="rounded-circle mb-3"
                        width="150" height="150">
                    <h4>Emily Davis</h4>
                    <p class="text-muted">Lead Developer</p>
                    <p class="text-muted">$85,000/year</p>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <img src="{{ asset('client-ui/imgs/team6.jpg') }}" alt="Team Member 7" class="rounded-circle mb-3"
                        width="150" height="150">
                    <h4>Sophia Martinez</h4>
                    <p class="text-muted">UI/UX Designer</p>
                    <p class="text-muted">$80,000/year</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <img src="{{ asset('client-ui/imgs/team7.jpg') }}" alt="Team Member 8" class="rounded-circle mb-3"
                        width="150" height="150">
                    <h4>Laura Martinez</h4>
                    <p class="text-muted">HR Manager</p>
                    <p class="text-muted">$75,000/year</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <img src="{{ asset('client-ui/imgs/team8.jpg') }}" alt="Team Member 9" class="rounded-circle mb-3"
                        width="150" height="150">
                    <h4>James Anderson</h4>
                    <p class="text-muted">Sales Manager</p>
                    <p class="text-muted">$85,000/year</p>
                </div>
            </div>

            <!-- Row 4 -->
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <img src="{{ asset('client-ui/imgs/team9.jpg') }}" alt="Team Member 10" class="rounded-circle mb-3"
                        width="150" height="150">
                    <h4>Olivia Taylor</h4>
                    <p class="text-muted">Content Writer</p>
                    <p class="text-muted">$70,000/year</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <img src="{{ asset('client-ui/imgs/team10.jpg') }}" alt="Team Member 11" class="rounded-circle mb-3"
                        width="150" height="150">
                    <h4>Daniel Thomas</h4>
                    <p class="text-muted">Data Analyst</p>
                    <p class="text-muted">$78,000/year</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <img src="{{ asset('client-ui/imgs/team11.jpg') }}" alt="Team Member 12" class="rounded-circle mb-3"
                        width="150" height="150">
                    <h4>Sophia Clark</h4>
                    <p class="text-muted">Customer Support</p>
                    <p class="text-muted">$65,000/year</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Stats Section -->
    <section class="stats-section py-5"
        style="background-image: {{ asset('client-ui/stats-bg.jpeg') }}; background-size: cover; background-position: center;">
        <div class="container text-center text-white">
            <!-- Heading -->
            <h2 class="mb-5">WE'LL HELP YOU
                ACHIEVE YOUR GOALS</h2>

            <!-- Stats -->
            <div class="row">
                <!-- Consulted Clients -->
                <div class="col-md-4 mb-4">
                    <h3 class="display-4">
                        17892</h3>
                    <p class="lead">Consulted Clients</p>
                </div>
                <!-- Staff -->
                <div class="col-md-4 mb-4">
                    <h3 class="display-4">2853</h3>
                    <p class="lead">Staff Members</p>
                </div>
                <!-- Successful Cases -->
                <div class="col-md-4 mb-4">
                    <h3 class="display-4">16481
                    </h3>
                    <p class="lead">Successful Cases</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Client Reviews Section -->
   @include('client-ui.review')
    <!-- Gallery Section -->
    <section class="gallery-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">Our Gallery</h2>
            <div class="row">
                <!-- Image 1 -->
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('client-ui/imgs/gallery-1.jpg') }}" alt="Gallery Image 1"
                        class="img-fluid rounded">
                </div>
                <!-- Image 2 -->
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('client-ui/imgs/gallery-2.jpg') }}" alt="Gallery Image 2"
                        class="img-fluid rounded">
                </div>
                <!-- Image 3 -->
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('client-ui/imgs/gallery-3.jpg') }}" alt="Gallery Image 3"
                        class="img-fluid rounded">
                </div>
                <!-- Image 4 -->
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('client-ui/imgs/gallery-4.jpg') }}" alt="Gallery Image 4"
                        class="img-fluid rounded">
                </div>
                <!-- Image 5 -->
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('client-ui/imgs/gallery-5.jpg') }}" alt="Gallery Image 5"
                        class="img-fluid rounded">
                </div>
                <!-- Image 6 -->
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('client-ui/imgs/gallery-6.jpg') }}" alt="Gallery Image 6"
                        class="img-fluid rounded">
                </div>
                <!-- Image 7 -->
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('client-ui/imgs/gallery-7.jpg') }}" alt="Gallery Image 7"
                        class="img-fluid rounded">
                </div>
                <!-- Image 8 -->
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('client-ui/imgs/gallery-8.jpg') }}" alt="Gallery Image 8"
                        class="img-fluid rounded">
                </div>
                <!-- Image 9 -->
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('client-ui/imgs/gallery-9.jpg') }}" alt="Gallery Image 9"
                        class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Section -->
    <section class="contact-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Contact Us</h2>
            <div class="row">
                <!-- Address -->
                <div class="col-md-3 text-center mb-4">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt fa-3x mb-3"></i>
                        <h4>Address</h4>
                        <p>2714 St Clair Ave E, Toronto, ON M4B 1M6, Canada</p>
                    </div>
                </div>
                <!-- Call Us -->
                <div class="col-md-3 text-center mb-4">
                    <div class="contact-item">
                        <i class="fas fa-phone fa-3x mb-3"></i>
                        <h4>Call Us</h4>
                        <p>+1(825)309-1838</p>
                    </div>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <div class="contact-item">
                        <i class="fas fa-clock fa-3x mb-3"></i>
                        <h4>Opening Hours</h4>
                        <p class="text-danger">Always Open</p>
                    </div>
                </div>
                <!-- Email -->
                <div class="col-md-3 text-center mb-4">
                    <div class="contact-item">
                        <i class="fas fa-envelope fa-3x mb-3"></i>
                        <h4>Email</h4>
                        <p>info.edenfoodcompany<br>@gmail.com</p>
                    </div>
                </div>


            </div>
        </div>

    </section>
@endsection
