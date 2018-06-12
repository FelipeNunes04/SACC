<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCoordCursoRequest;
use App\Http\Requests\UpdateCoordCursoRequest;
use App\Repositories\CoordCursoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CoordCursoController extends AppBaseController
{
    /** @var  CoordCursoRepository */
    private $coordCursoRepository;

    public function __construct(CoordCursoRepository $coordCursoRepo)
    {
        $this->coordCursoRepository = $coordCursoRepo;
    }

    /**
     * Display a listing of the CoordCurso.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->coordCursoRepository->pushCriteria(new RequestCriteria($request));
        $coordCursos = $this->coordCursoRepository->all();

        return view('coord_cursos.index')
            ->with('coordCursos', $coordCursos);
    }

    /**
     * Show the form for creating a new CoordCurso.
     *
     * @return Response
     */
    public function create()
    {
        return view('coord_cursos.create');
    }

    /**
     * Store a newly created CoordCurso in storage.
     *
     * @param CreateCoordCursoRequest $request
     *
     * @return Response
     */
    public function store(CreateCoordCursoRequest $request)
    {
        $input = $request->all();

        $coordCurso = $this->coordCursoRepository->create($input);

        Flash::success('Coord Curso saved successfully.');

        return redirect(route('coordCursos.index'));
    }

    /**
     * Display the specified CoordCurso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $coordCurso = $this->coordCursoRepository->findWithoutFail($id);

        if (empty($coordCurso)) {
            Flash::error('Coord Curso not found');

            return redirect(route('coordCursos.index'));
        }

        return view('coord_cursos.show')->with('coordCurso', $coordCurso);
    }

    /**
     * Show the form for editing the specified CoordCurso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $coordCurso = $this->coordCursoRepository->findWithoutFail($id);

        if (empty($coordCurso)) {
            Flash::error('Coord Curso not found');

            return redirect(route('coordCursos.index'));
        }

        return view('coord_cursos.edit')->with('coordCurso', $coordCurso);
    }

    /**
     * Update the specified CoordCurso in storage.
     *
     * @param  int              $id
     * @param UpdateCoordCursoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCoordCursoRequest $request)
    {
        $coordCurso = $this->coordCursoRepository->findWithoutFail($id);

        if (empty($coordCurso)) {
            Flash::error('Coord Curso not found');

            return redirect(route('coordCursos.index'));
        }

        $coordCurso = $this->coordCursoRepository->update($request->all(), $id);

        Flash::success('Coord Curso updated successfully.');

        return redirect(route('coordCursos.index'));
    }

    /**
     * Remove the specified CoordCurso from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $coordCurso = $this->coordCursoRepository->findWithoutFail($id);

        if (empty($coordCurso)) {
            Flash::error('Coord Curso not found');

            return redirect(route('coordCursos.index'));
        }

        $this->coordCursoRepository->delete($id);

        Flash::success('Coord Curso deleted successfully.');

        return redirect(route('coordCursos.index'));
    }
}
