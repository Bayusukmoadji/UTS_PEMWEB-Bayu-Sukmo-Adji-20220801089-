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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Beasiswa</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <h1>Data Beasiswa</h1>

    <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Fakultas</th>
            <th>Indeks Prestasi</th>
            <th>Beasiswa</th>
        </tr>
        @foreach($beasiswas as $b)
        <tr>
            <td>{{$b->name}}</td>
            <td>{{$b->nim}}</td>
            <td>{{$b->jurusan}}</td>
            <td>{{$b->fakultas}}</td>
            <td>{{$b->indeks}}</td>
            <td>{{$b->beasiswa}}</td>
        </tr>
        @endforeach
        </table>
</body>
</html>
<!-- isi end -->
</body>

</html>
