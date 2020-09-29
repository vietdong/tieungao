<!DOCTYPE html>
<html lang="en"><head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Tiếu ngạo đại lục | game kiếm hiệp hàng đầu việt nam</title>
      <script async="" src="{{asset('asset/fbevents.js')}}"></script>
      <script async="" src="{{asset('asset/gtm.js')}}"></script>
      <link rel="stylesheet" href="{{asset('asset/vendor.min.css')}}">
      <link rel="stylesheet" href="{{asset('asset/style.min.css')}}">
      <script type="text/javascript" src="{{asset('asset/jquery-1.11.2.min.js')}}"></script>
      <!-- 6Le_sr4ZAAAAAD-O9vYeFZFR6WwiZ2wgLS1SV2J3 -->
      <script src="https://www.google.com/recaptcha/api.js?render=6LcnGsgUAAAAAGHcgYiO6iFqP3t8711jD6ugFxnp"></script>



</head>
<body>
      <section class="marquee">
         <div class="container">
   <marquee>
      @foreach($birthday as $value)
  	   <span class="item">Chúc mừng sinh nhật 
   		<span class="name_user text_upper">{{substr($value->name,0,4)}}******</span>
      </span>
      @endforeach
  	</marquee>
          <div class="info_user">
               <a class="link_login" rel="login-popup" href="javascript:void(0)" onclick="show_login()">Đăng nhập</a>
               <p class="info_name as">
                  <span class=" name_user" style="font-family: 'tahomabold';"></span>
                  <a href="javascript:void(0)"  class="logout">Thoát</a>
               </p>
          </div>
         </div>
      </section>
      <div class="header">
        <p><img src="./asset/logo.png" alt=""></p>
        <ul>
            <li>
               <a class="text_upper" target="_blank" href="https://tieungaodailuc.com/">
               Trang chủ
               </a>
            </li>
            <li>
               <a class="text_upper" target="_blank" href="https://www.facebook.com/tngh3d">
               Fanpage
               </a>
            </li>
         </ul>
      </div>
        
        <!-- TOP TƯỢNG -->
<section class="topvip">
   <div class="container">

    <div class="list_art">
        <div class="art art_top4">
            <img src="./asset/art_top4.png" alt="">
        </div>
        <div class="art art_top2">
            <img src="./asset/art_top3.png" alt="">
        </div>
        <div class="art art_top1">
            <img src="./asset/art_top1.png" alt="" style="width: 250px;">
        </div>
        <div class="art art_top3">
            <img src="./asset/art_top2.png" alt="">
        </div>
        <div class="art art_top5">
            <img src="./asset/art_top5.png" alt="">
        </div>
    </div>
      
    <div class="rotate">
       <img src="./asset/rotate.png">
    </div>
    <div class="list_name_user">

                <div class="item name_top1 text_upper">
                    <p class="gradient_text name_1"> Phú Khả Địch Quốc</p>
                    <p class="name_1">
                    {{$xem_hang_chi_tiet[0]->rolename}}                         </p>
                </div>
                                            <div class="item name_top2 text_upper">
                    <p class="gradient_text name_1">Phú Quý Nghịch Thiên</p>
                    <p class="name_2">
                    {{$xem_hang_chi_tiet[2]->rolename}}                       </p>
                </div>
                                            <div class="item name_top3 text_upper">
                    <p class="gradient_text name_1">Tài Đại Khí Thô</p>
                    <p class="name_3">
                    {{$xem_hang_chi_tiet[1]->rolename}}                  </p>
                </div>
                                            <div class="item name_top4 text_upper">
                    <p class="gradient_text name_1">Phú Đại Quan Gia</p>
                    <p class="name_4">
                    {{$xem_hang_chi_tiet[4]->rolename}}                    </p>
                </div>
                                            <div class="item name_top5 text_upper">
                    <p class="gradient_text name_1">Gia Tài Vạn Quán</p>
                    <p class="name_5">
                    {{$xem_hang_chi_tiet[3]->rolename}}                     </p>
                </div>
                                        
    </div>
