<?php
interface Sound{
    function playSound();
}
interface Video{
    function playVideo();
}
class Music{
    public function playMusic($music){
        echo "<br>Playing ".$music;
    }
}
class MyPlayer extends Music implements Sound,Video {

    function playSound()
    {
        echo "playing song";
    }

    function playVideo()
    {
       echo "<br>playing video";
    }

    function play($song){
        $this->playSound();
        $this->playMusic($song);
        $this->playVideo();
    }
}

$player =new MyPlayer();
$player->play("Hello");