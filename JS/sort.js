let persons = [
    {
        name : 'Ashik',
        age : 21
    },
    {
        name : 'Rabby',
        age : 20
    },
    {
        name : 'Hasan',
        age : 25
    },
    {
        name : 'Jahid',
        age : 22
    },
]

let arr = [3,2,4,2,5,2,6,8,3,-3,-4,-5,1,0]
// arr.sort()
// console.log(arr)

// persons.sort()
// console.log(persons)

arr.sort(function(a, b){
    if(a > b){
        return 1
    } else if(a < b){
        return -1
    }else{
        return 0
    }
})
console.log(arr)

persons.sort(function(a, b){
    if(a.age > b.age){
        return 1
    } else if(a.age < b.age){
        return -1
    }else{
        return 0
    }
})
console.log(persons)

let a = [1,2,3,4,5,6]
let res1 = a.every(function(value){
    return value % 2 === 1
})
console.log(res1)

let res2 = a.some(function(value){
    return value % 2 === 1
})
console.log(res2)