<!doctype html>
<html lang="en">
<head>
    <title>Dealbook-Mua sách trực tuyến giá rẻ nhất</title>
    <meta name="description"
          content="Mua sách online hay, giá tốt nhất, combo sách hot bán chạy, giảm giá cực khủng cùng với những ưu đãi như miễn phí giao hàng, quà tặng miễn phí, đổi trả nhanh chóng. Đa dạng sản phẩm, đáp ứng mọi nhu cầu.">
    <meta name="keywords" content="nhà sách online, mua sách hay, sách hot, sách bán chạy, sách giảm giá nhiều">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('web.headGioHang')



</head>

<body>
<!-- header -->
@include('web.header.header')
@include('web.header.header3')
<!-- header -->

<!-- body -->
<!-- giao diện giỏ hàng  -->
<section class="content my-3">
    <div class="container">
        <div class="cart-page bg-white">
            <div class="row">
                <!-- giao diện giỏ hàng khi không có item  -->
                <div class="col-12 cart-empty d-none">
                    <div class="py-3 pl-3">
                        <h6 class="header-gio-hang">GIỎ HÀNG CỦA BẠN <span>(0 sản phẩm)</span></h6>
                        <div class="cart-empty-content w-100 text-center justify-content-center">
                            <img src="{{asset('tem/images/shopping-cart-not-product.png')}}" alt="shopping-cart-not-product">
                            <p>Chưa có sản phẩm nào trong giở hàng của bạn</p>
                            <a href="/home" class="btn nutmuathem mb-3">Mua thêm</a>
                        </div>
                    </div>
                </div>

                <!-- giao diện giỏ hàng khi có hàng (phần comment màu xanh bên dưới là phần 2 sản phẩm trong giỏ hàng nhưng giờ đã demo bằng jquery) -->
                <div class="col-md-8 cart">
                    <div class="cart-content py-3 pl-3">
                        <h6 class="header-gio-hang">GIỎ HÀNG CỦA BẠN</h6>
                        @foreach($products as $productCart)
                        <div class="cart-list-items">
                            <div class="cart-item d-flex">
                                <a href="{{ url('/home/'.$productCart->id)}}" class="img">
                                    <img src="{{asset( $productCart->image)}}" class="img-fluid" alt="anhsp1">
                                </a>
                                <div class="item-caption d-flex w-100">
                                    <div class="item-info ml-3">
                                        <a href="{{ url('/home/'.$productCart->id)}}" class="ten">{{$productCart -> nameProduct}}</a>
                                        <div class="soluong d-flex">
                                            <div class="input-number input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text btn-spin btn-dec">-</span>
                                                </div>
                                                <input type="text" value="1" class="soluongsp  text-center">
                                                <div class="input-group-append">
                                                    <span class="input-group-text btn-spin btn-inc">+</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-price ml-auto d-flex flex-column align-items-end">
                                        <div class="giamoi">{{$productCart->price}} ₫</div>
                                        <div class="giacu">139.000 ₫</div>
                                        <span class="remove mt-auto"><i class="far fa-trash-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- giao diện phần thanh toán nằm bên phải  -->
                <div class="col-md-4 cart-steps pl-0">
                    <div id="cart-steps-accordion" role="tablist" aria-multiselectable="true">
                        <!-- bước số 1: đăng nhập hoặc đăng ký -->
                        <!-- bước số 2: nhập địa chỉ giao hàng  -->
                        <div class="card">
                            <div class="card-header" role="tab" id="step2header">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#cart-steps-accordion"
                                       href="#step2contentid" aria-expanded="true" aria-controls="step2contentid"
                                       class="text-uppercase header"><span class="steps">2</span>
                                        <span class="label">Địa chỉ giao hàng</span>
                                        <i class="fa fa-chevron-right float-right"></i>
                                    </a>
                                </h5>
                            </div>
                            <div id="step2contentid" class="collapse in" role="tabpanel"
                                 aria-labelledby="step2header" class="stepscontent">
                                <div class="card-body">
                                    <form class="form-diachigiaohang">
                                        <div class="form-label-group">
                                            <input type="text" id="inputName" class="form-control"
                                                   placeholder="Nhập họ và tên" name="name" required autofocus>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="text" id="inputPhone" class="form-control"
                                                   placeholder="Nhập số điện thoại" name="phone" required>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="email" id="inputEmail" class="form-control"
                                                   placeholder="Nhập địa chỉ email" name="email" required>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="text" id="inputAddress" class="form-control"
                                                   placeholder="Nhập Địa chỉ giao hàng" name="address" required>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="text" id="inputCity" class="form-control"
                                                   placeholder="Nhập Tỉnh/Thành phố" name="city" required>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="text" id="inputDistrict" class="form-control"
                                                   placeholder="Nhập Quận/Huyện" name="district" required>
                                        </div>
                                        <div class="form-label-group">
                                                <textarea type="text" id="inputNote" class="form-control"
                                                          placeholder="Nhập ghi chú (Nếu có)" name="note"></textarea>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- bước 3: thanh toán đặt mua  -->
                            <div class="card">
                                <div class="card-header" role="tab" id="step3header">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#cart-steps-accordion"
                                           href="#step3contentid" aria-expanded="true"
                                           aria-controls="step3contentid" class="text-uppercase header"><span
                                                class="steps">3</span>
                                            <span class="label">Thanh toán đặt mua</span>
                                            <i class="fa fa-chevron-right float-right"></i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="step3contentid" class="collapse in" role="tabpanel"
                                     aria-labelledby="step3header" class="stepscontent">
                                    <div class="card-body" style="padding: 15px;">
                                        <div class="goigiaohang">
                                            <h6 class="header text-uppercase">Chọn gói giao hàng</h6>
                                            <div class="option">
                                                <input type="radio" name="goigiaohang" id="ghtc" checked>
                                                <label for="ghtc">Giao hàng tiêu chuẩn</label>
                                                <p>Từ 1-3 ngày tại TP. Hồ Chí Minh; từ 3-5 ngày đối với các Tỉnh /
                                                    Thành khác</p>
                                            </div>
                                            <div class="option">
                                                <input type="radio" name="goigiaohang" id="ghn">
                                                <label for="ghn">Giao hàng nhanh</label>
                                                <p>1 ngày tại TP. Hồ Chí Minh; từ 2-3 ngày đối với các Tỉnh / Thành
                                                    khác</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="pttt">
                                            <h6 class="header text-uppercase">Chọn phương thức thanh toán</h6>
                                            <div class="option mb-2">
                                                <input type="radio" name="pttt" id="cod" checked>
                                                <label for="cod">Thanh toán bằng tiền mặt khi nhận hàng</label>
                                            </div>
                                            <div class="option option2">
                                                <input type="radio" name="pttt" id="atm">
                                                <label for="atm" class="chuyenkhoan">Thanh toán chuyển khoản trước
                                                    qua Thẻ ATM/Internet Banking</label>
                                                <p class="mt-4">- Quý khách chỉ chuyển khoản khi được xác nhận có đủ
                                                    sách qua điện thoại từ DealBook.</p>
                                                <p>- Thời gian chuyển khoản là trong tối đa 2 ngày từ khi có xác
                                                    nhận đủ sách.</p>
                                                <p>- Nội dung chuyển khoản cần ghi: <a href="#">[Mã đơn hàng]</a> ;
                                                    hoặc <a href="#">[số điện thoại dùng đặt hàng]</a> </p>
                                                <p>- Xem thông tin chuyển khoản của NetaBooks <a
                                                        href="phuong-thuc-thanh-toan.html">tại đây</a> </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <button class="btn btn-lg btn-block btn-checkout text-uppercase text-white"
                                                style="background: #F5A623">Đặt mua</button>
                                        <p class="text-center note-before-checkout">(Vui lòng kiểm tra lại đơn hàng
                                            trước khi Đặt Mua)</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- het div cart-steps  -->
            </div>
            <!-- het row  -->
        </div>
        <!-- het cart-page  -->
    </div>
    <!-- het container  -->
