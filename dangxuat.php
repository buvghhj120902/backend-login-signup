<?php
session_start();
session_destroy();

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reiview Mỹ phẩm</title>
  <link rel="stylesheet" href="style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oxanium:wght@600;700;800&family=Poppins:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;500;600&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300&display=swap" rel="stylesheet">
</head>

<body id="top">

  <!-- 
    - đầu
  -->


  <header class="header">

    <div class="header-top">
      <div class="container">

        <div class="social-wrapper">

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class=" header-bottom skewBg" data-header>
      <div class="container">

        <a href="#" class="logo">Sammi</a>

        <nav class="desktop-navigation-menu navbar" data-navbar>
          <ul class="desktop-menu-category-list navbar-list">

            <li class="navbar-item">
              <a href="index.html" class="navbar-link skewBg" data-nav-link>Trang chủ</a>
            </li>

            <li class="menu-category navbar-item">
              <a href="#" class=" navbar-link skewBg" data-nav-link>Review Mỹ phẩm</a>

              <ul class="droppdown-list">

                <li class="droppdown-item">
                  <a href="cscothe.html">Chăm sóc cơ thể</a>
                </li>

                <li class="droppdown-item">
                  <a href="csdamat.html">Chăm sóc da mặt</a>
                </li>
  
                
  
                <li class="droppdown-item">
                  <a href="trangdiem.html">Trang điểm</a>
                </li>
  
             
  
              </ul>
            </li>

            <li class="navbar-item">
              <a href="hoidap.html" class="navbar-link skewBg" data-nav-link>Hỏi đáp</a>
            </li>

            <li class="navbar-item">
              <a href="dexuat.html" class="navbar-link skewBg" data-nav-link>Đề xuất</a>
            </li>

            <li class="navbar-item">
              <a href="vechungtoi.html" class="navbar-link skewBg" data-nav-link>Về chúng tôi</a>
            </li>

          </ul>
        </nav>

        <div class="header-actions">

          <button class="search-btn" aria-label="open search" data-search-toggler>
            <ion-icon name="search-outline"></ion-icon>
          </button>
          

          
          <a href="dangnhap.php" target="_blank"> <button class="cart-btn" aria-label="cart">
            <ion-icon name="person-circle-outline"></ion-icon>
          </button></a>
       
          
         

          <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
            <ion-icon name="menu-outline" class="menu"></ion-icon>
            <ion-icon name="close-outline" class="close"></ion-icon>
          </button>

        </div>

      </div>
    </div>

  </header>






  <!-- 
    - tìm kiếm
  -->

  <div class="search-container" data-search-box>

    <div class="input-wrapper">
      <input type="search" name="search" aria-label="search" placeholder="Nhập từ khóa" class="search-field">

      <button class="search-submit" aria-label="submit search" data-search-toggler>
        <ion-icon name="search-outline"></ion-icon>
      </button>

      <button class="search-close" aria-label="close search" data-search-toggler></button>
    </div>

  </div>




  <main>
    <article>

      <!-- 
      banner
      -->

      <section class="section hero" id="home" aria-label="home" style="background-image: url('bg-bn.png')">
        <div class="container">
          <img src="bn1.png" id="anh" alt="">
        </div>
      </section>





      <!-- 
        thương hiệu
      -->

      <section class="section brand" aria-label="brand">
        <div class="container">

          <ul class="has-scrollbar">

            <li class="brand-item">
              <img src="br1.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="br2.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="br3.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="br4.jpeg" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="br5.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="br6.webp" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

          </ul>

        </div>
      </section>





      <div class="section-wrapper">

        <!-- 
         hot
        -->

        <section class="section chude-hot">
          <div class="container">

            <h2 class="h2 section-title">
              Chủ đề <span class="span">siêu hot</span>
            </h2>

            <ul class="has-scrollbar">

              <li class="scrollbar-item">
                <div class="chude-hot-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                    <img src="h1.png" width="400" height="470" loading="lazy" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <a href="#" class="card-badge skewBg">Loại</a>

                    <h3 class="h3">
                      <a href="#" class="card-title">title</span></a>
                    </h3>

                    <a href="#"><p class="card-price">
                      text
                    </p></a>

                  </div>

                </div>
              </li>

              <li class="scrollbar-item">
                <div class="chude-hot-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                    <img src="h2.png" width="400" height="470" loading="lazy" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <a href="#" class="card-badge skewBg">Loại</a>

                    <h3 class="h3">
                      <a href="#" class="card-title">title</span></a>
                    </h3>

                    <p class="card-price">
                      text
                    </p>

                  </div>

                </div>
              </li>

              <li class="scrollbar-item">
                <div class="chude-hot-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                    <img src="h3.png" width="400" height="470" loading="lazy" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <a href="#" class="card-badge skewBg">Loại</a>

                    <h3 class="h3">
                      <a href="#" class="card-title">title</span></a>
                    </h3>

                    <p class="card-price">
                      text
                    </p>

                  </div>

                </div>
              </li>

              <li class="scrollbar-item">
                <div class="chude-hot-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                    <img src="h4.png" width="400" height="470" loading="lazy" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <a href="#" class="card-badge skewBg">Loại</a>

                    <h3 class="h3">
                      <a href="#" class="card-title">title</span></a>
                    </h3>

                    <p class="card-price">
                      text
                    </p>

                  </div>

                </div>
              </li>

              <li class="scrollbar-item">
                <div class="chude-hot-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                    <img src="h5.png" width="400" height="470" loading="lazy" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <a href="#" class="card-badge skewBg">Loại</a>

                    <h3 class="h3">
                      <a href="#" class="card-title">title</span></a>
                    </h3>

                    <p class="card-price">
                      text
                    </p>

                  </div>

                </div>
              </li>

              <li class="scrollbar-item">
                <div class="chude-hot-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                    <img src="h6.png" width="400" height="470" loading="lazy" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <a href="#" class="card-badge skewBg">Loại</a>

                    <h3 class="h3">
                      <a href="#" class="card-title">title</span></a>
                    </h3>

                    <p class="card-price">
                      text
                    </p>

                  </div>

                </div>
              </li>

            </ul>

            <br>

            <ul class="has-scrollbar">

              <li class="scrollbar-item">
                <div class="chude-hot-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                    <img src="h7.png" width="400" height="470" loading="lazy" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <a href="#" class="card-badge skewBg">Loại</a>

                    <h3 class="h3">
                      <a href="#" class="card-title">title</span></a>
                    </h3>

                    <p class="card-price">
                      text
                    </p>

                  </div>

                </div>
              </li>

              <li class="scrollbar-item">
                <div class="chude-hot-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                    <img src="h8.png" width="400" height="470" loading="lazy" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <a href="#" class="card-badge skewBg">Loại</a>

                    <h3 class="h3">
                      <a href="#" class="card-title">title</span></a>
                    </h3>

                    <p class="card-price">
                      text
                    </p>

                  </div>

                </div>
              </li>

              <li class="scrollbar-item">
                <div class="chude-hot-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                    <img src="h9.png" width="400" height="470" loading="lazy" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <a href="#" class="card-badge skewBg">Loại</a>

                    <h3 class="h3">
                      <a href="#" class="card-title">title</span></a>
                    </h3>

                    <p class="card-price">
                      text
                    </p>

                  </div>

                </div>
              </li>

              <li class="scrollbar-item">
                <div class="chude-hot-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                    <img src="h10.png" width="400" height="470" loading="lazy" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <a href="#" class="card-badge skewBg">Loại</a>

                    <h3 class="h3">
                      <a href="#" class="card-title">title</span></a>
                    </h3>

                    <p class="card-price">
                      text
                    </p>

                  </div>

                </div>
              </li>

              <li class="scrollbar-item">
                <div class="chude-hot-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                    <img src="h11.png" width="400" height="470" loading="lazy" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <a href="#" class="card-badge skewBg">Loại</a>

                    <h3 class="h3">
                      <a href="#" class="card-title">title</span></a>
                    </h3>

                    <p class="card-price">
                      text
                    </p>

                  </div>

                </div>
              </li>

              <li class="scrollbar-item">
                <div class="chude-hot-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                    <img src="h12.png" width="400" height="470" loading="lazy" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <a href="#" class="card-badge skewBg">Loại</a>

                    <h3 class="h3">
                      <a href="#" class="card-title">title</span></a>
                    </h3>

                    <p class="card-price">
                      text
                    </p>

                  </div>

                </div>
              </li>

            </ul>

            <button class="btn skewBg">Xem tất cả</button>


          </div>
        </section>

      </div>

      <!-- 
        - kiến thức làm đẹp
      -->

      <section class="section kienthuc" id="features" aria-label="featured game">
        <div class="container">

          <h2 class="h2 section-title">
            kiến thức <span class="span">làm đẹp</span>
          </h2>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="kienthuc-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="kt1.png" width="450" height="600" loading="lazy" class="img-cover">
                </figure>

                <!-- <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      title
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>
                    text
                  </span>

                </div> -->

                <div class="card-content-overlay">



                  <h3 class="h3">
                    <a href="#" class="card-title">
                      title
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    text
                  </span>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="kienthuc-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="kt2.png" width="450" height="600" loading="lazy" class="img-cover">
                </figure>

                <!-- <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      title
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>
                    text
                  </span>

                </div> -->

                <div class="card-content-overlay">

                  <h3 class="h3">
                    <a href="#" class="card-title">
                      title
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    text
                  </span>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="kienthuc-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="kt3.png" width="450" height="600" loading="lazy" class="img-cover">
                </figure>

                <!-- <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      title
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>
                    text
                  </span>

                </div> -->

                <div class="card-content-overlay">

                  <h3 class="h3">
                    <a href="#" class="card-title">
                      title
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    text
                  </span>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="kienthuc-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="kt4.png" width="450" height="600" loading="lazy" class="img-cover">
                </figure>

                <!-- <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      title
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>
                    text
                  </span>

                </div> -->

                <div class="card-content-overlay">

                  <h3 class="h3">
                    <a href="#" class="card-title">
                      title
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    text
                  </span>

                </div>

              </div>
            </li>



          </ul>


          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="kienthuc-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="kt5.png" width="450" height="600" loading="lazy" class="img-cover">
                </figure>

                <!-- <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      title
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>
                    text
                  </span>

                </div> -->

                <div class="card-content-overlay">



                  <h3 class="h3">
                    <a href="#" class="card-title">
                      title
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    text
                  </span>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="kienthuc-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="kt6.png" width="450" height="600" loading="lazy" class="img-cover">
                </figure>

                <!-- <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      title
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>
                    text
                  </span>

                </div> -->

                <div class="card-content-overlay">

                  <h3 class="h3">
                    <a href="#" class="card-title">
                      title
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    text
                  </span>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="kienthuc-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="kt7.png" width="450" height="600" loading="lazy" class="img-cover">
                </figure>

                <!-- <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      title
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>
                    text
                  </span>

                </div> -->

                <div class="card-content-overlay">

                  <h3 class="h3">
                    <a href="#" class="card-title">
                      title
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    text
                  </span>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="kienthuc-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="kt8.png" width="450" height="600" loading="lazy" class="img-cover">
                </figure>

                <!-- <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      title
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>
                    text
                  </span>

                </div> -->

                <div class="card-content-overlay">

                  <h3 class="h3">
                    <a href="#" class="card-title">
                      title
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    text
                  </span>

                </div>

              </div>
            </li>



          </ul>


          <button class="btn skewBg">Xem tất cả</button>


        </div>
      </section>


      <!-- 
        - chăm sóc cơ thể
      -->
      <section class="section co-the">
        <div class="container">

          <h2 class="h2 section-title">
            chăm sóc <span class="span">cơ thể</span>
          </h2>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <figure class="snip1563">
                <img src="d1.webp" alt="sample110" />
                <figcaption>
                  <h3>title</h3>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio, maiores.</p>
                </figcaption>
                <a href="#"></a>
              </figure>
            </li>

            <li class="scrollbar-item">
              <figure class="snip1563">
                <img src="d2.png" alt="sample110" />
                <figcaption>
                  <h3>title</h3>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio, maiores.</p>
                </figcaption>
                <a href="#"></a>
              </figure>
            </li>

            <li class="scrollbar-item">
              <figure class="snip1563">
                <img src="d3.webp" alt="sample110" />
                <figcaption>
                  <h3>title</h3>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio, maiores.</p>
                </figcaption>
                <a href="#"></a>
              </figure>
            </li>


          </ul>
