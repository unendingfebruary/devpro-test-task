<?php

namespace DevPro\TestTask\Tests;

use PHPUnit\Framework\TestCase;

use function DevPro\TestTask\ArrayPart\UniqueWords\getUniqueWords;

class UniqueWordsTest extends TestCase
{
    public function testUniqueWords()
    {
        $str = "Even though the rains have slackened, the gutters run with water. In his yellow hat and
slicker, Georgie follows his boat as it sails along Witcham Street, wishing Bill could be
with him to see it go because Georgie is not as good as Bill at telling stories about what
he sees. A current takes the boat into a storm drain, and Georgie peeks inside to look
for it.
In the drain Georgie sees a pair of yellow eyes. Scared, he begins to back away, but a
voice speaks to him. Georgie looks back and sees a clown; the clown introduces himself
as \"Mr. Bob Gray, also known as Pennywise the Dancing Clown.\" Georgie at first
thought the drain smelled like his scary cellar at home, but now he can smell a carnival.
Pennywise has Georgie's boat in one hand and a balloon in the other; he offers Georgie
both. When Georgie reaches forward, Pennywise grabs Georgie's arm and rips it off.
Georgie dies immediately. Dave Gardner, arriving \"only 45 seconds after the first
scream,\" finds Georgie's body.";

        $wordsArray = getUniqueWords($str);

        $this->assertContains('cellar', $wordsArray);
        $this->assertContains('home', $wordsArray);
        $this->assertNotContains('in', $wordsArray);
        $this->assertNotContains('pennywise', $wordsArray);
    }
}
