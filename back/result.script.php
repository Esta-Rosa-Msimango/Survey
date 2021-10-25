<?php
    include_once "dbrh.php";

    $connection = mysqli_connect($hostname,$username,$password);
    if($connection){
        echo("<script>alert('connection to the server established successfuly')</script>");
        $connection = mysqli_connect($hostname,$username,$password,$dbName);
        if($connection){
            echo("<script>alert('connection to the database established successfuly')</script>");
            $sql = "SELECT * FROM fill";
            $results = mysqli_query($connection,$sql);
            $storeResults = mysqli_fetch_all($results,MYSQLI_ASSOC);
            $numOfSurveys = mysqli_num_rows($results);
            $listOfAges = array();
            $storeFavouriteFood = array();
            $storeRatings = array(); 
            $numPeopleLikePizza = 0 ;
            $numPeopleLikePasta = 0;
            $numPeopleLikePap = 0;
            $numPeopleLikeBeef = 0;
            $numPeopleLikeChicken = 0;
            $numPeopleLikeOther = 0;
            $numPeopleEatOut = 0;
            $numPeopleMovies = 0;
            $numPeopleTV = 0;
            $numPeopleRadio = 0;
            $increament = 0;
            $storeAges = 0;

            foreach($storeResults as $dbValues ){
                $storeAges = $storeAges + $dbValues['age'];
                $listOfAges[$increament] = $dbValues['age'];
                $storeFavouriteFood[$increament] = $dbValues['favourite'];
                
                //checking for fav food
                if(strpos($storeFavouriteFood[$increament],"Pizza") !== false){
                    $numPeopleLikePizza++;
                }
                if(strpos($storeFavouriteFood[$increament],"Pasta") !== false){
                    $numPeopleLikePasta++;
                }
                if(strpos($storeFavouriteFood[$increament],"Pap and Wors") !== false){
                    $numPeopleLikePap++;
                }
                if(strpos($storeFavouriteFood[$increament],"Beef stir fry") !== false){
                    $numPeopleLikeBeef++;
                }
                if(strpos($storeFavouriteFood[$increament],"Chicken stir fry") !== false){
                    $numPeopleLikeChicken++;
                }
                if(strpos($storeFavouriteFood[$increament],"Other") !== false){
                    $numPeopleLikeOther++;
                }

                //ratings
                $numPeopleEatOut += $dbValues['eat_out'];
                $numPeopleMovies += $dbValues['watch_movies'];
                $numPeopleTV += $dbValues['watch_tv'];
                $numPeopleRadio += $dbValues['listen_radio'];

                $increament++;
            }
            $avarageAge = $storeAges / $numOfSurveys;
            $eatOutAvg = $numPeopleEatOut / $numOfSurveys;
            $watchMoviesAvg = $numPeopleMovies / $numOfSurveys;
            $watchTvAvg = $numPeopleTV / $numOfSurveys ;
            $listenToRadioAvg = $numPeopleRadio / $numOfSurveys;

            echo("Total number of surveys : $numOfSurveys <br>");
            echo("Average age is : ".round($avarageAge, 2)." <br> ");
            echo("Oldest person who participated in the survey is :  " . max($listOfAges) . "<br>");
            echo("Youngest person who participated in the survey is : " . min($listOfAges) ."<br><br>");
            echo("Percentage of people who like Pizza: " . $numPeopleLikePizza . "<br>");
            echo("Percentage of people who like Pasta: " . $numPeopleLikePasta . "<br>");
            echo("Percentage of people who like Pap and Wors:" . $numPeopleLikePap . "<br><br>");
            echo("People like to eat out: " .round($eatOutAvg, 1)." <br>");
            echo("People like to watch movies: " .round($watchMoviesAvg, 1)." <br>");
            echo("People like to watch TV: " .round($watchTvAvg, 1)." <br>");
            echo("People like to listen to the radio: " .round($listenToRadioAvg, 1)." <br>");
        }
        else{
            echo("<script>alert('failed to establish connection to the database')</script>");
        }
    }
    else{
        echo("<script>alert('failed to establish the connection to the server')</script>");
    }
?>

<html lang="en">
    <body>
        <div class="box">
            <form action="../index.php" method="post">
                <input class="submit_btn" type="submit" value="Ok" >
            </form>
        </div>
    </body>
</html>

<style>
    .box button, .submit_btn{
        display: flex;
        justify-content:space-evenly;
        background-color: white;
        border: 2px solid black;
        width: 150px;
        height: 25px;
        margin-top: 10px;
        transition: border-colo 1s ease-out 0.2s;
    }
    .submit_btn{
        margin-left: 40%;
        margin-bottom: 20px;
    }
</style>