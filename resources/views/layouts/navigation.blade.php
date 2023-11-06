<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd00;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{$Home ?? ''}}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{$about ?? ''}}" href="/aboutus">About us</a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{$contact ?? ''}}" href="/contactus">contact us</a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{$employee ?? ''}}" href="/employee">employee</a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{$product ?? ''}}" href="/product">product</a>
          </li>
      </div>
    </div>
  </nav>
