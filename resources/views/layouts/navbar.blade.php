<nav class="navbar bg-light shadow-sm px-4">
    <div class="container d-flex justify-content-between align-items-center">

        <!-- LOGO + NAMA -->
        <div class="d-flex align-items-center gap-2">
            <img src="{{ asset('image/logo.png') }}" alt="logo" style="width:45px;">
            <h4 class="fw-bold text-warning m-0">NusaRecipe</h4>
        </div>

        <!-- SEARCH -->
        <div class="position-relative">
            <input type="text"
                   class="form-control"
                   placeholder="Cari resep masakan"
                   style="width:280px; border-radius:25px; padding-right:40px;">

            <i class="bi bi-search position-absolute"
               style="right:15px; top:50%; transform:translateY(-50%);"></i>
        </div>

        <!-- MENU -->
        <div class="d-flex align-items-center gap-4">

            <!-- FAVORIT -->
            <div class="text-center">
                <i class="bi bi-bookmark fs-4 text-warning"></i>
                <div style="font-size:12px;">Favorit</div>
            </div>

            <!-- USER -->
            <i class="bi bi-person-circle fs-3 text-warning"></i>

        </div>

    </div>
</nav>