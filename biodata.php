<?php 

class Human {
	protected $name = 'Muh Rifai';
	protected $address = 'Cilandak';
	protected $hobbies = 'Coding';
	protected $is_married = false;
	protected $list_school = [ 'smp' => [ 'name' => 'smp N 1 danurejo','year_in' => 2005,'year_out' => 2007],'smk' => [ 'name' => 'Smk  Ganesha Satria 4 Kedu','year_in' => 2008,'year_out' => 2011],'universitas' => [ 'name' => 'Stkip Panca Sakti','year_in' => 2012,'year_out' => 2017]
		];
	protected $skills = [['skillsname' => 'javascript','level' => 'beginner'],['skillsname' => 'php','level' => 'beginner']	
		];
	protected $interest = true;
	public function biodata()
	{
		return json_encode(array('name' => $this->name,'hobbies' =>$this->hobbies,$this->list_school,'skills' => $this->skills,'interest' => $this->interest
		));	
	}
}
$person = new Human();
$res = $person->biodata();
print_r($res);