<br>
          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <figure class="snip1563">
                <img src="d4.jpg" alt="sample110" />
                <figcaption>
                  <h3>title</h3>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio, maiores.</p>
                </figcaption>
                <a href="#"></a>
              </figure>
            </li>

            <li class="scrollbar-item">
              <figure class="snip1563">
                <img src="d5.jpg" alt="sample110" />
                <figcaption>
                  <h3>title</h3>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio, maiores.</p>
                </figcaption>
                <a href="#"></a>
              </figure>
            </li>

            <li class="scrollbar-item">
              <figure class="snip1563">
                <img src="d6.jpg" alt="sample110" />
                <figcaption>
                  <h3>title</h3>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio, maiores.</p>
                </figcaption>
                <a href="#"></a>
              </figure>
            </li>


          </ul>









          <button class="btn skewBg">Xem tất cả</button>


        </div>
      </section>

      <!-- 
        - chăm sóc da
      -->

      <section class="section da" id="da" aria-label="da">
        <div class="container">

          <h2 class="h2 section-title">
            Chăm sóc <span class="span">da</span>
          </h2>


          <ul class="da-list">

            <li>
              <div class="da-card">

                <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                  <img src="cs1.png" width="400" height="290" loading="lazy" alt="Shooter Action Video"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline"></ion-icon>

                      <a href="#" class="item-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline"></ion-icon>

                      <time datetime="2022-09-19" class="item-text">Tháng 9, 28, 2022</time>
                    </li>

                  </ul>

                  <h3>
                    <a href="#" class="card-title">title</a>
                  </h3>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, totam.
                  </p>

                  <a href="#" class="card-link">
                    <span class="span">Đọc thêm</span>

                    <ion-icon name="caret-forward"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="da-card">

                <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                  <img src="cs2.webp" width="400" height="290" loading="lazy" alt="Shooter Action Video"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline"></ion-icon>

                      <a href="#" class="item-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline"></ion-icon>

                      <time datetime="2022-09-19" class="item-text">Tháng 9, 28, 2022</time>
                    </li>

                  </ul>

                  <h3>
                    <a href="#" class="card-title">title</a>
                  </h3>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, totam.
                  </p>

                  <a href="#" class="card-link">
                    <span class="span">Đọc thêm</span>

                    <ion-icon name="caret-forward"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="da-card">

                <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                  <img src="cs3.webp" width="400" height="290" loading="lazy" alt="Shooter Action Video"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline"></ion-icon>

                      <a href="#" class="item-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline"></ion-icon>

                      <time datetime="2022-09-19" class="item-text">Tháng 9, 28, 2022</time>
                    </li>

                  </ul>

                  <h3>
                    <a href="#" class="card-title">title</a>
                  </h3>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, totam.
                  </p>

                  <a href="#" class="card-link">
                    <span class="span">Đọc thêm</span>

                    <ion-icon name="caret-forward"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

          </ul>
          <br>
          <ul class="da-list">

            <li>
              <div class="da-card">

                <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                  <img src="cs4.jpg" width="400" height="290" loading="lazy" alt="Shooter Action Video"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline"></ion-icon>

                      <a href="#" class="item-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline"></ion-icon>

                      <time datetime="2022-09-19" class="item-text">Tháng 9, 28, 2022</time>
                    </li>

                  </ul>

                  <h3>
                    <a href="#" class="card-title">title</a>
                  </h3>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, totam.
                  </p>

                  <a href="#" class="card-link">
                    <span class="span">Đọc thêm</span>

                    <ion-icon name="caret-forward"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="da-card">

                <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                  <img src="cs5.jpg" width="400" height="290" loading="lazy" alt="Shooter Action Video"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline"></ion-icon>

                      <a href="#" class="item-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline"></ion-icon>

                      <time datetime="2022-09-19" class="item-text">Tháng 9, 28, 2022</time>
                    </li>

                  </ul>

                  <h3>
                    <a href="#" class="card-title">title</a>
                  </h3>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, totam.
                  </p>

                  <a href="#" class="card-link">
                    <span class="span">Đọc thêm</span>

                    <ion-icon name="caret-forward"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="da-card">

                <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                  <img src="cs6.jpg" width="400" height="290" loading="lazy" alt="Shooter Action Video"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline"></ion-icon>

                      <a href="#" class="item-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline"></ion-icon>

                      <time datetime="2022-09-19" class="item-text">Tháng 9, 28, 2022</time>
                    </li>

                  </ul>

                  <h3>
                    <a href="#" class="card-title">title</a>
                  </h3>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, totam.
                  </p>

                  <a href="#" class="card-link">
                    <span class="span">Đọc thêm</span>

                    <ion-icon name="caret-forward"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

          </ul>
          <br>
          <ul class="da-list">

            <li>
              <div class="da-card">

                <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                  <img src="cs7.webp" width="400" height="290" loading="lazy" alt="Shooter Action Video"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline"></ion-icon>

                      <a href="#" class="item-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline"></ion-icon>

                      <time datetime="2022-09-19" class="item-text">Tháng 9, 28, 2022</time>
                    </li>

                  </ul>

                  <h3>
                    <a href="#" class="card-title">title</a>
                  </h3>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, totam.
                  </p>

                  <a href="#" class="card-link">
                    <span class="span">Đọc thêm</span>

                    <ion-icon name="caret-forward"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="da-card">

                <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                  <img src="cs8.webp" width="400" height="290" loading="lazy" alt="Shooter Action Video"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline"></ion-icon>

                      <a href="#" class="item-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline"></ion-icon>

                      <time datetime="2022-09-19" class="item-text">Tháng 9, 28, 2022</time>
                    </li>

                  </ul>

                  <h3>
                    <a href="#" class="card-title">title</a>
                  </h3>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, totam.
                  </p>

                  <a href="#" class="card-link">
                    <span class="span">Đọc thêm</span>

                    <ion-icon name="caret-forward"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="da-card">

                <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                  <img src="cs9.jpg" width="400" height="290" loading="lazy" alt="Shooter Action Video"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline"></ion-icon>

                      <a href="#" class="item-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline"></ion-icon>

                      <time datetime="2022-09-19" class="item-text">Tháng 9, 28, 2022</time>
                    </li>

                  </ul>

                  <h3>
                    <a href="#" class="card-title">title</a>
                  </h3>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, totam.
                  </p>

                  <a href="#" class="card-link">
                    <span class="span">Đọc thêm</span>

                    <ion-icon name="caret-forward"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

          </ul>
          <button class="btn skewBg">Xem tất cả</button>

        </div>
      </section>


      <!-- 
        -trang điểm
      -->

      <section class="section trangdiem">
        <div class="container">

          <h2 class="h2 section-title">
            <span class="span">Trang điểm</span>
          </h2>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <figure class="snip1463"><img src="td1.jpg" alt="sample49" />
                <figcaption>
                  <h2>title</h2>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, nihil!</p>
                  <div class="icons"><a href="#"><i class="ion-chatbubbles"></i></a><a href="#"> <i
                        class="ion-person-add"></i></a><a href="#"> <i class="ion-heart"></i></a></div>
                </figcaption>
              </figure>
            </li>

            <li class="scrollbar-item">
              <figure class="snip1463"><img src="td2.jpg" alt="sample49" />
                <figcaption>
                  <h2>title</h2>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, nihil!</p>
                  <div class="icons"><a href="#"><i class="ion-chatbubbles"></i></a><a href="#"> <i
                        class="ion-person-add"></i></a><a href="#"> <i class="ion-heart"></i></a></div>
                </figcaption>
              </figure>
            </li>

            <li class="scrollbar-item">
              <figure class="snip1463"><img src="td3.webp" alt="sample49" />
                <figcaption>
                  <h2>title</h2>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, nihil!</p>
                  <div class="icons"><a href="#"><i class="ion-chatbubbles"></i></a><a href="#"> <i
                        class="ion-person-add"></i></a><a href="#"> <i class="ion-heart"></i></a></div>
                </figcaption>
              </figure>
            </li>

            <li class="scrollbar-item">
              <figure class="snip1463"><img src="td4.webp" alt="sample49" />
                <figcaption>
                  <h2>title</h2>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, nihil!</p>
                  <div class="icons"><a href="#"><i class="ion-chatbubbles"></i></a><a href="#"> <i
                        class="ion-person-add"></i></a><a href="#"> <i class="ion-heart"></i></a></div>
                </figcaption>
              </figure>
            </li>

            <li class="scrollbar-item">
              <figure class="snip1463"><img src="td5.jpg" alt="sample49" />
                <figcaption>
                  <h2>title</h2>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, nihil!</p>
                  <div class="icons"><a href="#"><i class="ion-chatbubbles"></i></a><a href="#"> <i
                        class="ion-person-add"></i></a><a href="#"> <i class="ion-heart"></i></a></div>
                </figcaption>
              </figure>
            </li>

            <li class="scrollbar-item">
              <figure class="snip1463"><img src="td6.jpg" alt="sample49" />
                <figcaption>
                  <h2>title</h2>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, nihil!</p>
                  <div class="icons"><a href="#"><i class="ion-chatbubbles"></i></a><a href="#"> <i
                        class="ion-person-add"></i></a><a href="#"> <i class="ion-heart"></i></a></div>
                </figcaption>
              </figure>
            </li>




          </ul>
          <br>
          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <figure class="snip1463"><img src="td7.jpg" alt="sample49" />
                <figcaption>
                  <h2>title</h2>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, nihil!</p>
                  <div class="icons"><a href="#"><i class="ion-chatbubbles"></i></a><a href="#"> <i
                        class="ion-person-add"></i></a><a href="#"> <i class="ion-heart"></i></a></div>
                </figcaption>
              </figure>
            </li>

            <li class="scrollbar-item">
              <figure class="snip1463"><img src="td8.jpg" alt="sample49" />
                <figcaption>
                  <h2>title</h2>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, nihil!</p>
                  <div class="icons"><a href="#"><i class="ion-chatbubbles"></i></a><a href="#"> <i
                        class="ion-person-add"></i></a><a href="#"> <i class="ion-heart"></i></a></div>
                </figcaption>
              </figure>
            </li>

            <li class="scrollbar-item">
              <figure class="snip1463"><img src="td9.jpg" alt="sample49" />
                <figcaption>
                  <h2>title</h2>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, nihil!</p>
                  <div class="icons"><a href="#"><i class="ion-chatbubbles"></i></a><a href="#"> <i
                        class="ion-person-add"></i></a><a href="#"> <i class="ion-heart"></i></a></div>
                </figcaption>
              </figure>
            </li>

            <li class="scrollbar-item">
              <figure class="snip1463"><img src="td10.jpg" alt="sample49" />
                <figcaption>
                  <h2>title</h2>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, nihil!</p>
                  <div class="icons"><a href="#"><i class="ion-chatbubbles"></i></a><a href="#"> <i
                        class="ion-person-add"></i></a><a href="#"> <i class="ion-heart"></i></a></div>
                </figcaption>
              </figure>
            </li>

            <li class="scrollbar-item">
              <figure class="snip1463"><img src="td11.jpg" alt="sample49" />
                <figcaption>
                  <h2>title</h2>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, nihil!</p>
                  <div class="icons"><a href="#"><i class="ion-chatbubbles"></i></a><a href="#"> <i
                        class="ion-person-add"></i></a><a href="#"> <i class="ion-heart"></i></a></div>
                </figcaption>
              </figure>
            </li>

            <li class="scrollbar-item">
              <figure class="snip1463"><img src="td12.jpg" alt="sample49" />
                <figcaption>
                  <h2>title</h2>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, nihil!</p>
                  <div class="icons"><a href="#"><i class="ion-chatbubbles"></i></a><a href="#"> <i
                        class="ion-person-add"></i></a><a href="#"> <i class="ion-heart"></i></a></div>
                </figcaption>
              </figure>
            </li>




          </ul>
          <button class="btn skewBg">Xem tất cả</button>


        </div>
      </section>


      <!-- 
        quảng cáo
      -->

      <section class="newsletter" aria-label="newsletter">
        <div class="container">

          <div class="newsletter-card">

            <h2 class="h2">
              ĐĂNG KÝ ĐĂNG BÀI VIẾT
            </h2>

            <form action="" class="newsletter-form">

              <div class="input-wrapper skewBg">
                <input type="email" name="email_address" aria-label="email" placeholder="Nhập email..." required
                  class="email-field">

                <ion-icon name="mail-outline"></ion-icon>
              </div>

              <button type="submit" class="btn newsletter-btn skewBg">
                <span class="span">Gửi</span>

                <ion-icon name="paper-plane" aria-hidden="true"></ion-icon>
              </button>

            </form>

          </div>

        </div>
      </section>


    </article>
  </main>
  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">Sammi</a>

          <ul class="contact-list">

            <li class="contact-item">
              <div class="contact-icon">
                <ion-icon name="location"></ion-icon>
              </div>

              <address class="item-text">
                79 Hồ Tùng Mậu, Mai Dịch, Cầu Giấy, Hà Nội
              </address>
            </li>

            <li class="contact-item">
              <div class="contact-icon">
                <ion-icon name="headset"></ion-icon>
              </div>

              <a href="tel:+241245654235" class="item-text">+84 367 253 072</a>
            </li>

            <li class="contact-item">
              <div class="contact-icon">
                <ion-icon name="mail-open"></ion-icon>
              </div>

              <a href="mailto:info@exemple.com" class="item-text">buvghhj123@gmail.com</a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Title</p>
          </li>

          <li>
            <a href="#" class="footer-link">Text</a>
          </li>

          <li>
            <a href="#" class="footer-link">Text</a>
          </li>

          <li>
            <a href="#" class="footer-link">Text</a>
          </li>

          <li>
            <a href="#" class="footer-link">Text</a>
          </li>

          <li>
            <a href="#" class="footer-link">Text</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Hỗ trợ</p>
          </li>

          <li>
            <a href="#" class="footer-link">Text</a>
          </li>

          <li>
            <a href="#" class="footer-link">Text</a>
          </li>

          <li>
            <a href="#" class="footer-link">Text</a>
          </li>

          <li>
            <a href="#" class="footer-link">Text</a>
          </li>

          <li>
            <a href="#" class="footer-link">Text</a>
          </li>

        </ul>

        <div class="footer-wrapper">

          <div class="social-wrapper">

            <p class="footer-list-title">Theo dõi</p>

            <ul class="social-list">

              <li>
                <a href="#" class="social-link" style="background-color: #3b5998">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link" style="background-color: #55acee">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link" style="background-color: #d71e18">
                  <ion-icon name="logo-pinterest"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link" style="background-color: #1565c0">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

            </ul>

          </div>

          <!-- <div class="footer-newsletter">

            <p class="footer-list-title">Đăng ký</p>

            <form action="" class="footer-newsletter">
              <input type="email" name="email_address" aria-label="email" placeholder="Nhập email..." required
                class="email-field">

              <button type="submit" class="footer-btn" aria-label="submit">
                <ion-icon name="rocket"></ion-icon>
              </button>
            </form>

          </div> -->

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2022 Sammi. All Right Reserved by <a href="#" class="copyright-link">tannguyennhat</a>
        </p>

      </div>
    </div>

  </footer>






  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up"></ion-icon>
  </a>

  <script src="script.js" defer></script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>