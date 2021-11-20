// Verificar se a resposta está correta.
function verificar() {
    let resp = Number(document.querySelector("input#resp_num").value)
    let titulo = document.querySelector("h1")
    let acerto = new Audio("../Continhas/mp3/acerto.mp3")
    let erro = new Audio("../Continhas/mp3/erro.mp3")


    if ((resp == num1 - num2) || (resp == num1 * num2) || (resp == num1 + num2)) {
        titulo.textContent = "CORRETO!"
        titulo.style.color = "#047A00"


        setTimeout(() => {
            titulo.textContent = "Continhas!"
            titulo.style.color = "#000"
        }, 1200)


        acerto.play()
        apagar()
        continha()

    } else {
        titulo.textContent = "ERRADO!"
        titulo.style.color = "#F00"


        setTimeout(() => {
            titulo.textContent = "Continhas!"
            titulo.style.color = "#000"
        }, 1200)

        erro.play()
        apagar()
    }
}


// Resetar campo de resposta.
function apagar() {
    let resp = document.querySelector("input#resp_num")
    resp.value = null
}