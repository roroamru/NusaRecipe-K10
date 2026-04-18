<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NusaRecipe</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f5f5f5;
        }

        /* NAVBAR */
        .navbar i {
            cursor: pointer;
        }

        .navbar i:hover {
            color: orange;
        }

        /* HERO */
        .hero {
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            background: #f3d88b;
            border-radius: 20px;
            padding: 40px;
        }

        .hero-title {
            font-family: 'Merriweather', serif;
            font-size: 32px;
            font-weight: 700;
            line-height: 1.4;
        }

        .hero-text {
            color: #555;
            margin-top: 10px;
            font-size: 14px;
        }

        .hero-img {
            width: 250px;
            border-radius: 15px;
        }

        /* KATEGORI BUTTON */
        .kategori-btn {
            background: orange;
            color: black;
            border-radius: 30px;
            padding: 10px 25px;
            font-weight: bold;
            border: 2px solid black;
            margin-right: 10px;
            transition: 0.3s;
        }

        .kategori-btn:hover {
            background: black;
            color: orange;
        }

        /* CARD RESEP */
        .card-resep {
            border: 2px solid orange;
            border-radius: 10px;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 120px;
            background: white;
            transition: 0.3s;
        }

        .card-resep img {
            width: 90px;
            height: 90px;
            object-fit: cover;
            border-radius: 8px;
        }

        .resep-info {
            flex: 1;
            margin-left: 10px;
        }

        .resep-title {
            color: orange;
            font-weight: bold;
            font-size: 14px;
        }

        .bookmark {
            font-size: 20px;
            color: orange;
            cursor: pointer;
        }

        .card-resep:hover {
            transform: scale(1.05);
        }

    </style>
</head>
<body>

    @include('layouts.navbar')

    <div class="container mt-4">
        @yield('content')
    </div>

</body>
</html>