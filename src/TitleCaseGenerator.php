<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $input_array_of_words = explode(" ", $input_title);
            $output_titlecased = array();
            $designated = array("a", "as", "an", "by", "of", "on", "to", "the", "or", "in", "from");
            foreach ($input_array_of_words as $word) {
                if (in_array($word, $designated)) {
                    array_push($output_titlecased, lcfirst($word));
                } else {
                    array_push($output_titlecased, ucfirst($word));
                }


            }

                //if the words in $designated array, lowercase them
                //if NOT in the array, uppercase them


            return implode(" ", $output_titlecased);
        }



    }


?>
