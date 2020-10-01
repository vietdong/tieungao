<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use Carbon\Carbon;
class ApiController extends Controller
{
    public function index(Request $request){
 
        $qua_ngay = DB::table('vip.gifts')->where('type',1)->get();
        if(session('uid')){
            $check_qua_ngay = DB::table('vip.gifts')
                            ->join('vip.receive_gift_logs', 'vip.gifts.id', '=', 'vip.receive_gift_logs.gift_id')
                            ->whereMonth('received_time',Carbon::now()->format('m'))
                            ->whereDay('received_time',Carbon::now()->format('d'))
                            ->where('uid',session('uid'))
                            ->where('type',1)->first();
            $check_thang = DB::table('vip.gifts')
                        ->join('vip.receive_gift_logs', 'vip.gifts.id', '=', 'vip.receive_gift_logs.gift_id')
                        ->whereMonth('received_time',Carbon::now()->format('m'))
                        ->whereDay('received_time',Carbon::now()->format('d'))
                        ->where('uid',session('uid'))
                        ->where('type',2)->get();
        }else {
            $check_qua_ngay = DB::table('vip.gifts')
                        ->join('vip.receive_gift_logs', 'vip.gifts.id', '=', 'vip.receive_gift_logs.gift_id')
                        ->whereMonth('received_time',Carbon::now()->format('m'))
                        ->whereDay('received_time',Carbon::now()->format('d'))
                        ->where('type',1)->first();
            $check_thang = DB::table('vip.gifts')
                    ->join('vip.receive_gift_logs', 'vip.gifts.id', '=', 'vip.receive_gift_logs.gift_id')
                    ->whereMonth('received_time',Carbon::now()->format('m'))
                    ->whereDay('received_time',Carbon::now()->format('d'))
                    ->where('type',2)->get();
        }
        
        $qua_thang = DB::table('vip.gifts')->where('type',2)->get();
        
        $qua_nam = DB::table('vip.gifts')->where('type',3)->get();
        $qua_sinh_nhat = DB::table('vip.gifts')->where('type',0)->first();
  
        $vip = DB::table('vip.vip_points')->where('active',1)->orderBy('points', 'ASC')->skip(0)->take(6)->get();
        $game_zones = DB::table('sw.game_zones')->where('test_sv',0)->get();
        // $game_zones  = DB::table('sw.game_zones')->get();
        $list_vip[1] = DB::table('vip.vip_points')->select(DB::raw("SUM(points) as points"),DB::raw('COUNT(uid) as count'))->where('level',1)->where('active',1)->get();
        $list_vip[2] = DB::table('vip.vip_points')->select(DB::raw("SUM(points) as points"),DB::raw('COUNT(uid) as count'))->where('level',2)->where('active',1)->get();
        $list_vip[3] = DB::table('vip.vip_points')->select(DB::raw("SUM(points) as points"),DB::raw('COUNT(uid) as count'))->where('level',3)->where('active',1)->get();
        $list_vip[4] = DB::table('vip.vip_points')->select(DB::raw("SUM(points) as points"),DB::raw('COUNT(uid) as count'))->where('level',4)->where('active',1)->get();
        $list_vip[5] = DB::table('vip.vip_points')->select(DB::raw("SUM(points) as points"),DB::raw('COUNT(uid) as count'))->where('level',5)->where('active',1)->get();
        $list_vip[6] = DB::table('vip.vip_points')->select(DB::raw("SUM(points) as points"),DB::raw('COUNT(uid) as count'))->where('level',6)->where('active',1)->get();
        $mytime_month = Carbon::now()->format('m');
        $mytime_day = Carbon::now()->format('d');
        $birthday = DB::table('sw.users')->whereMonth('birthday',$mytime_month)->whereDay('birthday',$mytime_day)->get();
        $xem_hang_chi_tiet = DB::connection('mysql_vip')->table('v_top_vip')->paginate(20);
        return view('welcome',compact('qua_ngay','qua_thang','qua_nam','qua_sinh_nhat','vip','game_zones','list_vip','xem_hang_chi_tiet','birthday','check_qua_ngay','check_thang'));
    }
    public function registration(Request $request){
        if(strlen($request->username) > 20){
            $text = 'Tên tài khoản không được quá dài';
            $status = false;
        }else{
            $check_duplicate = DB::table('sw.users')->where('email',$request->email)->orWhere('name',$request->username)->get();
            if(count($check_duplicate)){
                $text = 'Tên tài khoản hoặc email đã được sử dụng';
                $status = false;
            }else{
                $data=[
                    'name'=>$request->username,
                    'password'=>$request->password,
                    'birthday'=>'1990-07-06',
                    'gender'=>1,
                    'email'=>$request->email,
                    'phonenumber'=>$request->phonenumber,
                    'refferer' => 'null',
                ];
                DB::select('CALL sw.sp_create_user(:name,:password,:birthday,:gender,:email,:phonenumber,:refferer)', $data);
                $text = 'Đăng kí tài khoản thành công';
                $status = true;
            }
            
        }
        
        $done['text'] = $text;
        $done['status'] = $status;
        echo json_encode($done);
    }
    public function login(Request $request){
        $user = DB::table('sw.users')->where('name', $request->username)
                ->where('passwd',md5($request->username.$request->password,true))
                ->first();
             
        $data['uid'] =$user->ID;
        $data['name'] =$user->name;
        $data['email'] =$user->email;
        echo json_encode($data);
    }
    public function selectRole(Request $request){
        $role = DB::table('sw.roles')->where('zone',$request->zone_id)->where('uid',$request->user_id)->get();
        echo json_encode($role);
    }
    public function receivingGifts($request){
        $check_vip= DB::connection('mysql_vip')->table('v_top_vip')->where('uid',$request->p_uid)->first();;
        $data = [
            'p_uid' => $request->p_uid,
            'p_gift_id' => $request->p_gift_id,
            'p_role_id' => $request->p_role_id,
            'p_server_id' => $request->p_server_id,
        ];
        $receiving = DB::statement('CALL vip.sp_claim_gifts(:p_uid,:p_gift_id,:p_role_id,:p_server_id,@po_result,@po_description)', $data);
        $results = DB::select('select @po_result as po_result, @po_description as po_description');
         if($results[0]->po_description == 'Nhận quà thành công'){
            $client = new Client();
            $gitf_id =   DB::table('vip.gifts')->find($request->p_gift_id);
            $response = $client->post('https://gameapi.tieungaodailuc.com/api/sendgift', [
                'auth' => [
                    'tieungaogameapi', 
                    'tnapi#20991406'
                ],
              
                'form_params' => [
                    'role_id' => $request->p_role_id,
                    'zone_id' => $request->p_server_id,
                    'gift_id' => $gitf_id->gift_id,
                    'amount'  => 1
                ]
            ]);
         }
        
        echo json_encode($results[0]->po_description);
    }
    function detailUser(Request $request){
        $value = session(['uid' => $request->p_uid]);
        $detail_user['vip']  = DB::connection('mysql_vip')->table('v_top_vip')->where('uid',$request->p_uid)->first();
        $detail_user['list'] = DB::table('vip.receive_gift_logs')
                               ->join('vip.gifts', 'vip.gifts.id', '=', 'vip.receive_gift_logs.gift_id')
                               ->where('uid',$request->p_uid)->get();
        $birthday = strtotime(DB::table('sw.users')->where('id',$request->p_uid)->first()->birthday);
        $detail_user['user']   =  date('d-m-Y',$birthday);
        $detail_user['check_day']   =  DB::table('vip.gifts')
                                    ->join('vip.receive_gift_logs', 'vip.gifts.id', '=', 'vip.receive_gift_logs.gift_id')
                                    ->whereMonth('received_time',date('m',$birthday))
                                    ->whereDay('received_time',date('d',$birthday))
                                    ->where('type',0)->get();

        $start = strtotime(Carbon::now()->format('Y-m-d'));
        $end = strtotime(Carbon::now()->format('Y') .'-'. date('m-d',$birthday));
        if($start > $end){
            $detail_user['count_birthday'] = $this->cal_days_in_year(Carbon::now()->format('Y')) - (abs($start - $end) / 86400);
        }else{
            $detail_user['count_birthday'] = abs($start - $end) / 86400;
        }
        echo json_encode($detail_user);
    }
    function cal_days_in_year($year){
        $days=0; 
        for($month=1;$month<=12;$month++){ 
            $days = $days + cal_days_in_month(CAL_GREGORIAN,$month,$year);
         }
     return $days;
    }
    function checkVipPoints(Request $request){
       
        $check_vip_points = DB::table('vip.vip_points')->where('uid',$request->p_uid)->first();
        $check_vip = DB::connection('mysql_vip')->table('v_top_vip')->where('uid',$request->p_uid)->first();
        if($check_vip->level < 1 || $check_vip->level == null){
            echo json_encode('Bạn chưa có vip');
        }
        if($check_vip_points->active == 0){
            echo json_encode('Bạn phải nạp tối thiểu 200k để nhận VIP');
        }else{
            $this->receivingGifts($request);
        }
    }
}
