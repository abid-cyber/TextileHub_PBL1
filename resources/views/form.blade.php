    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Sign Up Form</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #222;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    }  
    .container {
    background-color: #333;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
    width: 350px;
    text-align: center;
    }
    input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: none;
    }
    .btn {
    background-color: #3b82f6;
    color: white;
    padding: 10px;
    width: 100%;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    }
    .social-icons {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 10px;
    }
    .social-icons a {
    text-decoration: none;
    color: white;
    background-color: #555;
    padding: 10px;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    }
    </style>
    </head>
    <body>
    <div class="container">
    <h4>WELCOME TOO HOME</h4>
    <form action="register.php" method="POST">
    <input type="text" name="first_name" placeholder="First name"
    required>
    <input type="text" name="last_name" placeholder="Last name"
    required>
    <input type="email" name="email" placeholder="Email address"
    required>
    <input type="password" name="password" placeholder="password"
    required>
    <hr>
    <button type="submit" class="btn">SIGN UP</button>
    </form>
    </div>
    </body>
    </html>