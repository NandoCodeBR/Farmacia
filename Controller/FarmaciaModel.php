<?php 

 Class Model{
    private $id;
    private $nome;
    private $cpf;
    private $endereco;
    private $cadastro;

    //Getter e setter mágicos
    public function __GET($atributo) {
        return $this->$atributo;
        /*$atributo mudará de nome para o valor
        que será colocado no parâmetro de __GET
        Por exemplo: __GET('cliente')
        o código irá interpretar assim:
        return $this->cliente */ 
    }
    public function __SET($atributo, $valor){
        $this->$atributo = $valor;
        /* A mesma coisa aqui
        Porém o processamento da variável valor é normal */
    }
}


?>