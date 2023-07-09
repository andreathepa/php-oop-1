<?php

    class Movie {
        public $art;
        public $title;
        public $genre;
        public $cast;
        public $release;
        public $country;
        public $platform;

    

        function __construct($art, $title, $genre, $cast, $release, $country, $platform){
            $this->art = $art;
            $this->title = $title;
            $this->genre = $genre;
            $this->cast = $cast;
            $this->release = $release;
            $this->country = $country;
            $this->platform = $platform;
        }

        public function checkGenre() {
        if ($this->genre == 'action' || $this->genre == 'thriller'){
            return true;
        }
        return false;
    }

            
    }

    $movie_1 = new movie('<div><img src="./img/robocop.jpg" alt=""></div>','Robocop', 'action', 'Peter Weller', 1987, 'USA', 'Netflix');
    $movie_2 = new movie('<div><img src="./img/zorro.jpg" alt=""></div>','Zorro', 'action', 'Antonio banderas', 1999, 'ES', 'Amazon');
    $movie_3 = new movie('<div><img src="./img/departed.jpg" alt=""></div>','The Departed', 'thriller', 'Leonardo Di Caprio', 2005, 'USA', 'Disney')

    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <title>Php OOP</title>
    </head>
    <body>
        
        <div class="wrapper">
            <div id="app">
                <header>
                    <div class="container mt-5 text-center">
                        <h1>OOP MOVIES</h1>
                    </div>
                </header>
                <div class="container my-5">
                    <div class="row">
                        <div class="col-4">
                            <ul class="list-unstyled rounded border p-2">
                                <li><?php echo $movie_1->art; ?></li>
                                <li>Title: <?php echo $movie_1->title; ?></li>
                                <li class="<?php if ($movie_1->checkGenre()) echo 'action'; ?>">Genre: <?php echo $movie_1->genre; ?></li>
                                <li>Cast: <?php echo $movie_1->cast; ?></li>
                                <li>Release: <?php echo $movie_1->release; ?></li>
                                <li>Country: <?php echo $movie_1->country; ?></li>
                                <li>Platform: <?php echo $movie_1->platform; ?></li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul class="list-unstyled rounded border p-2">
                                <li><?php echo $movie_2->art; ?></li>
                                <li>Title: <?php echo $movie_2->title; ?></li>
                                <li class="<?php if ($movie_1->checkGenre()) echo 'action'; ?>">Genre: <?php echo $movie_2->genre; ?></li>
                                <li>Cast: <?php echo $movie_2->cast; ?></li>
                                <li>Release: <?php echo $movie_2->release; ?></li>
                                <li>Country: <?php echo $movie_2->country; ?></li>
                                <li>Platform: <?php echo $movie_2->platform; ?></li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul class="list-unstyled rounded border p-2">
                                <li><?php echo $movie_3->art; ?></li>
                                <li>Title: <?php echo $movie_3->title; ?></li>
                                <li class="<?php if ($movie_1->checkGenre()) echo 'thriller'; ?>">Genre: <?php echo $movie_3->genre; ?></li>
                                <li>Cast: <?php echo $movie_3->cast; ?></li>
                                <li>Release: <?php echo $movie_3->release; ?></li>
                                <li>Country: <?php echo $movie_3->country; ?></li>
                                <li>Platform: <?php echo $movie_3->platform; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script type="text/javascript" src="./js/script.js"></script>

    </body>
</html>