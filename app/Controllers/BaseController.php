<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class BaseController extends Controller
{
    /**
     * Instância da requisição principal.
     *
     * @var \CodeIgniter\HTTP\Request
     */
    protected $request;

    /**
     * Lista de helpers para serem carregados automaticamente.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Construtor da classe BaseController.
     */
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Chama o construtor do pai
        parent::initController($request, $response, $logger);

        // Carregar helpers automaticamente (caso necessário)
        helper($this->helpers);
    }
}
