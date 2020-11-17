<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class peticiones extends CI_Controller {



    public function createPeticion(){
            
            $data = $this->input->post('data');
            $name = $data['name'];
            $email = $data['email'];
            $phone = $data['phone'];
            $message = $data['message'];
            

            $ok = true;
            $err = array();

            // if ($name == "") {
            //     $ok = false;
            //     $err['name']  = "Ingrese un nombre para el usuario.";
            // }
            // if ($email == "") {
            //     $ok = false;
            //     $err['email'] = "Ingrese un correo electrónico.";
            // }
            // if ($rut == "") {
            //     $ok = false;
            //     $err['rut'] = "Ingrese su rut porfavor";
            // }
            // if ($rango == "0") {
            //     $ok = false;
            //     $err['rango'] = "Ingrese un telefono porfavor";
            // }
            // if ($pass == "") {
            //     $ok = false;
            //     $err['passwd'] = "Ingrese una contraseña porfavor.";
            // }

            if ($ok) {
                // $hash = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 13]); //hashing pass or encrypt
                $this->load->model('peticionModel');
                $res = $this->peticionModel->createPeticion($name, $email, $phone, $message);
                if ($res) {
                    $this->response->sendJSONResponse(array('msg' => "Mensaje enviado."));
                } else {
                    $this->response->sendJSONResponse(array('msg' => "No se pudo enviar el mensaje. Probablemente el correo ya ha sido usado."), 400);
                }
            } else {
                $this->response->sendJSONResponse(array('msg' => "Corrija los errores del formulario", 'err' => $err), 400);
            }

            
       
    }

	
}






