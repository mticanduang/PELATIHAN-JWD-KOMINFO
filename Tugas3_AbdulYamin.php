
<?php
// Author : Abdul Yamin
// Title  : Tugas 3 - Menggunakan Tipe Data dan Kontrol Program
// Untuk menampilkan Output deretan bilangan ganjil dan genap kita bisa menggunakan perulangan for, karena jumlah yang akan dijumlahkan sudah jelas nilainya yaitu 1-100
for(
$var_bilangan = 1; // variable untuk menampung nilai awal perulang yaitu 1
$var_bilangan <= 100; // variable untuk menampung nilai maksmial/batasan yang akan diulang dalam hal ini adalah 100, maka angka yang tampil di layar yaitu anga 1-100
$var_bilangan++ // Operator increment untuk menamabh +1 (tambah satu) sperti dijelaskan di slide/modul
){
if( ($var_bilangan % 2) == 0){ // buat kondisi untuk cek masing-masing bilangan, Jadi bilangan 1 sampai 100 masing-masing akan di lakukan operasi mod 2, jika tidak menghasilkan sisa pembagian maka dipastikan bilangan tersebut adalah bilangan genap.
echo "$var_bilangan Adalah Bilangan Genap<br>"; // Tampilkan bilang genap
}else {
// jika menghasilkan hasil pembagian maka bilangan ganjil
echo "$var_bilangan Adalah Bilangan Ganjil<br>"; // Tampilkan bilangan ganjil
}	
}
?>