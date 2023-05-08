let arr = [10, 5, 8, 3, 2, 7, 1];

// Mengurutkan nilai terendah hingga tertinggi
arr.sort(function(a, b){
  return a - b;
});

console.log("Nilai terendah: " + arr[0]);
console.log("Nilai tertinggi: " + arr[arr.length - 1]);
