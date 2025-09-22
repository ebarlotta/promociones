<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\zona;
use App\Models\mediodepago;
use App\Models\formadepago;

class ConfiguracionesComponent extends Component
{
    public $Zonas, $TipoDeCompra, $MontoFijo, $PorcentajeDescuento, $TopePorTransaccion, $Periodos, $TopePorPeriodo, $TopePorTipoDePeriodo, $FormaDePago, $MedioDePago, $Requisito, $DíaDeLaSemana, $Moneda, $Retira, $Reintegro;
    public $titulo, $Listado=[];

    public $nombre_agregar,$direccion_agregar,$ubicaciongps_agregar;
    
    public function render() {
        return view('livewire.configuraciones-component');
    }

    public function CargarDatosModal($modulo) {
        switch($modulo) {
            case 'Zonas': $this->Listado = zona::all(); break;
            case 'MedioDePago': $this->Listado = MedioDePago::all(); break;
            case 'FormaDePago': $this->Listado = FormaDePago::all(); break;

            case 'Periodos': break;
            case 'TopePorPeriodo': break;
            case 'TopePorTipoDePeriodo': break;
            case 'Requisito': break;
            case 'DíaDeLaSemana': break;
            case 'Moneda': break;
            case 'Retira': break;
            case 'Reintegro': break;
            
            case 'TipoDeCompra': break;
            case 'PorcentajeDescuento': break;
            case 'TopePorTransaccion': break;
            case 'MontoFijo': break;
        }

        $this->titulo=$modulo;

        // dd($this->Listado);

    }

    public function Agregar($modulo) {
        switch($modulo) {
            case 'Zonas': $a= zona::create(['nombre' => $this->nombre_agregar, 'direccion' => $this->direccion_agregar, 'ubicacionGPS' => $this->ubicaciongps_agregar]);
        }
    }
}
