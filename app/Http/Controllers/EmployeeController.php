<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Administration\{Vw_Pos,Employee,Dept,Adm_Pos,Adm_Employee_Pos};
class EmployeeController extends Controller
{
    public function yes()
    {
        try {
            $a = $this->get_job_pos(2);
            return response()->json($a);
        } catch (\Throwable $e) {
            return response()->json(['Error' => $e->getMessage()]);
        }
    }

    public function get_job_pos($id = ''){
        if(!empty($id)){
			return Adm_Pos::GetJobPos($id);
		}

		return Adm_Pos::all();
    }


    public function add_job_post($id){


        $job_pos = $this->get_job_post($id);

        $data = [
        'controller_name'=>"administration",
        'job_pos' =>$job_pos,
        'employee_id'=>$id,
        ];
        return view('administration.user_management.employee.add_job_post_v')
        ->with($data);

    }    

    public function show($id) {
        $a = Employee::where('id', $id);
            return response()->json(['result' => ($a->count() > 0) ? $a->get() : 'Employee Not Found']);
    }

    public function store(Request $request)
    {
        $r          = $request->all();
        $posisi     = Vw_Pos::GetPosId($r['dept_id'])->first();
        $department = Dept::GetDeptDiv($posisi->dept_id)->first();
        $check      = EmployeePos::where('employee_id', $r['employee_id'])->count();

        if ($check > 0) {
            Session::put('message', 'Posisi utama tidak boleh lebih dari 1');
            $this->add_job_post($r['employee_id']);

        } else {

            $data = [
                'employee_id' => $r['employee_id'],
                'pos_id' => $r['pos_id_inp'],
                'pos_name' => $posisi->pos_name,
                'dept_id' => $posisi->dept_id,
                'dept_name' => $department->dept_name,
                'is_active' => (isset($r['is_active_inp'])) ? 1 : 0,
                'is_main_job' => (isset($r['is_main_job_inp'])) ? 1 : 0,
                ];

            $insert = Adm_Employee_Pos::create($data);

            if ($insert) {
                if (isset($r['is_main_job_inp'])) {
                    $update = Employee::find($r['employee_id']);
                    $update->adm_pos_id = $r['pos_id_inp'];
                    $update->save();
                }
                    Session::put("Berhasil menambahkan posisi employee");
            }

            redirect()->route('employee.show', ['id' => $tambah['employee_id']]);

        }
    }
}
