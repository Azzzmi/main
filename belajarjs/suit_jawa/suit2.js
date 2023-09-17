var tanya = true;
while ( tanya )  {

    let p = prompt( 'Silahkan pilih : gunting, kertas, atau batu.');

    let komp = Math.random();

    if ( komp < 0.32 ) {
        komp = 'gunting';
    }else if ( komp >= 0.32 && komp < 0.72) {
        komp  = 'kertas';
    }else {
        komp = 'batu';
    }

    console.log(komp);


    // aturan
    let hasil = '';

    if ( p == komp ) {
        hasil = 'SERI!';
    }else if ( p == 'gunting' ) {
        if ( komp == 'batu' ) {
            hasil = 'KALAH!';
        }else {
            hasil = 'MENANG!';
        }
    }
    else if ( p == 'kertas') {
        if ( komp == 'gunting') {
            hasil = 'KALAH!';
        }else {
            hasil = "MENANG!";
        }
    }
    else if ( p == 'batu' ) {
        if ( komp == 'kertas'){
            hasil = 'KALAH!';
        }else {
            hasil = 'MENANG!';
        }
    }else {
        hasil = 'TIDAK MENGIKUTI ATURAN SESUAI DANGAN PERINTAH ' + p + ' \n DAN ITU TIDAK ADA DALAM ATURAN';
    }

    alert('kamu memilih : ' + p + ' dan komputer memilih : ' + komp + ' jadi haislnya adalah : KAMU ' + hasil);

tanya = confirm('INGIN MENGULANG PERMAINAN??');

alert('TERIMAKASIH SUDAH MELUANGKAN WAKTU ANDA');
}