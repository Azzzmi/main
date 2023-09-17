let p  = prompt( 'PILIH 1 - 10');

let komp = Math.floor(Math.random() *10 + 1);

hasil = '';
if ( p > komp ) {
    hasil = 'TERLALU BESAR';
} else if ( p == komp ) {
    hasil = ' ANDA BENAR';
} else if ( p < komp ){
    hasil = 'TERLALU RENDAH';
}else {
    hasil = 'YANG ANDA MASUKAN BUKANLAH ANGKA';
}

alert('KAMU MEMILIH ' + p + ' dan KOMPUTER MEMILIH ' + komp + '\nMAKA JAWABAN ANDA ' + hasil);