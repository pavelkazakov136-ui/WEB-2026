function elementsToStr(arrElements){
    for (let element in arrElements){ 
        arrElements[element] = String(arrElements[element])
    }
    return arrElements
}
function uniqueElements(arrElements){
    arrElements = elementsToStr(arrElements)
    let objResult = {}
    for (let element of arrElements){
        if(objResult[element] === undefined){
            objResult[element] = 1
        }
        else{
            objResult[element] += 1 
        }
        
    }
    console.log(objResult)
}