</section>
<!-- het khoi content  -->
<!-- body -->

<!-- thanh cac dich vu :mien phi giao hang, qua tang mien phi ........ -->
<section class="abovefooter text-white" style="background-color: #CF111A;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="dichvu d-flex align-items-center">
                    <img src="{{asset('tem/images/icon-books.png')}}" alt="icon-books">
                    <div class="noidung">
                        <h6 class="tieude font-weight-bold">HƠN 14.000 TỰA SÁCH HAY</h6>
                        <p class="detail">Tuyển chọn bởi DealBooks</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="dichvu d-flex align-items-center">
                    <img src="{{asset('tem/images/icon-ship.png')}}" alt="icon-ship">
                    <div class="noidung">
                        <h6 class="tieude font-weight-bold">MIỄN PHÍ GIAO HÀNG</h6>
                        <p class="detail">Từ 150.000đ ở TP.HCM</p>
                        <p class="detail">Từ 300.000đ ở tỉnh thành khác</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="dichvu d-flex align-items-center">
                    <img src="{{asset('tem/images/icon-gift.png')}}" alt="icon-gift">
                    <div class="noidung">
                        <h6 class="tieude font-weight-bold">QUÀ TẶNG MIỄN PHÍ</h6>
                        <p class="detail">Tặng Bookmark</p>
                        <p class="detail">Bao sách miễn phí</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="dichvu d-flex align-items-center">
                    <img src="{{asset('tem/images/icon-return.png')}}" alt="icon-return">
                    <div class="noidung">
                        <h6 class="tieude font-weight-bold">ĐỔI TRẢ NHANH CHÓNG</h6>
                        <p class="detail">Hàng bị lỗi được đổi trả nhanh chóng</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- footer  -->
@include('web.footer')
<!-- footer  -->
</body>

</html>
