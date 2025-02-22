<?php
    require_once ('config/database.php');


?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه میوه</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="shortcut icon" href="./images/product-9.png" type="image/x-icon">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<header>

    <div class="header-1">

        <a href="#" class="logo">Alibaba</a>

        <form action="" class="search-box-container">
            <input type="search" id="search-box" placeholder="جستجو کنید">
            <label for="search-box" class="fas fa-search"></label>
        </form>

    </div>

    <div class="header-2">

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">خانه</a>

            <?php

                $query = "SELECT * FROM tblmenu";
                $stmt = $db->prepare($query);
                $stmt->execute();
                while($row=$stmt->fetch(PDO::FETCH_ASSOC)){

                    $title = $row['title'];

                    echo "<a href='#'> $title </a>";

                }


            ?>
        </nav>

        <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-user-circle"></a>
        </div>

    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="images/home-img.png" alt="">
    </div>

    <div class="content">
        <span>تازه و ارگانیک</span>
        <h3>محصولات روزمره شما</h3>
        <a href="#" class="btn">شروع کنید</a>
    </div>

</section>

<!-- home section ends -->

<!-- banner section starts  -->

<section class="banner-container">

    <div class="banner">
        <img src="images/banner-1.jpg" alt="">
        <div class="content">
            <h3>پیشنهاد ویژه</h3>
            <p>حداکثر 45٪ تخفیف</p>
            <a href="#" class="btn">خرید کنید</a>
        </div>
    </div>

    <div class="banner">
        <img src="images/banner-2.jpg" alt="">
        <div class="content">
            <h3>پیشنهاد محدود</h3>
            <p>حداکثر 70٪ تخفیف</p>
            <a href="#" class="btn">خرید کنید</a>
        </div>
    </div>

</section>

<!-- banner section ends -->

<!-- category section starts  -->

<section class="category" id="category">

    <h1 class="heading">خرید به وسیله ی <span>دسته بندی</span></h1>

    <div class="box-container">

        <div class="box">
            <h3>سبزیجات</h3>
            <p>50٪ تخفیف</p>
            <img src="images/category-1.png" alt="">
            <a href="#" class="btn">الان خرید کن</a>
        </div>
        <div class="box">
            <h3>آب میوه</h3>
            <p>44٪ تخفیف</p>
            <img src="images/category-2.png" alt="">
            <a href="#" class="btn">الان خرید کن</a>
        </div>
        <div class="box">
            <h3>گوشت</h3>
            <p>35٪ تخفیف</p>
            <img src="images/category-3.png" alt="">
            <a href="#" class="btn">الان خرید کن</a>
        </div>
        <div class="box">
            <h3>میوه دار</h3>
            <p>12٪ تخفیف</p>
            <img src="images/category-4.png" alt="">
            <a href="#" class="btn">الان خرید کن</a>
        </div>

    </div>

</section>

<!-- category section ends -->

<!-- product section starts  -->

<section class="product" id="product">

    <h1 class="heading">آخرین <span>محصولات</span></h1>

    <div class="box-container">

        <div class="box">
            <span class="discount">-33%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-1.png" alt="">
            <h3>موز ارگانیک</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>تعداد : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn">افزودن به سبد خرید</a>
        </div>

        <div class="box">
            <span class="discount">-45%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-2.png" alt="">
            <h3>گوجه فرنگی ارگانیک</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>تعداد : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn">افزودن به سبد خرید</a>
        </div>

        <div class="box">
            <span class="discount">-52%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-3.png" alt="">
            <h3>پرتقال ارگانیک</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>تعداد : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn">افزودن به سبد خرید</a>
        </div>

        <div class="box">
            <span class="discount">-13%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-4.png" alt="">
            <h3>شیر طبیعی</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>تعداد : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn">افزودن به سبد خرید</a>
        </div>

        <div class="box">
            <span class="discount">-20%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-5.png" alt="">
            <h3>انگور ارگانیک</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>تعداد : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn">افزودن به سبد خرید</a>
        </div>

        <div class="box">
            <span class="discount">-29%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-6.png" alt="">
            <h3>بادام طبیعی</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>تعداد : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn">افزودن به سبد خرید</a>
        </div>

        <div class="box">
            <span class="discount">-55%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-7.png" alt="">
            <h3>سیب ارگانیک</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>تعداد : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn">افزودن به سبد خرید</a>
        </div>

        <div class="box">
            <span class="discount">-30%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-8.png" alt="">
            <h3>کره طبیعی</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>تعداد : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn">افزودن به سبد خرید</a>
        </div>

