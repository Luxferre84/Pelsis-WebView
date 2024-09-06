<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image and Clickable Text</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: 'Poppins', sans-serif; /* Apply Poppins font */
            background-color: #f0f0f0;
        }
        img {
            max-width: 80%;
            max-height: 60vh;
            height: auto;
            width: auto;
            margin-bottom: 100px; /* Add margin to bottom of image */
        }
        .clickable-text {
            margin-top: 20px;
            font-size: 20px;
            font-weight: 600;
            color: #b54078; /* Adjusted color using RGB */
            text-decoration: none;
            display: inline-block;
            padding-right: 20px; /* Space for the arrow */
            transition: color 0.3s;
        }
        .clickable-text::after {
            content: '\2192'; /* Unicode arrow right character */
            margin-left: 5px; /* Space between text and arrow */
        }
        .clickable-text:hover {
            color: #b54078; /* Change color on hover */
        }
    </style>
</head>
<body>
    <img src="img/pelsisbg.png" alt="Logo">
    <a href="login.php" class="clickable-text">Mulai</a>
</body>
</html>
