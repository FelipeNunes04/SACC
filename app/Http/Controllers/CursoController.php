<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCursoRequest;
use App\Http\Requests\UpdateCursoRequest;
use App\Repositories\CursoRepository;
use App\Repositories\CoordAccRepository;
use App\Repositories\CoordCursoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CursoController extends AppBaseController
{
    /** @var  CursoRepository */
    private $cursoRepository;

    public function __construct(CursoRepository $cursoRepo)
    {
        $this->cursoRepository = $cursoRepo;
    }

    /**
     * Display a listing of the Curso.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->cursoRepository->pushCriteria(new RequestCriteria($request));
        $cursos = $this->cursoRepository->all();

        return view('cursos.index')
            ->with('cursos', $cursos);
    }

    /**
     * Show the form for creating a new Curso.
     *
     * @return Response
     */
    public function create(Request $request, CoordAccRepository $coordaccRepository, CoordCursoRepository $coordcursoRepository)
    {
        $coordcursoRepository->pushCriteria(new RequestCriteria($request));
        $coordcurso = $coordcursoRepository->pluck("nome", "idcoordcurso")->all();

        $coordaccRepository->pushCriteria(new RequestCriteria($request));
        $coordacc = $coordaccRepository->pluck("nome", "idcoordacc")->all();

        return view('cursos.create',['coordacc' => $coordacc,'coordcurso' => $coordcurso]);
    }

    /**
     * Store a newly created Curso in storage.
     *
     * @param CreateCursoRequest $request
     *
     * @return Response
     */
    public function store(CreateCursoRequest $request)
    {
        $input = $request->all();

        $curso = $this->cursoRepository->create($input);

        Flash::success('Curso saved successfully.');

        return redirect(route('cursos.index'));
    }

    /**
     * Display the specified Curso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $curso = $this->cursoRepository->findWithoutFail($id);

        if (empty($curso)) {
            Flash::error('Curso not found');

            return redirect(route('cursos.index'));
        }

        return view('cursos.show')->with('curso', $curso);
    }

    /**
     * Show the form for editing the specified Curso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id,Request $request, CoordAccRepository $coordaccRepository, CoordCursoRepository $coordcursoRepository)
    {
        $coordcursoRepository->pushCriteria(new RequestCriteria($request));
        $coordcurso = $coordcursoRepository->pluck("nome", "idcoordcurso")->all();

        $coordaccRepository->pushCriteria(new RequestCriteria($request));
        $coordacc = $coordaccRepository->pluck("nome", "idcoordacc")->all();

        $curso = $this->cursoRepository->findWithoutFail($id);

        if (empty($curso)) {
            Flash::error('Curso not found');

            return redirect(route('cursos.index'));
        }

        return view('cursos.edit',['coordacc' => $coordacc,'coordcurso' => $coordcurso])->with('curso', $curso);
    }

    /**
     * Update the specified Curso in storage.
     *
     * @param  int              $id
     * @param UpdateCursoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCursoRequest $request)
    {
        $curso = $this->cursoRepository->findWithoutFail($id);

        if (empty($curso)) {
            Flash::error('Curso not found');

            return redirect(route('cursos.index'));
        }

        $curso = $this->cursoRepository->update($request->all(), $id);

        Flash::success('Curso updated successfully.');

        return redirect(route('cursos.index'));
    }

    /**
     * Remove the specified Curso from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $curso = $this->cursoRepository->findWithoutFail($id);

        if (empty($curso)) {
            Flash::error('Curso not found');

            return redirect(route('cursos.index'));
        }

        $this->cursoRepository->delete($id);

        Flash::success('Curso deleted successfully.');

        return redirect(route('cursos.index'));
    }
}
