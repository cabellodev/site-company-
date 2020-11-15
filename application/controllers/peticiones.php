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
            if ($name == "") {
                $ok = false;
                $err['name']  = "Ingrese un nombre.";
            }
            if ($email == "") {
                $ok = false;
                $err['email'] = "Ingrese un correo electrónico.";
            }
            if ($phone == "") {
                $ok = false;
                $err['rut'] = "Ingrese su telefono";
            }
            
            if ($message == "") {
                $ok = false;
                $err['passwd'] = "Ingrese mensagge.";
            }

            
            if ($ok) {
                
                $this->load->model('peticionesModel');
                $res = $this->peticionesModel->createPeticion($name, $email, $phone, $message);
                if ($res) {
                    $this->response->sendJSONResponse(array('msg' => "mensaje enviado."));
                } else {
                    $this->response->sendJSONResponse(array('msg' => "No se pudo enviar el mensaje."), 400);
                }
            } else {
                $this->response->sendJSONResponse(array('msg' => "Corrija los errores del formulario", 'err' => $err), 400);
            }

            
       
    }

	
}







