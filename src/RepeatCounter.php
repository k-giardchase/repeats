<?php

    class RepeatCounter
    {
        function countRepeats($input_word, $input_phrase)
        {
            $input_word_lower = strtolower($input_word);
            $input_phrase_lower = strtolower($input_phrase);

            $total_word_count = array();
            $word_in_phrase = array();

            $word_in_phrase = explode(" ", $input_phrase_lower);

            foreach($word_in_phrase as $word) {
                if ($input_word_lower == $word) {
                    array_push($total_word_count, 1);
                }
            }

            $final_total_count = array_sum($total_word_count);
            return $final_total_count;
        }
    }
?>
