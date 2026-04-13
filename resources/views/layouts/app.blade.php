<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NusaRecipe</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
    body {
        background-color: #f5f5f5;
    }

    /* biar search rounded & halus */
    input.form-control {
        border: none;
        outline: none;
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