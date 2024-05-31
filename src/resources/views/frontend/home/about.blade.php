<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Beasiswa UEU</title>
    <link rel="stylesheet" href="frontend/css/style.css">
</head>
<body class="hero">
    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="img-nav">
            <img src="frontend/images/logoueu.png" alt="logo">
        </div>
        <ul class="ul">
            <li>
                <a href= "{{ url('/')}}" class="nav-link" >Home</a>
            </li>
            <li>
              <a href="{{ url('beasiswa')}}" class="nav-link">Beasiswa</a>
          </li>
            <li>
                <a href="{{ url('about')}}" class="nav-link">About</a>
            </li>
        </ul>
    </nav>
<!-- NAVBAR END -->

<!-- isi -->
<div class="about">
    <img src="frontend/images/about.png" alt="...">
</div>

<!-- isi end -->
</body>

</html>
