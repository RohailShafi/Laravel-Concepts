<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CsvController extends Controller
{
    public function index() {
        $users = [];
        $path = storage_path('Excel_Sample.csv');

        if (!file_exists($path)) {
            return response()->json(['error' => 'File not found.'], 404);
        }

        if (($data = fopen($path, 'r')) !== false) {
            if (($headers = fgetcsv($data)) !== false) {
                while (($row = fgetcsv($data)) !== false) {
                    $users[] = array_combine($headers, $row);
                }
            }
            fclose($data);
        }

        return response()->json($users);
    }

    public function ByPackage(){

        if (($file = fopen(storage_path('/Excel_Sample.xlsx'),'r')) !==false){

           $output =  Excel::toArray($file);
        }

        dd($output);
    }
}