<!--        <div class="box">-->
<!--            <span class="discount">-40%</span>-->
<!--            <div class="icons">-->
<!--                <a href="#" class="fas fa-heart"></a>-->
<!--                <a href="#" class="fas fa-share"></a>-->
<!--                <a href="#" class="fas fa-eye"></a>-->
<!--            </div>-->
<!--            <img src="images/product-9.png" alt="">-->
<!--            <h3>هویج ارگانیک</h3>-->
<!--            <div class="stars">-->
<!--                <i class="fas fa-star"></i>-->
<!--                <i class="fas fa-star"></i>-->
<!--                <i class="fas fa-star"></i>-->
<!--                <i class="fas fa-star"></i>-->
<!--                <i class="fas fa-star-half-alt"></i>-->
<!--            </div>-->
<!--            <div class="price"> $10.50 <span> $13.20 </span> </div>-->
<!--            <div class="quantity">-->
<!--                <span>تعداد : </span>-->
<!--                <input type="number" min="1" max="1000" value="1">-->
<!--                <span> /kg </span>-->
<!--            </div>-->
<!--            <a href="#" class="btn">افزودن به سبد خرید</a>-->
<!--        </div>-->

    </div>

</section>

<!-- product section ends -->

<!-- deal section starts  -->

<section class="deal" id="deal">

    <div class="content">

        <h3 class="title">معامله روز</h3>
        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز </p>

        <div class="count-down">
            <div class="box">
                <h3 id="day">00</h3>
                <span>روز</span>
            </div>
            <div class="box">
                <h3 id="hour">00</h3>
                <span>ساعت</span>
            </div>
            <div class="box">
                <h3 id="minute">00</h3>
                <span>دقیقه</span>
            </div>
            <div class="box">
                <h3 id="second">00</h3>
                <span>ثانیه</span>
            </div>
        </div>

        <a href="#" class="btn">معامله را بررسی کنید</a>

    </div>

</section>

<!-- deal section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> ارتباط <span>با ما</span></h1>

    <form action="">

        <div class="inputBox">
            <input type="text" placeholder="اسم">
            <input type="email" placeholder="ایمیل">
        </div>

        <div class="inputBox">
            <input type="number" placeholder="تلفن">
            <input type="text" placeholder="عنوان">
        </div>

        <textarea placeholder="پیام" name="" id="" cols="30" rows="10"></textarea>

        <input type="submit" value="ارسال پیام" class="btn">

    </form>

</section>

<!-- contact section ends -->

<!-- newsletter section starts  -->

<section class="newsletter">

    <h3>ما را برای آخرین به روزرسانی ها مشترک کنید</h3>

    <form action="">
        <input class="box" type="email" placeholder="ایمیل خود را وارد کنید">
        <input type="submit" value="مشترک شوید" class="btn">
    </form>

</section>

<!-- newsletter section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>groco</a>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز </p>
            <div class="share">
                <a href="#" class="btn fab fa-facebook-f"></a>
                <a href="#" class="btn fab fa-twitter"></a>
                <a href="#" class="btn fab fa-instagram"></a>
                <a href="#" class="btn fab fa-linkedin"></a>
            </div>
        </div>
        
        <div class="box">
            <h3>مکان ما</h3>
            <div class="links">
                <a href="#">تهران</a>
                <a href="#">مشهد</a>
                <a href="#">اصفهان</a>
                <a href="#">شیراز</a>
                <a href="#">کیش</a>
            </div>
        </div>

        <div class="box">
            <h3>دسترسی سریع</h3>
            <div class="links">
                <a href="#">خانه</a>
                <a href="#">دسته بندی</a>
                <a href="#">محصولات</a>
                <a href="#">معامله</a>
                <a href="#">تماس با ما</a>
            </div>
        </div>

        <div class="box">
            <h3>دانلود اپلیکیشن</h3>
            <div class="links">
                <a href="#">google play</a>
                <a href="#">window xp</a>
                <a href="#">app store</a>
            </div>
        </div>

    </div>

    <h1 class="credit"> طراحی توسط Ali | کلیه حقوق محفوظ است </h1>

</section>

<!-- footer section ends -->



















<!-- custom js file link  -->
<script src="js/script.js"></script>
    
</body>
</html>