<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mystery Box Challenge</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            padding: 50px;
            background-color: #121212; /* Dark background */
            color: #ffffff; /* White text */
            margin: 0;
            height: 100vh; /* Full viewport height */
            
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 40px;
            text-shadow: 0 0 10px rgba(0, 255, 255, 0.7); /* Teal glow */
        }
        .box {
            display: inline-block;
            width: 150px;
            height: 150px;
            margin: 20px;
            background-color: #1e1e1e; /* Slightly lighter dark background for boxes */
            border: 2px solid #00bcd4; /* Teal border */
            box-shadow: 0 4px 20px rgba(0, 188, 212, 0.5); /* Teal shadow */
            font-size: 24px;
            line-height: 150px;
            color: #00bcd4; /* Teal text */
            cursor: pointer;
            transition: transform 0.3s, background-color 0.3s; /* Animation for hover */
        }
        .box:hover {
            background-color: #00bcd4; /* Teal background on hover */
            color: #121212; /* Dark text on hover */
            transform: scale(1.05); /* Scale up effect */
        }
        a {
            text-decoration: none; /* Remove underline from links */
        }
    </style>
</head>
<body>
    <h1>Select a Mystery Box!</h1>

    @foreach(range(1, 5) as $boxId)
        <a href="{{ route('open-box', $boxId) }}">
            <div class="box">Box {{ $boxId }}</div>
        </a>
    @endforeach
</body>
</html>