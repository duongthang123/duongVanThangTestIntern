<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\isEmpty;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jsonData = $this->getDataJson();
        return view('main', [
            'datas' => $jsonData['dishes'],
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $dataJson = json_encode($data);
//        $count = 1;
//        if(!file_exists(storage_path('app/orders_1.json'))) {
//            file_put_contents(storage_path('app/orders_1.json'), $dataJson);
//        } else{
//            $count++;
//            file_put_contents(storage_path("app/orders_{$count}.json"), $dataJson);
//        }
        file_put_contents(storage_path('app/orders.json'), $dataJson);

        return redirect()->route('step2');

    }

    public function step2()
    {
        $jsonData = $this->getDataJson();
        return view('step2', [
            'datas' => $jsonData['dishes'],
        ]);
    }
    public function store2(Request $request)
    {
        $data = $request->all();
        $jsonFile = $this->getOrderJson();
        $dataJson = json_encode(array_merge($jsonFile, $data));
        file_put_contents(storage_path('app/orders.json'), $dataJson);

        return redirect()->route('step3');

    }

    public function step3()
    {
        $jsonData = $this->getDataJson();
        return view('step3', [
            'datas' => $jsonData['dishes'],
        ]);
    }

    public function store3(Request $request)
    {
        $data = $request->except('_token');
        if(empty($data)) {
            return redirect()->route('step3');
        }
        $jsonFile = $this->getOrderJson();
        $dataJson = json_encode(array_merge($jsonFile, $data));
        file_put_contents(storage_path('app/orders.json'), $dataJson);
        return redirect()->route('step4');
    }


    public function step4()
    {
        $jsonData = $this->getOrderJson();
        return view('step4', [
            'datas' => $jsonData,
        ]);
    }

    public function success()
    {
        return view('success');
    }
    private function getDataJson()
    {
        $data = Storage::get('dishes.json');
        return json_decode($data, true);
    }

    private function getOrderJson()
    {
        return json_decode(Storage::get('orders.json'), true);
    }

}
