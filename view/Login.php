<?php
// Enkapsulasi
class LoginForm {
    protected $username;
    protected $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function authenticate() {
        if ($this->validateUser($this->username, $this->password)) {
            echo '<script>alert("Login successful!");</script>';
        } else {
            echo '<script>alert("Invalid username or password!");</script>';
        }
    }

    protected function validateUser($username, $password) {
        return ($username === "admin" && $password === "admin123");
    }
}

// Override
class CustomLoginForm extends LoginForm {
    public function validateUser($username, $password) {
        if ($username === "admin" && $password === "admin123") {
            return true;
        } elseif ($username === "user" && $password === "user123") {
            return true;
        } else {
            return false;
        }
    }

    // Overloading
    public function __call($name, $arguments) {
        if ($name === 'validateUser' && count($arguments) === 3) {
            $username = $arguments[0];
            $password = $arguments[1];
            $role = $arguments[2];

            if ($username === "admin" && $password === "admin123" && $role === "admin") {
                return true;
            } elseif ($username === "user" && $password === "user123" && $role === "user") {
                return true;
            } else {
                return false;
            }
        } else {
            return parent::__call($name, $arguments);
        }
    }
}

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Polimorfisme
if (!empty($username) && !empty($password)) {
    $loginForm = new CustomLoginForm($username, $password);
    $loginForm->authenticate();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/5/5c/New_Logo_TVRI.png" />
    <title>Login Form Karyawan</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #333;
        }

        form {
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label, input, button {
            display: block;
            margin-bottom: 15px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin: 0 auto;
            display: block;
        }

        button:hover {
            background-color: #0056b3;
        }

        h3 {
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <h3>Login Form Karyawan TVRI</h3>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
