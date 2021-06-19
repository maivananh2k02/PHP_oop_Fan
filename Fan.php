<?php


class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    public $speed;
    public $on;
    public $radius;
    public $color;

    public function __construct()
    {
        $this->speed = self::SLOW;
        $this->on = false;
        $this->radius = 5;
        $this->color = 'blue';
    }


    public function getSpeed()
    {
        return $this->speed;
    }


    public function setSpeed($speed): void
    {
        $this->speed = $speed;
    }


    public function getOn()
    {
        return $this->on;
    }


    public function setOn($on): void
    {
        $this->on = $on;
    }


    public function getRadius()
    {
        return $this->radius;
    }


    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }


    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function __toString(): string
    {
        if ($this->on == true) {
            return "Speed: " . $this->speed . "<br>" .
                "Color: " . $this->color . "<br>" .
                "Radius: " . $this->radius . "<br>" .
                "fan is on";
        } else {
            return "Color: " . $this->color . "<br>" .
                "Radius: " . $this->radius . "<br>" .
                "fan is off";
        }
    }
}
$fan1=new Fan();

 $fan1->setSpeed(3);
 $fan1->setRadius(10);
 $fan1->setColor('yellow');
 $fan1->setOn(true);
 echo $fan1;
 echo "<br>";
$fan2=new Fan();
 $fan2->setSpeed(2);
 $fan2->setRadius(5);
 $fan2->setColor('blue');
 $fan2->setOn(false);
echo $fan2;