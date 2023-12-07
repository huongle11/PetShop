
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