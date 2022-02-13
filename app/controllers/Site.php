<?php

namespace app\controllers;

use app\models\Crud;

class Site extends Crud
{
     public function home()
     {
         require __DIR__ . '/../views/home.php';
     }

     public function galeria($foto)
     {
         $photo = $foto;
         require __DIR__ . '/../views/galeria.php'; 
     }

     public function cadastro()
     {
         if($_POST){
         $cadastro = $this->create();
         }
         require __DIR__ . '/../views/cadastro.php'; 
     }

     public function consulta()
     {
         $consulta = $this->read();
         require __DIR__ . '/../views/consulta.php'; 
     }
}