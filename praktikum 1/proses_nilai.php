<?php
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$tugas = $_GET['tugas'];

//nilai total (30% uts + 35% uas + 35% tugas)
$nilai_total = (30/100 * $uts) + (35/100 * $uas) + (35/100 * $tugas);

if($nilai_total > 55){
    $hasil = 'LULUS';
} else {
    $hasil = 'tidak lulus';
}

if($nilai_total > 85 && $nilai_total <=100) {
    $grade = 'A';
} 
if($nilai_total > 70 && $nilai_total <=84) {
    $grade = 'B';
} 
if($nilai_total > 56 && $nilai_total <=69) {
    $grade = 'C';
} 
if($nilai_total > 36 && $nilai_total <=55) {
    $grade = 'D';
} 
if($nilai_total > 0 && $nilai_total <=35) {
    $grade = 'E';
}







//hasil input
echo "Nama Lengkap: $nama";
echo "<br>Matkul: $matkul";
echo "<br>Uts: $uts";
echo "<br>uas $uas";
echo "<br>tugas: $tugas";
echo "<br>hasil: $hasil";
echo "<br>Grade: $grade";

?>