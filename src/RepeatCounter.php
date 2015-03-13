<?php

    class RepeatCounter
    {
      function countRepeats($input_word, $input_phrase)
      {
        $total_word_count = array();

          if($input_word == $input_phrase)
          {
            array_push($total_word_count, 1);
          } else
          {
            array_push($total_word_count, 0);
          }

        return $total_word_count;

      }

    }

?>
