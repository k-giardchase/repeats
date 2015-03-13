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
          $this->assertEquals(1, $result);

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
          $this->assertEquals(0, $result);

        }

        function testRepeatCounterTwoCharacter()
        {
          //Arrange
          $test_repeat_counter_two_character = new RepeatCounter;
          $input_word = 'so';
          $input_phrase = 'so';

          //Act
          $result = $test_repeat_counter_two_character->countRepeats($input_word, $input_phrase);

          //Assert
          $this->assertEquals(1, $result);

        }

        function testRepeatCounterMultipleWords()
        {
          //Arrange
          $test_repeat_counter_multiple_words = new RepeatCounter;
          $input_word = 'okay';
          $input_phrase = 'be okay';

          //Act
          $result = $test_repeat_counter_multiple_words->countRepeats($input_word, $input_phrase);

          //Assert
          $this->assertEquals(1, $result);

        }

    }

?>
