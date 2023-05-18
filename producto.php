<?php
//creaccion por medio de crontructor
    class Productos
    {
        //1. Declaracion de prpopiedades y sus modificadores de acceso
        public $nombre;
        public $id;
        public $tipo;
        public $price;
        //2. medoto constructor
        public function __construct($nombre,$id,$tipo,$price){
            $this->nombre=$nombre;
            $this->id=$id;
            $this->tipo=$tipo;
            $this->price=$price;
        }
    }
    $producto = new Productos("tv","293u02nd92","electrodomesticos",1223112);
    
    echo "<br> metodo get _contruct = <br>".$producto->nombre."<br>";
    echo $producto->id."<br>";
    echo $producto->tipo."<br>";
    echo $producto->price."<br>";
    class Productos2
    {
      
        //1. Declaracion de prpopiedades y sus modificadores de acceso
        private $nombre;
        private $id;
        private $tipo;
        private $price;
        //2. metodo set
        public function setNombre($nombre)
        {
            $this->nombre=$nombre;
        }
        public function setId($id)
        {
            $this->id=$id;
        }
        public function setTipo($tipo)
        {
            $this->tipo=$tipo;
        }
        public function setPrice($price)
        {
            $this->price=$price;
        }
        //metodo get
        public function getNombre()
        {
            return $this->nombre;
        }
        public function getId()
        {
            return $this->id;
        }
        public function getTipo()
        {
            return $this->tipo;
        }
        public function getPrice()
        {
            return $this->price;
        }
    }
    $producto=new Productos2;
    //llamada a los metodos 
    //metodo set
    $producto->setNombre("iphon 13");
    $producto->setId("9182eb1e8ja9s");
    $producto->setTipo("smartphone");
    $producto->setPrice(13000000);
    //metodo get
    echo "<br> metodo get private = <br>". $producto->getNombre()."<br>";
    echo $producto->getID()."<br>";
    echo $producto->getTipo()."<br>";
    echo $producto->getPrice()."<br>";

    

?>