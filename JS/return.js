function greet(msg){
    function greetings(name){
        return msg + ', ' + name + '!'
    }
    return greetings
}

let gm = greet('Good Morning');
let msg = gm('Ashikur Rahman')
// console.log(msg)



function base(b){
    return function(n){
        let result = 1
        for(let i = 0; i < b; i++){
            result *= n
        }
        return result
    }
}

let base10 = base(10)
console.log(base10(37))

let base2 = base(2)
console.log(base2(84739))