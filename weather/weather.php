<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7-Day Weather Forecast</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            font-family: Arial, sans-serif;
            color: #333;
        }

        .forecast-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .forecast-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .forecast-header h1 {
            font-size: 28px;
            font-weight: bold;
            color: #007bff;
        }

        .forecast-row {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            flex-wrap: wrap;
        }

        .forecast-day {
            background: linear-gradient(135deg, #e3eafc 0%, #ffdde1 100%);
            border-radius: 8px;
            padding: 15px;
            width: 100px;
            text-align: center;
            transition: transform 0.3s;
        }

        .forecast-day:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
        }

        .day {
            font-size: 16px;
            font-weight: bold;
            color: #ff5722;
            margin-bottom: 8px;
        }

        .icon img {
            width: 40px;
            height: 40px;
            margin: 10px 0;
        }

        .temperature {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            margin: 5px 0;
        }

        .description {
            font-size: 14px;
            color: #555;
        }

        .temp-range {
            font-size: 12px;
            color: #666;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="forecast-container">
        <div class="forecast-header">
            <h1>7-Day Weather Forecast</h1>
            <p>Plan your week with a detailed weather forecast.</p>
        </div>
        <div class="forecast-row">
            <!-- Day 1 -->
            <div class="forecast-day">
                <div class="day">Mon</div>
                <div class="icon"><img src="https://openweathermap.org/img/wn/01d@2x.png" alt="Sunny"></div>
                <div class="temperature">24°C</div>
                <div class="description">Sunny</div>
                <div class="temp-range">22°C / 28°C</div>
            </div>
            <!-- Day 2 -->
            <div class="forecast-day">
                <div class="day">Tue</div>
                <div class="icon"><img src="https://openweathermap.org/img/wn/02d@2x.png" alt="Partly Cloudy"></div>
                <div class="temperature">18°C</div>
                <div class="description">Partly Cloudy</div>
                <div class="temp-range">16°C / 20°C</div>
            </div>
            <!-- Day 3 -->
            <div class="forecast-day">
                <div class="day">Wed</div>
                <div class="icon"><img src="https://openweathermap.org/img/wn/03d@2x.png" alt="Cloudy"></div>
                <div class="temperature">21°C</div>
                <div class="description">Cloudy</div>
                <div class="temp-range">19°C / 23°C</div>
            </div>
            <!-- Day 4 -->
            <div class="forecast-day">
                <div class="day">Thu</div>
                <div class="icon"><img src="https://openweathermap.org/img/wn/04d@2x.png" alt="Overcast"></div>
                <div class="temperature">25°C</div>
                <div class="description">Overcast</div>
                <div class="temp-range">23°C / 27°C</div>
            </div>
            <!-- Day 5 -->
            <div class="forecast-day">
                <div class="day">Fri</div>
                <div class="icon"><img src="https://openweathermap.org/img/wn/09d@2x.png" alt="Rainy"></div>
                <div class="temperature">22°C</div>
                <div class="description">Rainy</div>
                <div class="temp-range">20°C / 24°C</div>
            </div>
            <!-- Day 6 -->
            <div class="forecast-day">
                <div class="day">Sat</div>
                <div class="icon"><img src="https://openweathermap.org/img/wn/11d@2x.png" alt="Thunderstorm"></div>
                <div class="temperature">19°C</div>
                <div class="description">Thunderstorm</div>
                <div class="temp-range">17°C / 21°C</div>
            </div>
            <!-- Day 7 -->
            <div class="forecast-day">
                <div class="day">Sun</div>
                <div class="icon"><img src="https://openweathermap.org/img/wn/01d@2x.png" alt="Sunny"></div>
                <div class="temperature">23°C</div>
                <div class="description">Sunny</div>
                <div class="temp-range">21°C / 26°C</div>
            </div>
        </div>
    </div>
</body>
</html>


