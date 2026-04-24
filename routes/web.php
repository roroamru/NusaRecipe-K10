<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/* =========================
   DATA RESEP (LENGKAP)
========================= */
$reseps = [

// Ayam Goreng Krispi
    [
        "nama" => "Ayam Goreng Krispi",
        "gambar" => "Ayam-Goreng-Krispi.jpg",
        "kategori" => "makanan",
        "deskripsi" => "Ayam goreng krispi khas Nusantara dengan bumbu rempah sederhana seperti bawang putih, ketumbar, dan kunyit yang meresap hingga
            kedalam daging. Dibalut tepung berbumbu lalu digoreng hingga renyah keemasan, yang menghasilkan tekstur kriuk diluar juicy didalam.
            Cocok disajikan dengan sambal sebagai lauk makan siang atau malam bersama keluarga.",
        "waktu" => "± 30 menit",
        "porsi" => "3-4 orang",
        "bahan" => [
            "Bahan Utama" => [
                "500-600 gram ayam dipotong kecil", 
                "1 sdt garam", 
                "1 sdt kaldu bubuk", 
                "3 siung bawang putih, haluskan", 
                "½ sdt ketumbar bubuk", 
                "½ sdt kunyit bubuk", 
                "1 butir telur", 
                "500 ml air es", 
                "Minyak goreng"],
            "Bahan Tepung" => [
                "200 gram tepung terigu", 
                "50 g tepung maizena", 
                "½ sdt garam", 
                "½ sdt kaldu bubuk"],
            "Bahan Sambal Bawang (Opsional)" => [
                "4 siung bawang putih", 
                "1 siung bawang merah", 
                "5-8 cabai rawit (sesuai selera)", 
                "½ sdt garam", "½ sdt gula", 
                "3 sdm minyak panas"]
        ],
        "langkah" => [
            "Cuci ayam hingga bersih dan tiriskan.", 
            "Marinasi Ayam, Campurkan ayam dengan bawang putih, garam, ketumbar, kunyit, kaldu bubuk, dan telur. Aduk rata, diamkan 10–15 menit.", 
            "Siapkan tepung, campur semua bahan tepung hingga rata", 
            "Balur Ayam, balurkan ayam ke tepung lalu celupkan ke air es dan balur lagi sambil diremas agar keriting.", 
            "Goreng Ayam, Goreng dengan api sedang hingga matang dan keemasan. Menjelang diangkat, besarkan api sebentar agar lebih renyah.", 
            "Angkat dan tiriskan minyak.", 
            "Buat sambal bawang (opsional), Ulek kasar bawang merah, bawang putih, dan cabai. Tambahkan garam dan gula, lalu siram dengan minyak panas, aduk rata.", 
            "Sajikan ayam krispi dengan sambal bawang dan nasi hangat."]
    ],

// Es Buah
    [
        "nama" => "Es Buah",
        "gambar" => "Es-Buah.jpg",
        "kategori" => "minuman",
        "deskripsi" => "Es buah segar khas Nusantara yang manis, dingin, dan menyegarkan. Perpaduan berbagai buah tropis seperti semangka, 
            melon, dan nanas dipadukan dengan sirup manis serta es batu, menghasilkan minuman penutup yang cocok dinikmati saat cuaca 
            panas atau sebagai hidangan santai bersama keluarga.",
        "waktu" => "± 15-20 menit",
        "porsi" => "3-4 orang",
        "bahan" => [
            "Bahan Utama" => [
                "Semangka", 
                "Melon", 
                "Nanas", 
                "1 buah apel", 
                "1 buah jeruk", 
                "Susu kental manis", 
                "Es batu secukupnya"],
            "Bahan Kuah" => [
                "500 ml air matang dingin", 
                "3–4 sdm sirup", 
                "2 sdm gula cair", 
                "1 sdm perasan jeruk nipis", 
                "Susu kental manis (Opsiaonal)"],
        ],
        "langkah" => [
            "Potong semua buah sesuai ukuran kecil agar mudah dimakan.", 
            "Buat kuah, Campurkan air dingin, sirup, gula cair, dan perasan jeruk nipis. Aduk rata dan koreksi rasa.", 
            "Masukkan semua buah dan nata de coco ke dalam mangkuk atau wadah besar.", 
            "Masukkan es batu secukupnya agar lebih segar.", 
            "Tuang kuah ke dalam campuran buah. Tambahkan susu kental manis jika suka, lalu sajikan dingin."]
    ],

// Gethuk Lindri
    [
        "nama" => "Gethuk Lindri",
        "gambar" => "Gethuk-Lindri.jpg",
        "kategori" => "cemilan",
        "deskripsi" => "Gethuk lindri merupakan jajanan tradisional khas Indonesia yang dibuat dari singkong pilihan, diolah hingga 
            lembut dan manis, lalu dibentuk cantik berwarna-warni. Ditambah taburan kelapa parut yang gurih, camilan ini menghadirkan 
            perpaduan rasa klasik yang selalu bikin rindu.",
        "waktu" => "30 menit",
        "porsi" => "3-4 orang",
        "bahan" => [
            "Bahan Utama" => [
                "1500 gram singkong, kupas dan potong-potong",
                "100 gram gula pasir (sesuai selera)",
                "1/2 sdt garam",
                "30 gram margarin",
                "Pewarna makanan (merah, hijau, kuning) secukupnya (opsional)"],
            "Bahan Pelengkap" => [
                "100 gram kelapa parut (pilih kelapa agak muda)",
                "1 lembar daun pandan",
                "½ sdt garam"]
            ],
        "langkah" => [
            "Kukus singkong hingga empuk sekitar 15-20 menit, lalu angkat.",
            "Selagi hangat, haluskan singkong hingga lembut dan buang serat kasarnya.",
            "Tambahkan gula, garam, dan margarin, lalu aduk hingga tercampur rata.",
            "Bagi adonan menjadi beberapa bagian, beri pewarna sesuai selera, lalu aduk rata.",
            "Masukkan adonan ke cetakan getuk lindri atau bentuk memanjang secara manual.",
            "Kukus kelapa parut bersama daun pandan dan sedikit garam selama 5-10 menit agar tidak cepat basi.",
            "Sajikan getuk lindri dengan taburan kelapa parut di atasnya."]
    ],

// Klepon
    [
        "nama" => "Klepon",
        "gambar" => "Klepon.jpg",
        "kategori" => "cemilan",
        "deskripsi" => "Klepon adalah jajanan tradisional khas Nusantara yang terbuat dari tepung ketan dengan isian gula merah cair di 
            dalamnya. Bertekstur kenyal dengan rasa manis yang meledak di mulut, serta dilapisi kelapa parut gurih, menjadikan klepon 
            camilan klasik yang digemari banyak orang.",
        "waktu" => "30 menit",
        "porsi" => "3-4 orang",
        "bahan" => [
            "Bahan Adonan" => [
                "250 gr tepung ketan putih",
                "1 sdm tepung beras (opsional)",
                "200 ml air hangat (secukupnya)",
                "1 sdt pasta pandan / air pandan",
                "Sejumput garam"],
            "Bahan Isi" => [
                "150 gr gula merah, sisir halus"],
            "Bahan Baluran" => [
                "100 gr kelapa parut muda",
                "Sejumput garam",
                "1 lembar daun pandan"]
        ],
        "langkah" => [
            "Kukus kelapa parut bersama garam dan daun pandan selama 10 menit, lalu sisihkan.",
            "Campurkan tepung ketan, tepung beras, dan garam. Tuangkan air pandan sedikit demi sedikit sambil diuleni hingga adonan kalis dan bisa dipulung.",
            "Ambil sedikit adonan, pipihkan, isi dengan gula merah, lalu bulatkan rapat agar tidak bocor.",
            "Didihkan air, masukkan klepon, masak hingga mengapung (tanda matang), lalu angkat dan tiriskan.",
            "Gulingkan klepon di atas kelapa parut hingga terbalut rata.",
            "Sajikan klepon selagi hangat atau suhu ruang."]
    ],

// Kolak Labu dan Pisang
    [
        "nama" => "Kolak Labu dan Pisang",
        "gambar" => "Kolak-Labu-dan-Pisang.jpg",
        "kategori" => "cemilan",
        "deskripsi" => "Kolak labu dan pisang adalah hidangan tradisional Nusantara yang manis dan gurih, terbuat dari perpaduan labu kuning dan pisang yang dimasak dalam kuah santan gula merah. Memiliki cita rasa legit dengan aroma harum daun pandan, cocok disajikan hangat maupun dingin sebagai hidangan penutup atau takjil.",
        "waktu" => "30 menit",
        "porsi" => "3-4 orang",
        "bahan" => [
            "Bahan Utama" => [
                "200 gram labu kuning, potong dadu",
                "3 buah pisang kepok atau pisang raja, potong-potong",
                "500 ml santan",
                "100 gram gula merah, serut",
                "2 sdm gula pasir (opsional)",
                "1 lembar daun pandan, simpulkan",
                "1/2 sdt garam",
                "500 ml air"]
        ],
        "langkah" => [
            "Rebus air bersama gula merah dan daun pandan hingga gula larut, lalu saring jika perlu.",
            "Masukkan potongan labu kuning, masak hingga setengah empuk.",
            "Tambahkan pisang, masak hingga matang dan lembut.",
            "Tuangkan santan, tambahkan garam dan gula pasir, aduk perlahan agar santan tidak pecah.",
            "Masak dengan api kecil hingga kuah sedikit mengental dan semua bahan matang.",
            "Angkat dan sajikan hangat atau dingin sesuai selera."]
    ],

// Mie Goreng Jawa
    [
        "nama" => "Mie Goreng Jawa",
        "gambar" => "Mie-Goreng-Jawa.jpg",
        "kategori" => "makanan",
        "deskripsi" => "Mie goreng Jawa adalah hidangan khas Nusantara yang memiliki cita rasa manis, gurih, dan sedikit smokey. Dibuat dengan bumbu halus seperti bawang putih, kemiri, dan kecap manis, serta dimasak dengan teknik khas menggunakan api besar, menghasilkan mie yang kaya rasa dan menggugah selera.",
        "waktu" => "20 menit",
        "porsi" => "1-2 orang",
        "bahan" => [
            "Bahan Utama" => [
                "Mie", "Bawang", "Kecap", "Telur"]
        ],
        "langkah" => ["Rebus mie", "Tumis bumbu", "Campur", "Masak"]
    ],

// Nasi Goreng
    [
        "nama" => "Nasi Goreng",
        "gambar" => "Nasi-Goreng.jpg",
        "kategori" => "makanan",
        "deskripsi" => "Menu praktis favorit dengan rasa gurih khas Indonesia.",
        "waktu" => "15 menit",
        "porsi" => "1-2 orang",
        "bahan" => [
            "Bahan Utama" => [
                "Nasi", "Bawang", "Kecap", "Telur"]
        ],
        "langkah" => ["Tumis bumbu", "Masukkan nasi", "Aduk rata"]
    ],

// Sop Ala Rumahan
    [
        "nama" => "Sop Ala Rumahan",
        "gambar" => "Sop-Ala-Rumahan.jpg",
        "kategori" => "makanan",
        "deskripsi" => "Sup hangat dengan sayur dan ayam, cocok untuk keluarga.",
        "waktu" => "40 menit",
        "porsi" => "3 orang",
        "bahan" => [
            "Bahan Utama" => [
                "Wortel", "Kentang", "Ayam", "Bumbu"]
        ],
        "langkah" => ["Rebus ayam", "Masukkan sayur", "Tambahkan bumbu"]
    ],

];


/* HOME */
    Route::get('/', function () use ($reseps) {
        return view('pages.home', compact('reseps'));
    });

/* DETAIL */
    Route::get('/detail/{id}', function ($id) use ($reseps) {

        if (!isset($reseps[$id])) {
            abort(404);
        }

        $resep = $reseps[$id];

        return view('pages.detail', compact('resep'));

    })->name('detail');


/* SEARCH */
    Route::get('/search', function (Request $request) use ($reseps) {

    $keyword = strtolower(trim($request->input('q')));

    $hasil = [];

    foreach ($reseps as $index => $resep) {

        if (
            str_contains(strtolower($resep['nama']), $keyword) ||
            str_contains(strtolower($resep['kategori']), $keyword) ||
            str_contains(strtolower($resep['deskripsi']), $keyword)
        ) {
            $resep['id'] = $index; // 🔥 SIMPAN ID ASLI
            $hasil[] = $resep;
        }
    }

    return view('pages.search', [
        'hasil' => $hasil,
        'keyword' => $request->q
    ]);

});