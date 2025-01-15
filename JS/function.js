// function myFun(){
//     console.log("This is a function.")
// }
// function add(){
//     let a = 20
//     let b = 10
//     console.log(a + b)
// }

// myFun()
// add()

// for(let i = 0; i < 10; i++){
//     myFun()
// add()
// }

// function sum(array){
//     let result = 0;
//     for(let i = 0; i < array.length; i++){
//         result += array[i]
//     }
//     console.log(result)
// }
// let arr1 = [1,2,3]
// let arr2 = [15,25,35]
// let arr3 = [10,20,30]
// sum(arr1)
// sum(arr2)
// sum(arr3)

function abc(a, b, c){
    // console.log(arguments)
}
abc(10, 20, 30)


function person(name, email){
    return {
        name : name,
        email : email
    }
}
let p1 = person("Ashikur Rahman", "ashik@gmail.com")
// console.log(p1)


let addition = function(a, b){
    return a + b
}
addition(40, 10)

setTimeout(function(){
    // console.log("I will added 5 sec")
}, 5000)

let b = addition
// console.log(b(436445235234,3466436))



function something(great, name){
    function getFName(){
        return name.split(' ')[0]
    }
    console.log(great + ' ' + getFName())
}
something("Hello", "Ashikur Rahman")