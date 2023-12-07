
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
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
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

  <body>

    @include('user.header')
    @yield('content')

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
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

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