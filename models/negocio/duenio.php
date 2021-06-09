<?php 
  require_once 'models/Model.php';
   class Duenio extends Model{
            public $id;
             public $nombres;
             public $aparterno;
             public $amaterno;
             public $edad;

              function getId() {
                return $this->id;
              }
              
              function getNombres(){
                return $this->nombres;
              }  
              
              function getApaterno(){
                return $this->apaterno;
              } 
              
              function getAmaterno(){ return $this->amaterno; } 
              
              function getEdad(){ return $this->edad; }
              
              function setId ($id) : void { $this->id = $id; }

              function setNombres($nombres):void { $this->nombres=$nombres; }

              function setApaterno($apaterno): void { $this->apaterno=$apaterno; }

              function setAmaterno($amaterno) :void{ $this->amaterno=$amaterno; }

              function setEdad($edad) :void{
                $this->edad=$edad;
              }

              function insertarDuenio() {
                $sql= "INSERT INTO t_duenios(nombre,aPaterno,aMaterno,edad) VALUES ('$this->nombres','$this->apaterno','$this->amaterno','$this->edad')";
                $query = mysqli_query($this->db,$sql);
                return $query;
              }

              public function getLastId () {
                  $sql = "SELECT id FROM t_duenios ORDER BY id DESC LIMIT 1";
                  $query = mysqli_query($this->db,$sql);
                  $resultado = mysqli_fetch_row($query);
                  $this->id = $resultado[0];
              }
            }

 ?>