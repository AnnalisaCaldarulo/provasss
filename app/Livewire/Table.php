<?php

namespace App\Livewire;

use App\Models\Info;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Table extends Component
{
    public $data;
    public $dateChecked = false;
    public $projectChecked = false;
    public $employeeChecked = false;
    public $checkedOrder = [];


    public function updatedChecked($value)
    {
        if (!in_array($value, $this->checkedOrder)) {
            $this->checkedOrder[] = $value;
        } else {
            foreach ($this->checkedOrder as $key => $checked) {
                if ($value == $checked) {
                    unset($this->checkedOrder[$key]);
                }
            }
            array_values($this->checkedOrder);
        }
    }
    //funzione per checkare l'array
    public function print()
    {
        dd($this->checkedOrder);
    }





    public function filterByDate()
    {
        if ($this->dateChecked == false) {
            $this->data = Info::select('date', 'hours')->get();
            $this->dateChecked = true;
        } else {
            $this->data = Info::all();
            $this->dateChecked = false;
        }
        $this->updatedChecked('date');
        $this->checkedQuery();
    }

    public function filterByProject()
    {
        if ($this->projectChecked == false) {

            $this->data = DB::table('infos')->join('projects', 'projects.id', '=', 'infos.project_id')->select(DB::raw('projects.name as project, sum(hours) as hours'))->groupBy('projects.id')->get();

            $this->projectChecked = true;
        } else {
            $this->data = Info::all();
            $this->projectChecked = false;
        }
        $this->updatedChecked('project');
        $this->checkedQuery();
    }
    //test query partendo dall'array

    public function checkedQuery()
    {   
        $table = DB::table('infos');
        foreach($this->checkedOrder as $checked){
           $query = $table->join($checked."s", "$checked" .'s.id', '=', 'infos.'.$checked ."_id")->get();
           dd($table);
        }
        // $this->data = ->select(DB::raw("projects.name as project, sum(hours) as hours"))->groupBy('projects.id')->get();
    }

    public function filterByEmployee()
    {
        if ($this->employeeChecked == false) {

            $this->data = DB::table('infos')->join('employees', 'employees.id', '=', 'infos.employee_id')->select(DB::raw('employees.name as employee, sum(hours) as hours'))->groupBy('employees.id')->get();
            $this->employeeChecked = true;
        } else {
            $this->data = Info::all();
            $this->employeeChecked = false;
        }
        $this->updatedChecked('employee');
        $this->checkedQuery();
    }


    public function render()
    {
        return view('livewire.table', ['data' => $this->data]);
    }
}
