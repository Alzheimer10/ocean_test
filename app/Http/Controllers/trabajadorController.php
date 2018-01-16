<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetrabajadorRequest;
use App\Http\Requests\UpdatetrabajadorRequest;
use App\Repositories\trabajadorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class trabajadorController extends AppBaseController
{
    /** @var  trabajadorRepository */
    private $trabajadorRepository;

    public function __construct(trabajadorRepository $trabajadorRepo)
    {
        $this->trabajadorRepository = $trabajadorRepo;
    }

    /**
     * Display a listing of the trabajador.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->trabajadorRepository->pushCriteria(new RequestCriteria($request));
        $trabajadors = $this->trabajadorRepository->all();

        return view('trabajadors.index')
            ->with('trabajadors', $trabajadors);
    }

    /**
     * Show the form for creating a new trabajador.
     *
     * @return Response
     */
    public function create()
    {
        return view('trabajadors.create');
    }

    /**
     * Store a newly created trabajador in storage.
     *
     * @param CreatetrabajadorRequest $request
     *
     * @return Response
     */
    public function store(CreatetrabajadorRequest $request)
    {
        $input = $request->all();

        $trabajador = $this->trabajadorRepository->create($input);

        Flash::success('Trabajador añadido exitosamente!.');

        return redirect(route('trabajadors.index'));
    }

    /**
     * Display the specified trabajador.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $trabajador = $this->trabajadorRepository->findWithoutFail($id);

        if (empty($trabajador)) {
            Flash::error('Trabajador no encontrado');

            return redirect(route('trabajadors.index'));
        }

        return view('trabajadors.show')->with('trabajador', $trabajador);
    }

    /**
     * Show the form for editing the specified trabajador.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $trabajador = $this->trabajadorRepository->findWithoutFail($id);

        if (empty($trabajador)) {
            Flash::error('Trabajador no encontrado');

            return redirect(route('trabajadors.index'));
        }

        return view('trabajadors.edit')->with('trabajador', $trabajador);
    }

    /**
     * Update the specified trabajador in storage.
     *
     * @param  int              $id
     * @param UpdatetrabajadorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetrabajadorRequest $request)
    {
        $trabajador = $this->trabajadorRepository->findWithoutFail($id);

        if (empty($trabajador)) {
            Flash::error('Trabajador no encontrado');

            return redirect(route('trabajadors.index'));
        }

        $trabajador = $this->trabajadorRepository->update($request->all(), $id);

        Flash::success('Trabajador actualizado exitosamente!.');

        return redirect(route('trabajadors.index'));
    }

    /**
     * Remove the specified trabajador from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $trabajador = $this->trabajadorRepository->findWithoutFail($id);

        if (empty($trabajador)) {
            Flash::error('Trabajador no encontrado');

            return redirect(route('trabajadors.index'));
        }

        $this->trabajadorRepository->delete($id);

        Flash::success('Trabajador eliminado exitosamente!.');

        return redirect(route('trabajadors.index'));
    }
}
