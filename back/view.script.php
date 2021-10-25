<?php
    if(isset($_POST["submit"])){
        include_once "dbrh.php";

        $last = $_POST["surname"];
        $first = $_POST["fname"];
        $contact = $_POST["contact"];
        $dt = $_POST["dt"];
        $age = $_POST["age"];
    
        if(isset($_POST["pizza"])){
            $pizza = $_POST["pizza"];
        }
        if(isset($_POST["pasta"])){
            $pasta = $_POST["pasta"];
        }
        if(isset($_POST["pap"])){
            $pap = $_POST["pap"];
        }
        if(isset($_POST["beef"])){
            $beef = $_POST["beef"];
        }
        if(isset($_POST["chicken"])){
            $chicken = $_POST["chicken"];
        }
        if(isset($_POST["other"])){
            $other = $_POST["other"];
        }
        $fav = $pizza."\n".$pasta."\n".$pap."\n".$beef."\n".$chicken."\n".$other;

        if(isset($_POST["option1"])){
            $option1 = $_POST["option1"];
        }
        if(isset($_POST["option2"])){
            $option2 = $_POST["option2"];
        }
        if(isset($_POST["option3"])){
            $option3 = $_POST["option3"];
        }
        if(isset($_POST["option4"])){
            $option4 = $_POST["option4"];
        }
    
        //error handling
        if($age>999){
            header("Location: ../fill.php?error=age&surname=$last&fname=$first&contact=$contact&");
            exit();
        }else{
            if($contact[0]!=0){
            header("Location: ../fill.php?error=conctact&surname=$last&fname=$first&age=$age&");
            exit();  
            }
            elseif(strlen($contact)!=10){
                header("Location: ../fill.php?error=conctact&surname=$last&fname=$first&age=$age&");
                exit();
            }
            elseif(strpos($agree,'0')){
                header("Location: ../fill.php?missing_info&surname=$last&fname=$first&age=$age&");
                exit();
            }
            else{
                //prepare statement 
                $sql_code = "INSERT INTO fill(surname,first_name,contact,s_date,age,favourite,eat_out,watch_movies,watch_tv,listen_radio) VALUES(?,?,?,?,?,?,?,?,?,?);";
                
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt,$sql_code);
                mysqli_stmt_bind_param($stmt,"ssisisiiii",$last,$first,$contact,$dt,$age,$fav,$option1,$option2,$option3,$option4);
                if(!mysqli_stmt_execute($stmt)){

                    header("Location: ../index.php/fill.php?DatabaseError");
                    exit();
                }
                else{
                    session_start();
                    $_SESSION["lname"] = $last; 
                    header("Location: ../index.php?successful");
                    exit();
                }
            }
        }
    }
    else{
        header("Location: ../index.php?accessError");
        exit();
    }
?>