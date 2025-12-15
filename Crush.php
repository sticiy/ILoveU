<?php
class Crush {
	public string $name;
	public ?string $writer;

	public function __construct($nameOfCrush, $writer){
		$this->name = $nameOfCrush;
		$this->writer = $writer;

	}
}

class getIloveYou extends Crush{
	public function IloveYou($name, $writer){
		return "\nI don't know why I still love you, I know it's crazy but yeah. . . {$name}. \nHope you will never have bad nature like me, because \nyou're not type of person who controlled by media trends like having boyfriend." . PHP_EOL. "\n\nWriter : {$writer}\n\n";
	}
}

$sayit = new getIloveYou("Sarah", "ForgetMeNot~ || LilyFlower");

echo $sayit->IloveYou($sayit->name, $sayit->writer);
