 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toshkent Ob-havo Ma'lumotlari</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .weather-container {
            background-color: #5F9EA0;
            padding: 90px;
            border-radius: 30px;
            background-image: url('https://wallpapercave.com/wp/7rhrsIf.jpg');
            width: 300px;
            text-align: center;
        }
        h2 {
            margin-bottom: 30px;
        }
        .weather-info {
            margin: 30px 0;
        }
        .weather-widget {
            position: relative;
            background-color: rgba(50, 0, 0, 0.5);
            padding: 30px;
            border-radius: 20px;
            color: white;
            text-align: center;
        }
        .search-input {
            position: absolute;
            top: -50px;
            left: 33%;
            transform: translateX(-50%);
            width: 70%;
            padding: 10px;
            border-radius: 25px;
            border: none;
            outline: none;
            font-size: 14px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            background: linear-gradient(135deg, #8EC5FC 0%, #E0C3FC 100%);
            color: #333;
            font-weight: bold;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .search-input:focus {
            transform: translateX(-50%) scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4);
        }
        .search{
            position: absolute;
            top: -50px;
            left: 92%;
            transform: translateX(-50%);
            width: 30%;
            padding: 10px;
            border-radius: 25px;
            border: none;
            outline: none;
            font-size: 14px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            background: linear-gradient(135deg, #8EC5FC 0%, #E0C3FC 100%);
            color: #333;
            font-weight: bold;
            transition: transform 0.2s, box-shadow 0.2s;

        }
        .search:focus {
            transform: translateX(-50%) scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4);
        }
    </style>
</head>
<body>

<div class="weather-container">
    <div class="weather-widget">
        <form class="search-container" action="" method="GET">
            <input type="text" name="city" class="search-input" placeholder="Shahar nomini kiriting..." required>
            <button type="submit" class="search">🔍</button>
        </form>
        <h2> Uzbekistan Weather</h2>


        <div class="weather-card text-center">
            <div class="mb-3">
                <img id="weather-icon" src="<?php echo $weather->getWeatherIconUrl(); ?>" alt="Weather Icon" class="weather-icon">
            </div>
        </div>

        <div class="weather-info">
            <strong>Temperatura:</strong> <?php echo round($weatherData['main']['temp'] - 273.15, 2); ?> °C 🌥️
        </div>
        <div class="weather-info">
            <strong>Bosim:</strong> <?php echo $weatherData['main']['pressure']; ?> hPa 🌡️
        </div>
        <div class="weather-info">
            <strong>Namlik:</strong> <?php echo $weatherData['main']['humidity']; ?>% 💧
        </div>
        <div class="weather-info">
            <strong>Shamol tezligi:</strong> <?php echo $weatherData['wind']['speed']; ?> m/s 🌬️
        </div>
    </div>
</div>
</body>
</html>

