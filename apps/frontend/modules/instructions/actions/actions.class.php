<?php

/**
 * instructions actions.
 *
 * @package    symfony
 * @subpackage instructions
 * @author     Your name here
 */
class instructionsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->instructionss = InstructionsPeer::doSelect(new Criteria());
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new instructionsForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new instructionsForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($instructions = InstructionsPeer::retrieveByPk($request->getParameter('id_instruction')), sprintf('Object instructions does not exist (%s).', $request->getParameter('id_instruction')));
    $this->form = new instructionsForm($instructions);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($instructions = InstructionsPeer::retrieveByPk($request->getParameter('id_instruction')), sprintf('Object instructions does not exist (%s).', $request->getParameter('id_instruction')));
    $this->form = new instructionsForm($instructions);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($instructions = InstructionsPeer::retrieveByPk($request->getParameter('id_instruction')), sprintf('Object instructions does not exist (%s).', $request->getParameter('id_instruction')));
    $instructions->delete();

    $this->redirect('instructions/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $instructions = $form->save();

      $this->redirect('instructions/edit?id_instruction='.$instructions->getIdInstruction());
    }
  }
}
