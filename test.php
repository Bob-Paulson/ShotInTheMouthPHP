<?php
include ("frame.php");
function __justOutputPyramid__($num_stars)
{
    $count = 1;

    __topFrame__($num_stars);                                  //output first line of stars

   for ($global = 0; $global < $num_stars - 1 ; $global++) {

       //------------------------__TOP_left_part_of_pyramid__-----------------------------------------------------------

       for ($leftSpaces = 1; $leftSpaces + $count <= $num_stars; $leftSpaces++) {                                               //drew the left top spaces
                                                                                                                               //   *
           if($leftSpaces == 1) {                             //  ****************************************                    //   **
                                                                                                                             //   ***
                          echo "*";                          //  first element only star in left top part
           }                                                //  ******************************************

           echo "&nbsp&nbsp";
       }


       for ($leftStars = 0; $leftStars < $count; $leftStars++) {                                                           // drew the left top stars
           echo "*";
       }

        //---------------------------__TOP_right_part_of_pyramid__------------------------------------------------------

        for ($j = 0; $j < $count; $j++) {                                                                                       //drew the right top stars
                echo "*";                                                                                                      //*
            }                                                                                                                  //**
                                                                                                                               //***
        for ($rightSpaces = 0; $rightSpaces + $count < $num_stars; $rightSpaces++){                                           //drew the right top spaces
            echo "&nbsp&nbsp";
        }

        if($count != $num_stars){                       //  ****************************************
            echo "*";                                   //  last element only star in right top part
        }                                               //  ****************************************

       //---------------------------------------------------------------------------------------------------------------

       echo "<br>";
       $count++;
   }

//**********************************************************************************************************************
                                      __topFrame__($num_stars);                                                          //middle row of stars
//**********************************************************************************************************************


    //------------------------__BOTTOM_left_part_of_pyramid__-----------------------------------------------------------

        $count = 1;

        for ($global = 0; $global < $num_stars - 1; $global++) {

              for ($leftSpaces = 0; $leftSpaces < $count; $leftSpaces++){                                               //drew the left bottom spaces

                    if($leftSpaces == 0) {                           //  ****************************************
                        echo "*";                                    //  first element only star in left top part
                    }                                                //  ****************************************
                    echo "&nbsp&nbsp";
              }

              for ($leftStars = 0; $leftStars + $count < $num_stars; $leftStars++) {                                    //drew the bottom left stars
                  echo "*";                                                                                             //***
              }                                                                                                         // **
                                                                                                                        //   *
    //------------------------__BOTTOM_right_part_of_pyramid__----------------------------------------------------------

         for ($rightSpaces = 0; $rightSpaces + $count < $num_stars; $rightSpaces++) {                                   //drew the bottom right stars
                  echo "*";                                                                                             // ***
        }                                                                                                               // **
                                                                                                                        //*
        for ($rightSpaces = 0; $rightSpaces < $count; $rightSpaces++) {                                                 //drew the spaces

            echo "&nbsp&nbsp";
        }

        if ($count != $num_stars){                      //  ****************************************
            echo "*";                                   //  last element only star in right top part
        }                                               //  ****************************************
     $count++;
     echo "<br>";

    }

    __topFrame__($num_stars);                                  //output first last line of stars */
}


__justOutputPyramid__(10);
