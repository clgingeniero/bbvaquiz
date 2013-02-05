<?php

/**
 * Base class that represents a row from the 'questions_quiz' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Sun Feb  3 03:43:01 2013
 *
 * @package    lib.model.om
 */
abstract class BaseQuestionsQuiz extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        QuestionsQuizPeer
	 */
	protected static $peer;

	/**
	 * The value for the id_questions_quiz field.
	 * @var        int
	 */
	protected $id_questions_quiz;

	/**
	 * The value for the id_quiz field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $id_quiz;

	/**
	 * The value for the id_question field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $id_question;

	/**
	 * @var        Quiz
	 */
	protected $aQuiz;

	/**
	 * @var        Question
	 */
	protected $aQuestion;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	// symfony behavior
	
	const PEER = 'QuestionsQuizPeer';

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->id_quiz = 0;
		$this->id_question = 0;
	}

	/**
	 * Initializes internal state of BaseQuestionsQuiz object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [id_questions_quiz] column value.
	 * 
	 * @return     int
	 */
	public function getIdQuestionsQuiz()
	{
		return $this->id_questions_quiz;
	}

	/**
	 * Get the [id_quiz] column value.
	 * 
	 * @return     int
	 */
	public function getIdQuiz()
	{
		return $this->id_quiz;
	}

	/**
	 * Get the [id_question] column value.
	 * 
	 * @return     int
	 */
	public function getIdQuestion()
	{
		return $this->id_question;
	}

	/**
	 * Set the value of [id_questions_quiz] column.
	 * 
	 * @param      int $v new value
	 * @return     QuestionsQuiz The current object (for fluent API support)
	 */
	public function setIdQuestionsQuiz($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_questions_quiz !== $v) {
			$this->id_questions_quiz = $v;
			$this->modifiedColumns[] = QuestionsQuizPeer::ID_QUESTIONS_QUIZ;
		}

		return $this;
	} // setIdQuestionsQuiz()

	/**
	 * Set the value of [id_quiz] column.
	 * 
	 * @param      int $v new value
	 * @return     QuestionsQuiz The current object (for fluent API support)
	 */
	public function setIdQuiz($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_quiz !== $v || $this->isNew()) {
			$this->id_quiz = $v;
			$this->modifiedColumns[] = QuestionsQuizPeer::ID_QUIZ;
		}

		if ($this->aQuiz !== null && $this->aQuiz->getIdQuiz() !== $v) {
			$this->aQuiz = null;
		}

		return $this;
	} // setIdQuiz()

	/**
	 * Set the value of [id_question] column.
	 * 
	 * @param      int $v new value
	 * @return     QuestionsQuiz The current object (for fluent API support)
	 */
	public function setIdQuestion($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_question !== $v || $this->isNew()) {
			$this->id_question = $v;
			$this->modifiedColumns[] = QuestionsQuizPeer::ID_QUESTION;
		}

		if ($this->aQuestion !== null && $this->aQuestion->getIdQuestion() !== $v) {
			$this->aQuestion = null;
		}

		return $this;
	} // setIdQuestion()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			if ($this->id_quiz !== 0) {
				return false;
			}

			if ($this->id_question !== 0) {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id_questions_quiz = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_quiz = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->id_question = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 3; // 3 = QuestionsQuizPeer::NUM_COLUMNS - QuestionsQuizPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating QuestionsQuiz object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->aQuiz !== null && $this->id_quiz !== $this->aQuiz->getIdQuiz()) {
			$this->aQuiz = null;
		}
		if ($this->aQuestion !== null && $this->id_question !== $this->aQuestion->getIdQuestion()) {
			$this->aQuestion = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(QuestionsQuizPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = QuestionsQuizPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aQuiz = null;
			$this->aQuestion = null;
		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(QuestionsQuizPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseQuestionsQuiz:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			
			    return;
			  }
			}

			if ($ret) {
				QuestionsQuizPeer::doDelete($this, $con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseQuestionsQuiz:delete:post') as $callable)
				{
				  call_user_func($callable, $this, $con);
				}

				$this->setDeleted(true);
				$con->commit();
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(QuestionsQuizPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseQuestionsQuiz:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			    $con->commit();
			
			    return $affectedRows;
			  }
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseQuestionsQuiz:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				QuestionsQuizPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aQuiz !== null) {
				if ($this->aQuiz->isModified() || $this->aQuiz->isNew()) {
					$affectedRows += $this->aQuiz->save($con);
				}
				$this->setQuiz($this->aQuiz);
			}

			if ($this->aQuestion !== null) {
				if ($this->aQuestion->isModified() || $this->aQuestion->isNew()) {
					$affectedRows += $this->aQuestion->save($con);
				}
				$this->setQuestion($this->aQuestion);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = QuestionsQuizPeer::ID_QUESTIONS_QUIZ;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = QuestionsQuizPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setIdQuestionsQuiz($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += QuestionsQuizPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aQuiz !== null) {
				if (!$this->aQuiz->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aQuiz->getValidationFailures());
				}
			}

			if ($this->aQuestion !== null) {
				if (!$this->aQuestion->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aQuestion->getValidationFailures());
				}
			}


			if (($retval = QuestionsQuizPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = QuestionsQuizPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getIdQuestionsQuiz();
				break;
			case 1:
				return $this->getIdQuiz();
				break;
			case 2:
				return $this->getIdQuestion();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param      string $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                        BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. Defaults to BasePeer::TYPE_PHPNAME.
	 * @param      boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns.  Defaults to TRUE.
	 * @return     an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = QuestionsQuizPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdQuestionsQuiz(),
			$keys[1] => $this->getIdQuiz(),
			$keys[2] => $this->getIdQuestion(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = QuestionsQuizPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setIdQuestionsQuiz($value);
				break;
			case 1:
				$this->setIdQuiz($value);
				break;
			case 2:
				$this->setIdQuestion($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = QuestionsQuizPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdQuestionsQuiz($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdQuiz($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdQuestion($arr[$keys[2]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(QuestionsQuizPeer::DATABASE_NAME);

		if ($this->isColumnModified(QuestionsQuizPeer::ID_QUESTIONS_QUIZ)) $criteria->add(QuestionsQuizPeer::ID_QUESTIONS_QUIZ, $this->id_questions_quiz);
		if ($this->isColumnModified(QuestionsQuizPeer::ID_QUIZ)) $criteria->add(QuestionsQuizPeer::ID_QUIZ, $this->id_quiz);
		if ($this->isColumnModified(QuestionsQuizPeer::ID_QUESTION)) $criteria->add(QuestionsQuizPeer::ID_QUESTION, $this->id_question);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(QuestionsQuizPeer::DATABASE_NAME);

		$criteria->add(QuestionsQuizPeer::ID_QUESTIONS_QUIZ, $this->id_questions_quiz);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdQuestionsQuiz();
	}

	/**
	 * Generic method to set the primary key (id_questions_quiz column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdQuestionsQuiz($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of QuestionsQuiz (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setIdQuiz($this->id_quiz);

		$copyObj->setIdQuestion($this->id_question);


		$copyObj->setNew(true);

		$copyObj->setIdQuestionsQuiz(NULL); // this is a auto-increment column, so set to default value

	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     QuestionsQuiz Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     QuestionsQuizPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new QuestionsQuizPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Quiz object.
	 *
	 * @param      Quiz $v
	 * @return     QuestionsQuiz The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setQuiz(Quiz $v = null)
	{
		if ($v === null) {
			$this->setIdQuiz(0);
		} else {
			$this->setIdQuiz($v->getIdQuiz());
		}

		$this->aQuiz = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Quiz object, it will not be re-added.
		if ($v !== null) {
			$v->addQuestionsQuiz($this);
		}

		return $this;
	}


	/**
	 * Get the associated Quiz object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Quiz The associated Quiz object.
	 * @throws     PropelException
	 */
	public function getQuiz(PropelPDO $con = null)
	{
		if ($this->aQuiz === null && ($this->id_quiz !== null)) {
			$this->aQuiz = QuizPeer::retrieveByPk($this->id_quiz);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aQuiz->addQuestionsQuizs($this);
			 */
		}
		return $this->aQuiz;
	}

	/**
	 * Declares an association between this object and a Question object.
	 *
	 * @param      Question $v
	 * @return     QuestionsQuiz The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setQuestion(Question $v = null)
	{
		if ($v === null) {
			$this->setIdQuestion(0);
		} else {
			$this->setIdQuestion($v->getIdQuestion());
		}

		$this->aQuestion = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Question object, it will not be re-added.
		if ($v !== null) {
			$v->addQuestionsQuiz($this);
		}

		return $this;
	}


	/**
	 * Get the associated Question object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Question The associated Question object.
	 * @throws     PropelException
	 */
	public function getQuestion(PropelPDO $con = null)
	{
		if ($this->aQuestion === null && ($this->id_question !== null)) {
			$this->aQuestion = QuestionPeer::retrieveByPk($this->id_question);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aQuestion->addQuestionsQuizs($this);
			 */
		}
		return $this->aQuestion;
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

			$this->aQuiz = null;
			$this->aQuestion = null;
	}

	// symfony_behaviors behavior
	
	/**
	 * Calls methods defined via {@link sfMixer}.
	 */
	public function __call($method, $arguments)
	{
	  if (!$callable = sfMixer::getCallable('BaseQuestionsQuiz:'.$method))
	  {
	    throw new sfException(sprintf('Call to undefined method BaseQuestionsQuiz::%s', $method));
	  }
	
	  array_unshift($arguments, $this);
	
	  return call_user_func_array($callable, $arguments);
	}

} // BaseQuestionsQuiz
