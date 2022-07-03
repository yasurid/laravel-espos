<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\Printer;

class Printhome extends Controller
{
    //
    function printhome(){
        $connector = new FilePrintConnector("php://stdout");
        $printer = new Printer($connector);
        $printer -> text("Hello World!\n");
        $printer -> cut();
        $printer -> close();
    }
}
