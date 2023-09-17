var jmlAngkot = 10;
var angkotBeroprasi = 6;

for ( var angkot = 1; angkot <= jmlAngkot; angkot++) {

    if ( angkot <= angkotBeroprasi ) {
        console.log('Angkot No. ' + angkot + 'sedang beroprasi');
    } 
    else if (angkot == 8 ) {
        console.log('angkot No. ' + angkot + ' sedang kejar setoran');
    }

    else {
    console.log("angkot No. " + angkot + 'tidak beroprasi');
    }
}

// let angka = prompt('MASUKAN ANGKA');

// if ( angka % 2 == 0 ) {
//     alert( angka + ' Bilangan GANAP.')
// }
// else if ( angka % 2 == 1) {
//     alert( angka + ' Bilangan GANJIL')
// } else {
//     alert( angka + ' yang anda masukan bukanlah angka.');
// }