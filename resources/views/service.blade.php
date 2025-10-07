@extends('layouts.app')

@section('content')
  <!-- Hero -->
  <section class="hero">
    <div class="hero-overlay"></div>
    <div class="container h-100 d-flex align-items-center justify-content-center">
      <div class="text-center text-white hero-content">
        <h1 class="hero-title">Brooklyn’s Fast and Reliable Home<br>Cleaning Services</h1>
        <p class="lead hero-sub">Trusted House Cleaning Service in Brooklyn for Homes and Apartments</p>
        <button class="btn btn-lg" data-bs-toggle="modal" data-bs-target="#callModal" style="background:#2F70B9; border:none;">Call Now</button>
      </div>
    </div>
  </section>

  <!-- Services title -->
  <section class="py-5" style="background:#DBF6FF;">
    <div class="container text-center">
      <h2 class="fw-bold">Our <span class="text-primary">24/7</span> Services</h2>
      <p class="text-muted">Trusted cleaners since day one</p>
    </div>
  </section>

  <!-- Services grid -->
  <section class="py-4" style="background:#DBF6FF;">
    <div class="container">
      <div class="row g-4">
        @php
          $services = [
            ['img'=>'service1.webp','title'=>'Area Rug','subtitle'=>'Cleaning','slug'=>'area-rug','desc'=>'Professional area rug cleaning...'],
            ['img'=>'service2.webp','title'=>'Area Rug','subtitle'=>'Repair','slug'=>'area-rug-repair','desc'=>'Expert rug repair...'],
            ['img'=>'service3.webp','title'=>'Area Rug','subtitle'=>'Restoration','slug'=>'area-rug-rest','desc'=>'Restore the beauty...'],
            ['img'=>'service4.webp','title'=>'Carpet','subtitle'=>'Cleaning','slug'=>'carpet-clean','desc'=>'Get the best carpet cleaning...'],
            ['img'=>'service5.webp','title'=>'Carpet','subtitle'=>'Installation','slug'=>'carpet-install','desc'=>'Professional carpet installation...'],
            ['img'=>'service6.webp','title'=>'Water & Fire','subtitle'=>'Repair','slug'=>'water-fire','desc'=>'Comprehensive water & fire repair...'],
          ];
        @endphp

        @foreach($services as $s)
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card service-card h-100">
              <img src="{{ asset('images/'.$s['img']) }}" class="card-img-top" alt="{{ $s['title'] }}" loading="lazy">
              <div class="card-body">
                <h5 class="card-title">{{ $s['title'] }} <br> <strong>{{ $s['subtitle'] }}</strong></h5>
                <p class="card-text text-muted small">{{ $s['desc'] }}</p>
                <a href="{{ url('/services/'.$s['slug']) }}" class="small text-primary">Learn More →</a>
              </div>
            </div>
          </div>
        @endforeach

      </div>
    </div>
  </section>

  
  <!-- Building Trust section -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-md-6">
        <img src="{{ asset('images/trust.webp') }}" alt="Building trust" class="img-fluid rounded shadow-sm" loading="lazy">
      </div>
      <div class="col-md-6">
        <h2 class="fw-bold mb-3">Building Trust, One Clean Home at a Time</h2>
        <p class="text-muted">
          We take pride in offering quality cleaning services that our clients can depend on. 
          With a focus on punctuality, transparency, and top-notch care, we’ve built long-lasting 
          relationships with homes and businesses across Brooklyn.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Satisfaction section -->
<section class="py-5" style="background:#DBF6FF;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">100% Satisfaction Guaranteed</h2>
      <p class="text-muted">We’re committed to exceeding your expectations.</p>
    </div>

    <div class="row justify-content-center text-center g-0">
      <!-- Card 1 -->
      <div class="col-md-4 p-4 border-end border-secondary-subtle">
        <div class="mb-3"><i class="bi bi-gift fs-1 text-primary"></i></div>
        <h5 class="fw-semibold">Special Offer</h5>
        <p class="small text-muted">Book your first cleaning and get 20% off. Experience spotless perfection!</p>
        <a href="#" class="btn btn-primary btn-sm" style="background:#2F70B9; border:none;">Book a Quote</a>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4 p-4 border-end border-secondary-subtle">
        <div class="mb-3"><i class="bi bi-lightning-charge fs-1 text-primary"></i></div>
        <h5 class="fw-semibold">Need Quick Service?</h5>
        <p class="small text-muted">Urgent cleaning? We offer same-day booking to get your home ready fast.</p>
        <a href="#" class="btn btn-primary btn-sm" style="background:#2F70B9; border:none;">Chat with Us</a>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4 p-4">
        <div class="mb-3"><i class="bi bi-clock-history fs-1 text-primary"></i></div>
        <h5 class="fw-semibold">Why Wait?</h5>
        <p class="small text-muted">Call us at <strong>(555) 123-4567</strong> and schedule your cleaning now!</p>
        <a href="#" class="btn btn-primary btn-sm" style="background:#2F70B9; border:none;">Call Now</a>
      </div>
    </div>
  </div>
</section>

@endsection
