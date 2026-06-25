const lower = 'abcdefghijklmnopqrstuvwxyz'
const upper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
const digits = '0123456789'
const special = '!@#$%^&*'
const all = lower + upper + digits + special

function randomChar(chars){
    return chars[Math.floor(Math.random() * chars.length)]
}

function requiredCharacters(){
    let password = [
        randomChar(lower),
        randomChar(upper),
        randomChar(digits),
        randomChar(special)

    ]
    return password
}

function fillingPassword(password, Size){
    for(let i = 0; i < Size-4; i++){
        password.push(randomChar(all))
    }
    return password
}

function shuffle(arr){
    for (let i = 0; i < arr.length; i++){
        let j = Math.floor(Math.random() * arr.length)
        let temp = arr[i]
        arr[i] = arr[j]
        arr[j] = temp
    }
    return arr
}

function arrToStr(arr){
    let str = ''
    for(element of arr){
        str += element
    }
    return str
}

function generationPassword(Size){
    if (Size > 3){
        let password = requiredCharacters()
        password = fillingPassword(password, Size)
        password = shuffle(password)
        password = arrToStr(password)
        console.log(password)
    }
    else{
        console.log('пароль может содержать минимум 4 символа')
    }
}