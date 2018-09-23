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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="{{asset('css/portfolio-item.css')}}"   rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">
          <img src="https://uploads-ssl.webflow.com/5b860983eac5c70d96636e4d/5b9213e7ae89e5416ad5d6fa_logo.svg" width="200" >
        </a>
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
          <ul class="navbar-nav ml-right">
            <li class="nav-item">
              <a href="#">Đăng Nhập</a>
            </li>
            <li class="nav-item create-acc">
              <a href="#">Đăng kí tài khoản</a>
            </li>  
          </ul>
        </div>
    </nav>
<!--  -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://uploads-ssl.webflow.com/5b860983eac5c70d96636e4d/5b8632bdeac5c7d4d4638af0_kids-1093758_1920.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://uploads-ssl.webflow.com/5b860983eac5c70d96636e4d/5b8638722532c3734f5a988d_children-602967_1920.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://uploads-ssl.webflow.com/5b860983eac5c70d96636e4d/5b8632bdf8740394b4932bfa_kids-2985782_1920.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!-- Page Content -->
    <div class="container">
      <div class="col-md-12">
      <a href="#costumModal2" role="button" class=" top-search" data-toggle="modal"><i class="fa fa-search"></i> TÌM KIẾM NGAY</a>
      </div>
        <div id="costumModal2" class="modal" data-easein="flipXIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            Tìm kiếm nhanh
                        </h4>
                    </div>
                    <div class="modal-body">
              
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary">
                            Tìm nhanh
                        </button>
                    </div>
                </div>
            </div>
        </div>
      <!-- Portfolio Item Heading -->
      <h1 class="my-4">Top Tin
        /<small>HOT</small>
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">
        <div class="col-md-8 col-12 col-sm-12">
          <div class="row">
        <div class="col-md-6 col-12 col-sm-12">
          <div class="cover-img">
          <img class="img-top" width="100%" height="220px" src="images/home/home1.jpg" alt="">
          <div class="numeric">2 ảnh</div>
          <div class="icon-top">TOP</div>
          </div>
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
    <script src="vendor/bootstrap/js/index.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.ui.min.js'></script>
    <script src="js/stype.js"></script>
    <script>
    $("#carouselExampleControls").carousel();
      </script>
  </body>
</html>