<?php


/**
 * This class defines the structure of the 'dificulty_quiz' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Fri Feb  1 04:13:03 2013
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class DificultyQuizTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.DificultyQuizTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('dificulty_quiz');
		$this->setPhpName('DificultyQuiz');
		$this->setClassname('DificultyQuiz');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_DIF_QUIZ', 'IdDifQuiz', 'INTEGER', true, 11, null);
		$this->addColumn('EASY', 'Easy', 'INTEGER', false, 11, null);
		$this->addColumn('MEDIUM', 'Medium', 'INTEGER', false, 11, null);
		$this->addColumn('HARD', 'Hard', 'INTEGER', false, 11, null);
		$this->addForeignKey('ID_QUIZ', 'IdQuiz', 'INTEGER', 'quiz', 'ID_QUIZ', false, 11, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Quiz', 'Quiz', RelationMap::MANY_TO_ONE, array('id_quiz' => 'id_quiz', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // DificultyQuizTableMap
