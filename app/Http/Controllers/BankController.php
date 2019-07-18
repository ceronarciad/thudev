<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBankRequest;
use App\Http\Requests\UpdateBankRequest;
use App\Repositories\BankRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BankController extends AppBaseController
{
    /** @var  BankRepository */
    private $bankRepository;

    public function __construct(BankRepository $bankRepo)
    {
        $this->bankRepository = $bankRepo;
    }

    /**
     * Display a listing of the Bank.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $banks = $this->bankRepository->all();

        return view('banks.index')
            ->with('banks', $banks);
    }

    /**
     * Show the form for creating a new Bank.
     *
     * @return Response
     */
    public function create()
    {
        return view('banks.create');
    }

    /**
     * Store a newly created Bank in storage.
     *
     * @param CreateBankRequest $request
     *
     * @return Response
     */
    public function store(CreateBankRequest $request)
    {
        //$input = $request->all();

        $isActive = null;

        if($request->isActive == TRUE){
            $isActive = 1;
        }else{
            $isActive = 0;
        }
        
        $bank = $this->bankRepository->create($request->merge(['isActive' => $isActive])->all());

        // $bank = $this->bankRepository->create($input);

        Flash::success('¡Banco guardado con exito!');

        return redirect(route('banks.index'));
    }

    /**
     * Display the specified Bank.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bank = $this->bankRepository->find($id);

        if (empty($bank)) {
            Flash::error('El Banco no encontrado');

            return redirect(route('banks.index'));
        }

        return view('banks.show')->with('bank', $bank);
    }

    /**
     * Show the form for editing the specified Bank.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bank = $this->bankRepository->find($id);

        if (empty($bank)) {
            Flash::error('El Banco no encontrado');

            return redirect(route('banks.index'));
        }

        return view('banks.edit')->with('bank', $bank);
    }

    /**
     * Update the specified Bank in storage.
     *
     * @param int $id
     * @param UpdateBankRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBankRequest $request)
    {
        $bank = $this->bankRepository->find($id);

        $isActive = null;

        if($request->isActive == true || $request->isActive == "on"){
            $isActive = 1;
        }else{
            $isActive = 0;
        }
        
    
        if (empty($bank)) {
            Flash::error('El Banco no encontrado');

            return redirect(route('banks.index'));
        }

        $bank = $this->bankRepository->update($request->merge(['isActive' => $isActive])->all(), $id);

        Flash::success('¡Banco actualizado con exito!');

        return redirect(route('banks.index'));
    }

    /**
     * Remove the specified Bank from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bank = $this->bankRepository->find($id);

        if (empty($bank)) {
            Flash::error('El Banco no encontrado');

            return redirect(route('banks.index'));
        }

        $this->bankRepository->delete($id);

        Flash::success('¡Banco eliminado con exito!');

        return redirect(route('banks.index'));
    }
}
