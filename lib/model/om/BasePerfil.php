<?php

/**
 * Base class that represents a row from the 'perfil' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Thu Mar  7 00:03:13 2013
 *
 * @package    lib.model.om
 */
abstract class BasePerfil extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        PerfilPeer
	 */
	protected static $peer;

	/**
	 * The value for the correo field.
	 * @var        string
	 */
	protected $correo;

	/**
	 * The value for the nombre field.
	 * @var        string
	 */
	protected $nombre;

	/**
	 * The value for the sexo field.
	 * @var        string
	 */
	protected $sexo;

	/**
	 * The value for the usuario field.
	 * @var        string
	 */
	protected $usuario;

	/**
	 * The value for the cargo field.
	 * @var        string
	 */
	protected $cargo;

	/**
	 * The value for the costo field.
	 * @var        string
	 */
	protected $costo;

	/**
	 * The value for the oficina field.
	 * @var        string
	 */
	protected $oficina;

	/**
	 * The value for the zona field.
	 * @var        string
	 */
	protected $zona;

	/**
	 * The value for the area field.
	 * @var        string
	 */
	protected $area;

	/**
	 * The value for the id_zona field.
	 * @var        string
	 */
	protected $id_zona;

	/**
	 * The value for the id_oficina field.
	 * @var        string
	 */
	protected $id_oficina;

	/**
	 * The value for the id_area field.
	 * @var        string
	 */
	protected $id_area;

	/**
	 * The value for the id_cargo field.
	 * @var        string
	 */
	protected $id_cargo;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

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
	
	const PEER = 'PerfilPeer';

	/**
	 * Get the [correo] column value.
	 * 
	 * @return     string
	 */
	public function getCorreo()
	{
		return $this->correo;
	}

	/**
	 * Get the [nombre] column value.
	 * 
	 * @return     string
	 */
	public function getNombre()
	{
		return $this->nombre;
	}

	/**
	 * Get the [sexo] column value.
	 * 
	 * @return     string
	 */
	public function getSexo()
	{
		return $this->sexo;
	}

	/**
	 * Get the [usuario] column value.
	 * 
	 * @return     string
	 */
	public function getUsuario()
	{
		return $this->usuario;
	}

	/**
	 * Get the [cargo] column value.
	 * 
	 * @return     string
	 */
	public function getCargo()
	{
		return $this->cargo;
	}

	/**
	 * Get the [costo] column value.
	 * 
	 * @return     string
	 */
	public function getCosto()
	{
		return $this->costo;
	}

	/**
	 * Get the [oficina] column value.
	 * 
	 * @return     string
	 */
	public function getOficina()
	{
		return $this->oficina;
	}

	/**
	 * Get the [zona] column value.
	 * 
	 * @return     string
	 */
	public function getZona()
	{
		return $this->zona;
	}

	/**
	 * Get the [area] column value.
	 * 
	 * @return     string
	 */
	public function getArea()
	{
		return $this->area;
	}

	/**
	 * Get the [id_zona] column value.
	 * 
	 * @return     string
	 */
	public function getIdZona()
	{
		return $this->id_zona;
	}

	/**
	 * Get the [id_oficina] column value.
	 * 
	 * @return     string
	 */
	public function getIdOficina()
	{
		return $this->id_oficina;
	}

	/**
	 * Get the [id_area] column value.
	 * 
	 * @return     string
	 */
	public function getIdArea()
	{
		return $this->id_area;
	}

	/**
	 * Get the [id_cargo] column value.
	 * 
	 * @return     string
	 */
	public function getIdCargo()
	{
		return $this->id_cargo;
	}

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set the value of [correo] column.
	 * 
	 * @param      string $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setCorreo($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->correo !== $v) {
			$this->correo = $v;
			$this->modifiedColumns[] = PerfilPeer::CORREO;
		}

		return $this;
	} // setCorreo()

	/**
	 * Set the value of [nombre] column.
	 * 
	 * @param      string $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setNombre($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->nombre !== $v) {
			$this->nombre = $v;
			$this->modifiedColumns[] = PerfilPeer::NOMBRE;
		}

		return $this;
	} // setNombre()

	/**
	 * Set the value of [sexo] column.
	 * 
	 * @param      string $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setSexo($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sexo !== $v) {
			$this->sexo = $v;
			$this->modifiedColumns[] = PerfilPeer::SEXO;
		}

		return $this;
	} // setSexo()

	/**
	 * Set the value of [usuario] column.
	 * 
	 * @param      string $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setUsuario($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usuario !== $v) {
			$this->usuario = $v;
			$this->modifiedColumns[] = PerfilPeer::USUARIO;
		}

		return $this;
	} // setUsuario()

	/**
	 * Set the value of [cargo] column.
	 * 
	 * @param      string $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setCargo($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->cargo !== $v) {
			$this->cargo = $v;
			$this->modifiedColumns[] = PerfilPeer::CARGO;
		}

		return $this;
	} // setCargo()

	/**
	 * Set the value of [costo] column.
	 * 
	 * @param      string $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setCosto($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->costo !== $v) {
			$this->costo = $v;
			$this->modifiedColumns[] = PerfilPeer::COSTO;
		}

		return $this;
	} // setCosto()

	/**
	 * Set the value of [oficina] column.
	 * 
	 * @param      string $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setOficina($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->oficina !== $v) {
			$this->oficina = $v;
			$this->modifiedColumns[] = PerfilPeer::OFICINA;
		}

		return $this;
	} // setOficina()

	/**
	 * Set the value of [zona] column.
	 * 
	 * @param      string $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setZona($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->zona !== $v) {
			$this->zona = $v;
			$this->modifiedColumns[] = PerfilPeer::ZONA;
		}

		return $this;
	} // setZona()

	/**
	 * Set the value of [area] column.
	 * 
	 * @param      string $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setArea($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->area !== $v) {
			$this->area = $v;
			$this->modifiedColumns[] = PerfilPeer::AREA;
		}

		return $this;
	} // setArea()

	/**
	 * Set the value of [id_zona] column.
	 * 
	 * @param      string $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setIdZona($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->id_zona !== $v) {
			$this->id_zona = $v;
			$this->modifiedColumns[] = PerfilPeer::ID_ZONA;
		}

		return $this;
	} // setIdZona()

	/**
	 * Set the value of [id_oficina] column.
	 * 
	 * @param      string $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setIdOficina($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->id_oficina !== $v) {
			$this->id_oficina = $v;
			$this->modifiedColumns[] = PerfilPeer::ID_OFICINA;
		}

		return $this;
	} // setIdOficina()

	/**
	 * Set the value of [id_area] column.
	 * 
	 * @param      string $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setIdArea($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->id_area !== $v) {
			$this->id_area = $v;
			$this->modifiedColumns[] = PerfilPeer::ID_AREA;
		}

		return $this;
	} // setIdArea()

	/**
	 * Set the value of [id_cargo] column.
	 * 
	 * @param      string $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setIdCargo($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->id_cargo !== $v) {
			$this->id_cargo = $v;
			$this->modifiedColumns[] = PerfilPeer::ID_CARGO;
		}

		return $this;
	} // setIdCargo()

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Perfil The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = PerfilPeer::ID;
		}

		return $this;
	} // setId()

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

			$this->correo = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->sexo = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->usuario = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->cargo = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->costo = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->oficina = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->zona = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->area = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->id_zona = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->id_oficina = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->id_area = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->id_cargo = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->id = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 14; // 14 = PerfilPeer::NUM_COLUMNS - PerfilPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Perfil object", $e);
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
			$con = Propel::getConnection(PerfilPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = PerfilPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

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
			$con = Propel::getConnection(PerfilPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BasePerfil:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			
			    return;
			  }
			}

			if ($ret) {
				PerfilPeer::doDelete($this, $con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BasePerfil:delete:post') as $callable)
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
			$con = Propel::getConnection(PerfilPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BasePerfil:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BasePerfil:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				PerfilPeer::addInstanceToPool($this);
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

			if ($this->isNew() ) {
				$this->modifiedColumns[] = PerfilPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = PerfilPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += PerfilPeer::doUpdate($this, $con);
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


			if (($retval = PerfilPeer::doValidate($this, $columns)) !== true) {
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
		$pos = PerfilPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCorreo();
				break;
			case 1:
				return $this->getNombre();
				break;
			case 2:
				return $this->getSexo();
				break;
			case 3:
				return $this->getUsuario();
				break;
			case 4:
				return $this->getCargo();
				break;
			case 5:
				return $this->getCosto();
				break;
			case 6:
				return $this->getOficina();
				break;
			case 7:
				return $this->getZona();
				break;
			case 8:
				return $this->getArea();
				break;
			case 9:
				return $this->getIdZona();
				break;
			case 10:
				return $this->getIdOficina();
				break;
			case 11:
				return $this->getIdArea();
				break;
			case 12:
				return $this->getIdCargo();
				break;
			case 13:
				return $this->getId();
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
		$keys = PerfilPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCorreo(),
			$keys[1] => $this->getNombre(),
			$keys[2] => $this->getSexo(),
			$keys[3] => $this->getUsuario(),
			$keys[4] => $this->getCargo(),
			$keys[5] => $this->getCosto(),
			$keys[6] => $this->getOficina(),
			$keys[7] => $this->getZona(),
			$keys[8] => $this->getArea(),
			$keys[9] => $this->getIdZona(),
			$keys[10] => $this->getIdOficina(),
			$keys[11] => $this->getIdArea(),
			$keys[12] => $this->getIdCargo(),
			$keys[13] => $this->getId(),
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
		$pos = PerfilPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCorreo($value);
				break;
			case 1:
				$this->setNombre($value);
				break;
			case 2:
				$this->setSexo($value);
				break;
			case 3:
				$this->setUsuario($value);
				break;
			case 4:
				$this->setCargo($value);
				break;
			case 5:
				$this->setCosto($value);
				break;
			case 6:
				$this->setOficina($value);
				break;
			case 7:
				$this->setZona($value);
				break;
			case 8:
				$this->setArea($value);
				break;
			case 9:
				$this->setIdZona($value);
				break;
			case 10:
				$this->setIdOficina($value);
				break;
			case 11:
				$this->setIdArea($value);
				break;
			case 12:
				$this->setIdCargo($value);
				break;
			case 13:
				$this->setId($value);
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
		$keys = PerfilPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCorreo($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNombre($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setSexo($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setUsuario($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCargo($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCosto($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setOficina($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setZona($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setArea($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setIdZona($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setIdOficina($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setIdArea($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setIdCargo($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setId($arr[$keys[13]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(PerfilPeer::DATABASE_NAME);

		if ($this->isColumnModified(PerfilPeer::CORREO)) $criteria->add(PerfilPeer::CORREO, $this->correo);
		if ($this->isColumnModified(PerfilPeer::NOMBRE)) $criteria->add(PerfilPeer::NOMBRE, $this->nombre);
		if ($this->isColumnModified(PerfilPeer::SEXO)) $criteria->add(PerfilPeer::SEXO, $this->sexo);
		if ($this->isColumnModified(PerfilPeer::USUARIO)) $criteria->add(PerfilPeer::USUARIO, $this->usuario);
		if ($this->isColumnModified(PerfilPeer::CARGO)) $criteria->add(PerfilPeer::CARGO, $this->cargo);
		if ($this->isColumnModified(PerfilPeer::COSTO)) $criteria->add(PerfilPeer::COSTO, $this->costo);
		if ($this->isColumnModified(PerfilPeer::OFICINA)) $criteria->add(PerfilPeer::OFICINA, $this->oficina);
		if ($this->isColumnModified(PerfilPeer::ZONA)) $criteria->add(PerfilPeer::ZONA, $this->zona);
		if ($this->isColumnModified(PerfilPeer::AREA)) $criteria->add(PerfilPeer::AREA, $this->area);
		if ($this->isColumnModified(PerfilPeer::ID_ZONA)) $criteria->add(PerfilPeer::ID_ZONA, $this->id_zona);
		if ($this->isColumnModified(PerfilPeer::ID_OFICINA)) $criteria->add(PerfilPeer::ID_OFICINA, $this->id_oficina);
		if ($this->isColumnModified(PerfilPeer::ID_AREA)) $criteria->add(PerfilPeer::ID_AREA, $this->id_area);
		if ($this->isColumnModified(PerfilPeer::ID_CARGO)) $criteria->add(PerfilPeer::ID_CARGO, $this->id_cargo);
		if ($this->isColumnModified(PerfilPeer::ID)) $criteria->add(PerfilPeer::ID, $this->id);

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
		$criteria = new Criteria(PerfilPeer::DATABASE_NAME);

		$criteria->add(PerfilPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Perfil (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setCorreo($this->correo);

		$copyObj->setNombre($this->nombre);

		$copyObj->setSexo($this->sexo);

		$copyObj->setUsuario($this->usuario);

		$copyObj->setCargo($this->cargo);

		$copyObj->setCosto($this->costo);

		$copyObj->setOficina($this->oficina);

		$copyObj->setZona($this->zona);

		$copyObj->setArea($this->area);

		$copyObj->setIdZona($this->id_zona);

		$copyObj->setIdOficina($this->id_oficina);

		$copyObj->setIdArea($this->id_area);

		$copyObj->setIdCargo($this->id_cargo);


		$copyObj->setNew(true);

		$copyObj->setId(NULL); // this is a auto-increment column, so set to default value

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
	 * @return     Perfil Clone of current object.
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
	 * @return     PerfilPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new PerfilPeer();
		}
		return self::$peer;
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

	}

	// symfony_behaviors behavior
	
	/**
	 * Calls methods defined via {@link sfMixer}.
	 */
	public function __call($method, $arguments)
	{
	  if (!$callable = sfMixer::getCallable('BasePerfil:'.$method))
	  {
	    throw new sfException(sprintf('Call to undefined method BasePerfil::%s', $method));
	  }
	
	  array_unshift($arguments, $this);
	
	  return call_user_func_array($callable, $arguments);
	}

} // BasePerfil
