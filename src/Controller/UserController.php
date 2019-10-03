<?php
   namespace App\Controller;

   use App\Controller\AppController;

   class UserController extends AppController 
   {

      public $paginate = [
         'limit' => 25,
         'data' => [
             'Users.title' => 'asc'
         ]
     ];

      public function initialize()
      {
         parent::initialize();
         $this->loadComponent('RequestHandler');
         // $this->loadComponent('Paginator');
      }

      public function index()
      {
         // $users = $this->Paginator->paginate($this->User->find());
         $users = $this->User->find('all');
         $this->set([
            'recipes' =>$users,
            '_serialize' => ['recipes']
        ]);
      }

      public function add()
      {
         $this->request->allowMethod(['post', 'put']);
         $user = $this->User->newEntity($this->request->getData());
         if ($this->User->save($user)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'statusCode' => 'OK',
            'statusMsg' =>  $message,
            'user' => $user,
            '_serialize' => ['statusCode', 'statusMsg', 'user']
        ]);
      }

   }



?>