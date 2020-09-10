<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
class ApiController extends Controller
{
    public function index(){
        // dd(DB::table('sw.users')->get());
        $qua_ngày = DB::table('vip.gifts')->where('type',1)->get();
        $qua_thang = DB::table('vip.gifts')->where('type',2)->get();
        $qua_nam = DB::table('vip.gifts')->where('type',3)->get();
        $qua_sinh_nhat = DB::table('vip.gifts')->where('type',0)->first();
        $vip = DB::table('vip.vip_points')->skip(0)->take(6)->get();
        $game_zones = DB::table('sw.game_zones')->where('test_sv',0)->get();
    
        $list_vip[1] =  DB::table('sw.roles')->where('level',$vip[0]->level)->count();
        $list_vip[2] =  DB::table('sw.roles')->where('level',$vip[1]->level)->count();
        $list_vip[3] =  DB::table('sw.roles')->where('level',$vip[2]->level)->count();
        $list_vip[4] =  DB::table('sw.roles')->where('level',$vip[3]->level)->count();
        $list_vip[5] =  DB::table('sw.roles')->where('level',$vip[4]->level)->count();
        $list_vip[6] =  DB::table('sw.roles')->where('level',$vip[5]->level)->count();

        $xem_hang_chi_tiet = DB::connection('mysql_vip')->table('v_top_vip')->get();
        return view('welcome',compact('qua_ngày','qua_thang','qua_nam','qua_sinh_nhat','vip','game_zones','list_vip','xem_hang_chi_tiet'));
    }
    public function registration(Request $request){

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

        // $response = $client->request('POST', 'https://gameapi.tieungaodailuc.com/api/sendgift', [
        //     'headers' => [
        //         "Authorization"=>"Basic " + btoa("tieungaogameapi:tnapi#20991406"), 
        //     ],
        //     'form_params' => [
              
        //     ],
        // ]);
        $client = new Client();
        $res = $client->get('https://api.github.com/user', ['auth' =>  ['user', 'pass']]);
        echo $res->getStatusCode(); // 200
        echo $res->getBody(); // { "type": "User", ....
        die;
        $data = [
            'p_uid' =>$request->p_uid,
            'p_gift_id' => $request->p_gift_id,
            'p_role_id' => $request->p_role_id,
            'p_server_id' => $request->p_server_id,
        ];
        $receiving = DB::statement('CALL vip.sp_claim_gifts(:p_uid,:p_gift_id,:p_role_id,:p_server_id,@po_result,@po_description)', $data);
        $results = DB::select('select @po_result as po_result, @po_description as po_description');
        echo json_encode($results[0]->po_description);
    }
}
