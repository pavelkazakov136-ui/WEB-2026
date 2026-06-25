function countVowels(str){
    let vowelsArr = []
    let count = 0
    for (let char of str){
        if (['а', 'е', 'ё', 'и', 'о', 'у', 'ы', 'э', 'ю', 'я'].includes(char.toLowerCase())){
            count += 1
            vowelsArr.push(char)    
        }
    }
    console.log(count + ' (' + vowelsArr + ')')

}