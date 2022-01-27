<?php 
class Movie {
    public $title;

    public $score;

    public $genre;

    public $language;

    public $review;

    

    public function commenter(){
        if($this->score < 5){
            $this->review = 'il film non vale la sua durata';
        }else {
            $this->review = 'la visione del film è consigliata';
        }
        
    }

    public function __construct($_title, $_language){
        $this->title = $_title;
        $this->language = $_language;

    }
}

$firstMovie = new Movie('Big Fish', 'english');
$firstMovie->score = 8;
$firstMovie->genre = 'comedy';
$firstMovie->commenter();
var_dump($firstMovie);


$secondMovie = new Movie('Avengers', 'english');
$secondMovie->score = 7;
$secondMovie->genre = 'action';
$secondMovie->commenter();

$thirdMovie = new Movie('Fuga di cervelli', 'italian');
$thirdMovie->score = 3;
$thirdMovie->genre = 'comedy';
$thirdMovie->commenter();

?>

<div>
    <h2>Il film esposti sono</h2>
    <ul>
        <li><?php echo $firstMovie->title; ?>
            <ul>
                <li>voto:<?php echo $firstMovie->score; ?></li>
                <li>genere: <?php echo $firstMovie->genre; ?></li>
                <li>commento del critico: <?php echo $firstMovie->review; ?></li>
            </ul>
        </li>
        <li><?php echo $secondMovie->title; ?>
            <ul>
                <li>voto:<?php echo $secondMovie->score; ?></li>
                <li>genere: <?php echo $secondMovie->genre; ?></li>
                <li>commento del critico: <?php echo $secondMovie->review; ?></li>
            </ul>
        </li>
        <li><?php echo $thirdMovie->title; ?>
            <ul>
                <li>voto:<?php echo $thirdMovie->score; ?></li>
                <li>genere: <?php echo $thirdMovie->genre; ?></li>
                <li>commento del critico: <?php echo $thirdMovie->review; ?></li>
            </ul>
        </li>
    </ul>
</div>