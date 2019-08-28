<?php
   require_once('./lib/nusoap.php');

   $wsdl= 'https://healthy-splice-179808.appspot.com/servicio.php';
   $client=new nusoap_client($wsdl,false);

   $err=$client->getError();
   if($err){
       echo '<h3>Se producjo un error en la construccion</h3>';
   }else{

    if(isset($_POST['submit'])){
        $data= $_POST['info'];
        $parametros= array('id'=>$data);
        $respuesta= $client->call('getId',$parametros);
        print_r($respuesta);
      }

   }
 



?>