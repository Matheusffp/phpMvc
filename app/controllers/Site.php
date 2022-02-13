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
         require __DIR__ . '/../views/cadastro.php'; 
     }

     public function consulta()
     {
         require __DIR__ . '/../views/consulta.php'; 
     }
}