</div>

 <div class="popup popup_art" id="popup_art4" style="display: none;">
    <div class="content_popup">
        <div class="wrapper_popup">
           <div class="content_art">
              <div class="title_art">
                 <p class=" gradient_text text_center text_upper">
                 Phú Đại Quan Gia
                 </p>
              </div>
              <div class="info_art">
                 <p class="name_art">
                    Tên nhân vật : 
                    <span class="color_orange">
                    {{$xem_hang_chi_tiet[4]->rolename}}                                       </span>
                 </p>
                 <p class="maychu_art">
                 Hệ phái: 
                    <span class="color_orange">
                    {{$xem_hang_chi_tiet[4]->occupation}}   
                    </span>
                 </p>
              </div>
              <p class="line_vip text_center">
                 Cấp VIP
              </p>
              <p class="icon_vip text_center">
                 <img src="./asset/number_vip{{$xem_hang_chi_tiet[4]->level}}.png" alt="">
              </p>
              <a class="close_content"></a>
           </div>
        </div>
     </div>
  </div>
  <div class="popup popup_art" id="popup_art2" style="display: none;">
     <div class="content_popup">
        <div class="wrapper_popup">
           <div class="content_art">
              <div class="title_art">
                 <p class=" gradient_text text_center text_upper">
                 Phú Quý Nghịch Thiên
                 </p>
              </div>
              <div class="info_art">
                 <p class="name_art">
                    Tên nhân vật : 
                    <span class="color_orange">
                    {{$xem_hang_chi_tiet[2]->rolename}}                                         </span>
                 </p>
                 <p class="maychu_art">
                   Hệ phái: 
                    <span class="color_orange">
                    {{$xem_hang_chi_tiet[2]->occupation}}       
                    </span>
                 </p>

              </div>
              <p class="line_vip text_center">
                 Cấp VIP
              </p>
              <p class="icon_vip text_center">
                 <img src="./asset/number_vip{{$xem_hang_chi_tiet[2]->level}}.png" alt="">
              </p>
              <a class="close_content"></a>
           </div>
        </div>
     </div>
  </div>
  <div class="popup popup_art" id="popup_art1" style="display: none;">
     <div class="content_popup">
        <div class="wrapper_popup">
           <div class="content_art">
              <div class="title_art">
                 <p class=" gradient_text text_center text_upper">
                   Phú Khả Địch Quốc
                 </p>
              </div>
              <div class="info_art">
                 <p class="name_art">
                    Tên nhân vật : 
                    <span class="color_orange">
                        {{$xem_hang_chi_tiet[0]->rolename}}                                         </span>
                 </p>
                 <p class="maychu_art">
                    Hệ phái: 
                    <span class="color_orange">
                    {{$xem_hang_chi_tiet[0]->occupation}}    
                    </span>
                 </p>
              </div>
              <p class="line_vip text_center">
                 Cấp VIP
              </p>
              <p class="icon_vip text_center">
                 <img src="./asset/number_vip{{$xem_hang_chi_tiet[0]->level}}.png" alt="">
              </p>
              <a class="close_content"></a>
           </div>
        </div>
     </div>
  </div>
  <div class="popup popup_art" id="popup_art3" style="display: none;">
     <div class="content_popup">
        <div class="wrapper_popup">
           <div class="content_art">
              <div class="title_art">
                 <p class=" gradient_text text_center text_upper">
                 Tài Đại Khí Thô
                 </p>
              </div>
              <div class="info_art">
                 <p class="name_art">
                    Tên nhân vật : 
                    <span class="color_orange">
                    {{$xem_hang_chi_tiet[1]->rolename}}                                        </span>
                 </p>
                 <p class="maychu_art">
                    Hệ phái: 
                    <span class="color_orange">
                    {{$xem_hang_chi_tiet[1]->occupation}}      
                    </span>
                 </p>
              </div>
              <p class="line_vip text_center">
                 Cấp VIP
              </p>
              <p class="icon_vip text_center">
                 <img src="./asset/number_vip{{$xem_hang_chi_tiet[1]->level}}.png" alt="">
              </p>
              <a class="close_content"></a>
           </div>
        </div>
     </div>
  </div>
  <div class="popup popup_art" id="popup_art5" style="display: none;">
     <div class="content_popup">
        <div class="wrapper_popup">
           <div class="content_art">
              <div class="title_art">
                 <p class=" gradient_text text_center text_upper">
                 Gia Tài Vạn Quán
                 </p>
              </div>
              <div class="info_art">
                 <p class="name_art">
                    Tên nhân vật : 
                    <span class="color_orange">
                    {{$xem_hang_chi_tiet[3]->rolename}}                                             </span>
                 </p>
                 <p class="maychu_art">
                 Hệ phái: 
                    <span class="color_orange">
                    {{$xem_hang_chi_tiet[3]->occupation}}       
                    </span>
                 </p>
              </div>
              <p class="line_vip text_center">
                 Cấp VIP
              </p>
              <p class="icon_vip text_center">
                 <img src="./asset/number_vip{{$xem_hang_chi_tiet[3]->level}}.png" alt="">
              </p>
              <a class="close_content"></a>
           </div>
        </div>
     </div>
  </div>


</section>
      <section class="checkvip">
         <div class="bg_xh">
           <div class="container">
           <div class="header_checkvip">
               <div class="text_left tugiac_left">
                  <p class="text_upper">phú hào ngũ tuyệt <span class="text_month"> <span class="month_show">{{Carbon\Carbon::now()->format('m/Y')}}</span></span></p>
               </div>
               <div href="#" class="link_show link_bxh text_upper text_center">
                  
               </div>
            </div>
           </div>
         </div>
         <div class="container">
            
            <div class="body_checkvip">
               <div class="title_body  text_upper text_center">
                  <p class="tugiac_left tugiac_right">Hệ thống cấp bậc VIP</p>
               </div>
               <div class="list_number_top">
                  <div class="item item_normal">
                     <span class="tooltiptext">Click để xem</span>
                     <img src="./asset/number_vip1.png" alt="" class="vip1">
                  </div>
                  <div class="item item_normal">
                     <span class="tooltiptext">Click để xem</span>
                     <img src="./asset/number_vip2.png" alt="" class="vip2">
                  </div>
                  <div class="item item_normal">
                     <span class="tooltiptext">Click để xem</span>
                     <img src="./asset/number_vip3.png" alt="" class="vip3">
                  </div>
                  <div class="item item_normal">
                     <span class="tooltiptext">Click để xem</span>
                     <img src="./asset/number_vip4.png" alt="" class="vip4">
                  </div>
                  <div class="item item_normal">
                     <span class="tooltiptext">Click để xem</span>
                     <img src="./asset/number_vip5.png" alt="" class="vip5">
                  </div>
                  <div class="item item_normal">
                     <span class="tooltiptext">Click để xem</span>
                     <img src="./asset/number_vip6.png" alt="" class="vip6">
                  </div>
               </div>
               <p class="text_center">
                  <img src="./asset/list_dot.png" alt="" class="list_dot">
               </p>
               <div class="text_diem clearfix">

                  <div class="item_diem text_center text_upper">
                     <p><span class="number_diem">50</span> điểm</p>
                  </div>
                
                  <div class="item_diem text_center text_upper">
                     <p><span class="number_diem">500</span> điểm</p>
                  </div>
                  <div class="item_diem text_center text_upper">
                     <p><span class="number_diem">1.000</span> điểm</p>
                  </div>
                  <div class="item_diem text_center text_upper">
                     <p><span class="number_diem">3.000</span> điểm</p>
                  </div>
                  <div class="item_diem text_center text_upper">
                     <p><span class="number_diem">6.000</span> điểm</p>
                  </div>
                  <div class="item_diem text_center text_upper">
                     <p><span class="number_diem">10.000</span> điểm</p>
                  </div>
               </div>
               <p class="text_info tugiac_left">Hệ thống VIP sẽ bị reset vào ngày mùng 1 hàng tháng.</p>
               <p class="text_info tugiac_left">1 điểm VIP = 1000 VNĐ</p>
               <div class="link_show link_dacquyen text_upper text_center" style="margin-top: 26px;">
               
               </div>
            </div>
         </div>
      </section>
      <section class="infovip clearfix">
         <div class="container">
            <div class="link_nav_infovip">
               <ul>
                  <li class="active">
                     <a href="javascript:void(0)" class="a100 text_upper loaddata" data-url="tab-noi-dung">
                     Nội Dung <br>
                     <span>CHI TIẾT</span>
                     </a>
                     
                  </li>
                  <li class="">
                     <a href="javascript:void(0)" class="a100 text_upper loaddata" data-url="tab-diem-danh">
                        điểm danh <br>
                     <span>HÀNG NGÀY</span>
                     </a>
                  </li>
                  <li class="">
                     <a href="javascript:void(0)" class="a100 text_upper loaddata" data-url="tab-nhan-qua">
                     vip <br>
                     <span>ĐẠI LỤC</span>
                     </a>
                  </li>
                  <li class="">
                     <a href="javascript:void(0)" class="a100 text_upper loaddata" data-url="tab-sinh-nhat">
                     nhận quà <br>
                     <span>sinh nhật</span>
                     </a>
                  </li>
                  <li class=" ">
                     <a href="javascript:void(0)" class="a100 text_upper loaddata" data-url="tab-ca-nhan">
                     thông tin <br>
                     <span>cá nhân</span>
                     </a>
                  </li>
               </ul>
            </div>

            <div class="box_infovip tab-noi-dung active-info">
               <div class="title_vinhdanh text_center text_upper">
                  <p style="font-size: 30px;">NỘI DUNG CHƯƠNG TRÌNH VIP</p>
               </div>
   
            </div>
