<?php
    require "head.php";
?>
    <body>
        <form action="back/view.script.php" method="post">
            <div class="top_txt">
                <h4>Take our Survey</h4><br>
                <h4>Personal Details:</h4><br>
                <br>
            </div>

            <div class="side">
                <div class="lables">
                    <h4>Surname</h4> <br>
                    <h4>First name</h4><br>
                    <h4>Contact number</h4><br>
                    <h4>Date</h4><br>
                    <h4>Age</h4><br>
                </div>
                <div class="in">
                    <input type="text" name="surname" required><br><br>
                    <input type="text" name="fname" required><br><br>
                    <input type="number" name="contact" required><br><br>
                    <input type="date" name="dt"  required><br><br>
                    <input type="number" name="age" required><br><br>
                </div>
            </div>
            <p>What is your favourite food? (You can choose more than 1 answer)</p>
            <div class="fav_food">
                <input type="checkbox" name="pizza" value="Pizza">
                <label for="Pizza">Pizza</label><br>
                <input type="checkbox" name="pasta" value="Pasta">
                <label for="Pasta">Pasta</label><br>
                <input type="checkbox" name="pap" value="Pap and Wors">
                <label for="pap">Pap and Wors</label><br>
                <input type="checkbox" name="beef" value="Beef stir fry">
                <label for="beef">Beef stir fry</label><br>
                <input type="checkbox" name="chicken" value="Chicken stir fry">
                <label for="chicken">Chicken stir fry</label><br>
                <input type="checkbox" name="other" value="Other">
                <label for="other">Other</label><br>
            </div>
            <br>

            <p>On a scale of 1 to 5 indicate whether you strongly agree to strongly disagree</p>
            <table style="width:90%;margin-left:15px">
                <tr>
                    <th></th>
                    <th><p>Strongly Agree</p>
                            (1)
                    </th>
                    <th><p>Agree</p>
                            (2)            
                    </th>
                    <th><p>Neutral</p>
                            (3)
                    </th>
                    <th><p>Disagree</p>
                            (4)            
                    </th>
                    <th><p>Strongly Disagree</p>
                            (5)            
                    </th>
                </tr>
                <tr>
                    <td>I like to eat out</td>
                    <td><input type="radio" id="stronglyAgree" name="option1" value="1"></td>
                    <td><input type="radio" id="agree" name="option1" value="2"></td>
                    <td><input type="radio" id="neutral" name="option1" value="3"></td>
                    <td><input type="radio" id="disagree" name="option1" value="4"></td>
                    <td><input type="radio" id="stronglyDisagree" name="option1" value="5"></td>
                </tr>
                <tr>
                    <td>I like to watch movies</td>
                    <td><input type="radio" id="stronglyAgree" name="option2" value="1"></td>
                    <td><input type="radio" id="agree" name="option2" value="2"></td>
                    <td><input type="radio" id="neutral" name="option2" value="3"></td>
                    <td><input type="radio" id="disagree" name="option2" value="4"></td>
                    <td><input type="radio" id="stronglyDisagree" name="option2" value="5"></td>
                </tr>
                <tr>
                    <td>I like to watch TV</td>
                    <td><input type="radio" id="stronglyAgree" name="option3" value="1"></td>
                    <td><input type="radio" id="agree" name="option3" value="2"></td>
                    <td><input type="radio" id="neutral" name="option3" value="3"></td>
                    <td><input type="radio" id="disagree" name="option3" value="4"></td>
                    <td><input type="radio" id="stronglyDisagree" name="option3" value="5"></td>
                </tr>  
                <tr>
                    <td>I like to listen to the radio</td>
                    <td><input type="radio" id="stronglyAgree" name="option4" value="1"></td>
                    <td><input type="radio" id="agree" name="option4" value="2"></td>
                    <td><input type="radio" id="neutral" name="option4" value="3"></td>
                    <td><input type="radio" id="disagree" name="option4" value="4"></td>
                    <td><input type="radio" id="stronglyDisagree" name="option4" value="5"></td>
                </tr>  
            </table>
            <br>
            <input class = "submit_button" type="submit" name="submit" value="submit">
            <br>
        </form>
    </body>
</html>