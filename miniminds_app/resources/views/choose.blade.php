<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        }

        .container {
            align-items: center;
            text-align: center;
            justify-content: center;
            display: flex;
            flex-direction: column;
            background-color: white;
            border-radius: 10px;
            height: 350px;
            width: 400px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        }

        button {
            width: 70%;
            height: 70px;
            margin: 20px;
            margin-left: 0px;
            border: none;
            border-radius: 5px;
            background-color: rgb(106, 21, 175);
        }

        button a {
            text-decoration: none;
            color: white;
        }

        .data img {
            width: 50px;
            height: 60px;
            margin-top: 20px;
            margin-right: 30px;
            margin-left: 15px;
        }

        .data {
            display: flex;
        }

        .data button {
            width: 250px;
        }

        .data img {
            width: 50px;
            height: 60px;
            margin-top: 20px;
            margin-right: 30px;
            margin-left: 15px;
        }

        .materi {
            display: flex;
        }

        .materi button {
            width: 250px;
        }

        .materi img {
            width: 60px;
            height: 60px;
            margin-top: 20px;
            margin-right: 20px;
            margin-left: 15px;
        }

        .progress {
            display: flex;
        }

        .progress button {
            width: 250px;
        }

        .progress img {
            width: 60px;
            height: 60px;
            margin-top: 20px;
            margin-right: 20px;
            margin-left: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="data">
            <img src="/assets/Guru 3.jpg" alt="">
            <button><a href="{{ route('regSiswa') }}">Menambah Data Murid</a></button>
        </div>
        <div class="progress">
            <img src="/assets/Guru 2.jpg" alt="">
        <button><a href="/dataSiswa">Progress Belajar Murid</a></button>
    </div>
        <div class="materi">
            <img src="/assets/Guru 1.jpg" alt="">
        <button><a href="/home">Materi Pembelajaran</a></button>
    </div>
    </div>
</body>
</html>