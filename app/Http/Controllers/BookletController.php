<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBookletRequest;
use App\Http\Requests\UpdateBookletRequest;
use App\Repositories\BookletRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BookletController extends AppBaseController
{
    /** @var  BookletRepository */
    private $bookletRepository;

    public function __construct(BookletRepository $bookletRepo)
    {
        $this->bookletRepository = $bookletRepo;
    }

    /**
     * Display a listing of the Booklet.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $booklets = $this->bookletRepository->all();

        return view('booklets.index')
            ->with('booklets', $booklets);
    }

    /**
     * Show the form for creating a new Booklet.
     *
     * @return Response
     */
    public function create()
    {
        return view('booklets.create');
    }

    /**
     * Store a newly created Booklet in storage.
     *
     * @param CreateBookletRequest $request
     *
     * @return Response
     */
    public function store(CreateBookletRequest $request)
    {
        //$input = $request->all();

        $isActive = null;

        if($request->isActive == TRUE){
            $isActive = 1;
        }else{
            $isActive = 0;
        }

        $booklet = $this->bookletRepository->create($request->merge(['isActive' => $isActive])->all());

        Flash::success('¡Catalogo guardado exitosamente!');

        return redirect(route('booklets.index'));
    }

    /**
     * Display the specified Booklet.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $booklet = $this->bookletRepository->find($id);

        if (empty($booklet)) {
            Flash::error('Catalogo no encontrado');

            return redirect(route('booklets.index'));
        }

        return view('booklets.show')->with('booklet', $booklet);
    }

    /**
     * Show the form for editing the specified Booklet.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $booklet = $this->bookletRepository->find($id);

        if (empty($booklet)) {
            Flash::error('Catalogo no encontrado');

            return redirect(route('booklets.index'));
        }

        return view('booklets.edit')->with('booklet', $booklet);
    }

    /**
     * Update the specified Booklet in storage.
     *
     * @param int $id
     * @param UpdateBookletRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBookletRequest $request)
    {
        $booklet = $this->bookletRepository->find($id);
        $isActive = null;

        if (empty($booklet)) {
            Flash::error('Catalogo no encontrado');

            return redirect(route('booklets.index'));
        }

        if($request->isActive == true || $request->isActive == "on"){
            $isActive = 1;
        }else{
            $isActive = 0;
        }

        $booklet = $this->bookletRepository->update($request->merge(['isActive' => $isActive])->all(), $id);

        Flash::success('¡Catalogo actualizado exitosamente!');

        return redirect(route('booklets.index'));
    }

    /**
     * Remove the specified Booklet from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $booklet = $this->bookletRepository->find($id);

        if (empty($booklet)) {
            Flash::error('Catalogo no encontrado');

            return redirect(route('booklets.index'));
        }

        $this->bookletRepository->delete($id);

        Flash::success('¡Catalogo eliminado exitosamente!');

        return redirect(route('booklets.index'));
    }
}
