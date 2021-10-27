
function desabilita(estado){
    var input = document.querySelector("#date");
    input.disabled =  estado;
}

function limparSelect(campo){
    while(campo.length > 1){
        campo.remove(1);
    }
}

function preencherBancos(data){

    let bancos = document.getElementById("bancos");
    limparSelect(bancos);

    for( let index in data){
        const {ispb, name, code, fullName} = data[index];

        let option = document.createElement("option");
        option.value = fullName;
        option.innerHTML = `${code}-${name}`;

        bancos.appendChild(option);
    }
}

function carregarBancos(){

    fetch("api.js")
        .then(response => response.json())
        .then(data => preencherBancos(data))
        .catch(error => console.error(error))
}

function teste(){
    const TipoDeChave = document.querySelector('select[name="TipoDeChave"]').value;
    const ValorDaChave = document.querySelector('input[name="chave"]').value;
    const ValorReais = document.querySelector('input[name="valor"]').value;
    var ValorData = document.querySelector('input[name="data"]:checked').value;
    

    if(ValorData == "Agendar"){
        ValorData = document.querySelector('input[type="date"]').value;
    }
    
    
    const Banco = document.querySelector('select[name="bancos"]').value;

    alert("tipo de chave: "+TipoDeChave+
            "\nValor: "+ValorDaChave+
            "\nReais: "+ValorReais+
            "\nData: "+ValorData+
            "\nBanco: "+Banco)
}

function teste(){
    const TipoDeChave = document.querySelector('select[name="TipoDeChave"]').value;
    const ValorDaChave = document.querySelector('input[name="chave"]').value;
    const ValorReais = document.querySelector('input[name="valor"]').value;
    var ValorData = document.querySelector('input[name="data"]:checked').value;
    

    if(ValorData == "Agendar"){
        ValorData = document.querySelector('input[type="date"]').value;
    }
    
    
    const Banco = document.querySelector('select[name="bancos"]').value;

    alert(  "Resumo do Envio:"+
            "\nChave Selecionada: "+TipoDeChave+
            "\nChave: "+ValorDaChave+
            "\nQuantia Trasnferida: R$"+ValorReais+
            "\nData da trasnferencia: "+ValorData+
            "\nBanco: "+Banco)
}

var saldoInicial = 1000;

function saldo(){

    Resumo.visor.value = "R$" + saldoInicial;
}