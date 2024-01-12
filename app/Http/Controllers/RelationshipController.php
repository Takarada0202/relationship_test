<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Division;
use \App\Models\Company;
use \App\Models\AccountingUnit;
use \App\Models\Product;
use \App\Models\ProductModelSuffix;
use \App\Models\LogicBuilder;
use \App\Models\ParsingBuilder;
use \App\Models\Diagnosis;
use \App\Models\LogData;
use \App\Models\Jig;
use \App\Models\ProductModel;


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

    public function productModelSuffix()
    {

        return view('ProductModelSuffix');
    }

    public function createProductModelSuffix(Request $request)
    {
        ProductModelSuffix::create([
            'title' => $request->title,
        ]);
        return redirect()->route('index');
    }

    public function logicBuilder()
    {

        return view('LogicBuilder');
    }

    public function createLogicBuilder(Request $request)
    {
        LogicBuilder::create([
            'title' => $request->title,
        ]);
        return redirect()->route('index');
    }

    public function parsingBuilder()
    {

        $logicBuilders = LogicBuilder::get()->all();
        $parsingBuilders = parsingBuilder::get()->all();
        return view('parsingBuilder', compact('logicBuilders', 'parsingBuilders'));
    }

    public function createparsingBuilder(Request $request)
    {
        parsingBuilder::create([
            'title' => $request->title,
            'logic_builder_id' => $request->logicBuilder,
        ]);
        return redirect()->route('index');
    }
    public function diagnosis()
    {

        return view('Diagnosis');
    }

    public function createDiagnosis(Request $request)
    {
        Diagnosis::create([
            'title' => $request->title,
        ]);
        return redirect()->route('index');
    }
    public function logData()
    {

        $diagnoses = Diagnosis::get()->all();
        $logDatas = LogData::get()->all();
        return view('LogData', compact('diagnoses', 'logDatas'));
    }

    public function createLogData(Request $request)
    {
        LogData::create([
            'title' => $request->title,
            'diagnosis_id' => $request->diagnosis,
        ]);
        return redirect()->route('index');
    }

    public function jig()
    {

        $logDatas = LogData::get()->all();
        $jigs = Jig::get()->all();
        return view('Jig', compact('logDatas', 'jigs'));
    }

    public function createJig(Request $request)
    {
        Jig::create([
            'title' => $request->title,
            'log_data_id' => $request->logData,
        ]);
        return redirect()->route('index');
    }

    public function productModel()
    {
        $products = Product::get()->all();
        $logicBuilders = LogicBuilder::get()->all();
        $diagnoses = Diagnosis::get()->all();
        $jigs = Jig::get()->all();
        $logDatas = LogData::get()->all();
        $productModelSuffixes = productModelSuffix::get()->all();
        $productModels = ProductModel::get()->all();
        return view('productModel', compact('logDatas', 'productModels','products','logicBuilders','diagnoses','jigs','productModelSuffixes'));
    }

    public function createproductModel(Request $request)
    {
        // return $request;
        ProductModel::create([
            'title' => $request ->title,
            'logic_builder_id'=> $request -> logicBuilder,
            'jig_id'=> $request -> jig,
            'product_model_suffix_id'=> $request -> productModelSuffix,
            'product_id' => $request->product,
            'diagnosis_id'=> $request -> diagnosis,
            'jig_id'=> $request -> jig,
            'log_data_id' => $request->logData,
        ]);
        return redirect()->route('index');
    }
}
