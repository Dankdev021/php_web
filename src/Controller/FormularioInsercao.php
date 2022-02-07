<?php

namespace Alura\Cursos\Controller;
use Alura\Cursos\Controller\InterfaceControladorRequisicao;

class FormularioInsercao implements InterfaceControladorRequisicao {
    public function processaRequisicao ():void {
        require __DIR__ . '/../../View/Cursos/Formulario.php';
    }
}