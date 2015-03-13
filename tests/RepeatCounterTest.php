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

    }

?>
