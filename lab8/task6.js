function mapObject(obj, callback){
    let result = {}
    for (let key in obj){
        result[key] = callback(obj[key])
    }
    console.log(result)
}