<!-- tab nhận quà -->

<div class="box_infovip tab-diem-danh">
   
   <div class="box_infovip" style="min-height: 1388px;">
      <div class="qua_thang">
         <div class="header_quathang clearfix">
            <div class="right_header">
               <h2 class="tit_right_header text_upper">NHẬN QUÀ ƯU ĐÃI THÁNG {{Carbon\Carbon::now()->format('m')}}</h2>
               
               </form>
            </div>
         </div>
      <div class="body_quathang">
            <div class="list_thang">
            @foreach($qua_ngay as $value)
               <div class="item">
                  <div class="month text_center">
                     <p>{{$value->name}}</p>
                  </div>
                  <div class="box_qua" >
                     <p class="icon_qua">
                        <img src="{{$value->img}}" alt="{{$value->img}}">
                     </p>
                     <p class="capbac text_center text_upper">
                     {{$value->name}}
                     </p>
                     @if(Carbon\Carbon::now()->format('d') < $value->slot)
                     <p class="text_center">
                              <button class="text_upper btn_qua btn_khongdat"  style="background-image: url('./asset/bg_vg.png');color:#000">chưa mở</button>
                          </p>
                     @elseif(Carbon\Carbon::now()->format('d') == $value->slot)
                          @if(isset($check_qua_ngay) && $check_qua_ngay->slot == $value->slot)
                          <p class="text_center">
                              <button  class="text_upper btn_qua btn_khongdat" style="background: url('./asset/bg_ok.png') no-repeat center center;" >Đã nhận quà </button>
                          </p>
                          @else
                           <p class="text_center">
                              <button  onclick="info_detail(this)" name-gift="{{$value->name}}" detail-gift="{{$value->description}}" level="{{$value->level}}" id-gift="{{$value->id}}" class="text_upper btn_qua btn_khongdat" style="background: url('./asset/bg_ok.png') no-repeat center center;" >Nhận quà </button>
                          </p>
                          @endif
  
                     @else
                          <p class="text_center">
                              <button class="text_upper btn_qua btn_khongdat">quá hạn</button>
                          </p>
                     @endif
            
                  
                     
                  </div>
               </div>
            @endforeach  
                    
                  
               </div>

         </div>
      </div>
   </div>
 </div>

<!-- end tab nhận quà -->

<!-- tab điểm danh -->

<div class="box_infovip tab-nhan-qua">
   
   <div class="box_infovip">
      <div class="qua_thang">
         <div class="header_quathang clearfix">
            <div class="right_header">
               <h2 class="tit_right_header text_upper">Nhận quà ưu đãi</h2>
               
               <span class="tit_small"> Kết thúc nhận quà đến hết tháng đó! </span>
            </div>
         </div>
         <div class="body_quathang">
            <div class="list_thang">
               @foreach($qua_thang as $value)
                        <div class="item hide_level level_{{$value->level}}" >
                        <div class="month text_center">
                           <p>{{$value->name}}</p>
                        </div>
                        <div class="box_qua">
                           <p class="icon_qua">
                              <img src="https://cuuam.gosu.vn/home/static/templates/frontend/vip/assets/images/icon_quauudai.png" alt="">
                           </p>
                           <p class="capbac text_center text_upper">
                                  {{$value->name}}       
                           </p>
                           <p class="text_center">
                              @if(Carbon\Carbon::now()->format('m') < $value->slot)
                                 <button class="text_upper btn_qua btn_khongdat" style="background-image: url('./asset/bg_vg.png');color:#000">chưa mở</button>
                              @elseif(Carbon\Carbon::now()->format('m') == $value->slot)
                                 @if(count($check_thang)> 0)
                                      @foreach($check_thang as $qua)
                                       @if($qua->slot == $value->slot)
                                          <button  class="text_upper btn_qua btn_khongdat hide_level level_{{$value->level}}" style="background: url('./asset/bg_ok.png') no-repeat center center;" >Đã Nhận quà </button>
                                       @else
                                          <button  onclick="info_detail(this)" name-gift="{{$value->name}}" detail-gift="{{$value->description}}" id-gift="{{$value->id}}" level="{{$value->level}}" class="text_upper btn_qua btn_khongdat" style="background: url('./asset/bg_ok.png') no-repeat center center;" >Nhận quà </button>
                                       @endif 
                                       @endforeach  
                                 @else
                                 <button  onclick="info_detail(this)" name-gift="{{$value->name}}" detail-gift="{{$value->description}}" id-gift="{{$value->id}}" level="{{$value->level}}" class="text_upper btn_qua btn_khongdat" style="background: url('./asset/bg_ok.png') no-repeat center center;" >Nhận quà </button>
                                 @endif
                        
                       
                              @else
                                 <button class="text_upper btn_qua btn_khongdat">quá hạn</button>
                              @endif
                          </p>
                        </div>
                     </div>
                              
               @endforeach               
                           
                           
                        </div>
            <div class="right_cuoinam">
               <div class="year text_center">
                  <p>Quà 2020</p>
               </div>
               <p class="qua_vip">
                  <img src="https://cuuam.gosu.vn/home/static/templates/frontend/vip/assets/images/icon_quauudai_vip.png" alt="">
               </p>
               <p class="vip_end text_center text_upper">
                  vip N/A            </p>
               <p class="text_center">
                                    <button class="text_upper btn_qua btn_khongdat" >đã đóng</button> <!-- btn_nhan btn_chuanhan -->
                              </p>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- end tab điểm danh  -->

