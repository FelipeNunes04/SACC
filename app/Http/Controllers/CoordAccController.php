<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCoordAccRequest;
use App\Http\Requests\UpdateCoordAccRequest;
use App\Repositories\CoordAccRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CoordAccController extends AppBaseController
{
    /** @var  CoordAccRepository */
    private $coordAccRepository;

    public function __construct(CoordAccRepository $coordAccRepo)
    {
        $this->coordAccRepository = $coordAccRepo;
    }

    /**
     * Display a listing of the CoordAcc.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->coordAccRepository->pushCriteria(new RequestCriteria($request));
        $coordAccs = $this->coordAccRepository->all();

        return view('coord_accs.index')
            ->with('coordAccs', $coordAccs);
    }

    /**
     * Show the form for creating a new CoordAcc.
     *
     * @return Response
     */
    public function create()
    {
        return view('coord_accs.create');
    }

    /**
     * Store a newly created CoordAcc in storage.
     *
     * @param CreateCoordAccRequest $request
     *
     * @return Response
     */
    public function store(CreateCoordAccRequest $request)
    {
        $input = $request->all();

        $coordAcc = $this->coordAccRepository->create($input);

        Flash::success('Coord Acc saved successfully.');

        return redirect(route('coordAccs.index'));
    }

    /**
     * Display the specified CoordAcc.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $coordAcc = $this->coordAccRepository->findWithoutFail($id);

        if (empty($coordAcc)) {
            Flash::error('Coord Acc not found');

            return redirect(route('coordAccs.index'));
        }

        return view('coord_accs.show')->with('coordAcc', $coordAcc);
    }

    /**
     * Show the form for editing the specified CoordAcc.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $coordAcc = $this->coordAccRepository->findWithoutFail($id);

        if (empty($coordAcc)) {
            Flash::error('Coord Acc not found');

            return redirect(route('coordAccs.index'));
        }

        return view('coord_accs.edit')->with('coordAcc', $coordAcc);
    }

    /**
     * Update the specified CoordAcc in storage.
     *
     * @param  int              $id
     * @param UpdateCoordAccRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCoordAccRequest $request)
    {
        $coordAcc = $this->coordAccRepository->findWithoutFail($id);

        if (empty($coordAcc)) {
            Flash::error('Coord Acc not found');

            return redirect(route('coordAccs.index'));
        }

        $coordAcc = $this->coordAccRepository->update($request->all(), $id);

        Flash::success('Coord Acc updated successfully.');

        return redirect(route('coordAccs.index'));
    }

    /**
     * Remove the specified CoordAcc from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $coordAcc = $this->coordAccRepository->findWithoutFail($id);

        if (empty($coordAcc)) {
            Flash::error('Coord Acc not found');

            return redirect(route('coordAccs.index'));
        }

        $this->coordAccRepository->delete($id);

        Flash::success('Coord Acc deleted successfully.');

        return redirect(route('coordAccs.index'));
    }
}
