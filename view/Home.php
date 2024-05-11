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
    padding: ;
}

.container {
    width: 85%;
    margin: 0 auto;
    text-align: justify;
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

</style>
</head>
<body>

  <?php
  //inheritance
  class TVRIContent {
    private $image;
    private $content;

    // Constructor
    public function __construct($image, $content) {
        $this->image = $image;
        $this->content = $content;
    }

    public function displayContent() {
        echo '<div class="container">';
        echo '<img src="' . $this->image . '" alt="TVRI Jabar" width="320px" style="float: left;margin-right: 10px;">';
        echo '<p style="color: white;">' . $this->content . '</p>'; 
        echo '<p style="color: white;">Source : Wikipedia.</p>'; 
        echo '</div>';
    }
// Destructor
public function __destruct() {
  echo '<p style="color: white;">The TVRIContent object has been destroyed.</p>'; 
}
    
}
?>
<div class="container">
        <div class="topnav">
            <a class="active" href="#home">Home</a>
            <a href="AboutUs.php">About Us</a>
            <a href="Login.php">Login</a>
            <a href="PengajuanPKL.php">Pengajuan PKL</a>
        </div>
        <div class="main-content">
            <?php
            $content = new TVRIContent('https://scontent-cgk1-2.xx.fbcdn.net/v/t39.30808-6/346970380_899203591375484_7371397751156185076_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeG2wJ0zc75BFqVc6IfsWbG1LPoLqfXwWR0s-gup9fBZHQ4AEXwL4m4FJ4yImFGb5d30chkeGt1qqaHhPdB_K_UI&_nc_ohc=bEAr_yqKTZUQ7kNvgEM5Fn8&_nc_ht=scontent-cgk1-2.xx&oh=00_AYBOlFGalNRhZEE518YkKi6UIO-0GFJGl0MLcoP3FvsnWw&oe=6644A0A2', 
            'TVRI West Java ( Bahasa Indonesia : TVRI Jawa Barat , Sundanese : Televisi Republik Indonesia Jawa Kulon ) is a regional television station established by Televisi Republik Indonesia for the West Java region . TVRI West Java was founded on March 11 1987 and inaugurated by the then Governor of West Java Yogie Suardi Memet [1] with the name TVRI Bandung . At that time, TVRI Bandung also started broadcasting 60 minutes of TVRI\'s typical regional news program. Starting March 30 2019, the news program West Java in News changed its name to West Java Today because it follows the name of the news program from TVRI Nasional, namely Regions Today . 
            <br><br>On May 21 1991, precisely when RCTI broadcast in Bandung , TVRI Bandung broadcasts were also broadcast via RCTI Bandung with the local news program TVRI Bandung. Until RCTI broadcast nationally in 1993, TVRI Bandung still existed on RCTI broadcasts in the West Java area. When the monetary crisis occurred in 1998, TVRI Bandung was forced to stop broadcasting due to funding constraints. This continued to happen until mid-2000, at which time TVRI Bandung returned to normal operations. However, the incident happened again, where TVRI Nasional\'s broadcasts stopped broadcasting. This caused TVRI Bandung to stop operating again until December 2001. 
            <br><br>In 2003, TVRI Bandung began operating normally. In fact, the name TVRI Bandung began to be replaced with the name TVRI Jabar and Banten . This replacement is intended so that TVRI Bandung can be widely accepted by the Sundanese people, without concentrating on TVRI programs. This is because TVRI Bandung is considered not widespread and is only known in the Bandung area. In 2007 (after the TVRI National logo changed), TVRI West Java and Banten changed its name once again to TVRI West Java .April 2013, TVRI Bandung began providing live streaming online services . On November 2 2022 afternoon time ( WIB ), TVRI West Java has stopped analog television broadcasts in Bandung, and is only available via terrestrial digital television broadcasts on channel 35 UHF (TVRI Panyandakan multiplexing). Currently, the West Java TVRI office is located at Jl. Raya Cibaduyut 269, Bandung City .
            ');
            $content->displayContent();
            ?>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2024 TVRI Jawa Barat, Muhammad Daffa Fikriawan</p>
    </div>
</body>
</html>