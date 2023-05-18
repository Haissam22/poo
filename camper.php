<?php
    class Camper
    {
        //1. atributos con modificadores de acceso
        //private , public and protected
        private $nombre;
        private $email;
        private $celular;

        //2. metodo constructor(metodo magico)
        //en ocasiones se inicializa con valores parametrizados
        /* public function __construct($nombre,$email,$celular) // ideal para inicializar valores de propiedades
        {
          $this->nombre  = $nombre;  
          $this->email = $email;
          $this->celular = $celular;
        } */
        //3. metodos(getters and setter)
        //metodos getters
        public function getNombre()
        {
            return $this->nombre;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function getCelular()
        {
            return $this->celular;
        }

        //metodo setters

        public function setNombre($nombre)
        {
            $this->nombre=$nombre;
        }
        public function setEmail($email)
        {
            $this->email=$email;
        }
        public function setCelular($celular)
        {
         $this->celular=$celular;
        }
        //get --> obtener valores de atributos
        //set --> modificar valores de atributos
    }
    //se asigna la clase a una variable para crear una nueva
    $camper = new Camper();
    //se accede a los metodos set de la clase para construir el objeto
    $camper -> setNombre("Maicol");
    $camper -> setEmail("haissamdiaz3@gmail.com");
    $camper -> setCelular(3154039823);
    //llamamos los metodos get
    echo $camper -> getNombre()."<br>";
    echo $camper -> getEmail()."<br>";
    echo $camper -> getCelular()."<br>";
   

?>