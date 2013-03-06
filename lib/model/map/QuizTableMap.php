<?php


/**
 * This class defines the structure of the 'quiz' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Thu Mar  7 00:03:14 2013
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class QuizTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.QuizTableMap';

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
		$this->setName('quiz');
		$this->setPhpName('Quiz');
		$this->setClassname('Quiz');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_QUIZ', 'IdQuiz', 'INTEGER', true, 10, null);
		$this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', false, null, null);
		$this->addColumn('INICIAL_TIME', 'InicialTime', 'TIMESTAMP', false, null, null);
		$this->addColumn('FINAL_TIME', 'FinalTime', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('DificultyQuiz', 'DificultyQuiz', RelationMap::ONE_TO_MANY, array('id_quiz' => 'id_quiz', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('QuestionsQuiz', 'QuestionsQuiz', RelationMap::ONE_TO_MANY, array('id_quiz' => 'id_quiz', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Quizlog', 'Quizlog', RelationMap::ONE_TO_MANY, array('id_quiz' => 'id_quizlog', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Quizusr', 'Quizusr', RelationMap::ONE_TO_MANY, array('id_quiz' => 'id_quiz', ), 'RESTRICT', 'RESTRICT');
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

} // QuizTableMap
