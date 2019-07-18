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
        $input = $request->all();

        $booklet = $this->bookletRepository->create($input);

        Flash::success('Booklet saved successfully.');

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
            Flash::error('Booklet not found');

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
            Flash::error('Booklet not found');

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

        if (empty($booklet)) {
            Flash::error('Booklet not found');

            return redirect(route('booklets.index'));
        }

        $booklet = $this->bookletRepository->update($request->all(), $id);

        Flash::success('Booklet updated successfully.');

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
            Flash::error('Booklet not found');

            return redirect(route('booklets.index'));
        }

        $this->bookletRepository->delete($id);

        Flash::success('Booklet deleted successfully.');

        return redirect(route('booklets.index'));
    }
}
