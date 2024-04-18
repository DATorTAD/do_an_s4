
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vsshop | Liên hệ</title>

    <?php include_once __DIR__.'/../layouts/meta.php';?>
    <?php include_once __DIR__.'/../layouts/style.php';?>
</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php include_once __DIR__.'/../layouts/partials/header.php';?>
    <?php include_once __DIR__.'/../layouts/partials/sidebar.php';?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="/Vsshop/assets/vendor/frontend/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Liên hệ</h2>
                        <div class="breadcrumb__option">
                            <a href="/Vsshop">Trang chủ</a>
                            <span>Liên hệ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Phone</h4>
                        <p>+123456789</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Address</h4>
                        <p>123/456 ABC</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Mở cửa</h4>
                        <p>7:00 am to 10:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>doan@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4275731157327!2d106.7827980757039!3d10.855047957737295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527c3debb5aad%3A0x5fb58956eb4194d0!2zxJDhuqFpIEjhu41jIEh1dGVjaCBLaHUgRQ!5e0!3m2!1svi!2s!4v1713145977331!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>Việt Nam</h4>
                <ul>
                    <li>Điện thoại: +123456789</li>
                    <li>Địa chỉ: 123/456 ABC</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>TIN NHẮN</h2>
                    </div>
                </div>
            </div>
            <form method="post" action="">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="email" id="email" name="email" placeholder="Email của bạn">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" id="title" name="title" placeholder="Tiêu đề của bạn">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea name="message" placeholder="Lời nhắn của bạn"></textarea>
                        <button type="submit" class="site-btn" name="btnGoiLoiNhan">GỬI LỜI NHẮN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->
    
    <?php include_once __DIR__.'/../layouts/partials/footer.php';?>
    <?php include_once __DIR__.'/../layouts/script.php';?>
</body>
</html>
```

