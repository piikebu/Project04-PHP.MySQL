<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imelda Lie</title>
    <!-- CSS Import -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- PHP Config Import -->
    <?php require_once 'conn.php'; ?>
</head>
<body>
    <header>
        <section id="home">
            <h1>Welcome To My Website</h1>
            <div class="dmode-button">
                <input type="checkbox" id="darkmode-toggle" onclick="darkMode();"/>
                <label for="darkmode-toggle">
        </div> 
    </header>

    <div class="aboutme">
        <h2>About Me</h2>
        <h3 class="home-name">Hai, saya Ime!</h3>
        <p>Selamat datang dalam situs web saya. Saya seorang Mahasiswa yang datang ke kota lain untuk mengenyam pendidikan. Melalui situs web ini saya akan memperlihatkan hobi saya, yakni fotografi. Nama lengkap saya Imelda Caterina Liwongan Lie. Biasa saya dipanggil, Ime. Saat ini saya sedang menempuh pedidikan S1 dengan program studi informatika di Universitas Sam Ratulangi Manado. Fotografi menjadi salah satu hobi favorite saya. Berbagai tempat indah yang saya kunjungi membuat saya ingin mengabadikan momen tersebut agar dapat dikenang, dari sinilah hobi saya dimulai. </p>
    </div>

    <div class="gallery">
        <h2>Gallery</h2>
        <img src="img/IMG_0266.jpeg.jpg" alt="bunga1" width="230">
        <img src="img/IMG_0296.jpeg.jpg" alt="bunga2" width="230">
        <img src="img/IMG_0666.jpeg.jpg" alt="bunga3" width="230"><br>
        <img src="img/IMG_5362.jpeg.jpg" alt="cafe1" width="230">
        <img src="img/IMG_5483.jpeg.jpg" alt="cafe2" width="230">
        <img src="img/FullSizeRender.jpeg.jpg" alt="cafe3" width="230">
    </div>

    <div class="blog">
        <h2>Blogs</h2>
        <?php
                while ($article = $result -> fetch_assoc()){
                    ?>
                       <div class="blog-img-child">
                            <h3><?php echo $article['judul']; ?></h3>
                            <p><?php echo $article['konten']; ?></p>
                            <a href="<?php echo $article['link']; ?>">Baca Selengkapnya. . .</a>
                        </div>
                    <?php
                    }
                    ?>
    </div>

    <div class="contact">
        <h2>Contact Me</h2>
            <a href="https://www.instagram.com/imeldallie">@imeldallie</a><br>
            <a href="mailto:imeldallie04@gmail.com">imeldallie04@gmail.com</a>

    </div>
    <script src="js/script.js"></script>
</body>
</html>