<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOG</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body class="bg-dark">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark">
        <h5 class="my-0 mr-md-auto font-weight-normal text-white">FOG</h5>
        <nav>
            <a class="btn btn-outline-light me-2" href="/" class="p-2 text-white">Main</a>
            <a class="btn btn-outline-light me-2" href="/about" class="p-2 text-white">About</a>
        </nav>
        <a href="/form" class="btn btn-warning mx-2">Form</a>
    </div>
    @yield('main_content');
    
</body>
</html>