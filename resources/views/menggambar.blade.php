<!DOCTYPE html>
<html>

<head>
    <title>Permainan Menggambar Segitiga</title>
    <link rel="stylesheet" type="text/css" href="menggambar.css">
    <link href='https://fonts.googleapis.com/css?family=Lexend' rel='stylesheet'>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            padding: 0 400px;
        }

        .kartu {
            background: white;
            margin-left: 70px;
            width: 340px;
        }

        h3 {
            text-align: center;
            font-family: 'Lexend', sans-serif;
            margin-left: 15px;
            margin-bottom: 60px;
        }

        .gbr1 {
            position: relative;
            left: 5px;
            top: 5px;
        }

        .gbr2 {
            position: relative;
            left: 10px;
        }

        canvas {
            border: 0px solid #333;
            margin-bottom: 50px;
        }

        button:hover {
            transform: scale(1.1);
            /* Efek zoom saat hover */
        }

        .Next {
            font-family: 'NamaFontGujarati', sans-serif;
            margin-top: 20px;
            text-align: center;
            align-items: center;
        }

        .Next button {
            background-color: rgb(61, 136, 233);
            color: white;
            width: 305px;
            height: 51px;
            font-size: 25px;
            line-height: 5px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            margin-left: 20px;
        }

        .Next button a {
            text-decoration: none;
            color: white;
        }

        .top {
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <body class="kartu">
        <div class="top">
            <a id="kembalibutton" href="/menggambar/pilihanM.html">
                <img class="gbr1" src="/assets/Vector.png">
            </a>
            <img class="gbr2" src="/assets/Rectangle 51.png">
        </div>
        <h3>Ini adalah bentuk kotak, gambarlah kotak ini!</h3>
        <canvas id="canvas" width="200" height="180"></canvas>
        <script>
            const canvas = document.getElementById('canvas');
            const context = canvas.getContext('2d');
            let isDrawing = false;
            let path = [];

            // Load gambar PNG segitiga sebagai latar belakang
            const kotakImage = new Image();
            kotakImage.src = '/assets/Tkotak.png';

            // Tentukan ukuran segitiga sesuai dengan canvas
            kotakImage.width = canvas.width;
            kotakImage.height = canvas.height;

            kotakImage.onload = function() {
                context.drawImage(kotakImage, 0, 0, canvas.width, canvas.height);
            };

            canvas.addEventListener('mousedown', () => {
                isDrawing = true;
                path = [];
            });

            canvas.addEventListener('mouseup', () => {
                isDrawing = false;
                fillSqureWithBlue();
            });

            canvas.addEventListener('mousemove', (event) => {
                if (isDrawing) {
                    draw(event);
                }
            });

            function draw(event) {
                const point = {
                    x: event.offsetX,
                    y: event.offsetY
                };
                path.push(point);
                context.fillStyle = 'black';
                context.fillRect(point.x, point.y, 5, 5);
            }

            function fillSqureWithBlue() {
                context.clearRect(0, 0, canvas.width, canvas.height);
                context.drawImage(kotakImage, 0, 0, canvas.width, canvas.height);

                context.beginPath();
                context.moveTo(path[0].x, path[0].y);
                for (let i = 1; i < path.length; i++) {
                    context.lineTo(path[i].x, path[i].y);
                }
                context.closePath();

                context.fillStyle = 'blue';
                context.fill();

                document.getElementById('nextButton').style.display = 'block';
                document.getElementById('nextButton').addEventListener('click', function() {
                    window.location.href = 'http://127.0.0.1:5500/bentuk/lv1/Gbentuk2.html'; // Ganti dengan URL tujuan Anda
                });
            }

            function changeToSqure() {
                context.clearRect(0, 0, canvas.width, canvas.height);
                context.drawImage(kotakImage, 0, 0, canvas.width, canvas.height);

                context.beginPath();
                context.moveTo(100, 300);
                context.lineTo(250, 300);
                context.lineTo(175, 100);
                context.closePath();

                context.fillStyle = 'blue';
                context.fill();
            }
        </script>
    </body>

</html>