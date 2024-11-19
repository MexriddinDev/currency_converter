<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namaz Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background-color: #f3f6f9;
            color: #444;
            margin: 0;
            padding: 0;
        }

        .hero {
            background: linear-gradient(135deg, #4b79a1, #283e51);
            color: white;
            padding: 60px 20px;
            text-align: center;
        }

        .hero h1 {
            font-size: 2.8rem;
            margin: 0;
        }

        .hero p {
            font-size: 1.2rem;
            margin-top: 10px;
            opacity: 0.9;
        }

        .content {
            padding: 50px 15px;
        }

        .content h2 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 30px;
            text-align: center;
        }

        .prayer-times {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .prayer-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            flex: 1;
            min-width: 150px;
            max-width: 200px;
            transition: transform 0.2s;
        }

        .prayer-card:hover {
            transform: translateY(-5px);
        }

        .prayer-card h3 {
            margin: 0;
            font-size: 1.5rem;
            color: #4b79a1;
        }

        .prayer-card p {
            font-size: 1rem;
            color: #666;
            margin-top: 5px;
        }

        .search-section {
            text-align: center;
            margin-top: 40px;
        }

        .search-section input {
            width: 300px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        .search-section button {
            padding: 10px 20px;
            background-color: #4b79a1;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .search-section button:hover {
            background-color: #3a6382;
        }

        footer {
            background-color: #283e51;
            color: white;
            text-align: center;
            padding: 15px 0;
            font-size: 0.9rem;
            margin-top: 50px;
        }
    </style>
</head>
<body>
<header class="hero">
    <h1>Namaz Information</h1>
    <p>Be aware of prayer times across countries</p>
</header>

<main class="content">
    <h2>Today's Prayer Times</h2>
    <div class="prayer-times">
        <div class="prayer-card">
            <h3>Bomdod</h3>
            <p>05:54 AM</p>
        </div>
        <div class="prayer-card">
            <h3>Peshin</h3>
            <p>12:13 PM</p>
        </div>
        <div class="prayer-card">
            <h3>Asr</h3>
            <p>15:19 PM</p>
        </div>
        <div class="prayer-card">
            <h3>Shom</h3>
            <p>07:02 PM</p>
        </div>
        <div class="prayer-card">
            <h3>Xufton</h3>
            <p>08:20 PM</p>
        </div>
    </div>

    <!-- Search Section -->
    <div class="search-section">
        <h2>Search for Country</h2>
        <input type="text" placeholder="Enter country name...">
        <button type="button">Search</button>
    </div>
</main>

<footer>
    &copy; 2024 Namaz Information. All Rights Reserved.
</footer>
</body>
</html>
