<!DOCTYPE html>
<html lang="ms-MY">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Misipedia: Semua tentang MISI</title>
    <style>
        body {
            font-family: 'Verdana', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff; /* White background */
            color: #333; /* Dark text for contrast */
        }
        header {
            background-image: url(image/hero.png); /* Replace with your hero image URL */
            background-size: cover;
            background-position: center;
            color: white; /* White text */
            padding: 25px;
            text-align: center;
        }
        nav {
            display: flex;
            justify-content: center;
            margin: 15px 0;
        }
        nav a {
            margin: 0 20px;
            color: white; /* White links */
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
            color: #ffe0b2; /* Light orange on hover */
        }
        .container {
            max-width: 1100px;
            margin: auto;
            padding: 25px;
        }
        .category {
            background-color: #fff3e0; /* Light orange for categories */
            border: 1px solid #ff9800; /* Orange border */
            border-radius: 5px;
            margin-bottom: 25px;
            padding: 20px;
        }
        .category img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
        h2 {
            color: #ff9800; /* Orange for headers */
            cursor: pointer;
            margin-top: 15px;
        }
        .entries {
            display: none;
            padding-top: 15px;
            border-top: 1px solid #ff9800; /* Orange border for entries */
        }
        .entry {
            margin-bottom: 12px;
            display: flex; /* Flexbox for aligning images and text */
            align-items: center; /* Center vertically */
        }
        .entry a {
            display: flex; /* Use flexbox for link */
            align-items: center; /* Center vertically */
            text-decoration: none;
            color: #ff9800; /* Orange for entry links */
        }
        .entry img {
            width: 100px; /* Increased width of character image */
            height: 100px; /* Increased height of character image */
            border-radius: 50%; /* Round images */
            margin-right: 15px; /* Space between image and text */
        }
        .entry a:hover {
            text-decoration: underline;
            color: #e65100; /* Darker orange on hover */
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #ff9800; /* Orange footer */
            color: white; /* White text */
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .about-us {
            margin-top: 15px;
            font-size: 0.9em;
            color: white; /* White text for about us */
        }
        @media (max-width: 600px) {
            nav {
                flex-direction: column;
            }
            nav a {
                margin: 5px 0;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>MISIPEDIA</h1>
    <h3>Semua tentang MISI!</h3>
    <nav>
        <a href="#misi-characters">Watak-watak</a>
        <a href="#misi-worlds">Worlds</a>
        <a href="#misi-stories">Stories</a>
        <a href="#misi-fan-art">Fan Art</a>
		<a href="#misi-fan-art">About Us</a>
    </nav>
</header>

<div class="container">

    <div id="misi-characters" class="category">

        <h2 onclick="toggleEntries('characterEntries')">Watak-watak</h2>
        <div id="characterEntries" class="entries">
            <div class="entry">
                <a href="aizad.php"><img src="image/aizad.png" alt="Aizad">Aizad</a>
            </div>
            <div class="entry">
                <a href="zahid.php"><img src="image/zahid.png" alt="Zahid">Zahid</a>
            </div>
            <div class="entry">
                <a href="mat.php"><img src="image/mat.png" alt="Mat">Mat</a>
            </div>
            <div class="entry">
                <a href="kimi.php"><img src="image/kimi.png" alt="Kimi">Kimi</a>
            </div>
            <div class="entry">
                <a href="fizi.php"><img src="image/fizi.png" alt="Fizi">Fizi</a>
            </div>
            <div class="entry">
                <a href="putera.php"><img src="image/putera.png" alt="Putera">Putera</a>
            </div>
        </div>
    </div>

    <div id="misi-worlds" class="category">
        <img src="image/thumbnail.png" alt="MISI Worlds">
        <h2 onclick="toggleEntries('worldEntries')">Alur Misi</h2>
        <div id="worldEntries" class="entries">
            <div class="entry"><a href="#misi-land">Misi 8A/PT3</a></div>
            <div class="entry"><a href="#misi-ocean">Misi 10 A</a></div>
        </div>
    </div>

    <div id="misi-stories" class="category">
        <img src="https://via.placeholder.com/1200x400?text=MISI+Stories" alt="MISI Stories">
        <h2 onclick="toggleEntries('storyEntries')">MISI Stories</h2>
        <div id="storyEntries" class="entries">
            <div class="entry"><a href="#adventure">1. "The Great Adventure" - A thrilling tale of courage.</a></div>
            <div class="entry"><a href="#mystery">2. "The Mystery Unfolds" - A suspenseful narrative.</a></div>
        </div>
    </div>

    <div id="misi-fan-art" class="category">
        <img src="https://via.placeholder.com/1200x400?text=MISI+Fan+Art" alt="MISI Fan Art">
        <h2 onclick="toggleEntries('fanArtEntries')">MISI Fan Art</h2>
        <div id="fanArtEntries" class="entries">
            <div class="entry"><a href="#art1">1. "Epic Battle" - An illustration of the hero vs. villain.</a></div>
            <div class="entry"><a href="#art2">2. "Serene Landscapes" - Beautiful depictions of MISI worlds.</a></div>
        </div>
    </div>

</div>

<footer>
    <p>&copy; 2024 Misipedia. All rights reserved.</p>
    <div class="about-us">
        <p>About Us: Misipedia is dedicated to the MISI universe, exploring its characters, worlds, stories, and fan creations.</p>
    </div>
</footer>

<script>
    function toggleEntries(entryId) {
        const entries = document.getElementById(entryId);
        entries.style.display = entries.style.display === "block" ? "none" : "block";
    }
</script>

</body>
</html>