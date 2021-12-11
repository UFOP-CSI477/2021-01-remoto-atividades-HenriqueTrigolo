<script>
function preencherModelo(data){
    let modelo = document.getElementById("modelo");
    limparSelect(modelo);

    for( let index in data["modelos"]){
        const {nome} = data["modelos"][index];

        let option = document.createElement("option");
        option.value = nome;
        option.innerHTML = `${nome}`;
        modelo.appendChild(option);
    }
}
</script>




<script>

    function teste(){
        <?php 
            require_once('conexao_banco_dados.php');
            $aux;
            for($aux = 0; $aux < 10; $aux++){
                $pesquisar = $pdo->prepare("SELECT 'ID' FROM `vaga` WHERE `vaga`.`ID` = $aux");
                echo $pesquisar;
            }
            
        
        ?>;
        console.log("teste");
    }
</script>