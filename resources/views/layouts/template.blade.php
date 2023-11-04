<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$pagetitle}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tentangkita">About us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/kontakkita">contact us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/kontakkita">Pegawai</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/kontakkita">Produk</a>
        </li>
    </div>
  </div>
</nav>

<div class="container">
    <h1>{{$maintitle}}</h1>
    <h2>@yield('layout_tagline')</h2>
    @yield('layout_content')
</div>
    
<div class="container">
  @yield('branch_table')
</div>

</body>
</html>