<?php
   namespace App\Model\Table;

   use Cake\ORM\Table;

   class UsersTable extends Table 
   {
      public function initialize(array $config)
      {
         $this->addBehavior('Timestamp');
         $this->setEntityClass('App\Model\Entity\User');
      }
   }


?>