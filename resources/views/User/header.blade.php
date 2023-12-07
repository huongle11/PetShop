
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