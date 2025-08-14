@extends('client-ui.layouts.main')
@section('main-container')
@section('title', 'Online Application - Eden Food Company')
    <!-- Job Application Page -->
    <section class="job-application-page py-5">
        <div class="container">
            <!-- List of Jobs and Eligibilities -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Application Form -->
            <div class="application-form">
                <h3 class="mb-4">Fill out the form below, Our Consultant Officer will Contact on Your Whatsapp Soon:</h3>
                <form action="{{ route('jobapplication.store') }}" id="jobApplicationForm" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="{{ old('name') }}" id="name" name="name"
                            placeholder="Enter your full name" required>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">WhtatsApp NO:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="{{ old('whatsapp_number') }}" id="name"
                            name="whatsapp_number" placeholder="+ WhtatsApp NO:" required>
                        @error('whatsapp_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address:<span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" value="{{ old('email') }}" name="email"
                            placeholder="Enter your email" required>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Passport Number -->
                    <div class="mb-3">
                        <label for="passportNumber" class="form-label">Passport/ID No:<span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="passportNumber" name="passport_number"
                            placeholder="Enter your passport/ID card number" value="{{ old('passport_number') }}" required>
                        @error('passport_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Passport Image -->
                    <div class="mb-3">
                        <label for="passportImage" class="form-label">Upload Passport/ID Image:<span
                                class="text-danger">*</span></label>
                        <input type="file" class="form-control" id="passportImage" value="{{ old('passport_image') }}" name="passport_image" accept="image/*"
                            required>
                            @error('passport_image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Job Selection -->
                    <div class="mb-3">
                        <label for="jobSelection" class="form-label">Jobs Available:<span
                                class="text-danger">*</span></label>
                        <select class="form-select" id="jobSelection" value="{{ old('jobname') }}" name="jobname" required>
                            <option value="Food Packing">--Select Job--</option>
                            <option value="Food Packing">Food Packing</option>
                            <option value="Warehouse Worker">Warehouse Worker</option>
                            <option value="Production Line Worker">Production Line Worker</option>
                            <option value="Quality Control Inspector">Quality Control Inspector</option>
                            <option value="Recipe Developer">Recipe Developer</option>
                            <option value="Plant Manager">Plant Manager</option>
                            <option value="Operations Manager">Operations Manager</option>
                            <option value="Supply Chain Coordinator">Supply Chain Coordinator</option>
                            <option value="Inventory Specialist">Inventory Specialist</option>
                            <option value="Forklift Operator">Forklift Operator</option>
                            <option value="Mechanical Engineer">Mechanical Engineer</option>
                            <option value="Civil Engineer">Civil Engineer</option>
                            <option value="Quality Engineer">Quality Engineer</option>
                            <option value="Foreman">Foreman</option>
                            <option value="Assistant Foreman">Assistant Foreman</option>
                            <option value="Supervisor">Supervisor</option>
                            <option value="Assistant Supervisor">Assistant Supervisor</option>
                            <option value="Lifting Operator">Lifting Operator</option>
                            <option value="Crane Operator">Crane Operator</option>
                            <option value="Electrician">Electrician</option>
                            <option value="Safety Officer">Safety Officer</option>
                            <option value="Q&amp;C Officer">Q&amp;C Officer</option>
                            <option value="Steel Fixer">Steel Fixer</option>
                            <option value="AC Technician">AC Technician</option>
                            <option value="Store Keeper">Store Keeper</option>
                            <option value="Store Keeper Helper">Store Keeper Helper</option>
                            <option value="Welder">Welder</option>
                            <option value="General Worker">General Worker</option>
                            <option value="Dispatch Coordinator">Dispatch Coordinator</option>
                            <option value="Shipping Clerk">Shipping Clerk</option>
                            <option value="LTV Driver">LTV Driver</option>
                            <option value="HTV Driver">HTV Driver</option>
                            <option value="Mechanical Supervisor">Mechanical Supervisor</option>
                            <option value="Carpenter">Carpenter</option>
                            <option value="Account Manager">Account Manager</option>
                            <option value="Sales Representative">Sales Representative</option>
                            <option value="Salesman">Salesman</option>
                            <option value="Brand Manager">Brand Manager</option>
                            <option value="Marketing Manager">Marketing Manager</option>
                            <option value="Social Media Specialist">Social Media Specialist</option>
                            <option value="Customer Service Representative">Customer Service Representative</option>
                            <option value="Sales Officer">Sales Officer</option>
                            <option value="Hotel Manager">Hotel Manager</option>
                            <option value="Store Manager">Store Manager</option>
                            <option value="Assistant Manager">Assistant Manager</option>
                            <option value="Department Manager">Department Manager</option>
                            <option value="Cashier">Cashier</option>
                            <option value="Stock Clerk">Stock Clerk</option>
                            <option value="Meat Cutter">Meat Cutter</option>
                            <option value="Bakery Clerk">Bakery Clerk</option>
                            <option value="Store Supervisor">Store Supervisor</option>
                            <option value="HR Manager">HR Manager</option>
                            <option value="Recruiter">Recruiter</option>
                            <option value="Payroll Specialist">Payroll Specialist</option>
                            <option value="Accounting Clerk">Accounting Clerk</option>
                            <option value="Data Analyst">Data Analyst</option>
                            <option value="IT Support Specialist">IT Support Specialist</option>
                            <option value="Receptionist">Receptionist</option>
                            <option value="Executive Assistant">Executive Assistant</option>
                            <option value="Admin Officer">Admin Officer</option>
                            <option value="Assistant Admin">Assistant Admin</option>
                            <option value="Chef">Chef</option>
                            <option value="Cook">Cook</option>
                            <option value="Cook Helper">Cook Helper</option>
                            <option value="Pastry Chef">Pastry Chef</option>
                            <option value="Catering Manager">Catering Manager</option>
                            <option value="Food Stylist">Food Stylist</option>
                            <option value="Menu Planner">Menu Planner</option>
                            <option value="Nutritionist">Nutritionist</option>
                            <option value="Food Safety Specialist">Food Safety Specialist</option>
                            <option value="Waiter (in cafeteria settings)">Waiter (in cafeteria settings)</option>
                            <option value="Maintenance Manager">Maintenance Manager</option>
                            <option value="Janitor/Cleaner">Janitor/Cleaner</option>
                            <option value="HVAC Technician">HVAC Technician</option>
                            <option value="Plumber">Plumber</option>
                            <option value="Mechanic">Mechanic</option>
                            <option value="Carpenter">Carpenter</option>
                            <option value="Pest Control Specialist">Pest Control Specialist</option>
                            <option value="Landscaper/Groundskeeper">Landscaper/Groundskeeper</option>
                            <option value="Painter">Painter</option>
                            <option value="Mason">Mason</option>
                            <option value="Rigger">Rigger</option>
                            <option value="Firefighter">Firefighter</option>
                            <option value="QA/QC Manager">QA/QC Manager</option>
                            <option value="Food Safety Auditor">Food Safety Auditor</option>
                            <option value="Labeling Compliance Officer">Labeling Compliance Officer</option>
                            <option value="Welder Supervisor">Welder Supervisor</option>
                            <option value="Computer Operator">Computer Operator</option>
                            <option value="Security Supervisor">Security Supervisor</option>
                            <option value="Security Guard">Security Guard</option>
                            <option value="Architect">Architect</option>
                            <option value="Nursing Department (Male/Female)">Nursing Department (Male/Female)</option>
                            <option value="Teacher">Teacher</option>
                            <option value="Conference Organizer">Conference Organizer</option>
                            <option value="HouseKeeping">HouseKeeping</option>
                            <option value="Office Boy">Office Boy</option>
                            <option value="Cleaner">Cleaner</option>
                            <option value="Packer">Packer</option>
                            <option value="Farm Worker">Farm Worker</option>
                            <option value="Agricultural Worker">Agricultural Worker</option>
                            <option value="Barbar">Barbar</option>
                            <option value="Tailor">Tailor</option>
                            <option value="Foreman">Foreman</option>
                        </select>
                        @error('jobname')
                <span class="text-danger">{{ $message }}</span>
            @enderror
                    </div>
                    <!-- Country -->
                    <div class="mb-3">
                        <label for="jobSelection" class="form-label"> Select country:<span
                                class="text-danger">*</span></label>
                        <select class="form-select" id="jobSelection" value="{{ old('livingcountry') }}" name="livingcountry" required>
                            <option value="null">--Select country--</option>
                            <option value="INDIA">INDIA</option>
                            <option value="NEPAL">NEPAL</option>
                            <option value="BANGLADESH">BANGLADESH</option>
                            <option value="SAUDI ARABIA">SAUDI ARABIA</option>
                            <option value="AFGHANISTAN">AFGHANISTAN</option>
                            <option value="BHUTAN">BHUTAN</option>
                            <option value="PAKISTAN">PAKISTAN</option>

                        </select>
                        @error('livingcountry')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jobSelection" class="form-label"> Applying Job for Country:<span
                                class="text-danger">*</span></label>
                        <select class="form-select" id="jobSelection" value="{{ old('jobcountry') }}" name="jobcountry" required>
                            <option value="null">--Select country--</option>
                            <option value="Canada">Canada</option>
                            <option value="United Kingdom (UK)">United Kingdom (UK)</option>
                            <option value="America (USA)">America (USA)</option>
                            <option value="Dubai (UAE)">Dubai (UAE)</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Qatar">Qatar</option>

                        </select>
                        @error('jobcountry')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>


                    <div class="mb-3">
                        <label for="passportImage" class="form-label">Upload CV/Resume:<span
                            class="text-danger">*</span></label>
                        <input type="file" class="form-control" id="passportImage" name="cv" required>
                        @error('cv')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="passportImage" class="form-label">Upload Your Photo:<span
                                class="text-danger">*</span></label>
                        <input type="file" class="form-control" id="passportImage" name="photo" accept="image/*">
                        @error('photo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <!-- Checkbox -->
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="agreeCheckbox" required>
                        <label class="form-check-label" for="agreeCheckbox">Click me to continue.</label>
                    </div>
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Submit Application</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Carousel Section -->
    @include('client-ui.crosal')

    {{-- review  --}}

    @include('client-ui.review')
@endsection
