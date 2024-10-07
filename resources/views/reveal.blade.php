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
            background-color: #121212; 
            color: #ffffff; 
            margin: 0;
            height: 100vh; 
            display: flex; 
            flex-direction: column; 
            justify-content: center; 
            align-items: center; 
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 40px;
            color: #00bcd4; 
            text-shadow: 0 0 10px rgba(0, 188, 212, 0.7);
        }
        .prize {
            font-size: 40px;
            color: #ff9900; 
            margin: 20px;
            text-shadow: 0 0 10px rgba(255, 153, 0, 0.7); 
        }
        a {
            font-size: 1.5em;
            color: #00bcd4; 
            text-decoration: none; 
            margin-top: 20px;
            padding: 10px 20px;
            border: 2px solid #00bcd4; 
            border-radius: 5px; 
            transition: background-color 0.3s, color 0.3s; 
        }
        a:hover {
            background-color: #00bcd4; 
            color: #121212; 
        }
    </style>
</head>
<body>
    <h1>🎁 What's inside Box {{ $boxId }}?</h1>
    
    <div class="prize">{{ $prize }}</div>

    <a href="{{ route('home') }}" onclick="launchConfetti(event)">Celebrate!</a>
    <a href="{{ route('home') }}">Play Again!</a>

    <script>
        function launchConfetti(event) {
            event.preventDefault(); 
            confetti({
                particleCount: 100,
                spread: 70,
                origin: { y: 0.6 }, 
                colors: ['#bb0000', '#ffffff', '#00bcd4']
            });
            setTimeout(() => {
                window.location.href = event.currentTarget.href; 
            }, 3000); 
        }
    </script>
</body>
</html>
