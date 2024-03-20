<?php
//tangkap form registrasi
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$domisili = $_POST['domisili'];
$skills = $_POST['skill'];
$email = $_POST['email'];


// Menentukan skor skill
$skor_skill = 0;
    foreach ($skills as $skill) {
        $skor_skill += getSkorSkill($skill);
    }

// Menentukan kategori skill
$kategori_skill = getKategoriSkill($skor_skill);


function getSkorSkill($skill) {
    $skor_skill = 0;
    $skill_scores = [
        "HTML" => 10,
        "CSS" => 10,
        "JavaScript" => 20,
        "RWD Bootstrap" => 20,
        "Python" => 30,
        "Java" => 50
    ];
    if (array_key_exists($skill, $skill_scores)) {
        $skor_skill = $skill_scores[$skill];
    }
    return $skor_skill;
}

// Fungsi untuk mendapatkan kategori skill berdasarkan skor
function getKategoriSkill($skor) {
    if ($skor <= 0) {
        return "Tidak Memadai";
    } elseif ($skor <= 40) {
        return "Kurang";
    } elseif ($skor <= 60) {
        return "Cukup";
    } elseif ($skor <= 100) {
        return "Baik";
    } elseif ($skor <= 150) {
        return "Sangat Baik";
    } else {
        return "Skor Invalid";
    }
}

echo "NIM : \t $nim";
echo "<br> Nama : $nama";
echo "<br> Jenis Kelamin : $jk";
echo "<br> Program Studi : $prodi";
echo "<br> Skill Programming : " . join(', ' , $skills);
echo "<br> Domisili : $domisili";
echo "<br> Skor Skill : $skor_skill";
echo "<br> Kategori Skill: $kategori_skill";
echo "<br> Email : $email";