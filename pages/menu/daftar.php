<?php
include '../../config/panggil3.php';
$sql = "SELECT * FROM ketersediaan";
$hasil = $proses->list($sql);
include '../../layout/head.php';
include '../../layout/admin-nav.php'
?>


<body>
    <div class="mx-auto">
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Data Produk
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th scope="col">Nomor</th>
                        <th scope="col">Nama</th>
                        <th scope="col">detail</th>
                        <th scope="col">harga</th>
                        <th scope="col">ketersediaan</th>
                    </tr>
                    <tbody>
                        <?php
                        $urut = 1;
                        foreach ($hasil as $r2) {
                            $nama = $r2['nama'];
                            $detail = $r2['detail'];
                            $harga = $r2['harga'];
                            $ketersediaan = $r2['ketersediaan'];

                        ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $urut++ ?>
                                </th>
                                <td scope="row">
                                    <?php echo $nama ?>
                                </td>
                                <td scope="row">
                                    <?php echo $detail ?>
                                </td>
                                <td scope="row">
                                    <?php echo $harga ?>
                                </td>
                                <td scope="row">
                                    <?php echo $ketersediaan ?>
                                </td>
                                <td scope="row">
                                    <a class="btn btn-danger text-light col-11" href="index.php?page=menu&acts=delete&id=<?= $r2['id'] ?>"><i class="fas fa-trash-alt"></i>Delete</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>