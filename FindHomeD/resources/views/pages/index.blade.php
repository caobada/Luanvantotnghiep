@extends('wrapper')
@section('contents')
<h3 class="tin-noi-bat">Tin nổi bật</h3>
      <div class="row">
              <!-- Item-->
              @foreach($top_10_post as $data)
              <div class="col-md-6 item">
                <div class="border-item">
                  <div class="row">
                <div class="col-md-6">
                  <img class="img img-hot" src="images/home/home1.jpg" alt="">
                </div>
                <div class="col-md-6">
                  <p class="title title-top"><a href="#"><b class="my-3">{{$data->title}}</b></a></p>
                  <button class="btn btn-sm btn-info">3 triệu/tháng</button>
                  <button class="btn btn-sm btn-info">20m<sup>2</sup></button>
                  <div>
                    <b>Quận Gò Vấp</b>,
                    <b>Thành phố Hồ Chí Minh</b>
                  </div>
                  <div>
                    <img class="icon-gadget" src="icon/pet.png"  data-toggle="tooltip" data-placement="top" title="Cho nuôi thú cưng">
                    <img class="icon-gadget" src="icon/bike_parking.png"  data-toggle="tooltip" data-placement="top" title="Có chỗ giữ xe">
                    <img class="icon-gadget" src="icon/car-parking.png"  data-toggle="tooltip" data-placement="top" title="Có chỗ đỗ xe ô tô">
                    <img class="icon-gadget" src="icon/cooking.png"  data-toggle="tooltip" data-placement="top" title="Được nấu ăn">
                    <img class="icon-gadget" src="icon/gear.png"  data-toggle="tooltip" data-placement="top" title="Trang trí lại phòng">
                    <img class="icon-gadget" src="icon/tolet1.png"  data-toggle="tooltip" data-placement="top" title="Có tolet riêng ">
                    <img class="icon-gadget" src="icon/waves.png"  data-toggle="tooltip" data-placement="top" title="Có wifi miễn phí ">
                  </div>  
                  <div class="describe">
                      <p>
                          Do không sắp xếp được thời gian nên mình cần khoáng lại dãy phòng trọ gồm 42 phòng + 4 kiot ( phòng giá từ 1tr8 đến 2tr5 ) Kiot 1 cái 4tr ( hiện tại chỉ còn trống vài P + 1 kiot ) . Giá khoáng 1 tháng là 80tr đặt cọc 2 tháng trả tiền trước 1 tháng . Mọi vấn đề chi tiết & thương lượng xin vui lòng liên hệ : 0906878018 ( Hùng ) miễn trung gian .

                      </p>
                  </div>
                </div>
              </div> 
              </div>
            </div>
            @endforeach  
              <!--end Item -->
          </div>
          
@endsection
@section('content-footer')
            <!--end Item -->
        </div>
        <div class="container">
          <h3 class="my-4">Tin</h3>
        <div class="col-md-12">
          <div class="row">
            <div class="col-lg-9 col-md-9">
              <div class="row box-item">
                    <div class="col-md-4">
                        <div class="images-item">
                          <img class="img" src="http://placehold.it/750x500">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <p class="title title-default"><a href="#"><b class="my-3">Nhà cao Cấp Nhất Việt Nam Hiện Nay</b></a></p>
                        <div>Diện tích:<b> 20m<sup>2</sup></b>  Khu vực:<b> Gò Vấp, Hồ Chí Minh</b></div>
                        <div class="describe-main"><p><b>Mô tả: </b>Do không sắp xếp được thời gian nên mình cần khoáng lại dãy phòng trọ gồm 42 phòng + 4 kiot ( phòng giá từ 1tr8 đến 2tr5 ) Kiot 1 cái 4tr ( hiện tại chỉ còn trống vài P + 1 kiot ) . Giá khoáng 1 tháng là 80tr đặt cọc 2 tháng trả tiền trước 1 tháng . Mọi vấn đề chi tiết & thương lượng xin vui lòng liên hệ : 0906878018 ( Hùng ) miễn trung gian .</p></div>
                    </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection