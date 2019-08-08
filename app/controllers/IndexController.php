<?php
class IndexController extends ControllerBase
{
   public function indexAction()
   {
   }
   public function checkuserAction()
   {
       $myUsers = new Users();
       $result = $myUsers->find(
       [
               "login='".$this->request->get('login')."'",
               "password='".$this->request->get('password')."'",
       ]
       );
       if ($result->count() > 0) {
               $this->view->result = "Success";
               $this->response->redirect('bet');
       }
       else
               $this->view->result = "No Access";
   }
}
