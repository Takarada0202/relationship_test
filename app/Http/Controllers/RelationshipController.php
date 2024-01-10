<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Division;
use \App\Models\Company;
use \App\Models\accountingUnit;



class RelationshipController extends Controller
{
    //
    public function company() {

        $companies= company::get()->all();
        return view('Company',compact('companies'));
    }

    public function createCompany(Request $request) {
        company::create([
            'title' => $request->title,
        ]);
        return redirect()->route('index');
    }

    public function division() {

        $companies= company::get()->all();
        $divisions = division::get()->all();
        return view('Division',compact('companies','divisions'));
    }
    public function createDivision(Request $request) {
        Division::create([
            'title' => $request->title,
            'company_id' => $request->company,
        ]);
        return redirect()->route('index');
    }
    public function accountingUnit() {

        $divisions= division::get()->all();
        $accountingUnits = accountingUnit::get()->all();
        return view('accountingUnit',compact('divisions','accountingUnits'));
    }
    public function createaccountingUnit(Request $request) {
        accountingUnit::create([
            'title' => $request->title,
            'division_id' => $request->division,
        ]);
        return redirect()->route('index');
    }
    public function product() {

        $accountingUnits= accountingUnit::get()->all();
        $products = product::get()->all();
        return view('product',compact('accountingUnits','products'));
    }
    public function createproduct(Request $request) {
        product::create([
            'title' => $request->title,
            'accountingUnit_id' => $request->accountingUnit,
        ]);
        return redirect()->route('index');
    }
}
