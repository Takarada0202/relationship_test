<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Division;
use \App\Models\Company;
use \App\Models\AccountingUnit;
use \App\Models\Product;



class RelationshipController extends Controller
{
    //
    public function company()
    {

        $companies = Company::get()->all();
        return view('Company', compact('companies'));
    }

    public function createCompany(Request $request)
    {
        Company::create([
            'title' => $request->title,
        ]);
        return redirect()->route('index');
    }

    public function division()
    {

        $companies = Company::get()->all();
        $divisions = Division::get()->all();
        return view('Division', compact('companies', 'divisions'));
    }
    public function createDivision(Request $request)
    {
        Division::create([
            'title' => $request->title,
            'company_id' => $request->company,
        ]);
        return redirect()->route('index');
    }
    public function accountingUnit()
    {

        $divisions = Division::get()->all();
        $accountingUnits = AccountingUnit::get()->all();
        return view('accountingUnit', compact('divisions', 'accountingUnits'));
    }
    public function createaccountingUnit(Request $request)
    {
        AccountingUnit::create([
            'title' => $request->title,
            'division_id' => $request->division,
        ]);
        return redirect()->route('index');
    }
    public function product()
    {

        $accountingUnits = AccountingUnit::get()->all();
        $products = Product::get()->all();


        return view('product', compact('accountingUnits', 'products'));
    }
    public function createproduct(Request $request)
    {
        Product::create([
            'title' => $request->title,
            'accounting_unit_id' => $request->accountingUnit,
        ]);
        return redirect()->route('index');
    }
}