<!-- tab sinh nhật  -->
<div class="box_infovip tab-sinh-nhat" >
      <div class="qua_sinh_nhat qua_thang">
         <div class="header_quathang clearfix">
            <div class="right_header right_sinhnhat">
               <p class="title_info text_center text_upper" style="font-family: trajan !important;font-size: 40px;">
                  QUÀ MỪNG SINH NHẬT
               </p>
               
            </div>
            <div class="text_bd">
               <p class="text_center text_small">Quà sinh nhật chỉ dành cho tài khoản từ VIP1-VVIP. Mở nhận vào ngày sinh nhật của tài khoản và kết thúc nhận sau 30 ngày.</p>
            </div>
         </div>
         
         <div class="box_sinhnhat">
            <div class="your_birthday">
               <p class="text_center">Sinh nhật của bạn: <span class="color_orange birthday_text"></span></p>
            </div>
            <p class="qua_sinhnhat text_center">
               <img src="https://cuuam.gosu.vn/home/static/templates/frontend/vip/assets/images/quasinhnhat.png" alt="">
            </p>
            <div class="day_remain">
               
            </div>
            <p class="text_center btn_sn">
               <button class="nhanqua_sn text_upper btn-gift-receive" onclick="info_detail(this)" name-gift="{{$qua_sinh_nhat->name}}" level="{{$qua_sinh_nhat->level}}" detail-gift="{{$qua_sinh_nhat->description}}" id-gift="{{$qua_sinh_nhat->id}}">
               NHẬN QUÀ
               </button>
            </p>
         </div>

      </div>
   </>
 </div>

<!-- end tab sinh nhật -->

<!-- tab cá nhân -->
<div class="box_infovip tab-ca-nhan">
   <div class="box_infovip">
      <div class="info_user">
         <p class="title_info text_center text_upper">
            Thông tin cá nhân	
         </p>
         <div class="box_info_user clearfix">
            
            <div class="manage_info_left">
      <div class="name_user_exit">
         <p class="clearfix as">
            <span>Xin chào</span> <span class="color_orange  name_user"></span>
            <a href="#" class="logout" style="color:#fff">Thoát</a>
         </p>
         <p class="line clearfix"></p>
         <p class="imgvip text_center">
            <img src="./asset/number_vip1.png" alt="">
         </p>
         <div class="list_nhan_qua">
            <div class="header_nhan_qua">
               Lịch sử nhận quà
            </div>
            <div class="list">
              
            </div>
         </div>
      </div>
   </div>      
         </div>
      </div>
   </div>
   </div>
<!-- end tab cá nhân -->

      </section>
      <footer id="footer">
         <div class="container">
            <div class="logo gosu"></div>
            <div class="address">
               <p>Copyright © 2010 - 2020 ChangWan. All Rights Reserved.</p>
               <p>Phát hành Chuyên nghiệp tại Việt Nam</p>
               <p>Đẳng cấp - Uy tín - Làm nhiều hơn nói</p>
               <p>Địa chỉ: Tòa nhà 25T2 - Hoàng Đạo Thúy - Hà Nội</p>
            </div>
  
         </div>
      </footer>
      <div class="anchor-menu">
         <ul>
            <li>
               <a class="a100 tai_game active" target="_blank" href="https://tieungaodailuc.com/Download/HuongDan">
                  <p class="text_tai gradient_text" style="font-size: 100% !important"><img src="./asset/down.png"></p>
                  <!-- <p class="gb gradient_text">18,7 GB</p> -->
               </a>
            </li>
            <li><a class="a100 register" rel="register-popup" href="javascript:void(0)" onclick="show_registration()"><span class="gradient_text"><img src="./asset/dk.png"></span></a></li>
            <li><a class="a100 card" target="_blank" href="https://taikhoan.tieungaodailuc.com"><span class="gradient_text"><img src="./asset/nx.png"></span></a></li>
            <li><a class="a100 card" style="cursor: pointer;"><span class="gradient_text"><img src="./asset/FAQ.png"></span></a></li>
         </ul>
      </div>
      <div class="back-to-top">
         
      </div>

     

