<?php

class upload{
    
 private $formatos = array('.jpg','.pgn');
 
 private       $file = 'archivo',
        $boton = 'submit';
 function comprobar($file,$boton){
     $num_archivos= count($_FILES['file']['name']);
     echo $num_archivos;
     for($i = 0;$i<$num_archivos;$i++){
             $nombreArchivo = $_FILES[$file]['name'][$i];
             $nombreTmpArchivo = $_FILES[$file]['tmp_name'][$i];
             $ext = substr($nombreArchivo,strpos($nombreArchivo,'.'));
             echo $ext;
             if(in_array($ext, $this->formatos)){
                 if(move_uploaded_file($nombreTmpArchivo, $nombreArchivo)){
                 echo "FELICIDADES";
                 
             }else{
                 
             
         }}else {
             echo "no archivo permitido";
             echo "a" . $ext;
         }
}
}
}

/*if(isset($_FILE['file']) && $_FILES[$input]['error'] === 0 && $_FILES[$input]['name'] != '') {
    $file = $_FILE['file'];
    $this->name=$this->file['name'];
}
*/
