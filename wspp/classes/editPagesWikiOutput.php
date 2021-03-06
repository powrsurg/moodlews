<?php
/**
 * 
 * @package	MoodleWS
 * @copyright	(c) P.Pollet 2007 under GPL
 */
class editPagesWikiOutput {
	/** 
	* @var pageWikiRecord[]
	*/
	public $pagesWiki;

	/**
	* default constructor for class editPagesWikiOutput
	* @return editPagesWikiOutput
	*/	 public function editPagesWikiOutput() {
		 $this->pagesWiki=array();
	}
	/* get accessors */

	/**
	* @return pageWikiRecord[]
	*/
	public function getPagesWiki(){
		 return $this->pagesWiki;
	}

	/*set accessors */

	/**
	* @param pageWikiRecord[] $pagesWiki
	* @return void
	*/
	public function setPagesWiki($pagesWiki){
		$this->pagesWiki=$pagesWiki;
	}

}

?>