<div class="popup popup_detail" id="popup_bxh">
   <div class="content_popup">
   <div class="wrapper_popup">
      <div class="title_detail text_center">
         <span class="text_upper">BXH PHÚ HÀO NGŨ TUYỆT <span class="thang"></span></span>
      </div>
      <p style="    color: red;
       text-align: center;
       font-family: &#39;tahomabold&#39;;
       font-size: 16px;
       width: 300px;
       margin: 5px auto 0;
       border: 1px solid #2077bd;
       border-radius: 10px;
       padding: 3px 0;">Cập nhật 30 - 40 phút một lần!</p>
      <div class="content_new_detail mCustomScrollbar _mCS_1 mCS_no_scrollbar">
         <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0">
            <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" >
         <div class="text">
            <table class="list_xephang clearfix">
               <tbody>
                  <tr>
                     <td>Xếp hạng</td>
                     <td>Tài khoản</td>
                     <td>Tên nhân vật</td>
                     <td>Hệ phái</td>
                  </tr>
                  @foreach($xem_hang_chi_tiet as $key => $value)
                   <tr>
                     <td>{{$key + 1 }}</td>
                     <td>{{substr($value->username,0,4)}}******</td>
                     <td>{{$value->rolename}}</td>
                     <td>{{$value->occupation}}</td>

                  </tr>
                  @endforeach                
               </tbody>
            </table>
                     </div>
      </div></div></div>
      <a class="close_content"></a>
   </div>
