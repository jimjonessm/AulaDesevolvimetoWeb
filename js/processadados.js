function envia(){
                
        event.preventDefault();
        var nome = document.getElementById('nome').value;
        var matricula = document.getElementById('matricula').value;
        var nota = document.getElementById('nota').value; 
        var dados = new FormData()
        dados.append('nome',nome)
        dados.append('matricula',matricula)
        dados.append('nota',nota)
        var con = new XMLHttpRequest();
        con.open("POST", 'php/verificav2.php', true);
        
        con.onreadystatechange = function() { // Chama a função quando o estado mudar.
            if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                var msg = `<p class="${con.responseText}">O aluno ${nome} foi ${con.responseText}</p>`
                document.getElementById('resultado').innerHTML=msg
            }
        }
        con.send(dados);
           
}