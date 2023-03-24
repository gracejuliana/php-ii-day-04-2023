<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Kursus SaCode</title>

    <!--Tailwind CSS - CDN-->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!--HEADER START-->
    <header class ="border-2 m-5 p-5 shadow-md bg-white">
        <h1 class= "text-3xl font-bold text-gray-700 mb-3"> Pendaftaran Kursus SaCode</h1>
        <p class="text-xs text-gray-500">Silahkan lengkapi formulir dengan baik dan benar</p>
    </header>
    <!--HEADER END-->
    <!--HEADER MAIN CONTENT STAR -->
    <section class ="border-2 m-5 p-5 shadow-md bg-white">
        <?php
            //Integrasi form tambah
            include('form-tambah.php');
        ?>

    </section>
    <!-- MAIN CONTENT END-->

    <!-- FOOTER STAR -->
    <footer class ="border-2 m-5 p-5 shadow-md bg-white">
        <p class= "text-gray-500 text-xs">Copyright & copy 2023, designed by <b>Grace Juliana </b></p>
    </footer>
    <!-- FOOTER END -->
</body>
</html>