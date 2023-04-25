<?php
namespace Turnus\Controller;

use Turnus\Controller\AppController;


class TurnoController extends AppController
{
  
    public function initialize(): void
    {
         parent::initialize();
         $this->loadModel('Turnus.Turno');
         $this->viewBuilder()->setLayout("Turnus.main");
    }


    public function addTurno()
    {

        $this->autoRender = false;


        $result = array(
            "response" => "este e meu teste"
        );
 
 
        $information = json_encode($result['response']);
        $this->response->type('json');
        $this->response->body($information);
        return $this->response;
    }
    public function listTurno()
    {
        $this->autoRender = false;
        
        $turnos = $this->Turno->find('all');

 
        $information = json_encode($turnos);
        $this->response->type('json');
        $this->response->body($information);
        return $this->response;

        // $this->set('turno', $turno);
    }

    public function showTurno($id = null)
    {
        $empId = $this->request->getParam("id");

        $turno = $this->Turno->get($id, [
            'contain' => [],
        ]);;

        $information = json_encode($turno);
        $this->response->type('json');
        $this->response->body($information);
        return $this->response;

    }

    public function editTurno()
    {

    }


    public function deleteTurno()
    {
        $this->autoRender = false;

        $empId = $this->request->getParam("id");

        $this->request->allowMethod(['post', 'delete']);

        $turno = $this->Turno->get($empId);

        if ($this->Turno->delete($turno)) {
            $response = "deletou";
        } else {
            $response = "Não deletou";
        }

        $information = json_encode($response);
        $this->response->type('json');
        $this->response->body($information);
        return $this->response;
    }
}
