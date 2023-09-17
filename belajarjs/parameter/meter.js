// function tambah(a,b) {
//     return  a + b;
// }

// function kali(a,b) {
//     return  a * b;
// }

// let hasil = kali(tambah(1,2), tambah(3,4));
// console.log(hasil);


function tambah() {
    let hasil = 0;
    for( let i = 0; i < arguments.length; i++) {
        hasil += arguments[i];
    }
    return hasil;
}

let nilaiMasuk = tambah(1,2,3,4);
console.log(nilaiMasuk);