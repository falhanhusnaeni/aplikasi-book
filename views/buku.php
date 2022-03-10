<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Buku</th>
                            <th>Kategori</th>
                            <th>Penulis</th>
                            <th>Tahun Terbit</th>
                            <th>Penerbit</th>
                            <th>Jumlah Buku</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Buku</th>
                            <th>Kategori</th>
                            <th>Penulis</th>
                            <th>Tahun Terbit</th>
                            <th>Penerbit</th>
                            <th>Jumlah Buku</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        //sample dengan for
                        // menampilkan record sebanyak 100 kali
                        $a = 1;

                        for ($a; $a <= 100; $a++) {
                        ?>
                            <tr>
                                <td>Zaman Sekarang</td>
                                <td>Love Story </td>
                                <td>Ohang</td>
                                <td>1991</td>
                                <td>Agus</td>
                                <td>10</td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody </table>
            </div>
        </div>
    </div>

</div>