<?php

namespace TocaLeao\Http\Controllers;

use Illuminate\Support\Facades\DB;
use TocaLeao\Repositories\CustomerRepository;
use Illuminate\Http\Request;

use TocaLeao\Http\Requests;
use TocaLeao\Http\Controllers\Controller;

class CustomerController extends Controller
{
    /**
     * @var CustomerRepository
     */
    private $repository;

    public function __construct(CustomerRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function payBox()
    {
        return view('demo.payBox');
    }

    public function addCredit($id, $money)
    {
        $money += (float) $this->repository->find($id)->currentBalance;

        DB::table('customers')
            ->where('id', $id)
            ->update(['currentBalance' => $money]);

        return $money;
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $code
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        $result = DB::table('customers')
            ->where('barCode', $code)
            ->first();

        if($result == null)
        {
            $result = DB::table('customers')
                ->where('planB', $code)
                ->first();
        }

        echo json_encode($result);
    }

    public function sell($id, $total)
    {
        $currentBalance = $this->repository->find($id)->currentBalance;

        $value = $currentBalance - $total;

        DB::table('customers')
            ->where('id', $id)
            ->update(['currentBalance' => $value]);

        return json_encode(true);
    }
}
