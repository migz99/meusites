// Variáveis
const numeros = document.querySelector("p#numeros")
let operacao = ""
let num1 = randNums(1, 50)
let num2 = randNums(1, 50)


// Números aleatórios.
function randNums(min = 0, max = 10) {
    return (Math.floor((Math.random() * (max - min + 1)) + min))
}


function continha() {
    num1 = randNums(1, 50)
    num2 = randNums(1, 50)

    // Operações aleatórias
    switch (randNums(1, 3)) {
        case 1:
            operacao = "+"
            break

        case 2:
            operacao = "−"
            while (num2 > num1) {
                num2 = randNums(1, 50)
            }
            break

        case 3:
            operacao = "×"
            break

    }


    // Continha
    numeros.textContent = `${num1} ${operacao} ${num2}`
}