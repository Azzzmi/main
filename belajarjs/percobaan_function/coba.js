function jumlahDuaSisisKubus(a, b) {
    let volumeA;
    let volumeB;
    let volumeTotal;

    volumeA = a * a * a;
    volumeB = b * b * b;
    volumeTotal = volumeA + volumeB

    return volumeTotal;
}
console.log(jumlahDuaSisisKubus(12,5));