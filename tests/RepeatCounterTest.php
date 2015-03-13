<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function testRepeatCounterOneCharacter()
        {
          //Arrange
          $test_repeat_counter_one_character = new RepeatCounter;
          $input_word = 'a';
          $input_phrase = 'a';

          //Act
          $result = $test_repeat_counter_one_character->countRepeats($input_word, $input_phrase);

          //Assert
          $total_word_count = array(1);
          $this->assertEquals($total_word_count, $result);

        }

        function testRepeatCounterOneNoMatch()
        {
          //Arrange
          $test_repeat_counter_one_no_match = new RepeatCounter;
          $input_word = 't';
          $input_phrase = 'x';

          //Act
          $result = $test_repeat_counter_one_no_match->countRepeats($input_word, $input_phrase);

          //Assert
          $total_word_count = array(0);
          $this->assertEquals($total_word_count, $result);

        }

    }

?>
