<?php

namespace App\Http\Controllers;

use App\Models\ActionProblem;
use App\Models\Activity;
use App\Models\ActivityByContract;
use App\Models\ActualProblem;
use App\Models\Code;
use App\Models\DailyActivity;
use App\Models\Device;
use App\Models\Item;
use App\Models\Location;
use App\Models\NoRegistrasi;
use App\Models\Reason;
use App\Models\Report;
use App\Models\Status;
use App\Models\Unit;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class DailyActivityController extends Controller
{
    //
    public function index()
    {
        $unit = Unit::where('statusenabled', true)->get();
        $code = Code::where('statusenabled', true)->get();
        $location = Location::where('statusenabled', true)->get();
        $report = Report::where('statusenabled', true)->get();
        $device = Device::where('statusenabled', true)->get();
        $activity = Activity::where('statusenabled', true)->get();
        $item = Item::where('statusenabled', true)->get();
        $actual_problem = ActualProblem::where('statusenabled', true)->get();
        $action_problem = ActionProblem::where('statusenabled', true)->get();
        $activity_by_contract = ActivityByContract::where('statusenabled', true)->get();
        $status = Status::where('statusenabled', true)->get();
        $user = User::where('statusenabled', true)->get();

        foreach ($user as $key => $value) {
            $name[] = $value->name;
        }

        $noregistrasi = NoRegistrasi::where('statusenabled', true)->get();
        $reason = Reason::where('statusenabled', true)->get();

        //Tampilkan data
        $daily = DB::table('daily_activities as da')->select(
            'units.id as id_unit', 'units.nama as nama_unit',
            'codes.id as id_code', 'codes.nama as nama_code',
            'locations.id as id_unit', 'locations.nama as nama_location',
            'da.time',
            'da.date_action',
            'da.arrived',
            'da.start',
            'da.finish',
            'da.action_by',
            'reports.id as id_report', 'reports.nama as nama_report',
            'devices.id as id_device', 'devices.nama as nama_device',
            'activities.id as id_activity', 'activities.nama as nama_activity',
            'items.id as id_item', 'items.nama as nama_item',
            'actual_problems.id as id_actual_problem', 'actual_problems.nama as nama_actual_problem',
            'action_problems.id as id_action_problem', 'action_problems.nama as nama_action_problem',
            'activity_by_contracts.id as id_activity_by_contract', 'activity_by_contracts.nama as nama_activity_by_contract',
            'statuses.id as id_status', 'statuses.nama as nama_status',
            'no_registrasis.id as id_no_registrasi', 'no_registrasis.status as nama_no_registrasi',
            'da.start_delay1',
            'da.stop_delay1',
            'rs1.id as id_reason1', 'rs1.nama as reason1',
            'da.start_delay2',
            'da.stop_delay2',
            'rs2.id as id_reason2', 'rs2.nama as reason2',
            'da.start_delay3',
            'da.stop_delay3',
            'rs3.id as id_reason3', 'rs3.nama as reason3',
            'da.start_delay4',
            'da.stop_delay4',
            'rs4.id as id_reason4', 'rs4.nama as reason4',
            'da.start_delay5',
            'da.stop_delay5',
            'rs5.id as id_reason5', 'rs5.nama as reason5',
            'da.used_parts',
            'da.used_consumable',
            'da.remarks')
        ->leftJoin('units', 'da.unit_id', '=', 'units.id')
        ->leftJoin('codes', 'da.code_id', '=', 'codes.id')
        ->leftJoin('locations', 'da.location_id', '=', 'locations.id')
        ->leftJoin('reports', 'da.report_id', '=', 'reports.id')
        ->leftJoin('devices', 'da.device_id', '=', 'devices.id')
        ->leftJoin('activities', 'da.activity_id', '=', 'activities.id')
        ->leftJoin('items', 'da.item_id', '=', 'items.id')
        ->leftJoin('actual_problems', 'da.actual_problem_id', '=', 'actual_problems.id')
        ->leftJoin('action_problems', 'da.action_problem_id', '=', 'action_problems.id')
        ->leftJoin('activity_by_contracts', 'da.activity_by_contract_id', '=', 'activity_by_contracts.id')
        ->leftJoin('statuses', 'da.status_id', '=', 'statuses.id')
        ->leftJoin('no_registrasis', 'da.noregistrasi_id', '=', 'no_registrasis.id')
        ->leftJoin('reasons as rs1', 'da.reason_delay1_id', '=', 'rs1.id')
        ->leftJoin('reasons as rs2', 'da.reason_delay2_id', '=', 'rs2.id')
        ->leftJoin('reasons as rs3', 'da.reason_delay3_id', '=', 'rs3.id')
        ->leftJoin('reasons as rs4', 'da.reason_delay4_id', '=', 'rs4.id')
        ->leftJoin('reasons as rs5', 'da.reason_delay5_id', '=', 'rs5.id')
        ->get();

        return view('dashboard.daily_activity.index',
        compact('unit', 'code', 'location', 'report', 'device', 'activity', 'item',
        'actual_problem', 'action_problem', 'activity_by_contract', 'user', 'status', 'noregistrasi', 'reason', 'name', 'daily'));
    }

    public function insert(Request $request)
    {
        $array = json_decode($request->action_by, true);
        $collection = collect($array);
        $result = $collection->pluck('value')->implode(', ');

        $activity_by_contract = ActivityByContract::where('id', $request->activity_by_contract_id)->first();
        try {
            $dailyActivity = new DailyActivity;

            $dailyActivity->unit_id = $request->unit_id;
            $dailyActivity->code_id = $request->code_id;
            $dailyActivity->location_id = $request->location_id;
            if($request->time != null){
                $dailyActivity->time = $request->time;
            }
            $dailyActivity->report_id = $request->report_id;
            $dailyActivity->date_action = $request->date_action;
            $dailyActivity->device_id = $request->device_id;
            $dailyActivity->activity_id = $request->activity_id;
            $dailyActivity->item_id = $request->item_id;
            $dailyActivity->actual_problem_id = $request->actual_problem_id;
            $dailyActivity->action_problem_id = $request->action_problem_id;
            $dailyActivity->activity_by_contract_id = $request->activity_by_contract_id;
            if($request->arrived != null){
                $dailyActivity->arrived = $request->arrived;
            }

            if($request->start != null){
                $dailyActivity->start = $request->start;
            }
            if($request->finish != null){
                $dailyActivity->finish = $request->finish;
            }
            $dailyActivity->status_id = $request->status_id;
            $dailyActivity->action_by = $result;
            $dailyActivity->noregistrasi_id = $request->noregistrasi_id;
            if($request->start_delay1 != null){
                $dailyActivity->start_delay1 = $request->start_delay1;
            }
            if($request->stop_delay1 != null){
                $dailyActivity->stop_delay1 = $request->stop_delay1;
            }
            $dailyActivity->reason_delay1_id = $request->reason_delay1_id;
            if($request->start_delay2 != null){
                $dailyActivity->start_delay2 = $request->start_delay2;
            }
            if($request->stop_delay2 != null){
                $dailyActivity->stop_delay2 = $request->stop_delay2;
            }
            $dailyActivity->reason_delay2_id = $request->reason_delay2_id;
            if($request->start_delay3 != null){
                $dailyActivity->start_delay3 = $request->start_delay3;
            }
            if($request->stop_delay3 != null){
                $dailyActivity->stop_delay3 = $request->stop_delay3;
            }
            $dailyActivity->reason_delay3_id = $request->reason_delay3_id;
            if($request->start_delay4 != null){
                $dailyActivity->start_delay4 = $request->start_delay4;
            }
            if($request->stop_delay4 != null){
                $dailyActivity->stop_delay4 = $request->stop_delay4;
            }
            $dailyActivity->reason_delay4_id = $request->reason_delay4_id;
            if($request->start_delay5 != null){
                $dailyActivity->start_delay5 = $request->start_delay5;
            }
            if($request->stop_delay5 != null){
                $dailyActivity->stop_delay5 = $request->stop_delay5;
            }
            $dailyActivity->reason_delay5_id = $request->reason_delay5_id;
            $dailyActivity->used_parts = $request->used_parts;
            $dailyActivity->used_consumable = $request->used_consumable;
            $dailyActivity->remarks = $request->remarks;
            $dailyActivity->create_by = Auth::user()->id;

            $delayfirst = Carbon::createFromFormat('H:i', $request->start);
            $delaylast = Carbon::createFromFormat('H:i', $request->arrived);
            $dailyActivity->delay = $delayfirst->subHours($delaylast->hour)->subMinutes($delaylast->minute);

            // $responsefirst = Carbon::createFromFormat('H:i', $request->arrived);
            // $responselast = Carbon::createFromFormat('H:i', $request->time);
            // $dailyActivity->response = $responsefirst->subHours($responselast->hour)->subMinutes($responselast->minute);

            // $durationfirst = Carbon::createFromFormat('H:i', $request->finish);
            // $durationlast = Carbon::createFromFormat('H:i', $request->start);
            // $dailyActivity->duration = $durationfirst->subHours($durationlast->hour)->subMinutes($durationlast->minute);

            // $dailyActivity->batas_waktu_pengerjaan = $activity_by_contract->bataswaktu;

            // $duration_delay1first = Carbon::createFromFormat('H:i', $request->start_delay1);
            // $duration_delay1last = Carbon::createFromFormat('H:i', $request->stop_delay1);
            // $dailyActivity->duration_delay1 = $duration_delay1first->subHours($duration_delay1last->hour)->subMinutes($duration_delay1last->minute);

            // $duration_delay2first = Carbon::createFromFormat('H:i', $request->start_delay2);
            // $duration_delay2last = Carbon::createFromFormat('H:i', $request->stop_delay2);
            // $dailyActivity->duration_delay2 = $duration_delay2first->subHours($duration_delay2last->hour)->subMinutes($duration_delay2last->minute);

            // $duration_delay3first = Carbon::createFromFormat('H:i', $request->start_delay3);
            // $duration_delay3last = Carbon::createFromFormat('H:i', $request->stop_delay3);
            // $dailyActivity->duration_delay3 = $duration_delay3first->subHours($duration_delay3last->hour)->subMinutes($duration_delay3last->minute);

            // $duration_delay4first = Carbon::createFromFormat('H:i', $request->start_delay4);
            // $duration_delay4last = Carbon::createFromFormat('H:i', $request->stop_delay4);
            // $dailyActivity->duration_delay4 = $duration_delay4first->subHours($duration_delay4last->hour)->subMinutes($duration_delay4last->minute);

            // $duration_delay5first = Carbon::createFromFormat('H:i', $request->start_delay5);
            // $duration_delay5last = Carbon::createFromFormat('H:i', $request->stop_delay5);
            // $dailyActivity->duration_delay5 = $duration_delay5first->subHours($duration_delay5last->hour)->subMinutes($duration_delay5last->minute);

            // $dailyActivity->total_delay = $dailyActivity->duration_delay1 + $dailyActivity->duration_delay2 + $dailyActivity->duration_delay3 + $dailyActivity->duration_delay4 + $dailyActivity->duration_delay5;

            // $dailyActivity->save();

            return redirect()->back()->with('success', 'Daily activities saved successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('danger', 'Daily activity failed to save, '.$th->getMessage());

        }
    }
}
