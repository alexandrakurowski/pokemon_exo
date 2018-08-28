<?php
class Pokemon  // creation de la classe et de ses composants
{		/* public =  parametresaccessible meme a l'exterieur de la classe  private = parametre access seulemnt dans la classe*/
	public $nombase; 
	public $type; 
	public $point_de_vie; 
	public $att1;
	public $att2;
	public $faiblesse;
	public $retraite;

	/* construction de la classe avec ses proprietes = variables/ permettras de construire diff objets pokemon dans l'index il faudra initialiser new Pokemon avec les arguments de la fonction construct*/

	public function __construct($nombase,$type,$point_de_vie,$att1,$att2,$faiblesse,$retraite)
	{
		$this->nombase= $nombase;
		$this->type= $type;
		$this->point_de_vie= $point_de_vie;
		$this->att1= $att1;
		$this->att2= $att2;
		$this->faiblesse= $faiblesse;
		$this->retraite= $retraite;

	}
// creation du tableau Carte = objet unique Poke de l'index
	public function creacarte(){
		$carte = array (
			'Nom'=>$this->$nombase,
			'Type'=>$this->type,
			'Pv'=>$this->$point_de_vie,
			'Attaque 1'=>$this->$att1,
			'Attaque 2'=>$this->att2,
			'Faiblesse'=>$this->$faiblesse,
			'Retraite'=>$this->retraite,
		);
		retun $carte;
	}
}


?>