<?php
class WeatherInformation {
    const WEATHER_API_URL = "https://api.openweathermap.org/data/2.5/weather?q=Toshkent&appid=1f2c4527291b18aaab758440a1f8e071";
    
    public function getWeatherData() {
        $response = file_get_contents(self::WEATHER_API_URL);
        return json_decode($response, true);
    }
}

$weather = new WeatherInformation();
$weatherData = $weather->getWeatherData();
?>
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
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        h2 {
            margin-bottom: 10px;
        }
        .weather-info {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="weather-container">
        <h2>Toshkent Ob-havo</h2>
        <?php if ($weatherData): ?>
            <div class="weather-info">
                <strong>Temperatura:</strong> <?php echo round($weatherData['main']['temp'] - 273.15, 2); ?> °C
            </div>
            <div class="weather-info">
                <strong>Bosim:</strong> <?php echo $weatherData['main']['pressure']; ?> hPa
            </div>
            <div class="weather-info">
                <strong>Namlik:</strong> <?php echo $weatherData['main']['humidity']; ?>%
            </div>
            <div class="weather-info">
                <strong>Shamol tezligi:</strong> <?php echo $weatherData['wind']['speed']; ?> m/s
            </div>
        <?php else: ?>
            <p>Ma'lumotlarni olishda xatolik yuz berdi.</p>
        <?php endif; ?>
    </div>
</body>
</html>
