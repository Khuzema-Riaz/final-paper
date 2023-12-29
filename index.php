<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <style>
        .image-container {
            position: relative;
            overflow: hidden;

            margin-top: 20px;
        }

        .image-container:hover::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            z-index: 1;
        }

        .image-container img {
            transition: transform 0.3s ease-in-out;
        }

        .image-container:hover img {
            transform: scale(1.1);
        }

        .photo{

            margin-left:4s5% ;
        }
    </style>
</head>
<body>
<h1 class="photo">Photo Gallery</h1>
<div class="row">
  
    <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="image-container">
            <img
              src="image/2222.jpeg"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Mountains in the Clouds"
            />
        </div>
    
        <div class="image-container">
            <img
              src="image/44444.jpeg"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Boat on Calm Water"
            />
        </div>
    </div>
    
    <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="image-container">
            <img
              src="image/44444.jpeg"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Mountains in the Clouds"
            />
        </div>
  
        <div class="image-container">
            <img
              src="image/77777.jpeg"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Boat on Calm Water"
            />
        </div>
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="image-container">
            <img
              src="image/555555.jpeg"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Waves at Sea"
            />
        </div>
  
        <div class="image-container">
            <img
              src="image/123.jpg"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Yosemite National Park"
            />
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
