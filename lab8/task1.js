function normalization(input){
    if (!Array.isArray(input)){
        return [input]        
    }
    else{
        return input
    }
}
function writeResult(primeSet, notPrimeSet) {
    let output = 'Результат: '
    if (primeSet.length !== 0){
        output += primeSet
        if (primeSet.length === 1){
            output += ' простое число, '
        }
        else {
            output += ' простые числа, '
        }
    }
    if (notPrimeSet.length !== 0){
        output += notPrimeSet
        if (notPrimeSet.length === 1){
            output += ' не простое число'
        }
        else {
            output += ' не простые числа'
        }
    }
    return output
}
function isPrimeNumber(input) {
    let arr = normalization(input)
    let primeSet = []
    let notPrimeSet = []
    for (let i of arr){
        let isPrime = true
        if (i > 1){
            for (let j = 2; j < i; j++) {
                if (i % j == 0) {
                    isPrime = false
                    break
                }
            }
        }
        else{
            isPrime = false    
        }
        if (isPrime){
            primeSet.push(i)
            
        }
        else{
            notPrimeSet.push(i)
        }
    }
    console.log(writeResult(primeSet, notPrimeSet))
}
