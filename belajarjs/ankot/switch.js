// let angka = prompt('masukan angka :');

// switch( angka ) {
//     case '1' :
//         alert('anda memasukan angka 1');
//         break;
//     case '2' :
//         alert('anda memasukan angka 2');
//         break;
//     case '3' :
//             alert('anda memasukan angka 3');
//             break;
//     default :
//         alert('angka yang anda masukan salah');
// }

let item = prompt('masukan nama makanan / minuman: \n (cth: nasi, daging, susu, hamburger, coca cola)');

switch( item ) {
    case 'nasi' :
    case 'daging' :
    case 'susu' :
        alert('makanan / minuman SEHAT!');
        break;
    case 'hamburger' :
    case 'coca cola' :
        alert('makanan / minuman TIDAK SEHAT!');
        break;
    default :
        alert('yang anda masukan bukan lah makanan atau minuman!');
        break;
}