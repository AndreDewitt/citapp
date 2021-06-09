
<?php 

    require_once 'models/Model.php';
    class contactoModel extends Model
    {
       public $id;
       public $Tel_local;
       public $Tel_celular;
       public $correo;
       public $id_negocio;
              
        function getTel_local(){ return $this->Tel_local; } 

        function getTel_celular(){return $this->Tel_celular;}

        function getCorreo(){return $this->correo;}

        function getId_negocio(){return $this->id_negocio;}

        function getId(){return $this->id;}

        function setId($id): void{  $this->id = $id ;}

        function setTel_local($Tel_local): void{ $this->Tel_local = $Tel_local ;}

        function setTel_celular($Tel_celular): void{ $this->Tel_celular = $Tel_celular ;}

        function setCorreo($correo): void{ $this-> correo=$correo;}

        function setId_negocio($id_negocio): void{ $this->id_negocio = $id_negocio;}

        public function insertar()
        {
            $sql = "INSERT INTO t_contacto(tel_local,tel_cel,correo,id_negocio) VALUES('$this->Tel_local','$this->Tel_celular','$this->correo','$this->id_negocio')";
            $query = mysqli_query($this->db,$sql);
            return $query;
        }
    }
    
?>