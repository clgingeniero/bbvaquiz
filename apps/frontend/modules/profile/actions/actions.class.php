<?php

/**
 * profile actions.
 *
 * @package    symfony
 * @subpackage profile
 * @author     Your name here
 */
class profileActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $user_id = $this->getUser()->getGuardUser()->getId(); 
    $criteria = new Criteria();
    $criteria->add(SfGuardUserProfilePeer::USER_ID, $user_id);
    $this->sfGuardUserProfile = SfGuardUserProfilePeer::doSelectOne($criteria);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new sfGuardUserProfileForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new sfGuardUserProfileForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($sfGuardUserProfile = SfGuardUserProfilePeer::retrieveByPk($request->getParameter('id')), sprintf('Object sfGuardUserProfile does not exist (%s).', $request->getParameter('id')));
    $this->form = new sfGuardUserProfileForm($sfGuardUserProfile);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($sfGuardUserProfile = SfGuardUserProfilePeer::retrieveByPk($request->getParameter('id')), sprintf('Object sfGuardUserProfile does not exist (%s).', $request->getParameter('id')));
    $this->form = new sfGuardUserProfileForm($sfGuardUserProfile);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($sfGuardUserProfile = SfGuardUserProfilePeer::retrieveByPk($request->getParameter('id')), sprintf('Object sfGuardUserProfile does not exist (%s).', $request->getParameter('id')));
    $sfGuardUserProfile->delete();

    $this->redirect('profile/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $sfGuardUserProfile = $form->save();

      $this->redirect('profile/edit?id='.$sfGuardUserProfile->getId());
    }
  }
}
