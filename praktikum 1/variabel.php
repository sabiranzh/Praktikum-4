<?php
//membuat variabel
$mahasiswa = ["Cewe Jaemin", "Sistem Informasi", "00110123193", [3.6, 3.5, 4.0]];

//panggil variabel
echo 'Nama: ' . $mahasiswa[0] . "<br>";
echo "Jurusan: $mahasiswa[1] <br>";
echo "IPS Semester 1: " . $mahasiswa[3][0];