</div>
</div>
      <div class="popup popup_detail" id="popup_quatop">
         <div class="content_popup">
            <div class="wrapper_popup">
               <div class="title_detail text_center">
                  <span class="text_upper">Quà Top</span>
               </div>
               <div class="content_new_detail mCustomScrollbar _mCS_2 mCS_no_scrollbar"><div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 600px;" tabindex="0"><div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                  <div class="text">
                     Quà Top
                  </div>
               </div><div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
               <a class="close_content"></a>
            </div>
         </div>
      </div>
      <!-- qua vip -->
      <div class="popup popup_detail" id="popup_quavip">
         <div class="content_popup">
            <div class="wrapper_popup">
               <div class="title_detail text_center">
                  <span class="text_upper">Quà vip</span>
               </div>
               <div class="content_new_detail mCustomScrollbar _mCS_3 mCS_no_scrollbar"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 600px;" tabindex="0"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                  <div class="text">
                     Quà vip
                  </div>
               </div><div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
               <a class="close_content"></a>
            </div>
         </div>
      </div>
      <!-- show dacquyen -->
      <div class="popup popup_detail" id="popup_dacquyen">
         <div class="content_popup">
            <div class="wrapper_popup">
               <div class="title_detail text_center">
                  <span class="text_upper">Đặc quyền</span>
               </div>
              

         <div class="content_new_detail mCustomScrollbar _mCS_1"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
         <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0">
         <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y">
         <div class="text">
              <p> - Xin chào các Đại Hiệp! </p>
               Hệ thống VIP là một tính năng mới của Tiếu Ngạo Đại Lục nhằm mục đích giúp các Đại Hiệp khẳng định Vị Thế của mình. Đặc biệt hơn khi trở thành VIP các Đại Hiệp sẽ nhận được rất nhiều ưu đãi mà không phải ai cũng có. Mời các Đại Hiệp xem chi tiết Ưu Đãi dành cho VIP dưới đây: 
               
            <table class=" clearfix" style="width:100%">
               <tbody>
                  <tr>
                     <td>VIP</td>
                     <td> Số Lượng<br>(xu cần nạp)</td>
                     <td>Ưu Đãi</td>

                  </tr>
                  <tr>
                     <td rowspan="7">vip 1</td>
                     <td rowspan="7">100 xu</td>
                     <td >Xuyên kim thạch cực phẩm x3</td>
                  </tr>
                  <tr>
                     <td>Tinh luyện thạch cấp 2 x30</td>
                  </tr>  
                  <tr>
                     <td>Phi hành kỳ x10</td>
                  </tr>  
                  <tr>
                     <td>Hoán tiêu lệnh x5</td>
                  </tr>         
                  <tr>
                     <td>Trạng thái phù VIP x1</td>
                  </tr> 
                  <tr>
                     <td>Túi ngọc cấp 2 x10</td>
                  </tr> 
                  <tr>
                     <td>Danh hiệu Siêu Phàm Hiệp Khách x1 (28 ngày)</td>
                  </tr>
                  <tr>
                     <td rowspan="7">vip 2</td>
                     <td rowspan="7">1000 xu</td>
                     <td >Xuyên kim thạch cực phẩm x5</td>
                  </tr>
                  <tr>
                     <td>Mộc chất xỉ luân x50</td>
                  </tr>  
                  <tr>
                     <td>Tinh trần sa x50</td>
                  </tr>  
                  <tr>
                     <td>Hoán tiêu lệnh x10</td>
                  </tr>         
                  <tr>
                     <td>Trạng thái phù VIP x1</td>
                  </tr> 
                  <tr>
                     <td>TInh luyện thạch cấp 3 x30</td>
                  </tr> 
                  <tr>
                     <td>Danh hiệu Xuất Trần Hiệp Khách x1 (28 ngày)</td>
                  </tr>
                  <tr>
                     <td rowspan="8">vip 3</td>
                     <td rowspan="8">2000 xu</td>
                     <td >Mộc chất xỉ luân x99</td>
                  </tr>
                  <tr>
                     <td>Tinh trần sa x99</td>
                  </tr>  
                  <tr>
                     <td>Hộp quà bảo vật x5</td>
                  </tr>  
                  <tr>
                     <td>Đại hoàn đơn cấp 2 x20</td>
                  </tr>         
                  <tr>
                     <td>Trạng thái phù VIP x1</td>
                  </tr> 
                  <tr>
                     <td>Hoán tiêu lệnh tím x3</td>
                  </tr> 
                  <tr>
                     <td>Luyện hóa thạch x50</td>
                  </tr>
                  <tr>
                     <td>Danh hiệu Lăng Tuyệt Vu Ảnh x1 (28 ngày)</td>
                  </tr>
                  <tr>
                     <td rowspan="10">vip 4</td>
                     <td rowspan="10">6000 xu</td>
                     <td >Mộc chất xỉ luân x99</td>
                  </tr>
                  <tr>
                     <td>Tinh trần sa x99</td>
                  </tr>  
                  <tr>
                     <td>Đại hoàn đơn cấp 2 x 30</td>
                  </tr>  
                  <tr>
                     <td>Hộp quà bảo vật x10</td>
                  </tr>         
                  <tr>
                     <td>Trạng thái phù VIP x1</td>
                  </tr> 
                  <tr>
                     <td>Hoán tiêu lệnh tím x5</td>
                  </tr> 
                  <tr>
                     <td>Tinh luyện thạch cấp 5 x50</td>
                  </tr>
                  <tr>
                     <td>Thú cưỡi Tàng thanh câu x1 (28 ngày)</td>
                  </tr>
                  <tr>
                     <td>Danh hiệu Hỗn Thiên Cao Thủ  (28 ngày) </td>
                  </tr>
                  <tr>
                     <td>Thú cưng Cầu Chim Cánh Cụt x1 (28 ngày)</td>
                  </tr>
                  <tr>
                     <td rowspan="12">vip 5</td>
                     <td rowspan="12">12000 xu</td>
                     <td >Mộc chất xỉ luân x99</td>
                  </tr>
                  <tr>
                     <td>Tinh trần sa x99</td>
                  </tr>  
                  <tr>
                     <td>Thời trang Thiển Yên x1 (Thuần Hắc) (28 ngày)</td>
                  </tr>  
                  <tr>
                     <td>Thú cưng Chương Ngư Muội x1 ( 28 ngày)</td>
                  </tr>         
                  <tr>
                     <td>Thú cưỡi Trúc lâm linh x1 (28 ngày)</td>
                  </tr> 
                  <tr>
                     <td>Trạng thái phù VIP x1</td>
                  </tr> 
                  <tr>
                     <td>Hoán tiêu lệnh cam x5</td>
                  </tr>
                  <tr>
                     <td>Đại hoàn đơn cấp 3 x20</td>
                  </tr>
                  <tr>
                     <td>Luyện hóa thạch cao cấp x99 </td>
                  </tr>
                  <tr>
                     <td>Hộp quà bảo vật x15</td>
                  </tr>
                  <tr>
                     <td>Lễ bao tinh hoa trang bị x10 (xịn) </td>
                  </tr>
                  <tr>
                     <td>Danh hiệu Tiềm Long Ngâm Uyên x1 (28 ngày)</td>
                  </tr>
                  <tr>
                     <td rowspan="12">vip 6</td>
                     <td rowspan="12">20000 xu</td>
                     <td >Mộc chất xỉ luân x99</td>
                  </tr>
                  <tr>
                     <td>Mộc chất xỉ luân x99</td>
                  </tr>  
                  <tr>
                     <td>Tinh trần sa x99</td>
                  </tr>  
                  <tr>
                     <td>Trạng thái phù VIP x1</td>
                  </tr>         
                  <tr>
                     <td>Thú cưỡi Phù tiên thanh ngưu x1 (28 ngày)</td>
                  </tr> 
                  <tr>
                     <td>Thú cưng Trư Bảo Khôi Khôi x1 (28 ngày)</td>
                  </tr> 
                  <tr>
                     <td>Đại hoàn đơn cấp 3 x30</td>
                  </tr>
                  <tr>
                     <td>Hoán tiêu cam x10</td>
                  </tr>
                  <tr>
                     <td>Lễ bao tinh hoa trang bị x15 (xịn) </td>
                  </tr>
                  <tr>
                     <td>Hộp quà bảo vật x20</td>
                  </tr>
                  <tr>
                     <td>Luyện hóa thạch cao cấp x99</td>
                  </tr>
                  <tr>
                     <td>Danh hiệu Vô Song Vương Giả x1 (28 ngày)</td>
                  </tr>
               </tbody>
            </table>
            <p>- Lưu Ý: Quà VIP được Reset vào ngày mùng 1 hàng tháng ( đặc biệt sẽ không bị tụt điểm VIP).</p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Để tiếp tục nhận Ưu Đãi quà VIP sau khi Reset các Đại Hiệp chỉ cần nạp 200k là có thể tiếp tục Nhận Quà tại Mốc VIP hiện tại.
                     </div>
      </div></div></div></div></div>
               <a class="close_content"></a>
            </div>
         </div>
      </div>
      <!-- show faqvip -->
      <div class="popup popup_detail" id="popup_faqvip">
         <div class="content_popup">
            <div class="wrapper_popup">
               <div class="title_detail text_center">
                  <span class="text_upper">FAQ VIP</span>
               </div>
          
               <a class="close_content"></a>
            </div>
         </div>
      </div>


     
      <!-- @ import components/popups/popup_chontuong -->
      @foreach($list_vip as $key => $value)
      <div class="popup popup_message" id="popup_vip{{$key}}">
         <div class="content_popup">
            <div class="wrapper_popup">
               <div class="title_detail text_center">
                  <span class="text_upper">THỐNG KÊ CẤP VIP</span>
               </div>
               <div class="content_message">
                  <p>Hiện tại có</p>
                  <p><span class="color_orange">{{$value[0]->count}}</span></p>
                  <p>
                     <img src="./asset/number_vip{{$key}}.png" alt="">
                  </p>
                  <a class="close_content"></a>
               </div>
            </div>
         </div>
      </div>
      @endforeach
     

      <!-- show lỗi -->
      <div class="popup popup_message" id="popup_errors">
         <div class="content_popup">
            <div class="wrapper_popup" style="width: 500px;height: 190px;">
               <div class="title_detail text_center">
                  <span class="text_upper">THÔNG BÁO</span>
               </div>
               <div class="content_message">
                  <p class="txt_error">Vui lòng thử lại</p>
                  <a class="close_content"></a>
               </div>
            </div>
         </div>
      </div>

      <div class="popup popup_message" id="popup_registration">
         <div class="content_popup">
            <div class="wrapper_popup">
               <div class="content_message">
                  <a class="close_content"></a>
               </div>
               <div class="form">
                  <input type="text" class="registration_name input" placeholder="Tên tài khoản">
                  <input type="email" class="registration_email input" placeholder="Email">
                  <input type="text" class="registration_phone input" placeholder="Số điện thoại">
                  <input type="password" class="registration_password input" placeholder="Mật khẩu">
                  <button onClick="onRegistration()"><img src="./asset/btn_dangki.png"></button><br>
                  <span class="text">Bạn đã có tài khoản, <a href="javascript:void(0)" onclick="show_login()" style="color: #943a00;">Đăng nhập</a> ngay</span>
               </div>
            </div>
         </div>
      </div>
      <div class="popup popup_message" id="popup_login">
         <div class="content_popup">
            <div class="wrapper_popup">
               <div class="content_message">
                  <a class="close_content"></a>
               </div>
               <div class="form">
                  <input class="input login_name" type="text" placeholder="Tên tài khoản">
                  <input class="input login_password" type="password" placeholder="Mật khẩu">
                  <div class="form-check">
                     <input type="checkbox" class="form-check-input">
                     <label class="form-check-label" for="exampleCheck1">Nhớ đăng nhập</label>
                   </div>
                  <button onClick="onLogin()"><img src="./asset/btn_login.png"></button><br>
                  <div class="text">
                     <a href="">Quên mật khẩu</a><br>
                     Bạn chưa có tài khoản, <a href="javascript:void(0)" onclick="show_registration()" style="color: #943a00;">Đăng ký</a> tại đây
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="popup popup_message" id="popup_info_detail">
         <div class="content_popup">
            <div class="wrapper_popup">
               <div class="content_message">
                  <a class="close_content"></a>
               </div>
               <div class="popup_header">
                  Thông tin cá nhân
               </div>
               <div class="popop_body">
                  Tên quà : <span class='name_gift'></span><br>
                  Thông tin chi tiết :<span class="detail_gift"></span><br>
                  <div class="select">
                     <input type="hidden" class="gift_id">
                     <select class="select_role">
                        <option value="0">Chọn máy chủ</option>
                        @foreach($game_zones as $value)
                        <option value="{{$value->zone_id}}">{{$value->name}}</option>
                        @endforeach
                     </select>
                     <select class="all_role">
                        <option value="0">Chọn nhân vật</option>
                     </select>
                  </div>
                  <button class="receiving_gifts"><img src="./asset/btn_detail.png"></button>
               </div>
            </div>
         </div>
      </div>
      <div class="popup popup_message" id="popup_notification">
         <div class="content_popup">
            <div class="wrapper_popup">
               <div class="content_message">
                  <a class="close_content" data="notification"></a>
               </div>
            <div class="text_notification">
               <strong>Chúc mừng<span style="color: #420804;"> “Tên tài khoản”</span><br> đã nhận được vật phẩm <span style="color: #420804;">“ Một cái item”</span></strong><br>
               <span>Vào game và chiến đấu ngay thôi nào</span>
            </div>
            </div>
         </div>
      </div>

      <script type="text/javascript">
        function show_erros(text) {
          $('#popup_errors').fadeIn();
          $('.txt_error').text(text);
        }
        
      </script>
      <script>
         function show_registration(){
            $('.popup').fadeOut();
            $('#popup_registration').fadeIn();
         }
         function show_login(){
            $('.popup').fadeOut();
            $('#popup_login').fadeIn();
         }
         function info_detail(el){
            $('.name_gift').html($(el).attr('name-gift'));
            $('.detail_gift').html($(el).attr('detail-gift'));
            $('.gift_id').val($(el).attr('id-gift'));
            $('#popup_info_detail').fadeIn();
         }
         function show_notification(){
            $('#popup_notification').fadeIn();
         }
      </script>
      <!-- loading -->
      <div class="popup" id="popup_loading" style="background: transparent;">
        <div class="content_popup">
          <div class="wrapper_popup" style="background: transparent;width:24px;height:24px;">
            <img src="./asset/fancybox_loading.gif" alt="">
          </div>
        </div>
      </div>
   
