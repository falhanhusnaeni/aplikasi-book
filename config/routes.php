<?php

if($_get['page'] == ''){
    include "views/beranda.php";
}else if($_get['page'] == 'anggota'){
    include "views/anggota.php";
}else if($_get['page'] == 'buku'){
    include "views/buku.php";
}else if($_get['page'] == 'peminjaman'){
    include "views/peminjaman.php";
}else if($_get['page'] == 'pengembalian'){
    include "views/pengembalian.php";
}else if($_get['page'] == 'petugas'){
    include "views/petugas.php";
}