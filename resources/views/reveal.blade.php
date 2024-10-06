<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prize Reveal</title>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            padding: 50px;
            background-color: #121212; /* Dark background */
            color: #ffffff; /* White text */
            margin: 0;
            height: 100vh; /* Full viewport height */
            display: flex; /* Center the content */
            flex-direction: column; /* Vertical alignment */
            justify-content: center; /* Center vertically */
            align-items: center; /* Center horizontally */
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 40px;
            color: #00bcd4; /* Teal color */
            text-shadow: 0 0 10px rgba(0, 188, 212, 0.7); /* Teal glow */
        }
        .prize {
            font-size: 40px;
            color: #ff9900; /* Prize color */
            margin: 20px;
            text-shadow: 0 0 10px rgba(255, 153, 0, 0.7); /* Orange glow */
        }
        a {
            font-size: 1.5em;
            color: #00bcd4; /* Teal link color */
            text-decoration: none; /* Remove underline */
            margin-top: 20px;
            padding: 10px 20px;
            border: 2px solid #00bcd4; /* Teal border */
            border-radius: 5px; /* Rounded corners */
            transition: background-color 0.3s, color 0.3s; /* Animation for hover */
        }
        a:hover {
            background-color: #00bcd4; /* Teal background on hover */
            color: #121212; /* Dark text on hover */
        }
    </style>
</head>
<body>
    <h1>🎁 What's inside Box {{ $boxId }}?</h1>
    
    <div class="prize">{{ $prize }}</div>

    <a href="{{ route('home') }}" onclick="launchConfetti(event)">Claim!</a>
    <a href="{{ route('home') }}">Play Again!</a>

    <script>
        function launchConfetti(event) {
            event.preventDefault(); // Prevent the default anchor action
            confetti({
                particleCount: 100,
                spread: 70,
                origin: { y: 0.6 }, // Adjust origin for effect
                colors: ['#bb0000', '#ffffff', '#00bcd4']
            });
            setTimeout(() => {
                window.location.href = event.currentTarget.href; // Navigate after confetti
            }, 3000); // Delay navigation to allow confetti to fall
        }
    </script>
</body>
</html>
