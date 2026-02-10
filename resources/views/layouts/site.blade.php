
<!DOCTYPE html>
<html lang='{{ str_replace('_', '-', app()->getLocale()) }}'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='csrf-token' content='{{ csrf_token() }}'>
    <title>Colegio De Las Navas</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="/design/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/design/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/design/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/design/css/style.css" rel="stylesheet">
</head>

<body>

    <x-main-site-component />

    @yield('content')

    <x-main-site-component-footer />

    <!-- Back to Top -->
    <a href="#" class="p-3 btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="/design/lib/easing/easing.min.js"></script>
    <script src="/design/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/design/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="/design/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="/design/mail/jqBootstrapValidation.min.js"></script>
    <script src="/design/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="/design/js/main.js"></script>
</body>

</html>
