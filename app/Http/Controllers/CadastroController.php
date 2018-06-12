<?php

namespace App\Http\Controllers;

use App\Repositories\SiteControllerRepository;
use App\Repositories\MainMenuRepository;
use App\Repositories\SliderRepository;
use App\Repositories\FooterMenuRepository;
use App\Repositories\CursoRepository;
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
    public function cadastro($tipo=1,Request $request, CursoRepository $cursoRepository)
    {
        $cursoRepository->pushCriteria(new RequestCriteria($request));
        $cursos = $cursoRepository->pluck("nome", "idcurso")->all();
        
        return view('cadastro',['tipo' => $tipo,'cursos' => $cursos]);
    }
}
