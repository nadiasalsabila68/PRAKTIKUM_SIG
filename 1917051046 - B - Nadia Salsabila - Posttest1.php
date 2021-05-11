<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <center><h1>HYPERTEXT PREPOCESSOR  </h1></center>
    <hr>
</body>
</html>

<?php 

$nama = "NadiaSalsabila_";
$npm = 1917051046;
echo $nama;
echo $npm;

echo "<br><br>PHP ialah bahasa pemrograman yang digunakan secara luas untuk penanganan pembuatan dan pengembangan sebuah situs web dan bisa digunakan bersamaan dengan HTML.<br>";
echo "Untuk membuat file dengan .php maka kita harus memiliki XAMPP dan Visual Studio Code.<br>";
echo "1. Buatlah folder baru didalam folder htdocs pada folder xampp.<br>";
echo "2. Buka XAMPP dan start bagian apache.<br>";
echo "3. Buka VSCODE dan open folder yang telah kita buat.<br>";
echo "4. Klik new file dengan .php.<br>";
echo "<br>Terdapat beberapa syntax dalam bahasa pemrograman PHP yaitu: <br>";
echo "a). echo merupakan syntax untuk menampilkan perinta<br>";
echo "b). // atau # merupakan syntax untuk memberikan komentar<br>";
echo "c). /** */ merupakan komentar untuk multiple lines<br>";
echo "d). Untuk peraturan dalam penamaan variable diawali dengan $.<br>";
echo "<br>Terdapat 5 tipe data dalam php yaitu:";

?> 

<html>
<body>

    <table border = "1">
        <tr>
            <td><strong>No.</strong></td>
            <td><strong>Tipe Data</strong></td>
            <td><strong>Penjelasan</strong></td>
        </tr>
        <tr>
            <td>1</td>
            <td>Integer</td>
            <td>Berisi bilangan bulat</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Boolean</td>
            <td>Berisi 2 nilai saja: True dan False</td>
        </tr>
        <tr>
            <td>3</td>
            <td>String</td>
            <td>Berisi data teks yang diapit oleh tanda '' atau ""</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Float</td>
            <td>Berisi bilangan desimal</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Array</td>
            <td>Berisi himpunan data</td>
        </tr>
    </table>

    <p>
        <br/>LOOPING ialah suatu perintah pada PHP yang digunakan untuk <mark style="background-color:pink">mengeksekusi blok kode yang sama berulang kali selama kondisi tertentu terpenuhi</mark>.
        <br/> Ide dasar di balik sebuah loop adalah untuk mengotomatiskan tugas yang berulang dalam suatu program untuk menghemat waktu dan usaha.
        <br>PHP mendukung empat jenis loop yang berbeda.
        <li><strong><i>while - loop</i></strong> melalui blok kode selama kondisi yang ditentukan bernilai true.</li>
        <li><strong><i>do… while</i></strong> blok kode dieksekusi sekali dan kemudian kondisinya dievaluasi. Jika kondisi ini benar, pernyataan diulangi selama kondisi yang ditentukan benar.</li>
        <li><strong><i>for - loop</i></strong> melalui blok kode sampai penghitung mencapai angka yang ditentukan.</li>
        <li><strong><i>foreach - loop</i></strong> melalui blok kode untuk setiap elemen dalam array.</li>
    </p>
    
</body>
</html>

<?php

echo "Contohnya :<br>";
for($a = 1; $a <= 5; $a++){
    echo "Data Ke-".$a."<br>";
}

?>