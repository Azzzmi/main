// pilihan buat user
let p = prompt('Silakan pilih : gajah, semut, orang');




// pilihan buat komputer
// memangkitkan bilangan random
let comp = Math.random();

if ( comp < 0.34 ) {
    comp = 'gajah';
}
else if ( comp >= 0.34 && comp < 0.68 ) {
    comp = 'orang';
}
else {
    comp = 'semut';
}
console.log(comp);



// aturan 
let hasil = ''
if ( p == comp ){
    hasil = 'SERI';
}
else if ( p == 'gajah' ) {
    if (comp == 'orang' ) {
        hasil = 'MENANG!';
    }else {
        hasil = 'KALAH!';
    }
}
else if ( p == 'orang' ) {
    if ( comp == 'gajah' ) {
        hasil = 'KALAH!';
    }else {
        hasil = 'MENANG!';
    }
}
else if ( p == 'semut') {
    if (comp == 'orang'){
        hasil = 'KALAH!';
    }else {
        hasil = 'MENANG!';
    }
}else {
    hasil = 'TIDAK MENGIKUTI ATURAN YG ADA!!!';
}


alert('Kamu memilih : ' + p + ' dan komputer memilih : ' + comp + '\nMaka hasilnya : KAMU ' + hasil)