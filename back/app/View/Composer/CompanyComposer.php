<?php 
namespace App\View\Composer;

class CompanyComposer
{
    public function compose($view)
    {
            $view->with('prueba2', 'Este es un valor  compartido solo en la vista welcome');
    }
}