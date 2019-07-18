<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAddressesRequest;
use App\Http\Requests\UpdateAddressesRequest;
use App\Repositories\AddressesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AddressesController extends AppBaseController
{
    /** @var  AddressesRepository */
    private $addressesRepository;

    public function __construct(AddressesRepository $addressesRepo)
    {
        $this->addressesRepository = $addressesRepo;
    }

    /**
     * Display a listing of the Addresses.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $addresses = $this->addressesRepository->all();

        return view('addresses.index')
            ->with('addresses', $addresses);
    }

    /**
     * Show the form for creating a new Addresses.
     *
     * @return Response
     */
    public function create()
    {
        return view('addresses.create');
    }

    /**
     * Store a newly created Addresses in storage.
     *
     * @param CreateAddressesRequest $request
     *
     * @return Response
     */
    public function store(CreateAddressesRequest $request)
    {
        $input = $request->all();

        $addresses = $this->addressesRepository->create($input);

        Flash::success('Addresses saved successfully.');

        return redirect(route('addresses.index'));
    }

    /**
     * Display the specified Addresses.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $addresses = $this->addressesRepository->find($id);

        if (empty($addresses)) {
            Flash::error('Addresses not found');

            return redirect(route('addresses.index'));
        }

        return view('addresses.show')->with('addresses', $addresses);
    }

    /**
     * Show the form for editing the specified Addresses.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $addresses = $this->addressesRepository->find($id);

        if (empty($addresses)) {
            Flash::error('Addresses not found');

            return redirect(route('addresses.index'));
        }

        return view('addresses.edit')->with('addresses', $addresses);
    }

    /**
     * Update the specified Addresses in storage.
     *
     * @param int $id
     * @param UpdateAddressesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAddressesRequest $request)
    {
        $addresses = $this->addressesRepository->find($id);

        if (empty($addresses)) {
            Flash::error('Addresses not found');

            return redirect(route('addresses.index'));
        }

        $addresses = $this->addressesRepository->update($request->all(), $id);

        Flash::success('Addresses updated successfully.');

        return redirect(route('addresses.index'));
    }

    /**
     * Remove the specified Addresses from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $addresses = $this->addressesRepository->find($id);

        if (empty($addresses)) {
            Flash::error('Addresses not found');

            return redirect(route('addresses.index'));
        }

        $this->addressesRepository->delete($id);

        Flash::success('Addresses deleted successfully.');

        return redirect(route('addresses.index'));
    }
}
