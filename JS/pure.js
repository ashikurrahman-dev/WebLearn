function sqr(n){
    // console.log(n*n)
}

sqr(3)
sqr(3)
sqr(3)

let point = {
    x : 10,
    y : 20
}
function printPoint(point){
    point.x = 100
    point.y = 200
    // console.log(point)
}
printPoint(point)


function sample(a, b, cb){
    let c = a + b
    let d = a - b
    let result = cb(c, d)
    return result
}

function sum(a, b){
    return a + b
}
let r0 = sample(20, 10, sum)
let r = sample(20, 10, function(c, d){
    return c * d
})
console.log(r0)
console.log(r)