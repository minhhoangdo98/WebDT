@extends('layouts.new-master')
@section('content')
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <h3 class="panel-title">
      <span class="glyphicon glyphicon-home" style="font-size: 18px;"><a href="#" title=""> Home</a></span> 
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span><a href="#" title=""> Tin Tức </a>
      <!--   <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span> <a href="#" title=""> noi dung con</a> -->
    </h3>              
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 no-padding"> 
        <div class="fluid_container" style="height: 250px;">            
          <div class="camera_violet_skin" id="camera_wrap_1">
                <div data-thumb="{!!url('public/images/slides/thumbs/qc1.png')!!}" data-src="{!!url('public/images/slides/thumbs/qc1.png')!!}">
                <div class="camera_caption fadeFromBottom">
                    Sắm mới của LG - LG gram 2020. <em>Khuyến mãi lên đến 3 triệu, nhanh tay lên nào</em>
                </div>
            </div>
            <div data-thumb="{!!url('public/images/slides/thumbs/qc2.jpg')!!}" data-src="{!!url('public/images/slides/thumbs/qc2.jpg')!!}">
                <div class="camera_caption fadeFromBottom">
                    Điện thoại samsung <em>Khuyến mãi tất cả lên đến 2.5 triệu, nhanh tay lên nào</em>
                </div>
            </div>
            <div data-thumb="{!!url('public/images/slides/thumbs/qc3.jpg')!!}" data-src="{!!url('public/images/slides/thumbs/qc3.jpg')!!}">
                <div class="camera_caption fadeFromBottom">
                    Iphone 12 sắp ra mắt <em>nhanh tay đăng ký - nhập quà liền tay</em>
                </div>
            </div>
            <div  data-thumb="{!!url('public/images/slides/thumbs/qc4.png')!!}" data-src="{!!url('public/images/slides/thumbs/qc4.png')!!}">
                <div class="camera_caption fadeFromBottom">
                    Trọn bộ pc chơi game <em>Khuyến mãi chỉ còn 19.999.000 vnđ</em>
                </div>
            </div>
          </div><!-- #camera_wrap_1 -->       
        </div><!-- .fluid_container -->             
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="panel panel-success">
            <div class="panel-body">
              <div class="row">
              <!-- hot new content -->              
                <div class="col-lg-6">
                  <img src="{!!url('uploads/news/'.$hot1->images)!!}" alt="" height="200" width="100%">
                  <h3 class="title-h3"><a href="{!!url('tin-tuc/'.$hot1->id.'-'.$hot1->slug)!!}" title="">{!!$hot1->title!!} </a></h3>
                  <p class="summary-content">
                    {!!$hot1->intro!!}
                  </p>
                </div>
                <div class="col-lg-6 no-padding">
                  <div class="row">
                    @foreach($data as $row)
                      <div class="col-lg-12 ">
                        <h4><a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="{!!$row->title!!}">{!!$row->title!!}</a></h4>
                        <div class="col-lg-9">
                          <p class="sum">{!!$row->intro!!}</p>
                        </div>
                        <div class="col-lg-3 no-padding">
                          <a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title=""><img src="{!!url('uploads/news/'.$row->images)!!}" alt="" width="80" height="80" style="padding-right:10px; padding-left: 0;"></a>
                        </div>
                      </div>
                    @endforeach                   
                  </div>                                     
                </div>
              </div>

              <div class="row">
                @foreach($all as $row)
                  <div class="col-lg-12 no-padding">
                    <hr>
                    <div class="col-lg-3">
                      <a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="{!!$row->slug!!}"><img src="{!!url('/uploads/news/'.$row->images)!!}" alt="" width="90%" height="99%"> </a>
                    </div>
                    <div class="col-lg-9">
                      <h4><a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="">{!!$row->title!!}</a></h4>
                      <p> 
                        {!!$row->intro!!}
                      </p>
                      <p><strong>Lúc :</strong> {!!$row->created_at!!}  <strong>Bởi : </strong> <a href="#" title="admin"> {!!$row->author!!}</a></p>
                    </div>
                  </div> 
                @endforeach 
              </div><!-- /row -->
              {!!$all->render()!!}
            </div>
          </div>   
        </div>
      </div>     
    </div> 
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding">            
      <!-- panel inffo 1 -->
      <div class="panel panel-info"> 
        <ul class="nav nav-tabs">
          <li class="active"><a href="#1" data-toggle="tab">Tin mới </a></li>
        </ul>    
        <div class="panel-body"> 
          <div class="tab-content ">
            <div class="tab-pane active" id="1">
              <ul class="li-menu-tab">
                <div class="row">
                @foreach($all as $row)
                  <div class="col-lg-12 no-padding">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding">
                      <a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="{!!$row->title!!}"><img src="{!!url('uploads/news/'.$row->images)!!}" alt="{!!$row->images!!}" width="99%" height="99%"> </a>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 no-padding">
                     <a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="">{!!$row->title!!}</a>
                    </div>
                  </div>
                @endforeach                  
                        
                </div>
              </ul>
            </div>
          </div> <!-- /tab content -->
        </div>  <!-- /panel boody -->
    </div>
    <!-- panel info 2  quản cáo 1          -->          
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title text-center">Sự kiện HOT</h3>
      </div>
      <div class="panel-body no-padding">
        <a href="#" title=""><img src="{!!url('images/slides/thumbs/qc1.png')!!}" alt="" width="100%" height="100%"> </a> <br>
        <a href="#" title=""><img src="{!!url('images/slides/thumbs/qc2.png')!!}" alt="" width="100%" height="100%"> </a> <br>
        <a href="#" title=""><img src="{!!url('images/slides/thumbs/qc3.png')!!}" alt="" width="100%" height="100%"> </a>
        <a href="#" title=""><img src="{!!url('images/slides/thumbs/qc4.png')!!}" alt="" width="100%" height="100%"> </a>
        <a href="#" title=""><img src="{!!url('images/slides/thumbs/qc5.png')!!}" alt="" width="100%" height="100%"> </a>
      </div>
    </div> <!-- /panel info 2  quản cáo 1          -->        
  
     <!-- fan pages myweb -->
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Fans Pages</h3>
      </div>
      <div class="panel-body">
        Hãy <a href="#" title="">Like</a> facebook của AHKshop để cập nhật tin mới nhất
      </div>
    </div> <!-- /fan pages myweb -->        
  </div> 
</div>
<!-- ===================================================================================/news ============================== -->
@endsection