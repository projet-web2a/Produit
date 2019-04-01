<?PHP

class Client {
	
	private $prenom;
	private $nom;
	private $username;
	private $pwd;
	private $email;
	private $num;
	private $city;
	private $sexe;
	
	function __construct($prenom,$nom,$id,$p,$m,$n,$c,$s)
	{
		$this->prenom=$prenom;
		$this->nom=$nom;
		$this->username=$id;
		$this->pwd=$p;
		$this->email=$m;
		$this->num=$n;
		$this->city=$c;	
		$this->sexe=$s;	
	}
	
	function getNom()
	{
		return $this->nom;
	}
	function getPrenom()
	{
		return $this->prenom;
	}
	function getUsername()
	{
		return $this->username;
	}
	function getPwd()
	{
		return $this->pwd;
	}
	function getSexe()
	{
		return $this->sexe;
	}
	function getNum()
	{
		return $this->num;
	}
	function getEmail()
	{
		return $this->email;
	}
	function getCity()
	{
		return $this->city;
	}
	function setNom($foo)
	{
		$this->nom=$foo;
	}
	function setPrenom($foo)
	{
		$this->prenom=$foo;
	}
	function setUsername($foo)
	{
		$this->username=$foo;
	}
	function setPwd($foo)
	{
		$this->pwd=$foo;
	}
	function setSexe($foo)
	{
		$this->sexe=$foo;
	}
	function setNum($foo)
	{
		$this->num=$foo;
	}
	function setEmail($foo)
	{
		$this->email=$foo;
	}
	function setCity($foo)
	{
		$this->city=$foo;
	}
}
?>