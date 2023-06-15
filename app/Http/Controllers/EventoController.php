<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{

    public function form(){
        return view("eventos/formulario");
      }
      
      public function create(Request $request){

        $this->validate($request, [
        'Nombre'     =>  'required',
        'Descripcion'  =>  'required',
        'Fecha' =>  'required'
       ]);
  
        Evento::insert([
          'Nombre'       => $request->input("Nombre"),
          'Descripcion'  => $request->input("Descripcion"),
          'Fecha'        => $request->input("Fecha")
        ]);
  

        return redirect('/calendario')->with('success', 'Evento creado exitosamente');
  
      }

      
    public function details($id){

        $event = Evento::find($id);
  
        return view("eventos/eventos",[
          "event" => $event
        ]);
  
      }
  

  
      public function index(){
  
         $month = date("Y-m");
         
         $data = $this->calendar_month($month);
         $mes = $data['month'];

         $mespanish = $this->spanish_month($mes);
         $mes = $data['month'];
  
         return view("eventos/calendario",[
           'data' => $data,
           'mes' => $mes,
           'mespanish' => $mespanish
         ]);
  
     }
  
     public function index_month($month){
  
        $data = $this->calendar_month($month);
        $mes = $data['month'];
    
        $mespanish = $this->spanish_month($mes);
        $mes = $data['month'];
  
        return view("eventos/calendario",[
          'data' => $data,
          'mes' => $mes,
          'mespanish' => $mespanish
        ]);
  
      }
  
      public static function calendar_month($month){
  
        $mes = $month;
      
        $daylast =  date("Y-m-d", strtotime("last day of ".$mes));
       
        $fecha      =  date("Y-m-d", strtotime("first day of ".$mes));
        $daysmonth  =  date("d", strtotime($fecha));
        $montmonth  =  date("m", strtotime($fecha));
        $yearmonth  =  date("Y", strtotime($fecha));
     
        $nuevaFecha = mktime(0,0,0,$montmonth,$daysmonth,$yearmonth);
        $diaDeLaSemana = date("w", $nuevaFecha);
        $nuevaFecha = $nuevaFecha - ($diaDeLaSemana*24*3600);
        $dateini = date ("Y-m-d",$nuevaFecha);
       
        $semana1 = date("W",strtotime($fecha));
      
        $semana2 = date("W",strtotime($daylast));
     
        if (date("m", strtotime($mes))==12) {
            $semana = 5;
        }
        else {
          $semana = ($semana2-$semana1)+1;
        }
       
        $datafecha = $dateini;
        $calendario = array();
        $iweek = 0;
        while ($iweek < $semana):
            $iweek++;
            
            $weekdata = [];
            for ($iday=0; $iday < 7 ; $iday++){
       
              $datafecha = date("Y-m-d",strtotime($datafecha."+ 1 day"));
              $datanew['mes'] = date("M", strtotime($datafecha));
              $datanew['dia'] = date("d", strtotime($datafecha));
              $datanew['fecha'] = $datafecha;
             
              $datanew['evento'] = Evento::where("fecha",$datafecha)->get();
  
              array_push($weekdata,$datanew);
            }
            $dataweek['semana'] = $iweek;
            $dataweek['datos'] = $weekdata;
        
            array_push($calendario,$dataweek);
        endwhile;
        $nextmonth = date("Y-M",strtotime($mes."+ 1 month"));
        $lastmonth = date("Y-M",strtotime($mes."- 1 month"));
        $month = date("M",strtotime($mes));
        $yearmonth = date("Y",strtotime($mes));
  
        $data = array(
          'next' => $nextmonth,
          'month'=> $month,
          'year' => $yearmonth,
          'last' => $lastmonth,
          'calendar' => $calendario,
        );
        return $data;
      }
  
      public static function spanish_month($month)
      {
  
          $mes = $month;
          if ($month=="Jan") {
            $mes = "Enero";
          }
          elseif ($month=="Feb")  {
            $mes = "Febrero";
          }
          elseif ($month=="Mar")  {
            $mes = "Marzo";
          }
          elseif ($month=="Apr") {
            $mes = "Abril";
          }
          elseif ($month=="May") {
            $mes = "Mayo";
          }
          elseif ($month=="Jun") {
            $mes = "Junio";
          }
          elseif ($month=="Jul") {
            $mes = "Julio";
          }
          elseif ($month=="Aug") {
            $mes = "Agosto";
          }
          elseif ($month=="Sep") {
            $mes = "Septiembre";
          }
          elseif ($month=="Oct") {
            $mes = "Octubre";
          }
          elseif ($month=="Oct") {
            $mes = "December";
          }
          elseif ($month=="Dec") {
            $mes = "Diciembre";
          }
          else {
            $mes = $month;
          }
          return $mes;
      }
  
      public function delete($id)
      {
        Evento::destroy($id);
    
        return redirect('/calendario')->with('success', 'Evento eliminado exitosamente');
      }
  }
  

