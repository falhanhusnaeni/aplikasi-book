<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Siswa</th>
                            <th>Alamat</th>
                            <th>No Siswa</th>
                            <th>Jenis Kelamin</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Siswa</th>
                            <th>Alamat</th>
                            <th>No Siswa</th>
                            <th>Jenis Kelamin</th>
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
                                <td>Miftah Hijriyah</td>
                                <td>Papua</td>
                                <td>12</td>
                                <td>Waria</td>
                            </tr>
                        }
                        ?>
                    </tbody> 
                </table>
            </div>
        </div>
    </div>

</div>