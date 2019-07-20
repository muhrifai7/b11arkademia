<?php 

class Users_model {
	private $dbh;
	private $stmt;
	//private $db;
	public function __construct() 
	{
		$dsn = 'mysql:host=localhost;dbname=batch11';
		try {
			$this->dbh = new PDO($dsn, 'root', '');
		}
		catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	function getUsers () 
	{

		$sql = "SELECT `nama`.`id` AS `id`,`nama`.`name` AS `name`,`work`.`name` AS `work`,`salary` FROM `nama`, `work`,`kategori` WHERE `nama`.`id_work` = `work`.`id_salary` && `nama`.`id_salary` = `kategori`.`id`";
	
		$this->stmt = $this->dbh->prepare($sql);
		$this->stmt->execute();
		
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

	}

	public function tambahData($data)
	{
		if(isset($_POST['submit'])){	
			$name = $data['name'];
			$work = $data['work'];
			//$b = implode(',',$salary);
			$res = "SELECT id_salary FROM work WHERE name = '$work'";
			$this->stmt = $this->dbh->prepare($res);
			$this->stmt->execute();
			$hasil = $this->stmt->fetch(PDO::FETCH_ASSOC);
			$r = $hasil['id_salary'];
			
			$sal =  "SELECT id FROM kategori WHERE id = '$r'";
			$this->stmt = $this->dbh->prepare($sal);
			$this->stmt->execute();
			$salar = $this->stmt->fetch(PDO::FETCH_ASSOC);
			$s = $salar['id'];

			$sql = "INSERT INTO `nama` (`id`,`name`, `id_work`, `id_salary`)  VALUES (null,:name, :work,:salary)";
	    	$this->stmt = $this->dbh->prepare($sql);
	    	$param = array(':name' => $name,
	    				':work' => $r,
	    				':salary' => $s
	    				);
			$this->stmt->execute($param);
			return $this->stmt->rowCount();
    	}
 	}

 	public function getdataById($id)
	{
		//ajax
		$this->stmt = $this->dbh->prepare("SELECT * FROM  nama WHERE id =:id ");
		$params = array (':id'=>$id);
 		$this->stmt->execute($params);
		return	$this->stmt->fetch(PDO::FETCH_ASSOC);

	}
		
	 	public function ubahData($data) 
	{
		
		$name = $data['name'];
		$work = $data['work'];
		$res = "SELECT id_salary FROM work WHERE name = '$work'";
			$this->stmt = $this->dbh->prepare($res);
			$this->stmt->execute();
			$hasil = $this->stmt->fetch(PDO::FETCH_ASSOC);
			$r = $hasil['id_salary'];

		$sal =  "SELECT id FROM kategori WHERE id = '$r'";
			$this->stmt = $this->dbh->prepare($sal);
			$this->stmt->execute();
			$salar = $this->stmt->fetch(PDO::FETCH_ASSOC);
			$s = $salar['id'];


		$id = $data['id'];
		$query = "UPDATE nama SET 
				   name = :name,
				   id_work = :id_work,
				   id_salary = :id_salary
				   WHERE id = :id";

		$this->stmt = $this->dbh->prepare($query);
		$params = array(':name' => $name,
	    				':id_work' => $r,
	    				':id_salary' => $s,
						':id' => $id
					);
	    $this->stmt->execute($params); 
	    if($this->stmt->rowCount() > 0){
	    	return $this->stmt->rowCount();
	    }else {
	    	return false;
	    }
	   
		
	}
	public function hapusData($id)
	{

		$sql = "DELETE FROM nama WHERE id =:id";
		$this->stmt = $this->dbh->prepare($sql);
		$this->stmt->execute([':id' => $id]);

		return $this->stmt->rowCount();
	}


}















