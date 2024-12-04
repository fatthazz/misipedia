<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Misipedia: Semua tentang MISI</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #ffffff; /* White background */
            color: #333; /* Dark text for contrast */
            font-family: Arial, sans-serif;
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
            transition: color 0.3s;
        }
        nav a:hover {
            text-decoration: underline;
            color: #ffe0b2; /* Light orange on hover */
        }
        h1 {
            font-size: 2.5em; /* Larger title */
            margin: 0; /* Remove default margin */
        }
        h3 {
            font-size: 1.5em; /* Subtitle size */
            margin: 10px 0; /* Space around subtitle */
        }
        .profile {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
            text-align: center; /* Center text in profile */
        }
        .profile img {
            width: 200px; /* Character image width */
            height: auto;
            border-radius: 30px; /* Border radius for image */
            margin-top: 10px; /* Space above the image */
        }
        .profile h2 {
            font-size: 2em;
            color: #444;
            margin-bottom: 5px; /* Space below the character name */
        }
        .profile p {
            font-style: italic; /* Italic style for the description */
            margin: 0; /* Remove default margin */
            color: #666; /* Slightly lighter color for the italic text */
        }
        .detail-item {
            display: flex; /* Use flexbox for alignment */
            justify-content: space-between; /* Space between label and text */
            align-items: center; /* Center items vertically */
            margin: 10px 0; /* Space around details */
        }
        .detail-item strong {
            color: #ff5722; /* Light orange for labels */
            min-width: 150px; /* Fixed width for labels */
            text-align: justify; /* Justify text in labels */
        }
        .detail-text {
            flex-grow: 1; /* Allow text to take available space */
            text-align: justify; /* Justify text next to labels */
        }
        @media (max-width: 600px) {
            nav {
                flex-direction: column;
            }
            nav a {
                margin: 5px 0;
            }
            .profile {
                padding: 15px; /* Adjust padding for smaller screens */
            }
        }
    </style>
</head>
<body>

<header>
    <h1>MISIPEDIA</h1>
    <h3>Semua tentang MISI!</h3>
    <nav>
        <a href="#misi-characters">Characters</a>
        <a href="#misi-worlds">Worlds</a>
        <a href="#misi-stories">Stories</a>
        <a href="#misi-fan-art">Fan Art</a>
    </nav>
</header>

<section class="profile" id="misi-characters">
    <h2>Putera</h2>
    <p>Bekas villain Misi 10A</p>
    <img src="image/putera.png" alt="Putera"> <!-- Replace with the character image URL -->

    <div class="detail-item">
        <strong>Nama Penuh:</strong>
        <span class="detail-text">Putera bin Zainal Abidin</span>
    </div>
    <div class="detail-item">
        <strong>Misi:</strong>
        <span class="detail-text">Chef</span>
    </div>
    <div class="detail-item">
        <strong>Kemahiran:</strong>
        <span class="detail-text">Akademik,Kulineri</span>
    </div>
    <div class="detail-item">
        <strong>Perilaku:</strong>
        <span class="detail-text">Jejaka tsundere. Angkuh dan dingin tetapi berubah selepas zaman persekolahan (Misi Chef)</span>
    </div>
    <div class="detail-item">
        <strong>Penampilan:</strong>
        <span class="detail-text">Mata biru,gemar memakai baju bunga-bunga. Mempunyai ketinggian mengatasi Aizad. </span>
    </div>
    <div class="detail-item">
        <strong>Sekilas:</strong>
        <span class="detail-text">Putera asalnya antagonis dalam Misi 10A yang menyimpan dendam pada Zahid sejak tingkatan 2 sebelum pada Misi 10A, Putera kini tidak lagi keseorangan.</span>
    </div>
</section>

</body>
</html>