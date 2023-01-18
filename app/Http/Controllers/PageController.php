<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function home() {
        $response = Http::withOptions(['base_uri' => env('NETZWELT_URL')])
                    ->get('/Territories/All');
        $data = $response->json()['data'];

        $dataLookup = [];
        $roots = [];
        for ($i=0; $i < count($data); $i++) { 
            $el = $data[$i];
            $el['children'] = [];
            $dataLookup[$el['id']] = $el;
        }

        foreach ($data as $key => $value) {
            if($value['parent'] == null) {
                $roots[] = &$dataLookup[$value['id']];
            } else {
                $dataLookup[$value['parent']]['children'][] = &$dataLookup[$value['id']];
            }
        } 
        
        return view('page.home', ['roots' => $roots]);
    }
}