<script type="text/javascript">
        $('.loaddata2').on('click', function(e){
            var this_ = $(this);
   
            $('#popup_loading').fadeIn();
            setTimeout(function(){ 
               $('#popup_loading').fadeOut();
            }, 500);
         });
                    
         $('.loaddata').on('click', function(e){
            var this_ = $(this);
            if(this_.attr('data-url') != 'tab-noi-dung'){
               if(!localStorage.getItem('account')){
                  $('#popup_login').fadeIn();
                  return false;
               }
                
            }
               $('.box_infovip').removeClass('active-info');
               $('.'+ this_.attr('data-url')).addClass('active-info');
               $('.loaddata').parent().removeClass('active');
               $(this_).parent().addClass('active');
            
            
         });
</script>
<script type="text/javascript" src="./asset/vendor.min.js"></script>
<script type="text/javascript" src="./asset/app.min.js"></script>
<script>
    $(document).ready(function() {

         $('.vip1').click(function() {
           $('#popup_vip1').fadeIn();
        });
        $('.vip2').click(function() {
           $('#popup_vip2').fadeIn();
        });
        $('.vip3').click(function() {
           $('#popup_vip3').fadeIn();
        });
        $('.vip4').click(function() {
           $('#popup_vip4').fadeIn();
        });
        $('.vip5').click(function() {
           $('#popup_vip5').fadeIn();
        });
        $('.vip6').click(function() {
           $('#popup_vip6').fadeIn();
        });
    
       $('.link_bxh').click(function() {
           $('#popup_bxh').fadeIn();
       });
       $('.link_dacquyen').click(function() {
          $('#popup_dacquyen').fadeIn();
       });

       $('.link_faqvip').click(function() {
          $('#popup_faqvip').fadeIn();
       });

       $('.art_top4').click(function() {
          $('#popup_art4').fadeIn();
       });
       $('.art_top2').click(function() {
          $('#popup_art2').fadeIn();
       });
       $('.art_top1').click(function() {
          $('#popup_art1').fadeIn();
       });
       $('.art_top3').click(function() {
          $('#popup_art3').fadeIn();
       });
       $('.art_top5').click(function() {
          $('#popup_art5').fadeIn();
       });
    
        // show qua vip/top
        $('.view_quatop').click(function() {
           $('#popup_quatop').fadeIn();
        });
        

        // $('.link_left_header').click(function() {
        //    alert('a');
        // });
        
    });
