const persons = ['ashik', 'jahid', 'sumit']
persons.push('Me')
persons[10] = 'BD'
persons['name'] = "Ashikur Rahman"
console.log(persons)
let im = [Date.now(), Date.UTC(2024)]
console.log(im)

const n = [1,34,4,3,45,3,5,2,56,5,2,456,45]
// n.sort((a , b) => a - b)
console.log(n[n.length-1])

for(i = 0; i < n.length; i++){
    // console.log(n[i])
}

n.forEach(all)
function all(value){
    // console.log(value)
}

let num ={
    
}
console.log(Array.isArray(num))


const myObj = {
    name: "John",
    age: 30,
    cars: [
      {name:"Ford", models:["Fiesta", "Focus", "Mustang"]},
      {name:"BMW", models:["320", "X3", "X5"]},
      {name:"Fiat", models:["500", "Panda"]}
    ]
  }

  console.log(myObj.cars[0].models)