<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerMathFunctions extends Controller
{
    

    public function index(){
        // echo "hola mundo";
        /*Introducir dos numeros distintos y mostrar el numero mayor*/
        $numero1=45;
        $numero2=85;
        if($numero1>$numero2){
            $res=$numero1;
        }else{
            $res=$numero2;
        }
        return view('ejemplo1',compact('res'));
    }
    public function maxOfThreeValues(){
        
        //echo "estoy en la funcion ejemplo2";
         return view('maxOfThreeValues');
    }
    public function digitToLetter(){
        
        return view('digitToLetter');
    }



    public  function MaxOfThreeValues_res(Request $request){

        //dd($request);
        $n1=$request->post('valor1');
        $n2=$request->post('valor2');
        $n3=$request->post('valor3');
        if($n1>$n2 && $n1>$n3)
        {
            $res=$n1;
        }else if($n2>$n1 && $n2>$n3)
        {
            $res=$n2;
        }
        else
        {
            $res=$n3;
        }
        echo json_encode(array('0'=>$res));
    }
    public  function digitToLetter_res(Request $request){

        //dd($request);
        $n1=$request->post('valor1');
        $resp ="";
        switch ($n1) {
            case "0":
                $resp ="CERO";
                break;
            case "1":
                $resp ="UNO";
                break;
            case "2":
                $resp ="DOS";
                break;
            case "3":
                $resp ="TRES";
                break;
            case "4":
                $resp = "CUATRO";
                break;
            case "5":
                $resp = "CINCO";
                break;
            case "6":
                $resp = "SEIS";
                break;
            case "7":
                $resp = "SIETE";
                break;
            case "8":
                $resp = "OCHO";
                break;
            case "9":
                $resp = "NUEVE";
                break;
            default:
                # code...
                break;
        }
        echo json_encode(array('0'=>$resp));
    }
}
