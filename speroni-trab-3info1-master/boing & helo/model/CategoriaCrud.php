<?php


require_once "Conexao.php";
require_once "Categoria.php";

class CategoriaCrud
{
    private $conexao;

    public function __construct()
    {
        $con = new Conexao();
        $this->conexao = $con->getConexao();

    }

    public function getCategorias(){
        $sql = "SELECT * FROM categoria";

        $categorias = $this->conexao->query($sql);

        $categorias = $categorias->fetchAll(PDO::FETCH_ASSOC);

        $listaCategorias = [];

        foreach ($categorias as $categoria){
            $cat = new Categoria();

            $cat->setId($categoria['id_categoria']);
            $cat->setNome($categoria['nome_categoria']);
            $cat->setDescricao($categoria['descricao_categoria']);

            $listaCategorias[] = $cat;
        }

        return $listaCategorias;
    }

    public function getCategoria($id){
        $sql = "SELECT * FROM categoria WHERE id_categoria =".$id;


        $categoria = $this->conexao->query($sql);

        $categoria = $categoria->fetch(PDO::FETCH_ASSOC);

        $cat = new Categoria();

        $cat->setId($categoria['id_categoria']);
        $cat->setNome($categoria['nome_categoria']);
        $cat->setDescricao($categoria['descricao_categoria']);


        return $categoria;
    }



//NÃO É PRA TER ESTES//


//
//
//    public function insertCategoria(Categoria $cat){
//        $sql = "INSERT INTO `categoria`(`id_categoria`, `nome_categoria`, `descricao_categoria`) VALUES".($cat->getNome().$cat->getDescricao());
//       try{
//           $this->conexao->exec($sql);
//       }catch (PDOException $e){
//
//           return $e->getMessage();
//       }
//    }
//
//    public function updateCategoria($cat){
//    $sql = "UPDATE categoria SET id_categoria = " . $cat;
//
//        $categoria = $this->conexao->query($sql);
//
//        $categoria = $categoria->fetch(PDO::FETCH_ASSOC);
//
//        $cat = new Categoria();
//
//        $cat->setDescricao($categoria['descricao_categoria']);
//        $cat->setId($categoria['id_categoria']);
//        $cat->setNome($categoria['nome_categoria']);
//
//
//}
