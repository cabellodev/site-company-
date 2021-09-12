<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peticiones extends CI_Controller {

    public function adminPeticion()
    { 
        
        if ($this->accesscontrol->checkAuth()['correct']) {
            $this->load->view('admin/header');
            $this->load->view('admin/adminPeticion');
            $this->load->view('admin/footer');
        } else {
            redirect(base_url() . 'login', 'refresh');
        }
    }

    

    public function createPeticion(){
            
            $data = $this->input->post('data');
            $name = $data['name'];
            $email = $data['email'];
            $phone = $data['phone'];
            $message = $data['message'];
            

            $ok = true;
            $err = array();
           /*
            if ($name == "") {
                $ok = false;
               $err['name']  = "Ingrese un nombre para el usuario.";
            }
            if ($email == "") {
           $ok = false;
              $err['email'] = "Ingrese un correo electrónico.";
            }
            if ($rut == "") {
                $ok = false;
               $err['phone'] = "Ingrese su rut porfavor";
            }
            if ($rango == "0") {
                $ok = false;
                $err['message'] = "Ingrese un telefono porfavor";
             }
           */

            if ($ok) {
                
                $this->load->model('PeticionModel');
                $res = $this->PeticionModel->createPeticion($name, $email, $phone, $message);
                if ($res) {
                    $this->response->sendJSONResponse(array('msg' => "Solicitud creada."));
                } else {
                    $this->response->sendJSONResponse(array('msg' => "No se pudo enviar el mensaje. Probablemente el correo ya ha sido usado."), 400);
                }
            } else {
                $this->response->sendJSONResponse(array('msg' => "Corrija los errores del formulario", 'err' => $err), 400);
            }

            
       
    }

   public function editPeticion(){
    if ($this->accesscontrol->checkAuth()['correct']) {
        $data = $this->input->post('data');
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $message = $data['message'];
        $id = $data['id'];
        
        $this->load->model('PeticionModel');
        $res= $this->PeticionModel->editPeticion($id , $name, $email , $phone,$message);

        if ($res) {
            $this->response->sendJSONResponse(array('msg' => "Peticion modificada con exito."));
        } else {
            $this->response->sendJSONResponse(array('msg' => "No se pudo enviar el mensaje. Probablemente el correo ya ha sido usado."), 400);
        }
    } else {
        $this->response->sendJSONResponse(array('msg' => "Corrija los errores del formulario", 'err' => $err), 400);
    }

        
  
   }

    public function getPeticion(){
        if ($this->accesscontrol->checkAuth()['correct']) {
        $this->load->model('PeticionModel');
        $res= $this->PeticionModel->getPeticion();
        $this->response->sendJSONResponse($res);
 
        }else {
            $this->response->sendJSONResponse(array('msg'=> "No hay permisos suficientes"),400);

        }
    }

    public function getEstados() { 
        if ($this->accesscontrol->checkAuth()['correct']) {
            $this->load->model('PeticionModel');   
            $states = $this->PeticionModel->getEstados();
            $this->response->sendJSONResponse($states);


        }else { 
            $this->response->sendJSONResponse(array('msg'=> "No hay permisos suficientes"),400);
        }

    }
    

}






