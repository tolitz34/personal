<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Khill\Lavacharts\Lavacharts;

class GuestController extends Controller
{

    public function index()
    {
        return view('guest');
    }

    public function blog()
    {
        return view('blog');
    }

    public function generatecharts()
    {
        $lava = new Lavacharts;
        $stocksTable = $lava->DataTable();

        $stocksTable->addDateColumn('Day of Month')
                    ->addNumberColumn('Project')
                    ->addNumberColumn('Official');

        // Random Data For Example

        for ($a = 1; $a < 30; $a++)
        {
            $rowData = array(
                "2014-8-$a", rand(800, 1000), rand(800, 1000)
            );

            $stocksTable->addRow($rowData);
        }

        $chart = $lava->LineChart('Stocks')
                      ->setOptions(array(
                         'datatable' => $stocksTable,
                         'title' => 'Stock Market Trends'
            ));

        return view('widget');
    }
}
