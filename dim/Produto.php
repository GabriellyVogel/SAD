<?php
namespace dimensoes;

/**
 * Model da entidade produto
 * @author Gabrielly
 */
class Produto{
    /**
    * Cod do Produto
    * @var int
    */
   public $cod_produto;
   /**
    * Nome do Produto
    * @var string
    */
   public $nome;
   /**
    * Unidade de Medida
    * @var string
    */
   public $uni_med;
   /**
    * Preco do Produto
    * @var float
    */
   public $preco;
   

   /**
    * Carrega os atributos da classe Produto
    * @param $cod_produto codigo do produto
    * @param $nome nome do produto
    * @param $uni_med unidade de medida
    * @param $preco preco do produto

    *@return Void
    */

   public function setProduto($nome, $uni_med, $preco, $cod_produto){
      $this->cod_produto = $cod_produto;
      $this->nome = $nome;
      $this->uni_med = $uni_med;
      $this->preco = $preco;

   }
}
?>