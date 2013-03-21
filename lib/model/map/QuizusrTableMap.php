<?php


/**
 * This class defines the structure of the 'quizusr' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Tue Mar 19 22:56:43 2013
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class QuizusrTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.QuizusrTableMap';

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
		$this->setName('quizusr');
		$this->setPhpName('Quizusr');
		$this->setClassname('Quizusr');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_QUIZ_USR', 'IdQuizUsr', 'INTEGER', true, 11, null);
		$this->addColumn('ID_USR_QU', 'IdUsrQu', 'INTEGER', true, 11, null);
		$this->addForeignKey('ID_QUESTION', 'IdQuestion', 'INTEGER', 'question', 'ID_QUESTION', false, 11, null);
		$this->addForeignKey('ID_ANSWER', 'IdAnswer', 'INTEGER', 'answer', 'ID_ANSWER', false, 11, null);
		$this->addForeignKey('ID_QUIZ', 'IdQuiz', 'INTEGER', 'quiz', 'ID_QUIZ', false, 11, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Question', 'Question', RelationMap::MANY_TO_ONE, array('id_question' => 'id_question', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Answer', 'Answer', RelationMap::MANY_TO_ONE, array('id_answer' => 'id_answer', ), 'RESTRICT', 'RESTRICT');
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

} // QuizusrTableMap
