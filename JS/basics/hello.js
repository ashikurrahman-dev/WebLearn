console.log('Hello World!')
console.log("My name is " + "Ashik")
console.log('9' + 9)
console.log(10 + 10)


var str = "100"
var n = 100

console.log(Number(str) + n.toString())

console.log(10+40*(60/6)/5)

switch(new Date().getDay()){
    case 0:
        console.log("Today is Sunday")
        break
    case 1:
        console.log("Today is Monday")
        break
    case 2:
        console.log("Today is Tuesday")
        break
    case 3:
        console.log("Today is Wednesday")
        break
    case 4:
        console.log("Today is Thursday")
        break
    case 5:
        console.log("Today is Friday")
        break
    case 6:
        console.log("Today is Saturday")
        break
    default:
        console.log("Not a valid Number")
}

let date = new Date().getDay()
if(date == 0){
    console.log("Today is Sunday.")
} else if(date == 1){
    console.log("Today is Sunday.")
} else if(date == 2){
    console.log("Today is Monday.")
} else if(date == 3){
    console.log("Today is Wednesday.")
} else if(date == 4){
    console.log("Today is Thursday.")
} else if(date == 5){
    console.log("Today is Friday.")
} else if(date == 6){
    console.log("Today is Saturday.")
} else{
    console.log("Not a Valid Number")
}


let result = (13 % 2 === 0) ? "Even" : "Odd"
console.log(result)



let namee = "eeeeeeee"
let fullName = namee || "Ashikur Rahman"
console.log(fullName)