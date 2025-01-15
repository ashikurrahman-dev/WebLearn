let arr = [1, 2, 3, 4, 5]
let sum = 0
arr.forEach(function(value, index, arr){
    sum += value
})
// console.log(sum)


let sqrArr = arr.map(function(value){
    return Math.random() * 100
})

// console.log(sqrArr)

function myMap(arr, cb){
    let newArr = []
    for(let i = 0; i < arr.length; i++){
        var temp = cb(arr[i], i, arr)
        newArr.push(temp)
    }
    return newArr
}

let qb = myMap(arr, function(value){
    return value * value * value
})
let mTen = myMap(arr, function(value){
    return value * 10
})

// console.log(qb)
// console.log(mTen)



let odd = arr.filter(function(value){
    return value % 2 !== 0
})

// console.log(odd)

let reduce = arr.reduce(function(pre, curr){
    return pre + curr;
})
// console.log(reduce);

let find = arr.find(function(value){
    return value === 4
})
let findI = arr.findIndex(function(value){
    return value === 4
})

console.log(find)
console.log(findI)