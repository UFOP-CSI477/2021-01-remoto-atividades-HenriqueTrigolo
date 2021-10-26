function teste(){
    const TipoDeChave = document.querySelector('select[name="TipoDeChave"]').value;
    const ValorDaChave = document.querySelector('input[name="chave"]').value;
    alert("tipo de chave: "+TipoDeChave+" Valor: "+ValorDaChave)
}

function desabilita(estado){
    var input = document.querySelector("#date");
    input.disabled =  estado;
}




/*
const form = document.getElementById('formulario');
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const [sobre, nome] = ['sobre', 'nome'].map(
                    name => form.querySelector(`[name="${name}"]`).value
                );
                alert(`${sobre}, ${nome}`);
            });

            */