<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>game</title>
</head>
<body>
    <h1>Main game sederhana pake javasript</h1>
</body>
<script>
    var tanya = true;
    while ( tanya ) {
        // pariable
        var p = prompt('pilih : batu, kertas, gunting');
        // membangkitkan bilangan random menggunakan framework js yaitu Math.random
        var comp = Math.random();

        if ( comp < 0.34 ) {
            comp = 'batu';
        } else if ( comp >= 0.34 && comp <= 0.67 ) {
            comp = 'kertas';
        } else {
            comp = 'gunting';
        }
        // menentukan rules nya
        var hasil = '';
        if (p == comp ) {
            hasil = "SERI!";
        } else if ( p == 'batu' ) {
            hasil = ( comp == 'kertas' ) ? 'KALAH!' : 'MENANG!';
        } else if ( p == 'kertas') {
            hasil = ( comp == 'gunting') ? 'KALAH!' : 'MENANG!';
        } else if ( p == 'gunting') {
            hasil = ( comp == 'batu') ? 'KALAH!' : 'MENANG!';
        } else {
            hasil = 'Memasukan pilihan yang salah!';
        }


        // tampilan hasilnya
        alert('Kamu memilih : ' + p + ' dan komputer memilih : ' + comp + '\n Maka hasilnya : Kamu ' + hasil);

        // pengulangan game nya
        tanya = confirm('dei?');
    }
    // jika sudah gk mau main lagi gess
    alert('Terimakasih sudah bermain');
</script>
</html>