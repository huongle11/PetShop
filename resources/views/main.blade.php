
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PetShop</title>
  <meta name="title" content="Pet Shop" />
  <meta name="description" content="something" />
  <link rel="stylesheet" href="{{ asset('Css/Style.css') }}">
  <!-- font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Bangers&family=Carter+One&family=Nunito+Sans:wght@400;700&display=swap"
    rel="stylesheet" />
  <link rel="shortcut icon" type="image/png" href="img/logo_petmall.png" />
  <link rel="preload" as="image" href="img/banner_cho_meo.gif" />
  <link rel="stylesheet" href="glider.min.css" />
</head>

<body id="top">

  <header class="header" data-header>
    <div class="container">
      <button class="nav-toggle-btn" aria-label="toggle manu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="menu_icon"></ion-icon>
        <ion-icon name="close-outline" aria-hidden="true" class="close_icon"></ion-icon>
      </button>
      <a href="#" class="logo">PetShop</a>

      <nav class="navbar" data-navbar>
        <ul class="navbar_list">
          <li class="navbar_item">
            <a href="#home" class="navbar_link" data-nav-link>Home</a>
            <a href="#vat_dung" class="navbar_link" data-nav-link>Vật dụng</a>
            <a href="#chon_1" class="navbar_link" data-nav-link>Sản Phẩm</a>
            <a href="#cham_boss" class="navbar_link" data-nav-link>Chăm Boss</a>
            <a href="#lien_he" class="navbar_link" data-nav-link>Liên hệ</a>
          </li>
        </ul>
        <a href="login.html" class="navbar_action_btn">Đăng nhập</a>
      </nav>
      <div class="header_actions">
        <button class="action_btn" aria-label="Search">
          <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
        </button>

        <button id="btn-login" class="action_btn user" aria-label="User">
          <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
        </button>

        <button class="action_btn btn_pop" aria-label="cart">
          <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
        </button>
      </div>
    </div>
  </header>

  <section class="cart_product">
    <div class="card_wrap">
      <p>Giỏ hàng</p>
      <span>Số lượng sản phẩm: 2</span>

      <span class="close_icon_pop"><ion-icon name="close-outline" card-close></ion-icon></span>

      <ul class="product_item">
        <li>
          <figure style="--width: 100;--heigh:80;">
            <img src="img/SanPham/p3.png" width="100" height="80" loading="lazy">
          </figure>
          <div class="item_inf">
            <p class="product_title">Hạt Wilderness cho mèo lớn</p>
            <span>200.000 <u>đ</u></span>
            <input type="number" value="1" min="0">
            <p class="icon"><ion-icon name="close-circle-outline"></ion-icon></p>
          </div>
        </li>

        <li>
          <figure style="--width: 100;--heigh:80;">
            <img src="img/SanPham_cho/p1.jfif" width="100" height="80" loading="lazy">
          </figure>
          <div class="item_inf">
            <p class="product_title">Hạt khô Pedigree cho chó lớn</p>
            <span>287.000 <u>đ</u></span>
            <input type="number" value="1" min="0">
            <p class="icon"><ion-icon name="close-circle-outline"></ion-icon></p>
          </div>
        </li>

      </ul>

      <div class="pay">
        <p style="display: inline;">Tổng tiền: </p><span style="display: inline;">487.000 <u>đ</u></span>
        <button class="btn_1">Thanh toán</button>
        <button class="btn_2">Xem giỏ hàng</button>
      </div>

    </div>
  </section>

  <main>
    <article>
      <section class="section hero bg_img" id="home" aria-label="home"
        style="background-image: url('img/banner_cho_meo.png')">
        <div class="container">
          <h1 class="h1 hero_title">
            <span class="span">Uy tín chất lượng</span>
            <span class="span_1"> Pet Food </span>
          </h1>
          <p class="hero_text">Sale đến 30% trong hôm nay</p>
          <a href="#chon_1" class="btn">Mua Ngay</a>
        </div>
      </section>

      <section class="section type" id="vat_dung">
        <div class="container">
          <h2 class="h2 section_title">
            <span class="span">Vật dụng</span> nổi bật
          </h2>

          <ul class="scrollbar">
            <li class="scrollbar_item">
              <div class="item_card">
                <figure class="card_banner img_figure" style="
                      --width: 330;
                      --height: 300;
                      background-color: palevioletred;
                    ">
                  <img src="img/colection/cat-pate__1_-removebg-preview.png" width="330" height="300" alt="Cat food"
                    loading="lazy" class="image_cover" />
                </figure>

                <h3 class="h3">
                  <a href="#" class="card_title">Pate cho Mèo</a>
                </h3>
              </div>
            </li>

            <li class="scrollbar_item">
              <div class="item_card">
                <figure class="card_banner img_figure" style="
                      --width: 330;
                      --height: 300;
                      background-color: rgb(247, 192, 120);
                    ">
                  <img src="img/colection/xuong_cho__1_-removebg-preview.png" width="330" height="300" alt="Cat food"
                    loading="lazy" class="image_cover" />
                </figure>

                <h3 class="h3">
                  <a href="#" class="card_title">Xương gặm cho Chó</a>
                </h3>
              </div>
            </li>

            <li class="scrollbar_item">
              <div class="item_card">
                <figure class="card_banner img_figure" style="
                      --width: 330;
                      --height: 300;
                      background-color: rgb(179, 101, 253);
                    ">
                  <img src="img/colection/sua-tam-removebg-preview.png" width="330" height="300" alt="Cat food"
                    loading="lazy" class="image_cover" />
                </figure>

                <h3 class="h3">
                  <a href="#" class="card_title">Sữa tắm cho Boss</a>
                </h3>
              </div>
            </li>

            <li class="scrollbar_item">
              <div class="item_card">
                <figure class="card_banner img_figure" style="
                      --width: 330;
                      --height: 300;
                      background-color: antiquewhite;
                    ">
                  <img src="img/colection/cat-tree__1_-removebg-preview.png" width="330" height="300" alt="Cat food"
                    loading="lazy" class="image_cover" />
                </figure>

                <h3 class="h3">
                  <a href="#" class="card_title">Cat Tree</a>
                </h3>
              </div>
            </li>

            <li class="scrollbar_item">
              <div class="item_card">
                <figure class="card_banner img_figure" style="
                      --width: 330;
                      --height: 300;
                      background-color: cadetblue;
                    ">
                  <img src="img/colection/pet-toys-removebg-preview.png" width="330" height="300" alt="Cat food"
                    loading="lazy" class="image_cover" />
                </figure>

                <h3 class="h3">
                  <a href="#" class="card_title">Boss toys</a>
                </h3>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <section class="section choice" aria-label="choice">
        <div class="container">
          <ul class="grid_list">
            <li>
              <div class="choice_card bg_img img_figure" style="
                    background-image: url(img/Cat_bg.jpg);
                    --width: 540;
                    --height: 374;
                  ">
                <p class="card_sub">Sản phẩm dành cho mèo</p>

                <h3 class="h3 card_title">
                  Giá cực kỳ<span class="span">ưu đãi</span>
                </h3>

                <a href="#" class="btn">Xem thêm</a>
              </div>
            </li>

            <li>
              <div class="choice_card bg_img img_figure" style="
                    background-image: url(img/Dog_bg.jpg);
                    --width: 540;
                    --height: 374;
                  ">
                <p class="card_sub">Sản phẩm dành cho chó</p>

                <h3 class="h3 card_title">
                  Nhiều sản phẩm<span class="span">chất lượng</span>
                </h3>
                <a href="#" class="btn">Xem thêm</a>
              </div>
            </li>

            <li>
              <div class="choice_card bg_img img_figure" style="
                    background-image: url(img/other_bg.jpg);
                    --width: 540;
                    --height: 374;
                  ">
                <p class="card_sub">Các sản phẩm khác</p>

                <h3 class="h3 card_title">
                  Uy tín <span class="span">hàng đầu<i></i></span>
                </h3>

                <a href="#" class="btn">Xem thêm</a>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <section id="chon_1" class="chonlua_2 box_padding" aria-label="box product">
        <div class="container">
          <p><span class="span">Sản Phẩm</span> Nổi Bật</p>
          <h2>Sản Phẩm dành cho Mèo</h2>

          <div class="button_slide">
            <button aria-label="Previous" class="glider-prev">«</button>
            <button aria-label="Next" class="glider-next">»</button>
          </div>
          <div class="glider-contain">
            <div class="glider">
              @foreach($products as $product)
              <div class="sanpham">
                <div class="anh_sp">
                  <div class="anh_sp_center">
                    <img src="{{$product->image}}" alt="" />
                  </div>
                </div>
                <div class="box_sp">
                  <span><b>{{$product->name}}</b></span>
                  <h5>{{$product->description}}</h5>
                  <h4>{{$product->price->base_price}}<u>đ</u></h4>
                </div>
                <button class="bt_2">Thêm vào giỏ</button>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </section>

      <section id="chon_2" class="chonlua_2 box_padding" aria-label="box product">
        <div class="container">
          <h2>Sản Phẩm dành cho Chó</h2>

          <div class="button_slide">
            <button aria-label="Previous" class="glider-prev">«</button>
            <button aria-label="Next" class="glider-next">»</button>
          </div>

          <div class="glider-contain">
            <div class="glider">
              <div class="sanpham">
                <div class="anh_sp">
                  <div class="anh_sp_center">
                    <img src="img/SanPham_cho/p1.jfif" alt="" />
                  </div>
                </div>
                <div class="box_sp">
                  <span><b>Pedigree</b></span>
                  <h5>Hạt khô Pedigree cho Chó</h5>
                  <h4>287.000 <u>đ</u></h4>
                </div>
                <button class="bt_2">Thêm vào giỏ</button>
              </div>
              <div class="sanpham">
                <div class="anh_sp">
                  <div class="anh_sp_center">
                    <img src="img/SanPham_cho/p2.jfif" alt="" />
                  </div>
                </div>
                <div class="box_sp">
                  <span><b>Purina One</b></span>
                  <h5>Hạt khô Purina One cho Chó</h5>
                  <h4>320.000 <u>đ</u></h4>
                </div>
                <button class="bt_2">Thêm vào giỏ</button>
              </div>
              <div class="sanpham">
                <div class="anh_sp">
                  <div class="anh_sp_center">
                    <img src="img/SanPham_cho/p3.jfif" alt="" />
                  </div>
                </div>
                <div class="box_sp">
                  <span><b>Purina Pro </b></span>
                  <h5>Hạt khô Purina Pro cho Chó</h5>
                  <h4>430.000 <u>đ</u></h4>
                </div>
                <button class="bt_2">Thêm vào giỏ</button>
              </div>
              <div class="sanpham">
                <div class="anh_sp">
                  <div class="anh_sp_center">
                    <img src="img/SanPham_cho/p4.jfif" alt="" />
                  </div>
                </div>
                <div class="box_sp">
                  <span><b>Purina Prog</b></span>
                  <h5>Hạt khô Purina Pro Sport cho Chó</h5>
                  <h4>450.00 <u>đ</u></h4>
                </div>
                <button class="bt_2">Thêm vào giỏ</button>
              </div>
              <div class="sanpham">
                <div class="anh_sp">
                  <div class="anh_sp_center">
                    <img src="img/SanPham_cho/p5.jfif" alt="" />
                  </div>
                </div>
                <div class="box_sp">
                  <span><b>Bakers</b></span>
                  <h5>Hạt khô Bakers cho Chó</h5>
                  <h4>240.000 <u>đ</u></h4>
                </div>
                <button class="bt_2">Thêm vào giỏ</button>
              </div>
              <div class="sanpham">
                <div class="anh_sp">
                  <div class="anh_sp_center">
                    <img src="img/SanPham_cho/p6.jfif" alt="" />
                  </div>
                </div>
                <div class="box_sp">
                  <span><b>Bully Max 30/20</b></span>
                  <h5>Hạt khô Bully Max 30/20 High Protein cho Chó</h5>
                  <h4>530.00 <u>đ</u></h4>
                </div>
                <button class="bt_2">Thêm vào giỏ</button>
              </div>
              <div class="sanpham">
                <div class="anh_sp">
                  <div class="anh_sp_center">
                    <img src="img/SanPham_cho/p7.jfif" alt="" />
                  </div>
                </div>
                <div class="box_sp">
                  <span><b>Signature Grain Zero</b></span>
                  <h5>Hạt khô Signature Grain Zero cho Chó</h5>
                  <h4>330.000 <u>đ</u></h4>
                </div>
                <button class="bt_2">Thêm vào giỏ</button>
              </div>
              <div class="sanpham">
                <div class="anh_sp">
                  <div class="anh_sp_center">
                    <img src="img/SanPham_cho/p8.jfif" alt="" />
                  </div>
                </div>
                <div class="box_sp">
                  <span><b>Beneful</b></span>
                  <h5>Hạt khô Beneful cho Chó</h5>
                  <h4>250.000 <u>đ</u></h4>
                </div>
                <button class="bt_2">Thêm vào giỏ</button>
              </div>
              <div class="sanpham">
                <div class="anh_sp">
                  <div class="anh_sp_center">
                    <img src="img/SanPham_cho/p9.jfif" alt="" />
                  </div>
                </div>
                <div class="box_sp">
                  <span><b>Sainsbury's</b></span>
                  <h5>Hạt khô Sainsbury's Complete Nutrition cho Chó</h5>
                  <h4>310.000 <u>đ</u></h4>
                </div>
                <button class="bt_2">Thêm vào giỏ</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section service" aria-label="service">
        <div class="container">
          <ul>
            <li>
              <div class="service_store">
                <a role="link" title="Miễn phí vận chuyển" class="service_link">
                  <p class="service_title">Miễn phí vận chuyển</p>
                  <span class="span">Áp dụng cho đơn từ 450k <br />
                    Freeship trong nội thành Quảng Nam</span>
                </a>
              </div>
            </li>

            <li>
              <div class="service_store">
                <a role="link" title="Đa thanh toán" class="service_link">
                  <p class="service_title">Đa thanh toán</p>
                  <span class="span">Thanh toán trực tuyến bằng Thẻ ATM, Thẻ tín dụng, Chuyển
                    khoản</span>
                </a>
              </div>
            </li>

            <li>
              <div class="service_store">
                <a role="link" title="Hàng chính hãng" class="service_link">
                  <p class="service_title">Hàng chính hãng</p>
                  <span class="span">Hàng chính hãng <br />
                    Đổi trả trong vòng 7 ngày</span>
                </a>
              </div>
            </li>

            <li>
              <div class="service_store">
                <a role="link" title="Hỗ trợ" class="service_link">
                  <p class="service_title">Hỗ trợ</p>
                  <span class="span">Hỗ trợ và tư vấn 24/7 <br />
                    Hotline 0123456789</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <section class="section take_care" aria-label="take care" id="cham_boss">
        <div class="container">
          <h2 class="h2 section_title">
            Học cách chăm boss cùng <span class="span"> PetShop</span>
          </h2>

          <ul class="scrollbar">
            <li class="scrollbar_item">
              <div class="card_item">
                <div class="img_card">
                  <figure class="card_banner img_figure" style="--width: 330; --height: 250">
                    <img src="img/service/lam-pate.jfif" width="330" height="250" alt="Cat food" loading="lazy"
                      class="image_cover" />
                  </figure>
                </div>

                <div class="card_infor">
                  <a href="#" class="infor_title">Cách làm pate tại gia cho Boss.</a>
                  <span class="span">Hiện nay, có nhiều loại Pate cho mèo được sản xuất. Thành
                    phần trong Pate...</span>
                  <a href="#" class="more_title"><u>Xem thêm</u></a>
                </div>
              </div>
            </li>

            <li class="scrollbar_item">
              <div class="card_item">
                <div class="img_card">
                  <figure class="card_banner img_figure" style="--width: 330; --height: 250">
                    <img src="img/service/medicine.jfif" width="330" height="250" alt="Cat food" loading="lazy"
                      class="image_cover" />
                  </figure>
                </div>

                <div class="card_infor">
                  <a href="#" class="infor_title">Chó có biểu hiện mệt, bỏ ăn?</a>
                  <span class="span">Tình trạng chó bị ốm trong quá trình phát triển khiến cho
                    những người chủ thấy rất lo...</span>
                  <a href="#" class="more_title"><u>Xem thêm</u></a>
                </div>
              </div>
            </li>

            <li class="scrollbar_item">
              <div class="card_item">
                <div class="img_card">
                  <figure class="card_banner img_figure" style="--width: 330; --height: 250">
                    <img src="img/service/cham-meo.jfif" width="330" height="250" alt="Cat food" loading="lazy"
                      class="image_cover" />
                  </figure>
                </div>

                <div class="card_infor">
                  <a href="#" class="infor_title">Nguyên nhân ký sinh trung máu ở mèo?</a>
                  <span class="span">Mèo bị nhiễm ký sinh trùng máu Anaplasma, Babesia, Ehrlichia canis,
                    Trypanosoma...</span>
                  <a href="#" class="more_title"><u>Xem thêm</u></a>
                </div>
              </div>
            </li>

            <li class="scrollbar_item">
              <div class="card_item">
                <div class="img_card">
                  <figure class="card_banner img_figure" style="--width: 330; --height: 250">
                    <img src="img/service/raw-food.jfif" width="330" height="250" alt="Cat food" loading="lazy"
                      class="image_cover" />
                  </figure>
                </div>

                <div class="card_infor">
                  <a href="#" class="infor_title">Xu hướng Raw Food!</a>
                  <span class="span">Xu hướng hiện nay, chủ nuôi thường lựa chọn thức ăn tươi, thức ăn thô (raw food)
                    cho thú cưng của...</span>
                  <a href="#" class="more_title"><u>Xem thêm</u></a>
                </div>
              </div>
            </li>

            <li class="scrollbar_item">
              <div class="card_item">
                <div class="img_card">
                  <figure class="card_banner img_figure" style="--width: 330; --height: 250">
                    <img src="img/service/balo-meo.jfif" width="330" height="250" alt="Cat food" loading="lazy"
                      class="image_cover" />
                  </figure>
                </div>

                <div class="card_infor">
                  <a href="#" class="infor_title">Tiêu chí chọn balo cho Mèo?</a>
                  <span class="span">Cách sử dụng balo đựng mèo cũng tương tự như cách bạn dùng balo thông
                    thường...</span>
                  <a href="#" class="more_title"><u>Xem thêm</u></a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <section class="section brand" aria-label="brand">
        <div class="container">
          <h2 class="h2 section_title">
            <span class="span">Thương hiệu</span> yêu thích
          </h2>

          <ul class="scrollbar">
            <li class="scrollbar_item">
              <div class="brand_card img_figure" style="--width: 150; --height: 150">
                <img src="img/brand/br-1.png" width="150" height="150" loading="lazy" class="image_cover" />
              </div>
            </li>

            <li class="scrollbar_item">
              <div class="brand_card img_figure" style="--width: 150; --height: 150">
                <img src="img/brand/br-2.png" width="150" height="150" loading="lazy" class="image_cover" />
              </div>
            </li>

            <li class="scrollbar_item">
              <div class="brand_card img_figure" style="--width: 150; --height: 150">
                <img src="img/brand/br-3.jfif" width="150" height="150" loading="lazy" class="image_cover" />
              </div>
            </li>

            <li class="scrollbar_item">
              <div class="brand_card img_figure" style="--width: 150; --height: 150">
                <img src="img/brand/br-4.png" width="150" height="150" loading="lazy" class="image_cover" />
              </div>
            </li>

            <li class="scrollbar_item">
              <div class="brand_card img_figure" style="--width: 150; --height: 150">
                <img src="img/brand/br-5.jfif" width="150" height="150" loading="lazy" class="image_cover" />
              </div>
            </li>
          </ul>
        </div>
      </section>
    </article>
  </main>

  <footer class="footer" style="background-image: url(img/footer-bg.jpg)">
    <div class="foot_top section" id="lien_he">
      <div class="container">
        <div class="foot_brand">
          <a href="#" class="logo">PetShop</a>

          <p class="foot_text">
            Thông tin liên hệ:
            <a href="mailto:huongltt.22it@gmail.com" class="link">PetShop@gmail.com</a>
          </p>

          <ul class="contact">
            <li class="cont_item">
              <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
              <address class="address">Đại học việt hàn</address>
            </li>

            <li class="cont_item">
              <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
              <a href="#" class="cont_link">0123456789</a>
            </li>
          </ul>

          <ul class="social">
            <li>
              <a href="#" class="social_link">
                <ion-icon name="logo-facebook"></ion-icon></a>
            </li>

            <li>
              <a href="#" class="social_link">
                <ion-icon name="logo-twitter"></ion-icon></a>
            </li>

            <li>
              <a href="#" class="social_link">
                <ion-icon name="logo-pinterest"></ion-icon></a>
            </li>

            <li>
              <a href="#" class="social_link">
                <ion-icon name="logo-instagram"></ion-icon></a>
            </li>
          </ul>
        </div>

        <ul class="foot_list">
          <li>
            <p class="foot_list_title">Shop</p>
          </li>

          <li>
            <a href="#" class="foot_link">Dành Cho Chó</a>
          </li>

          <li>
            <a href="#" class="foot_link">Dành Cho Mèo</a>
          </li>

          <li>
            <a href="#" class="foot_link">Thương Hiệu</a>
          </li>

          <li>
            <a href="#" class="foot_link">Blogs</a>
          </li>

          <li>
            <a href="#" class="foot_link">Bộ Sưu Tập</a>
          </li>
        </ul>

        <ul class="foot_list">
          <li>
            <p class="foot_list_title">PetShop</p>
          </li>

          <li>
            <a href="#" class="foot_link">Giới Thiệu</a>
          </li>

          <li>
            <a href="#" class="foot_link">Thành Viên PefShop</a>
          </li>

          <li>
            <a href="#" class="foot_link">Điều Khoản Sử Dụng</a>
          </li>

          <li>
            <a href="#" class="foot_link">Tuyển Dụng</a>
          </li>
        </ul>

        <ul class="foot_list">
          <li>
            <p class="foot_list_title">Hỗ Trợ Khách Hàng</p>
          </li>

          <li>
            <a href="#" class="foot_link">Chính Sách Đổi Trả Hàng</a>
          </li>

          <li>
            <a href="#" class="foot_link">Phương Thức Vận Chuyển</a>
          </li>

          <li>
            <a href="#" class="foot_link">Phương Thức Thanh Toán</a>
          </li>

          <li>
            <a href="#" class="foot_link">Chính Sách Hoàn Tiền</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="foot_bottom section">
      <p class="copyright">&copy; Le Thi Thu Huong 22IT127</p>
    </div>
  </footer>

  <a href="#top" class="btn_top" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon></a>

  <!-- script link -->
  <script src="Script/scr.js"></script>
  <!-- ionicon link -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <!-- script slider -->

  <script>
    const cardWrap = document.querySelector('.card_wrap');
    const btn_pop = document.querySelector('.btn_pop');
    const btn_close = document.querySelector('.close_icon_pop');

    btn_pop.addEventListener('click', () => {
      cardWrap.classList.add('active-pop');
    });

    btn_close.addEventListener('click', () => {
      cardWrap.classList.remove('active-pop');
    });

  </script>

  <script>
    const btnLogin = document.getElementById("btn-login");

    btnLogin.addEventListener("click", function () {

      window.location.href = "login.html";

    });
  </script>

  <script src="glider.min.js"></script>
  <script>
    var selectContainers = document.querySelectorAll("#chon_1, #chon_2");

    selectContainers.forEach(function (container) {
      var sliders = container.querySelectorAll(".glider");

      sliders.forEach(function (slider) {
        new Glider(slider, {
          slidesToScroll: 1,
          slidesToShow: 4.5,
          draggable: true,
          arrows: {
            prev: container.querySelector(".glider-prev"),
            next: container.querySelector(".glider-next"),
          },

          responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 4.5,
                slidesToScroll: 1,
              },
            },
            {
              breakpoint: 900,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
              },
            },
            {
              breakpoint: 640,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              },
            },
            {
              breakpoint: 304,
              settings: {
                slidesToShow: 1.5,
                slidesToScroll: 1,
              },
            },
            {
              breakpoint: 0,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
          ],
        });
      });
    });
  </script>
</body>

</html>