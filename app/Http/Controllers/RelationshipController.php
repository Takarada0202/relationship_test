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
        $productModels = productModel::get()->all();
        return view('ProductModelSuffix',compact('productModels'));
    }

    public function createProductModelSuffix(Request $request)
    {
        ProductModelSuffix::create([
            'title' => $request->title,
            'product_model_id' => $request->productModel,
        ]);
        return redirect()->route('index');
    }

    public function logicBuilder()
    {
        $parsingBuilders = parsingBuilder::get()->all();
        return view('LogicBuilder',compact('parsingBuilders'));
    }

    public function createLogicBuilder(Request $request)
    {
        LogicBuilder::create([
            'title' => $request->title,
            'parsing_builder_id' => $request->parsingBuilder,
        ]);
        return redirect()->route('index');
    }

    public function parsingBuilder()
    {

        return view('parsingBuilder');
    }

    public function createparsingBuilder(Request $request)
    {
        parsingBuilder::create([
            'title' => $request->title,

        ]);
        return redirect()->route('index');
    }
    public function diagnosis()
    {
        $productModels = productModel::get()->all();
        return view('Diagnosis',compact('productModels'));
    }

    public function createDiagnosis(Request $request)
    {
        Diagnosis::create([
            'title' => $request->title,
            'product_model_id'=>$request->productModel,
        ]);
        return redirect()->route('index');
    }
    public function logData()
    {

        $diagnoses = Diagnosis::get()->all();
        $logDatas = LogData::get()->all();

        $jigs = Jig::get()->all();
        return view('LogData', compact('diagnoses', 'logDatas','jigs'));
    }

    public function createLogData(Request $request)
    {
        LogData::create([
            'title' => $request->title,
            'diagnosis_id' => $request->diagnosis,
            'jig_id'=>$request->jig,
        ]);
        return redirect()->route('index');
    }

    public function jig()
    {

        $productModels = productModel::get()->all();
        return view('Jig', compact('productModels'));
    }

    public function createJig(Request $request)
    {
        Jig::create([
            'title' => $request->title,
            'product_model_id' => $request->productModel,
        ]);
        return redirect()->route('index');
    }

    public function productModel()
    {
        $products = Product::get()->all();
        $logicBuilders = LogicBuilder::get()->all();

        $productModels = ProductModel::get()->all();
        return view('productModel', compact( 'productModels','products','logicBuilders'));
    }

    public function createproductModel(Request $request)
    {
        ProductModel::create([
            'title' => $request ->title,
            'logic_builder_id'=> $request -> logicBuilder,
            'product_id' => $request->product,
        ]);
        return redirect()->route('index');
    }
}
