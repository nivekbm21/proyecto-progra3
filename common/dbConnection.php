<?php
    
    class Connect 
    {
        private $hostname    = 'localhost';
        private $username    = 'root';
        private $password    = '';
        private $database    = 'proyecto-progra3';
        private $acerca_nosotros = array();
        private $contacto = array();
        private $formulario = array();
        private $preguntas_frecuentes = array();
        private $servicios = array();
        private $slider = array();
         private $usuario = array();
       
        
        public function getHostname(){
            return $this->hostname;
        }
        public function getUsername(){
            return $this->username;
        }
        public function getPassword(){
            return $this->password;
        }
        public function getSchema(){
            return $this->database;
        }       

        public function connectDb()
        {
           try {

             $connexion = mysqli_connect(
                    $this->getHostname(),
                    $this->getUsername(),
                    $this->getPassword(),
                    $this->getSchema()
                ) OR DIE ('Error de Conexión');
                            
                return $connexion;
            } catch (Exception $e) {
                echo $e->getMessage;
            }
        }

       

        public function getAcerca_nosotros () {
            try {
                $sql = 'SELECT * FROM acerca_nosotros';
                $query = mysqli_query (
                        $this->connectDb(),
                        $sql
                    );

                $i = 0;
                while($queryData = mysqli_fetch_assoc($query)){
                    $this->acerca_nosotros[$i] = $queryData;
                    $i++;
                }
                return $this->acerca_nosotros;
                
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
            return $this->acerca_nosotros;
        }

        public function getUnUsuario($id) {
           try {
               $sql = 'SELECT * FROM usuario WHERE id="' . $id .'"';
               $query = mysqli_query (
                       $this->connectDb(),
                       $sql
                   );

               $this->usuariosInfo = mysqli_fetch_assoc($query);
               return $this->usuariosInfo;
               
           } catch (Exception $e) {
               echo $e->getMessage();
           }
           
           return $this->usuario;
       }

        public function getContacto() {
            try {
                $sql = 'SELECT * FROM contacto';
                $query = mysqli_query (
                        $this->connectDb(),
                        $sql
                    );

                $i = 0;
                while($queryData = mysqli_fetch_assoc($query)){
                    $this->contacto[$i] = $queryData;
                    $i++;
                }
                return $this->contacto;
                
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
            return $this->contacto;
        }

          public function getFormulario() {
            try {
                $sql = 'SELECT * FROM formulario';
                $query = mysqli_query (
                        $this->connectDb(),
                        $sql
                    );

                $i = 0;
                while($queryData = mysqli_fetch_assoc($query)){
                    $this->formulario[$i] = $queryData;
                    $i++;
                }
                return $this->formulario;
                
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
            return $this->formulario;
        }

             public function getPreguntas_frecuentes() {
            try {
                $sql = 'SELECT * FROM preguntas_frecuentes';
                $query = mysqli_query (
                        $this->connectDb(),
                        $sql
                    );

                $i = 0;
                while($queryData = mysqli_fetch_assoc($query)){
                    $this->preguntas_frecuentes[$i] = $queryData;
                    $i++;
                }
                return $this->preguntas_frecuentes;
                
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
            return $this->preguntas_frecuentes;
        }

              public function getServicios() {
            try {
                $sql = 'SELECT * FROM servicios';
                $query = mysqli_query (
                        $this->connectDb(),
                        $sql
                    );

                $i = 0;
                while($queryData = mysqli_fetch_assoc($query)){
                    $this->servicios[$i] = $queryData;
                    $i++;
                }
                return $this->servicios;
                
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
            return $this->servicios;
        }

             public function getSlider() {
            try {
                $sql = 'SELECT * FROM slider';
                $query = mysqli_query (
                        $this->connectDb(),
                        $sql
                    );

                $i = 0;
                while($queryData = mysqli_fetch_assoc($query)){
                    $this->slider[$i] = $queryData;
                    $i++;
                }
                return $this->slider;
                
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
            return $this->slider;
        }

        public function getUsuario() {
            try {
                $sql = 'SELECT * FROM usuario';
                $query = mysqli_query (
                        $this->connectDb(),
                        $sql
                    );

                $i = 0;
                while($queryData = mysqli_fetch_assoc($query)){
                    $this->usuario[$i] = $queryData;
                    $i++;
                }
                return $this->usuario;
                
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
            return $this->usuario;
        }

        public function getUsuario_login($usuario,$contrasena) {
            try {
                $sql = 'SELECT * FROM usuario WHERE usuario="' . $usuario . '" and contrasena="' . md5($contrasena) . '" and estado =1';
                $query = mysqli_query (
                        $this->connectDb(),
                        $sql
                    );

                $this->usuariosInfo = mysqli_fetch_assoc($query);
                return $this->usuariosInfo;
                
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
            return $this->usuario;
        }

        public function addAcerca_nosotros ( $titulo, $contenido, $tipo, $simbolo)
        {
            try {

                echo $sql = 'INSERT INTO acerca_nosotros (`titulo`,`contenido`,`tipo`,`simbolo`) VALUES ("' . $titulo . '", "' . $contenido . '", "' . $tipo . '", "' . $simbolo . '")';
                #exit;
                mysqli_query($this->connectDb(), $sql);
                

            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
        }

          public function addContacto( $nombre, $correo,$empresa,$consulta,$formulario)
        {
            try {

               echo $sql = 'INSERT INTO contacto(`nombre`,`correo`,`empresa`,`consulta`,`formulario`) VALUES ("' . $nombre . '", "' . $correo . '", "' . $empresa . '", "' . $consulta . '", "' . $formulario . '")';
                #exit;
                mysqli_query($this->connectDb(), $sql);
                

            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
        }
            public function addFormulario( $nombre)
        {
            try {

               echo $sql = 'INSERT INTO formulario(`nombre`) VALUES ("' . $nombre . '")';
                #exit;
                mysqli_query($this->connectDb(), $sql);
                

            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
        }

            public function addPreguntas_frecuentes( $pregunta,$respuesta)
        {
            try {

               echo $sql = 'INSERT INTO preguntas_frecuentes(`pregunta`,`respuesta`) VALUES ("' . $pregunta . '","' . $respuesta . '")';
                #exit;
                mysqli_query($this->connectDb(), $sql);
                

            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
        }
              public function addServicios( $titulo,$contenido,$imagen)
        {
            try {

               echo $sql = 'INSERT INTO servicios(`titulo`,`contenido`,`imagen`) VALUES ("' . $titulo . '","' . $contenido . '","' . $imagen . '")';
                #exit;
                mysqli_query($this->connectDb(), $sql);
                

            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
        }
              public function addSlider( $nombre,$ruta)
        {
            try {

               echo $sql = 'INSERT INTO slider(`nombre`,`ruta`) VALUES ("' . $nombre . '","' . $ruta . '")';
                #exit;
                mysqli_query($this->connectDb(), $sql);
                

            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
        }

          public function addUsuario ($nombre,$apellido,$usuario,$contrasena,$cargo,$estado)
        {
            try {

              echo $sql = 'INSERT INTO  usuario(`nombre`,`apellido`,`usuario`,`contrasena`,`cargo`,`estado`) VALUES ("' . $nombre . '","' . $apellido . '","' . $usuario . '","' . $contrasena . '","' . $cargo . '","' . $estado . '")';
                #exit;
                mysqli_query($this->connectDb(), $sql);
                

            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
        }

        function __destruct()
        {
            # code...
        }
    }# fin de  Connect 

   # $connexion= new Connect ;
    #$nosotros=$connexion->getacerca_nosotros ();
    #print_r($nosotros);
?>