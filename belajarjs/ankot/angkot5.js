let jmlAngkot = 10;
let angkotBeroprasi = 6;

for ( let angkot = 1; angkot <= jmlAngkot; angkot++ ) {
    
    if ( angkot <= angkotBeroprasi ) {
        console.log('Angkot No.' + angkot + ' sedang beroprasi');
    }
    else if ( angkot === 8 || angkot === 10) {
        console.log('Angkot No.' + angkot + ' sedang lembur');
    }
    else {
        console.log('Angkot No.' + angkot + ' sedang tidak dapat beroprasi');
    }

}