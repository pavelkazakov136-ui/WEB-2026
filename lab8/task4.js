function mergeObjects(obj1, obj2){
    for (element of Object.keys(obj1))
        if (obj2[element] === undefined){       
            obj2[element] = obj1[element] 
        }

    console.log(obj2)
}