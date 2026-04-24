<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <!-- RESPONSIVE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        .navbar {
            background: #f5e7b4;
            border-bottom: 2px solid orange;   
        }

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

        .bi-bookmark-fill {
            color: orange;
        }

        .bookmark:hover {
            transform: scale(1.2);
            transition: 0.2s;
        }

        .detail-img {
            width: 100%;
            max-height: 350px;
            object-fit: contain; 
            border-radius: 15px;
        }

        .card-resep:hover {
            transform: scale(1.05);
        }

        .detail-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .detail-img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 15px;
        }

        .footer {
            background: #fff;
            border-top: 2px solid orange;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.05);
            margin-top: 80px;
        }

        .footer p {
            font-size: 14px;
        }

        /* RESPONSIVE MOBILE (TAMBAHAN) */
        @media (max-width: 768px) {

            /* HERO */
            .hero {
                padding: 20px;
                text-align: center;
            }

            .hero-title {
                font-size: 24px;
            }

            .hero-img {
                width: 100%;
                margin-top: 15px;
            }

            /* NAVBAR */
            .navbar .container {
                flex-direction: column;
                gap: 10px;
            }

            .navbar input {
                width: 100% !important;
            }

            /* CARD */
            .card-resep {
                height: auto;
                padding: 8px;
            }

            /* DETAIL */
            .detail-img {
                height: 200px;
            }

        }

    </style>
</head>
<body>

    @include('layouts.navbar')

    <div class="container mt-4">
        @yield('content')
    </div>

    @include('layouts.footer')

</body>
<script>
    function getFavorites() {
        return JSON.parse(localStorage.getItem('favorites')) || [];
    }

    function toggleFavorite(nama, el) {
        let favs = getFavorites();

        if (favs.includes(nama)) {
            favs = favs.filter(f => f !== nama);
            el.classList.remove('bi-bookmark-fill');
            el.classList.add('bi-bookmark');
        } else {
            favs.push(nama);
            el.classList.remove('bi-bookmark');
            el.classList.add('bi-bookmark-fill');
        }

        localStorage.setItem('favorites', JSON.stringify(favs));
    }

    function loadFavorites() {
        let favs = getFavorites();

        document.querySelectorAll('.bookmark').forEach(el => {
            let nama = el.getAttribute('onclick')?.match(/'(.*?)'/)?.[1];

            if (favs.includes(nama)) {
                el.classList.remove('bi-bookmark');
                el.classList.add('bi-bookmark-fill');
            }
        });
    }

    document.addEventListener('DOMContentLoaded', loadFavorites);
</script>
</html>