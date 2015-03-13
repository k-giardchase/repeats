<?php

    class RepeatCounter
    {
      function countRepeats($input_word, $input_phrase)
      {
        $total_word_count = array();
        $word_in_phrase = array();

        $word_in_phrase = explode(" ", $input_phrase);

        foreach($word_in_phrase as $word)
        {
            if($input_word == $word)
            {
              array_push($total_word_count, 1);

            }
        }

        $final_total_count = array_sum($total_word_count);
        return $final_total_count;

      }

    }

?>
