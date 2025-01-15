// const car = {
//     name: "Fiat",
//     color: "White",
//     model: 500,

//     start: function(){
//         this.drive()
//         console.log('Started')
//     },

//     drive: function(){
//         console.log('Driving')
//     }
// }
// car.stop = function (){
//     console.log("Hello")
// }
// delete car.name
// let x = car
// console.log(x.name="Honda".toUpperCase())

// car.start()




// const person = {}
// person.name = "Ashikur Rahman"

// console.log(person.name)




// function Person(first, last){
//     this.firstName = first
//     this.lastName = last
// }

// const me =  new Person("Ashikur", "Rahman")
// console.log(me.firstName)



let obj1 = {
    a: 10,
    b: 20
}
let obj2 = {
    a: 10,
    b: 20
}

// console.log(JSON.stringify(obj1) === JSON.stringify(obj2))
// console.log('a' in obj1)
for(let i in obj1){
    console.log(obj1[i])
}
