function calcPct() {
    const resp = document.querySelector("h1")
    const perecivel = document.getElementsByName("perecivel")
    const num_alunos = Number(document.querySelector("#num-alunos").value)
    const per_capita = Number(document.querySelector("#per-capita").value)
    const pct = Number(document.querySelector("#pct").value)
    const result = num_alunos * per_capita / pct
    const decimais_res = result - Math.trunc(result)
    const inteiro_res = result - decimais_res

    if (perecivel[0].checked) {
        if (decimais_res < 0.25) {
            resp.textContent = inteiro_res
        } else if (decimais_res < 0.75) {
            resp.textContent = inteiro_res + 0.5
        } else {
            resp.textContent = inteiro_res + 1
        }

    } else {
        if (decimais_res < 0.5) {
            resp.textContent = inteiro_res
        } else {
            resp.textContent = inteiro_res + 1
        }

    }
}