</script>
<script type="text/javascript">
   $(document).ready(function() {
      $('.close_content').click(function() {
         if($(this).attr('data') == 'notification'){
            $('#popup_notification').fadeOut();
            return false;
         }
         $('.popup').fadeOut();
      });
   });
</script>
<script>
   $(document).ready(function() {
      $('.art_top4').click(function() {
         $('#popup_art4').fadeIn();
      });
      $('.art_top2').click(function() {
         $('#popup_art2').fadeIn();
      });
      $('.art_top1').click(function() {
         $('#popup_art1').fadeIn();
      });
      $('.art_top3').click(function() {
         $('#popup_art3').fadeIn();
      });
      $('.art_top5').click(function() {
         $('#popup_art5').fadeIn();
      }); 
   });
</script>
<script>
  function onLogin(value) {
      grecaptcha.ready(function() {
        grecaptcha.execute('6LcnGsgUAAAAAGHcgYiO6iFqP3t8711jD6ugFxnp', {action: 'submit'}).then(function(token) {
             $.ajax({
               headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
                method: "POST",
                url: "/login",
                dataType: "json",
                data: {
                   username: $('.login_name').val(),
                   password: $('.login_password').val(),
                   'g-recaptcha-response': token,
                },
             }).done(function( msg ) {
                localStorage.setItem('account',JSON.stringify(msg));
                checkLogin(localStorage.getItem('account'));
                checkUser();
                $('.popup').fadeOut();
          
             }).fail(function(){
               $('.text_notification').html('<strong>Tên tài khoản hoặc mật khẩu không đúng</strong>');
               $('#popup_notification').fadeIn();
             }); 
        });
       });
     }
   function onRegistration(value) {
       grecaptcha.ready(function() {
        grecaptcha.execute('6LcnGsgUAAAAAGHcgYiO6iFqP3t8711jD6ugFxnp', {action: 'submit'}).then(function(token) {
             $.ajax({
               headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
                method: "POST",
                url: "/registration",
                dataType: "json",
                data: {
                   username: $('.registration_name').val(),
                   email: $('.registration_email').val(),
                   password: $('.registration_password').val(),
                   phonenumber: $('.registration_phone').val(),
                   'g-recaptcha-response': token,
                },
             }).done(function( msg ) {
                $('.text_notification').html('<strong>'+msg.text+'</strong>')
                $('#popup_notification').fadeIn();
          
             }); 
        });
       });
     }
   $( ".select_role" ).change(function() {
      var that = $(this);

            $.ajax({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  method: "POST",
                  url: "/select-role",
                  dataType: "json",
                  data: {
                     zone_id:that.val(),
                     user_id:JSON.parse(localStorage.getItem('account')).uid,
                  },
            }).done(function( msg ) {
               $('.all_role').html('<option value="0">Chọn nhân vật</option>');
               for (i = 0; i < msg.length; i++) {
                  $('.all_role').append('<option value=' + msg[i]['roleid'] + '>' + msg[i]['name'] + '</option>');
               }
            }).fail(function(){
                  console.log('ss');
            }); 
       
      
   });
   $('.logout').click(function(){
      localStorage.removeItem('account');
      checkLogin();
   })
   $('.receiving_gifts').click(function(){
         console.log($('.all_role').val()+$('.select_role').val()+$('.gift_id').val());
         $.ajax({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  method: "POST",
                  url: "/receiving-gifts",
                  dataType: "json",
                  data: {
                     p_uid:JSON.parse(localStorage.getItem('account')).uid,
                     p_gift_id:$('.gift_id').val(),
                     p_role_id:$('.all_role').val(),
                     p_server_id:$('.select_role').val(),
                  },
            }).done(function( msg ) {
               $('.text_notification').html('<strong>'+msg+'</strong>');
               $('#popup_notification').fadeIn();
            }).fail(function(){
                  
            }); 
   })
   localStorage.getItem('account') ? checkLogin(localStorage.getItem('account')) : checkLogin();
   function checkLogin(value = ""){
      if(value){
         var value = JSON.parse(value);
         $('.link_login').hide();
         $('.info_name').show();
         $('.as .name_user').html(value.name);
      }else{
         $('.link_login').show();
         $('.info_name').hide();
      }
      
   }
 checkUser();
 function checkUser(){
   $.ajax({
      headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      method: "POST",
      url: "/detail-user",
      dataType: "json",
      data: {
         p_uid:JSON.parse(localStorage.getItem('account')).uid,
      },
      }).done(function( msg ) {
         $('.hide_level').hide();
         if(msg.vip){
         $('.level_'+msg.vip.level).show();
        }else{
         $('.level_1').show();
        }
         $('.imgvip').html('<img src="./asset/number_vip'+msg.vip.level+'.png" alt="">');
         $('.birthday_text').html(msg.user);
         $('.list_nhan_qua .list').html();
         var html = '<ul>';
         var list =  msg.list;
            for (let i = 0; i <list.length; i++) {
               html += '<li><span class="left">'+list[i].name+'</span><span class="right">'+list[i].received_time+'</span></li>';   
            }
               html +='</ul>';
        $('.list_nhan_qua .list').html(html);
   
        if(msg.check_day.length > 0 ){
          $('.btn_sn').html('<button class="nhanqua_sn text_upper btn-gift-receive" >ĐÃ NHẬN QUÀ</button>');
        }
        if(msg.count_birthday > 0){
           $('.day_remain').html('<p class="text_center">Còn <span class="color_orange">'+msg.count_birthday+'</span> ngày</p>');
        }else if(msg.count_birthday == 0){
         $('.day_remain').html('<p class="text_center">Nhận quà ngay</p>');
        }else{
         $('.day_remain').html('<p class="text_center">Đã qua sinh nhật của bạn </p>');
        }
      })
 }
 $('.back-to-top').on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({scrollTop:0}, '300');
		});
</script>
</body>
</html>