<?
class aluno{
    private $nome,$matricula,$nota;
    public function __construct($nome,$matricula,$nota){
        $this->nome=$nome;
        $this->matricula = $matricula;
        $this->nota = $nota; 
    }
    public function verificaSituacao(){
        if($this->nota >= 60){
            return("Aprovado");
        }else{
            return("Reprovado");
        }
    }
}

