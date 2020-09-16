<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;
use App\Http\Resources\CustomerCollection;
use App\Http\Resources\CustomerResource;
use Illuminate\Support\Facades\DB;
use Exception;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queryString = request()->query();

        $customers = [];
        if (isset($queryString['gender'])) {
            $customers = Customer::where('gender', $queryString['gender'])->get();
        } else {
            $customers = Customer::all();
        }
        return response()->json($customers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $customerData = request()->all();

            $newCustomer = new Customer();
            $newCustomer->first_name = $customerData['firstName'];
            $newCustomer->last_name = $customerData['lastName'];

            $newCustomer->save();

            return response()->json($newCustomer);

        } catch (Exception $ex) {
            // abort(500);
            return response(['message' => $ex->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // try {
        //     $customer = Customer::findOrFail($id);
            
        //     return response()->json($customer);
        // } catch (Exception $ex) {
        //     return response(['message' => $ex->getMessage()], 404);
        // }
        
        $customer = Customer::find($id);
        if (isset($customer)) {
            return response()->json($customer);
        } else {
            return response(['message' => 'error'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $customerData = request()->all();
            $customer = Customer::findOrFail($id);
            
            $customer->first_name = $customerData['firstName'];
            $customer->last_name = $customerData['lastName'];
            $customer->save();

            return response()->json($customer);
        } catch (Exception $ex) {
            return response(['message' => $ex->getMessage()], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {

            $customer = Customer::findOrFail($id);
            $customer->delete();

            // Customer::destroy($id);

            return response()->json(['message' => 'delete success']);
        } catch (Exception $ex) {
            return response(['message' => $ex->getMessage()], 500);
        }
    }
}