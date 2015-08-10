<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
//strtolower will start with everything lowercase, and handles both all caps and mixed case entries
            $input_array_of_words = explode(" ", strtolower($input_title));
            $output_titlecased = array();
            $designated = array("a", "as", "an", "by", "of", "on", "to", "the", "or", "in", "from", "is");
            foreach ($input_array_of_words as $word) {
                //if any of the words in designated array appear, lowercase them
                if (in_array($word, $designated)) {
                    array_push($output_titlecased, lcfirst($word));
                //otherwise, uppercase
                } else {
                    array_push($output_titlecased, ucfirst($word));
                }


            }

//overrides the first if statement, making every first word capitalized no matter what
            $output_titlecased[0] = ucfirst($output_titlecased[0]);

            return implode(" ", $output_titlecased);
        }



    }


?>
