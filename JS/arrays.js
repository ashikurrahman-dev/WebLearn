let arr = [100,2,3,4,5,6]
// arr[6] = 7
// console.log(arr.length)

let sum = 0
for(let i = 0; i < 6; i++){
    // arr[i] = arr[i]+2
    sum+=arr[i]
}
// console.log(sum)

let array = [
    [3,345,345,34,545,34],
    [2345,345,34,5354,34,534],
    [23453,345,3,534,534,4,54]
]

for(let i = 0; i < array.length; i++){
    for(let j = 0; j < array[i].length; j++){
        // console.log(j + array[i][j])
    }
}

let n = [1,2,3,4,5,6,7,8]

for(let i = 0; i < n.length / 2; i++){
    let temp = n[i]
    n[i] = n[n.length - 1 -i]
    n[n.length - 1 -i] = temp
}
console.log(n)


let a = [23,3245,34,45]
let b = Array.from(a)
b.push(4)
console.log(a)