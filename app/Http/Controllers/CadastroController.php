<?php

namespace App\Http\Controllers;

use App\Repositories\SiteControllerRepository;
use App\Repositories\MainMenuRepository;
use App\Repositories\SliderRepository;
use App\Repositories\FooterMenuRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Flash;
use Response;
use Illuminate\Support\Facades\DB;

class CadastroController extends AppBaseController
{

    /**
     * Display a listing of the SiteController.
     *
     * @param Request $request
     * @return Response
     */
    public function cadastro($tipo=1)
    {
        return view('cadastro',['tipo' => $tipo]);
    }
}
