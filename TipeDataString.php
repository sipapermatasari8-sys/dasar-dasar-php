<?php 

echo 'nama : ';
echo 'Sipa Permata Sari';
echo "\n";

echo "Name : ";
echo "Sipa\t Permata\t Sari\n";

echo <<<SIPA
Selamat belajar PHP 
sekarang, kita belajar tipe data string 
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc  
SIPA; 

echo <<<'SIPA'
Selamat belajar PHP 
sekarang, kita belajar tipe data string 
ini adalah cara ke-3 membuat string 
bisa menggunakan haredoc
SIPA;