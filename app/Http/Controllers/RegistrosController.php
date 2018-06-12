<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRegistrosRequest;
use App\Http\Requests\UpdateRegistrosRequest;
use App\Repositories\RegistrosRepository;
use App\Repositories\ModalidadesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RegistrosController extends AppBaseController
{
    /** @var  RegistrosRepository */
    private $registrosRepository;

    public function __construct(RegistrosRepository $registrosRepo)
    {
        $this->registrosRepository = $registrosRepo;
    }

    /**
     * Display a listing of the Registros.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->registrosRepository->pushCriteria(new RequestCriteria($request));
        $registros = $this->registrosRepository->all();

        return view('registros.index')
            ->with('registros', $registros);
    }

    /**
     * Show the form for creating a new Registros.
     *
     * @return Response
     */
    public function create(Request $request, ModalidadesRepository $modalidadesRepository)
    {
        $modalidadesRepository->pushCriteria(new RequestCriteria($request));
        $modalidades = $modalidadesRepository->pluck("descricao", "idmodalidades")->all();
        
        return view('registros.create',['modalidades' => $modalidades]);
    }

    /**
     * Store a newly created Registros in storage.
     *
     * @param CreateRegistrosRequest $request
     *
     * @return Response
     */
    public function store(CreateRegistrosRequest $request)
    {
        $input = $request->all();

        $registros = $this->registrosRepository->create($input);

        Flash::success('Registros saved successfully.');

        return redirect(route('registros.index'));
    }

    /**
     * Display the specified Registros.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $registros = $this->registrosRepository->findWithoutFail($id);

        if (empty($registros)) {
            Flash::error('Registros not found');

            return redirect(route('registros.index'));
        }

        return view('registros.show')->with('registros', $registros);
    }

    /**
     * Show the form for editing the specified Registros.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id, Request $request, ModalidadesRepository $modalidadesRepository)
    {
        $modalidadesRepository->pushCriteria(new RequestCriteria($request));
        $modalidades = $modalidadesRepository->pluck("descricao", "idmodalidades")->all();

        $registros = $this->registrosRepository->findWithoutFail($id);

        if (empty($registros)) {
            Flash::error('Registros not found');

            return redirect(route('registros.index'));
        }

        return view('registros.edit',['modalidades' => $modalidades])->with('registros', $registros);
    }

    /**
     * Update the specified Registros in storage.
     *
     * @param  int              $id
     * @param UpdateRegistrosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRegistrosRequest $request)
    {
        $registros = $this->registrosRepository->findWithoutFail($id);

        if (empty($registros)) {
            Flash::error('Registros not found');

            return redirect(route('registros.index'));
        }

        $registros = $this->registrosRepository->update($request->all(), $id);

        Flash::success('Registros updated successfully.');

        return redirect(route('registros.index'));
    }

    /**
     * Remove the specified Registros from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $registros = $this->registrosRepository->findWithoutFail($id);

        if (empty($registros)) {
            Flash::error('Registros not found');

            return redirect(route('registros.index'));
        }

        $this->registrosRepository->delete($id);

        Flash::success('Registros deleted successfully.');

        return redirect(route('registros.index'));
    }
}
