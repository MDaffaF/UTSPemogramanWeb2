<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TVRI Jawa Barat</title>
    <link rel="icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/5/5c/New_Logo_TVRI.png" />
    <style>
 body {
    background-color: #333;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    width: 85%;
    margin: 0 auto; /* Membuat container berada di tengah */
    text-align: justify; /* Ratakan teks */
}

.topnav {
    background-color: #333;
    overflow: hidden;
    border-bottom: 1px solid #ccc;
}

.topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

.topnav a:hover {
    background-color: #ddd;
    color: black;
}

.topnav a.active {
    background-color: blue;
    color: white;
}

.main-content {
    padding: 20px;
    color: white;
}

.footer {
  
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px 0;
}

.program-container {
    display: flex;
    gap: 20px; /* Jarak antara gambar dan teks */
    align-items: center; /* Posisi vertikal menjadi tengah */
}
</style>
</head>
<body>  
  <?php
  //Inheritance
class TVRIProgram {
    protected $image;
    protected $title;
    protected $description;

    public function __construct($image, $title, $description) {
        $this->image = $image;
        $this->title = $title;
        $this->description = $description;
    }


    public function displayProgram() {
      echo '<div class="program-container">';
      echo '<div class="program-image">';
      echo '<img src="' . $this->image . '" alt="' . $this->title . '" width="200" height="200">';
      echo '</div>';
      echo '<div class="program-info">';
      echo '<h3 style="color: white;">' . $this->title . '</h3>';
      echo '<p style="color: white;">' . $this->description . '</p>';
      echo '</div>';
      echo '</div>';
  }
  
}

class Sampurasun extends TVRIProgram {
    public function __construct($image, $title, $description) {
        parent::__construct($image, $title, $description);
    }
}

class SOS extends TVRIProgram {
    public function __construct($image, $title, $description) {
        parent::__construct($image, $title, $description);
    }
}

