function rand(min, max) {
    return Math.trunc(Math.random() * (max - min + 1) + min)
}

function calcularPreco() {
    let nums = document.querySelectorAll("input[type='number']")
    let precos = [55, 2, 5, 7, 3, 12]
    let span = document.querySelector("span#preco")
    let precoTot = 0

    for (i = 0; i < nums.length; i++) {
        precoTot += Number(nums[i].value) * precos[i]
    }

    span.textContent = precoTot
}

function valorLimite(id="") {
    let input = document.querySelector(`input#${id}`)

    if ((input.value > 20) || (input.value < 0)) {
        input.value = ""
        alert("Máximo 20!")
    }
}



var span = document.querySelectorAll("span.telNum")
for (i = 0; i < span.length; i++) {
    for (a = 0; a < 4; a++) {
        span[i].innerHTML += rand(0, 9)
    }
}

span = document.querySelectorAll("span.cnpj2")
for (i = 0; i < span.length; i++) {
    for (a = 0; a < 2; a++) {
        span[i].innerHTML += rand(0, 9)
    }
}

span = document.querySelectorAll("span.cnpj3")
for (i = 0; i < span.length; i++) {
    for (a = 0; a < 3; a++) {
        span[i].innerHTML += rand(0, 9)
    }
}

const ddd = document.querySelector("span#ddd")
for (i = 0; i < 2; i++) {
    ddd.innerHTML += rand(0, 9)
}