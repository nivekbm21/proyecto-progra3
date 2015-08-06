<?php
    
    class Connect 
    {
        private $hostname    = 'localhost';
        private $username    = 'root';
        private $password    = '';
        private $database    = 'proyecto-progra3';
        private $acerca_nosotros = array();
        private $contacto = array();
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

        public function getUnAcerca_nosotros($id) {
           try {
               $sql = 'SELECT * FROM acerca_nosotros WHERE id="' . $id .'"';
               $query = mysqli_query (
                       $this->connectDb(),
                       $sql
                   );

               $this->acerca_nosotrosInfo = mysqli_fetch_assoc($query);
               return $this->acerca_nosotrosInfo;
               
           } catch (Exception $e) {
               echo $e->getMessage();
           }
           
           return $this->acerca_nosotros;
       }
        public function getUnPreguntas_frecuentes($id) {
           try {
               $sql = 'SELECT * FROM preguntas_frecuentes WHERE id="' . $id .'"';
               $query = mysqli_query (
                       $this->connectDb(),
                       $sql
                   );

               $this->preguntas_frecuentesInfo = mysqli_fetch_assoc($query);
               return $this->preguntas_frecuentesInfo;
               
           } catch (Exception $e) {
               echo $e->getMessage();
           }
           
           return $this->preguntas_frecuentes;
       }
       public function getUnServicio($id) {
           try {
               $sql = 'SELECT * FROM servicios WHERE id="' . $id .'"';
               $query = mysqli_query (
                       $this->connectDb(),
                       $sql
                   );

               $this->servicioInfo = mysqli_fetch_assoc($query);
               return $this->servicioInfo;
               
           } catch (Exception $e) {
               echo $e->getMessage();
           }
           
           return $this->servicios;
       }
       public function getUnSlider($id) {
           try {
               $sql = 'SELECT * FROM slider WHERE id="' . $id .'"';
               $query = mysqli_query (
                       $this->connectDb(),
                       $sql
                   );

               $this->sliderInfo = mysqli_fetch_assoc($query);
               return $this->sliderInfo;
               
           } catch (Exception $e) {
               echo $e->getMessage();
           }
           
           return $this->slider;
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
                $sql = 'SELECT * FROM contacto order by id desc';
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
          public function addContacto($nombre, $correo,$empresa,$consulta)
        {
            try {
               echo $sql = 'INSERT INTO contacto(`nombre`,`correo`,`empresa`,`consulta`) VALUES ("' . $nombre . '", "' . $correo . '", "' . $empresa . '", "' . $consulta . '")';
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
        public function deleteAcerca_Nosotros ($id)
        {
            try {

               echo $sql = 'DELETE  FROM acerca_nosotros WHERE id = "' . $id . '" ';
                #exit;
                mysqli_query($this->connectDb(), $sql);
                

            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
        }
        public function deletePreguntas_Frecuentes($id)
        {
            try {

               echo $sql = 'DELETE  FROM preguntas_frecuentes WHERE id = "' . $id . '" ';
                #exit;
                mysqli_query($this->connectDb(), $sql);
                

            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
        }

               public function deleteServicios($id)
        {
            try {

               echo $sql = 'DELETE  FROM servicios WHERE id = "' . $id . '" ';
                #exit;
                mysqli_query($this->connectDb(), $sql);
                

            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
        }


               public function deleteSiler ($id)
        {
            try {

               echo $sql = 'DELETE  FROM slider WHERE id = "' . $id . '" ';
                #exit;
                mysqli_query($this->connectDb(), $sql);
                

            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
        }

               public function deleteUsuario ($id)
        {
            try {

                $sql = 'DELETE  FROM usuario WHERE id = "' . $id . '" ';
                #exit;
                mysqli_query($this->connectDb(), $sql);
                

            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
        }


                public function updateUsuario ($nombre,$apellido,$usuario,$contrasena,$cargo,$estado,$id)
        {
            try {

               echo $sql ="UPDATE `usuario` SET `nombre` = '$nombre', `apellido` = '$apellido', `usuario` = '$usuario', `contrasena` = '$contrasena', `cargo` = '$cargo', `estado` = '$estado' WHERE `id` = '$id'"; 
                

                mysqli_query($this->connectDb(), $sql);
                

            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
        }

              public function updateSlider ($nombre,$ruta,$id)
        {
            try {

               echo $sql ="UPDATE `slider` SET `nombre` = '$nombre', `ruta` = '$ruta' WHERE `id` = '$id'"; 
                

                mysqli_query($this->connectDb(), $sql);
                

            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
        }

                public function updateServicios($titulo,$contenido,$imagen,$id)
        {
            try {

               echo $sql ="UPDATE `servicios` SET `titulo` = '$titulo', `contenido` = '$contenido', `imagen` = '$imagen' WHERE `id` = '$id'"; 
                

                mysqli_query($this->connectDb(), $sql);
                

            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
        }

                 public function updatePreguntas_Frecuentes($pregunta,$respuesta,$id)
        {
            try {

              echo $sql ="UPDATE `preguntas_frecuentes` SET `pregunta` = '$pregunta', `respuesta` = '$respuesta' WHERE `id` = '$id'"; 
                

                mysqli_query($this->connectDb(), $sql);
                

            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
        }
        public function updateAcerca_Nosotros($titulo,$contenido,$tipo,$simbolo,$id)
        {
            try {

              echo $sql ="UPDATE `acerca_nosotros` SET `titulo` = '$titulo',`contenido` = '$contenido',`simbolo` = '$simbolo',`tipo` = '$tipo' WHERE `id` = '$id'"; 
                

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
?>