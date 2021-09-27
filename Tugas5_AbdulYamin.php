<?php
// Author : Abdul Yamin
// Title  : Tugas 5 - Implementasi Pemrograman Terstruktur


$angka1 = 9; //untuk menampung nilai dan isi angka1
$angka2 = 3; //untuk menampung nilai dan isi angka2


echo 'Bilangan 1 : '.$angka1.'<br>'; // tampilkan nilai angka1
echo 'Bilangan 2 : '.$angka2;


// membuat fungsi penjumlahan
function FungsiTambah($nilai1,$nilai2){
	$tambah = $nilai1+$nilai2;
	return $tambah; // kembalikan hasil tambah
}

// membuat fungsi pengurangan
function FungsiKurang($nilai1,$nilai2){
	$kurang = $nilai1-$nilai2;
	return $kurang; // kembalikan hasil kurang
}

// membuat fungsi perkalian
function FungsiKali($nilai1,$nilai2){
	$kali = $nilai1*$nilai2;
	return $kali; // kembalikan hasil kali
}

// membuat fungsi pembagian
function FungsiBagi($nilai1,$nilai2){
	$bagi = $nilai1/$nilai2;
	return $bagi; // kembalikan hasil bagi
}


// tampilkan hasil tambah
echo '<hr>';
echo "Hasil Penjumlahan Adalah : ". FungsiTambah($angka1,$angka2)."<br>"; // memanggil hasil dari FungsiTambah() 
echo "Hasil Pengurangan Adalah : ". FungsiKurang($angka1,$angka2)."<br>"; // memanggil hasil dari FungsiKurang() 
echo "Hasil Perkalian Adalah : ".   FungsiKali($angka1,$angka2)."<br>";// memanggil hasil dari FungsiKali() 
echo "Hasil Pembagian Adalah : ".   FungsiBagi($angka1,$angka2);// memanggil hasil dari FungsiBagi() 



?>