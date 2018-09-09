<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portfolio Item - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/portfolio-item.css')}}"   rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">FindHomeD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Trang chủ
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Loại cho thuê
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          @foreach($type_of_rental as $data)
          <a class="dropdown-item" href="#">{{$data->nametype}}</a>
          @endforeach
        </div>
           </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Đăng Tin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Liên Hệ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <!-- Portfolio Item Heading -->
      <h1 class="my-4">Top Tin
        /<small>HOT</small>
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">
        <div class="col-md-8 col-12 col-sm-12">
          <div class="row">
        <div class="col-md-6 col-12 col-sm-12">
          <img class="img-top" width="100%" height="220px" src="images/home/home1.jpg" alt="">
        </div>

        <div class="col-md-6 col-12 col-sm-6">
          <p class="title title-hot"><a href="#">Nhà cao Cấp Nhất Việt Nam Hiện Nay</a></p>
          <button class="btn btn-info">3 triệu/tháng</button>
          <button class="btn btn-info">20m<sup>2</sup></button>
          <div>
            <b>Quận Gò Vấp</b>,
            <b>Thành phố Hồ Chí Minh</b>
          </div>
          <div>
            <img class="icon-gadget-top" src="icon/pet.png"  data-toggle="tooltip" data-placement="top" title="Cho nuôi thú cưng">
            <img class="icon-gadget-top" src="icon/bike_parking.png"  data-toggle="tooltip" data-placement="top" title="Có chỗ giữ xe">
            <img class="icon-gadget-top" src="icon/car-parking.png"  data-toggle="tooltip" data-placement="top" title="Có chỗ đỗ xe ô tô">
            <img class="icon-gadget-top" src="icon/cooking.png"  data-toggle="tooltip" data-placement="top" title="Được nấu ăn">
            <img class="icon-gadget-top" src="icon/gear.png"  data-toggle="tooltip" data-placement="top" title="Trang trí lại phòng">
            <img class="icon-gadget-top" src="icon/tolet1.png"  data-toggle="tooltip" data-placement="top" title="Có tolet riêng ">
            <img class="icon-gadget-top" src="icon/waves.png"  data-toggle="tooltip" data-placement="top" title="Có wifi miễn phí ">
          </div>
          
        </div>
      </div>
      <div class="ads-top">
        <img width="100%" height="180px" src="images/ads/ads-top.gif">
      </div>
    </div>
    <div class="col-md-4 col-12">
      <form>
        <div class="form-group">
          <label>Loại tin:</label>
          <select type="text" class="form-control">
            @foreach($type_of_rental as $data_search)
            <option value="{{$data_search->id}}">{{$data_search->nametype}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
            <label>Tỉnh/Thành phố:</label>
            <select type="text" class="form-control">
                <option value="">Hồ Chí Minh</option>
            </select>
        </div>
        <div class="form-group">
            <label>Quận/Huyện:</label>
            <select type="text" class="form-control">
                <option value="">Gò Vấp</option>
            </select>
        </div>
        <div class="form-group">
            <label>Giá:</label>
            <select type="text" class="form-control">
                <option value="">Dưới 2 triệu</option>
            </select>
        </div>
        <div class="form-group">
            <label>Diện tích:</label>
            <select type="text" class="form-control">
                <option value="">Dưới 20m</option>
            </select>
        </div>
        <div class="form-group">
          <button class="btn btn-info">Lọc nhanh</button>
        </div>
      </form>
    </div>
      </div>
      <!-- /.row -->
          @yield('contents')
      <!-- Related Projects Row -->
    </div>
          @yield('content-footer')
      <!-- /.container -->
        <!-- /.row -->


    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/stype.js"></script>
  </body>
</html>
