let n = 5;
for (let i = n; i >= n; i--) {
    let result = ""
    for (let j = n; j >= i; j--) {
        result += "* "
    }
    console.log(result)
}


for(let i=1; i<11; i++){
    if(i===3 || i===4){
        continue
    }else{
        console.log(i)
    }
}