class DokterKita extends TVRIProgram {
    public function __construct($image, $title, $description) {
        parent::__construct($image, $title, $description);
    }
}
class SangKreator extends TVRIProgram {
  public function __construct($image, $title, $description) {
      parent::__construct($image, $title, $description);
  }
}
class CahayaQalbu extends TVRIProgram {
  public function __construct($image, $title, $description) {
      parent::__construct($image, $title, $description);
  }
}
class MusikBox extends TVRIProgram {
  public function __construct($image, $title, $description) {
      parent::__construct($image, $title, $description);
  }
}
?>
<div class="container">
<div class="topnav">
  <a href="Home.php">Home</a>
  <a class="active" href="AboutUs.php">About Us</a>
  <a href="Login.php">Login</a>
  <a href="PengajuanPKL.php">Pengajuan PKL</a>
  </div>
        <div class="main-content">
            <?php
            $sampurasun = new Sampurasun('https://scontent-cgk2-1.xx.fbcdn.net/v/t39.30808-6/336764864_230683876130895_5395015479023504494_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGVucOmIkRehNoploJgDupez2uEKcHkqMfPa4QpweSox9WVA6BbkL0H5hRKNn9ZqToT0PH9DNDbEJDFjDdhNo1b&_nc_ohc=9vy7hE1-OLcQ7kNvgHnSaLn&_nc_ht=scontent-cgk2-1.xx&oh=00_AYAOWHZQVUv-QenXf5gQWWXJFkACk9vYKyg2805fOKKuAA&oe=664400DA',
            'Sampurasun', '
            Sampurasun is a program with the theme of the latest news every day, of course also with experienced resource persons in their fields. This program aims to provide up-to-date information to the audience while also presenting insights from relevant experts.');
            $sampurasun->displayProgram();
            
            $sos = new SOS('https://scontent-cgk2-1.xx.fbcdn.net/v/t39.30808-6/241951986_2967168386933741_6607488718753922540_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFO8Y9Y3rkAR3G6OVqcaC5GJV2DaR3gFh0lXYNpHeAWHfiAqVUUxQZ0MBl8qVDEtxCWHoIXe9fzAUUBsnEHFqov&_nc_ohc=LpC-6XZ3IaUQ7kNvgE9fp-A&_nc_ht=scontent-cgk2-1.xx&oh=00_AYA7NpzmnCzOKFBlWlOKoeITX3bc_8aYvxlYvO0TFGC7YA&oe=6643CE40',
            'SOS (Sule Ogi Show)', 'One of the superior comedy programs owned by TVRI West Java, with the presence of top Indonesian comedian Kang Sule, the SOS program has succeeded in becoming a popular event for all groups.');
            $sos->displayProgram();
            
            $dokterKita = new DokterKita('https://scontent-cgk2-1.xx.fbcdn.net/v/t1.6435-9/201034368_2899663633684217_8195049718897025927_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeG-MVL-j2U8YccUPr1VBxRJQ-xV4MzZrApD7FXgzNmsCqQ3PCe5iCdhmjR9lJ77e8IJdG5HqyCz5R0BOwzD8c9l&_nc_ohc=Iu9GGL1igpcQ7kNvgEReFrR&_nc_ht=scontent-cgk2-1.xx&oh=00_AYDC8FtMOOADcrCcKH1DPd61HLXgpjY3lVq2jGSrdp2Diw&oe=66657FC8', 
            'Dokter Kita', 'Dokter Kita, is a health program that educates and provides information or tips about health. The presence of resource persons are doctors from well-known hospitals in Bandung with various experiences in the health sector.');
            $dokterKita->displayProgram();

            $sangkreator = new SangKreator('https://scontent-cgk1-2.xx.fbcdn.net/v/t39.30808-6/424812950_18304951588120906_8336764203195276604_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFqayzu7GpVl8JYqk90qL6M5NcD8wXeNdrk1wPzBd412r5aDgv8O1awAD2PcAbh6YsnxraxdseG11hQiwWd0rZd&_nc_ohc=dBg6OgKwGOQQ7kNvgGDndbl&_nc_ht=scontent-cgk1-2.xx&oh=00_AYAwdKoAeB8ZRRtnf6Ypb4f-_FS0CNU2V_lZvjbxoDxC7Q&oe=664493E8', 
            'Sang Kreator', 'Program that highlights the process of creating and developing creative SMEs around the West Java region, including areas such as traditional fabric production and various other products that embody the artistic value and unique characteristics of the region. This program serves as a platform to delve into the various stages involved in creating these creative products, from design and manufacturing to marketing. Thus, "Sang Kreator" not only promotes the cultural richness and local artistry but also provides inspiration and support for SMEs to grow and compete more effectively in the market.');
            $sangkreator->displayProgram();
            
            $cahayaqalbu = new CahayaQalbu('https://scontent-cgk1-2.xx.fbcdn.net/v/t39.30808-6/415261839_18300764107120906_6032105170890526897_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHnPVSGwhP-TVcr_xuIFlW7Ulyvz4zzN4JSXK_PjPM3gvH6dftNCl7QHPPFzu7jszL7WLv9witYKaDs3VRRD3VJ&_nc_ohc=ah2MjDFhBegQ7kNvgHz9VwU&_nc_ht=scontent-cgk1-2.xx&oh=00_AYA_Cdlv4jatsOSFatDWsPKI6l12wwetJgKO_FNZBHGxeg&oe=66449B45', 
            'Cahaya Qalbu', 'Program on TVRI West Java aims to provide enlightenment and motivation to viewers through content with religious and spiritual nuances. The program presents various materials such as religious lectures, Islamic studies, and values of goodness and wisdom in daily life. "Cahaya Qalbu" serves as a means for viewers to gain insights and inspiration that enrich the spirit and provide a positive direction in life.');
            $cahayaqalbu->displayProgram();
            
            $musikBox = new MusikBox('https://scontent-cgk1-2.xx.fbcdn.net/v/t39.30808-6/323360165_710853907335008_4847727529837320379_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeE9vSt9o_XSK8c4QxfiyDjH6juyWSkHbQnqO7JZKQdtCUZJLdIjnn8FRUeJfybU9nbOfRGbaje0HYlsuA7knkdC&_nc_ohc=ErH_ZtjBGnIQ7kNvgG7hclr&_nc_ht=scontent-cgk1-2.xx&oh=00_AYDR72dJB7iuCMHfD46v9nz4lrwExzA2n9oezR7Fbj904g&oe=664498DB', 
            'Musik Box', 'Music program that showcases various genres of music from local to international. The show provides opportunities for local musicians and bands to perform and introduce their works to the audience. Additionally, "Musik Box" often invites famous musicians from both domestic and international scenes as guest stars, making it a platform that promotes local musical talent while expanding appreciation for music across different genres.');
            $musikBox->displayProgram();
            ?>
            
        </div>
    </div>
  <div class="footer">
  <p>&copy; 2024 TVRI Jawa Barat, Muhammad Daffa Fikriawan</p>
</div>
</body>
</html>