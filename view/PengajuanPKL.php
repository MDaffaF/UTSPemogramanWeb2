<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PKL Application Form</title>
        <link rel="icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/5/5c/New_Logo_TVRI.png" />
        <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #333;
                        margin: 0;
                        padding: 0;
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
            h2 {
                color: white;
            }

            form {
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            label {
                font-weight: bold;
            }

            input[type="text"],
            input[type="number"],
            input[type="file"],
            input[type="submit"] {
                width: 100%;
                padding: 8px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type="submit"] {
                background-color: #007bff;
                color: white;
                border: none;
                cursor: pointer;
            }

            input[type="submit"]:hover {
                background-color: #0056b3;
            }
            table {
                background-color: #fff;
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }

            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }

            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
    <?php
    // Encapsulation
    class PklApplication {
        private $schoolName;
        private $duration;
        private $attachment;
    // Constructor
        public function __construct($schoolName, $duration, $attachment) {
            $this->schoolName = $schoolName;
            $this->duration = $duration;
            $this->attachment = $attachment;
        }

        public function submitApplication() {
            $data = [
                'School Name' => $this->schoolName,
                'Duration' => $this->duration,
                'Attachment' => $this->attachment,
            ];
            return $data;
        }
    }
    ?>
    <div class="container">
    <div class="topnav">
    <a href="Home.php">Home</a>
    <a href="AboutUs.php">About Us</a>
    <a href="Login.php">Login</a>
    <a class="active" href="PengajuanPKL.php">Pengajuan PKL</a>
    </div>
            <div class="main-content">
        <h2>PKL Application Form</h2>
        <form method="post" enctype="multipart/form-data">
            <label for="school_name">School Name:</label><br>
            <input type="text" id="school_name" name="school_name" required><br><br>

            <label for="duration">Duration (in Month):</label><br>
            <input type="number" id="duration" name="duration" required><br><br>

            <label for="attachment">Attachment (school letter):</label><br>
            <input type="file" id="attachment" name="attachment" required><br><br>

            <input type="submit" value="Submit">
        </form>
        <h2>PKL Applications Data</h2>
        <table>
            <tr>
                <th>School Name</th>
                <th>Duration (Month)</th>
                <th>Attachment</th>
                <th>Approval</th>
            </tr>
            <?php
            $pklApplications = [
                ["SMK 1 Katapang", 3 , "PengajuanPKl.pdf"],
                ["SMA 1 Soreang ", 2, "Pengajuan.pdf"],
                ["SMK 1 Bandung", 2, "PengajuanPKL1.pdf"],
            ];
            foreach ($pklApplications as $application) {
                echo "<tr>";
                echo "<td>{$application[0]}</td>";
                echo "<td>{$application[1]}</td>";
                echo "<td>{$application[2]}</td>";
                echo "<td>";
                echo "<input type='checkbox' name='approval[]' value='{$application[0]}'>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
        </div>
        </div>
    <div class="footer">
    <p>&copy; 2024 TVRI Jawa Barat, Muhammad Daffa Fikriawan</p>
    </div>
    </body>
    </html>


