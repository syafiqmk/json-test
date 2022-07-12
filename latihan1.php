<?php 
    $data = file_get_contents('menu.json');
    $data = json_decode($data, true);
    $menu = $data['menu'];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Menu Martabak</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Menu Martabak</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- content -->
    <div class="container">
        <!-- title -->
        <div class="row mt-3">
            <div class="col">
                <h1>Menu Martabak</h1>

                <!-- martabak telur -->
                <h3><?= $menu[0]['kategori'] ?></h3>
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Harga</th>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            for($i = 0; $i < count($menu[0]['menu']); $i++) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $menu[0]['menu'][$i]['nama'] ?></td>
                                    <td>Rp. <?= $menu[0]['menu'][$i]['harga'] ?></td>
                                </tr>
                            <?php }
                        ?>
                    </tbody>
                </table>

                <!-- martabak manis -->
                <h3 class="mt-5"><?= $menu[1]['kategori'] ?></h3>
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Harga</th>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            for($i = 0; $i < count($menu[1]['menu']); $i++) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $menu[1]['menu'][$i]['nama'] ?></td>
                                    <td>Rp. <?= $menu[1]['menu'][$i]['harga'] ?></td>
                                </tr>
                            <?php }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>