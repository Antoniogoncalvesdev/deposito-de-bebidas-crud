const nome = document.querySelector('input#nome')
const nomeProduto = document.querySelector('input#nome-produto')
const preco = document.querySelector('input#preco-produto')
const tipo = document.querySelector('input#tipo-produto')
const quantidade = document.querySelector('input#quantidade')
const tamanhoMaximo = 20

nome.addEventListener('input', function () {
    let pattern = /^[aA-zZ ]+$/

    if (!(nome.value.match(pattern))) {
        nome.value = nome.value.slice(0, (nome.value.length - 1))
    } 

    if (nome.value.length > tamanhoMaximo) {
        nome.value = nome.value.slice(0, tamanhoMaximo)
    }
})

nomeProduto.addEventListener('input', function () {
    let pattern = /^[aA-zZ0-9 ]+$/

    if (!(nomeProduto.value.match(pattern))) {
        nomeProduto.value = nomeProduto.value.slice(0, (nomeProduto.value.length - 1))
    }

    if (nomeProduto.value.length > tamanhoMaximo) {
        nomeProduto.value = nomeProduto.value.slice(0, tamanhoMaximo)
    }
})

preco.addEventListener('input', function () {
    preco.value = preco.value.replace(',', '.')
    if (preco.value.length > tamanhoMaximo) {
        preco.value = preco.value.slice(0, tamanhoMaximo)
    }

    if (!(isFinite(preco.value))) {
        preco.value = preco.value.slice(0, (preco.value.length - 1))
    }
})

preco.addEventListener('change', function () {
    if(preco.value.endsWith('.')) {
        preco.value = `${preco.value}00`
    }
})

tipo.addEventListener('input', function () {
    let pattern = /^[aA-zZ ]+$/

    if (!(tipo.value.match(pattern))) {
        tipo.value = tipo.value.slice(0, (tipo.value.length - 1))
    }

    if (tipo.value.length > tamanhoMaximo) {
        tipo.value = tipo.value.slice(0, tamanhoMaximo)
    }
})

quantidade.addEventListener('input', function () {
    if (quantidade.value.length > tamanhoMaximo) {
        quantidade.value = quantidade.value.slice(0, tamanhoMaximo)
    }

    if (!(isFinite(quantidade.value)) || quantidade.value.endsWith('.')) {
        quantidade.value = quantidade.value.slice(0, (quantidade.value.length - 1))
    }
})
