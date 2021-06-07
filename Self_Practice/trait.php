<?php
trait Person
{
	private $name;
	public function setName($name)
	{
		$this->name=$name;
	}
	public function getName()
	{
		return $this->name;
	}
}
trait Employee
{
	private $profession;
	public function setProfession($profession)
	{
		$this->profession=$profession;
	}
	public function getProfession()
	{
		return $this->profession;
	}
}
class Alumni
{
 use Person,Employee;

}
$alumni=new Alumni();
$alumni->setName('tajul');
$alumni->setProfession('google');
echo $alumni->getName().'Islam '.$alumni->getProfession();