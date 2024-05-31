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
            <img src="/frontend/images/logoueu.png" alt="logo">
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
    <div class="slides">
      <div class="slide">
        <img width="100%" src="frontend/images/1.png" alt="...">
      </div>
      <div class="slide">
        <img width="100%" src="frontend/images/2.png" alt="...">
      </div>
      <div class="slide">
        <img width="100%" src="frontend/images/3.png" alt="...">
      </div>
      <div class="navigation">
        <a onclick="plusSlides(-1)">&#10094;</a>
        <a  onclick="plusSlides(1)">&#10095;</a>
      </div>
    </div>

    <div class="berita">
      <img src="frontend/images/berita.png" alt="...">
    </div>


<!-- isi end -->

<!-- js -->
    <script>
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
              showSlides(slideIndex += n);
            }
      function showSlides(n) {
                    var i;
                    var slides = document.getElementsByClassName("slide");
                    if (n > slides.length) {
                      slideIndex = 1;
                    }
                    if (n < 1) {
                      slideIndex = slides.length
                    }
                    for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none";
                    }
                    slides[slideIndex - 1].style.display = "block";
                  }
    </script>
<!-- js end -->
</body>

</html>
