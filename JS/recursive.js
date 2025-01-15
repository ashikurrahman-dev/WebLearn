function sayHi(n){
    if(n === 0){
        return 1
    }
    console.log("Hello, I am calling.")
    sayHi(n - 1)
}
// sayHi(10)

function sum(n){
    if(n === 1){
        return 1
    }
    return n + sum(n - 1)
}
// console.log(sum(6))


function fact(n){
    if(n === 1){
        return 1
    }
    return n * fact(n - 1)
}
// console.log(fact(5))



function cPrint(inp){
    console.log(inp)
}

function multiplyByFive(n){
    return n * 5
}

function add(a, b){
    return a + b;
}

// cPrint(multiplyByFive(add(3, 8)))

function a(){
    console.log('I am A')
    // b()
}

function b(){
    a()
    console.log('I am B')
}

// a()
b()