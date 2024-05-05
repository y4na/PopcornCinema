<?php
include 'connect.php';
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Popcorn Cinema</title>
    <link rel="stylesheet" href="css/home-styles.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <!-- ION ICONS -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- SWIPER JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <!-- HOME -->
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <!-- 1 -->
            <div class="swiper-slide container">
                <img src="images\movie-posters\dune-ls-poster.jpg" alt="">
                <div class="item-content-wrapper">
                    <div class="home-text">
                        <span>featured</span>
                        <h1 class="movie-title">Dune: <br> Part Two</h1>
                        <p class="home-synopsis">Paul Atreides unites with Chani and the Fremen while seeking revenge
                            against the conspirators who destroyed his family. Facing a choice between the love of his
                            life and the fate of the universe, he must prevent a terrible future only he can foresee.
                        </p>
                        <a href="#" class="btn">Get Ticket</a>
                    </div>
                </div>
                <a href="#" class="play">
                    <ion-icon name="play-circle" class="play-icon"></ion-icon>
                </a>
            </div>
            <!-- 2 -->
            <div class="swiper-slide container">
                <img src="images\movie-posters\kung-fu-panda-4-legends-reborn-ls-poster.jpg" alt="">
                <div class="item-content-wrapper">
                    <div class="home-text">
                        <span>featured</span>
                        <h1 class="movie-title">Kung Fu Panda 4: <br> Legends Reborn</h1>
                        <p class="home-synopsis">Po must train a new warrior when he's chosen to become the spiritual
                            leader of the Valley of Peace. However, when a powerful shape-shifting sorceress sets her
                            eyes on his Staff of Wisdom, he suddenly realizes he's going to need some help. Teaming up
                            with a quick-witted corsac fox, Po soon discovers that heroes can be found in the most
                            unexpected places.</p>
                        <a href="#" class="btn">Get Ticket</a>
                    </div>
                </div>
                <a href="#" class="play">
                    <ion-icon name="play-circle" class="play-icon"></ion-icon>
                </a>
            </div>
            <!-- 3 -->
            <div class="swiper-slide container">
                <img src="images\movie-posters\avatar-2-the-way-of-water-ls-poster.jpg" alt="">
                <div class="item-content-wrapper">
                    <div class="home-text">
                        <span>featured</span>
                        <h1 class="movie-title">Avatar 2: <br> The way of Water</h1>
                        <p class="home-synopsis">Jake Sully and Ney'tiri have formed a family and are doing everything
                            to stay together. However, they must leave their home and explore the regions of Pandora.
                            When an ancient threat resurfaces, Jake must fight a difficult war against the humans.</p>
                        <a href="#" class="btn">Get Ticket</a>
                    </div>
                </div>
                <a href="#" class="play">
                    <ion-icon name="play-circle" class="play-icon"></ion-icon>
                </a>
            </div>
            <!-- 4 -->
            <!-- 5 -->
        </div>

        <div class="swiper-pagination"></div>
    </section>


    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- custom js -->
    <script src="js\script.js"></script>
</body>

</html>