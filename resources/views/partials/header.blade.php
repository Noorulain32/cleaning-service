<nav class="navbar navbar-expand-lg sticky-top" style="background:#ffffff;">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ url('/') }}" style="color:#2F70B9">CleanPro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown">Services</a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="{{ url('/services/area-rug') }}">Area Rug</a></li>
            <li><a class="dropdown-item" href="{{ url('/services/carpet') }}">Carpet</a></li>
            <li><a class="dropdown-item" href="{{ url('/services/water-fire') }}">Water & Fire</a></li>
          </ul>
        </li>

        <li class="nav-item ms-2">
          <a class="btn btn-primary px-4" href="#" data-bs-toggle="modal" data-bs-target="#callModal" style="background:#2F70B9; border:none;">Call Now</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Modal used by Call Now button -->
<div class="modal fade" id="callModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form id="contactForm">
        <div class="modal-header">
          <h5 class="modal-title">Request a Call</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Your name</label>
            <input required class="form-control" name="name" />
          </div>
          <div class="mb-3">
            <label class="form-label">Phone or Email</label>
            <input required class="form-control" name="contact" />
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
          <button class="btn btn-primary" type="submit" style="background:#2F70B9; border:none;">Send</button>
        </div>
      </form>
    </div>
  </div>
</div>
