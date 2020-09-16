<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use Carbon\Carbon;
class ApiController extends Controller
{
    public function index(){
        $qua_ngay = DB::table('vip.gifts')->where('type',1)->get();
        $qua_thang = DB::table('vip.gifts')->where('type',2)->get();
        $qua_nam = DB::table('vip.gifts')->where('type',3)->get();
        $qua_sinh_nhat = DB::table('vip.gifts')->where('type',0)->first();
        $vip = DB::table('vip.vip_points')->where('active',1)->orderBy('points', 'ASC')->skip(0)->take(6)->get();
        $game_zones = DB::table('sw.game_zones')->where('test_sv',0)->get();
    
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
        return view('welcome',compact('qua_ngay','qua_thang','qua_nam','qua_sinh_nhat','vip','game_zones','list_vip','xem_hang_chi_tiet','birthday'));
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
    public function receivingGifts(Request $request){
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
            
            $response = $client->post('https://gameapi.tieungaodailuc.com/api/sendgift', [
                'auth' => [
                    'tieungaogameapi', 
                    'tnapi#20991406'
                ],
                'form_params' => [
                    'role_id' => $request->p_role_id,
                    'zone_id' => $request->p_server_id,
                    'gift_id' => $request->p_gift_id,
                    'amount'  => 1
                ]
            ]);
         }
        
        echo json_encode($results[0]->po_description);
    }
    function detailUser(Request $request){
        $detail_user['vip']  = DB::connection('mysql_vip')->table('v_top_vip')->where('uid',$request->p_uid)->first();
        $detail_user['list'] = DB::table('vip.receive_gift_logs')
                               ->join('vip.gifts', 'vip.gifts.id', '=', 'vip.receive_gift_logs.gift_id')
                               ->where('uid',$request->p_uid)->get();
        echo json_encode($detail_user);
    }
}
