let jmlAngkot = 10;
let angkotBeroprasi = 6;

for ( noAngkot = 1; noAngkot <= jmlAngkot; noAngkot++ ) {

    if( noAngkot <= angkotBeroprasi && noAngkot !== 5 ) {
        console.log('Angkot No. ' + noAngkot + 'sedang beroprasi');
    }
    else if ( noAngkot === 8 || noAngkot === 10 || noAngkot == 5 ) {
        console.log('Angkot No. ' + noAngkot + 'SEDANG LEMBUR');
    }
    else {
        console.log('Angkot No. ' + noAngkot + ' sedang tidak beroprasi');
    }
}