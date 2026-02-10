@include('home.header')

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="page-hero-title">Contact <span class="text-green">Us</span></h1>
        <p class="page-hero-sub">Have a question? Our team is here to help 24/7.</p>
    </div>
</section>

<!-- Contact Content -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mb-4">
                <h2 class="section-title text-start">Get In Touch</h2>
                <p class="mb-4">Whether you need help with your account, have a question about copy trading, or want to learn more about our plans we're happy to assist.</p>
                
                {{-- <div class="contact-info mb-3">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Level 20 Heron Tower, 52 Gate Town, London EC2N 4AY</span>
                </div> --}}
                <div class="contact-info mb-3">
                    <i class="fas fa-envelope"></i>
                    <span>support@affordableinvprog.com</span>
                </div>
                {{-- <div class="contact-info mb-3">
                    <i class="fas fa-phone"></i>
                    <span>+1 (555) 123-4567</span>
                </div> --}}
                <div class="contact-info mb-3">
                    <i class="fas fa-clock"></i>
                    <span>24/7 Customer Support</span>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact-form-card">
                    <h3 style="color:#fff; margin-bottom:25px;">Send Us a Message</h3>
                    <form action="#" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Your full name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" name="email" placeholder="your@email.com" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <input type="text" class="form-control" name="subject" placeholder="How can we help?">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" name="message" rows="5" placeholder="Describe your inquiry..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary-custom w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@include('home.footer')
