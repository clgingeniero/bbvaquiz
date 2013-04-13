<?php

/**
 * quiz actions.
 *
 * @package    symfony
 * @subpackage quiz
 * @author     Your name here
 */
class quizActions extends sfActions
{
    public function executeIndex(sfWebRequest $request)
    {
      //$this->quizs = QuizPeer::doSelect(new Criteria());
        $this->forward('quiz', 'list');
    }


   /* public function executeCreate(sfWebRequest $request)
    {
      $this->forward404Unless($request->isMethod(sfRequest::POST));

      $this->form = new quizForm();

      $this->processForm($request, $this->form);

      $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request)
    {
      $this->forward404Unless($quiz = QuizPeer::retrieveByPk($request->getParameter('id_quiz')), sprintf('Object quiz does not exist (%s).', $request->getParameter('id_quiz')));
      $this->form = new quizForm($quiz);
    }

    public function executeUpdate(sfWebRequest $request)
    {
      $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
      $this->forward404Unless($quiz = QuizPeer::retrieveByPk($request->getParameter('id_quiz')), sprintf('Object quiz does not exist (%s).', $request->getParameter('id_quiz')));
      $this->form = new quizForm($quiz);

      $this->processForm($request, $this->form);

      $this->setTemplate('edit');
    } 

    public function executeDelete(sfWebRequest $request)
    {
      $request->checkCSRFProtection();

      $this->forward404Unless($quiz = QuizPeer::retrieveByPk($request->getParameter('id_quiz')), sprintf('Object quiz does not exist (%s).', $request->getParameter('id_quiz')));
      $quiz->delete();

      $this->redirect('quiz/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form)
    {
      $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
      if ($form->isValid())
      {
        $quiz = $form->save();

        $this->redirect('quiz/edit?id_quiz='.$quiz->getIdQuiz());
      }
    }*/

    public function executeList()
    {
        $criteria = new Criteria();
        $criteriaEnd = new Criteria();

        $criteria->add(QuizPeer::INICIAL_TIME, time(),Criteria::LESS_THAN);
        $criteria->add(QuizPeer::FINAL_TIME, time(),Criteria::GREATER_THAN);

        $criteriaEnd->add(QuizPeer::FINAL_TIME, time(),Criteria::LESS_THAN);

        $this->quiz_active_list = QuizPeer::doSelect($criteria);
        $this->quiz_end_list = QuizPeer::doSelect($criteriaEnd);
    }
  
    public function executePending()
    {
        /* $criteria = new Criteria();
        $criteria->add(QuizPeer::INICIAL_TIME, time(),Criteria::LESS_THAN);
        $criteria->add(QuizPeer::FINAL_TIME, time(),Criteria::GREATER_THAN);
        $criteria->addJoin(QuizusrPeer::ID_QUIZ, QuizPeer::ID_QUIZ);
        $criteria->addJoin(QuizlogPeer::ID_QUIZLOG, QuizPeer::ID_QUIZ);
        $criteria->add(QuizlogPeer::ID_USRQL, $this->getUserId(), Criteria::NOT_EQUAL);
        $criteria->add(QuizusrPeer::ID_USR_QU, $this->getUserId());
        
        $criteria->addGroupByColumn(QuizusrPeer::ID_QUIZ);
        
        $this->quiz_active_list = QuizPeer::doSelect($criteria); */
        
        $criteria = new Criteria();
        //end by time
        //$criteriaEnd->add(QuizPeer::FINAL_TIME, time(),Criteria::LESS_THAN);
        //$this->quiz_end_list = QuizPeer::doSelect($criteriaEnd);
        
        $criteria->addJoin(QuizlogPeer::ID_QUIZLOG, QuizPeer::ID_QUIZ, Criteria::INNER_JOIN);
        $criteria->add(QuizlogPeer::ID_USRQL, $this->getUserId());
        $criteria->add(QuizlogPeer::STATUS, 0);
        $this->quiz_active_list = QuizlogPeer::doSelect($criteria);
        
        $criteria->addDescendingOrderByColumn(QuizlogPeer::ID_QUIZLOG);
       
        $pager = new sfPropelPager('Quizlog', 5);
        $pager->setCriteria($criteria);
        $pager->setPage($this->getRequestParameter('page', 1));
        $pager->init();
        $this->pager = $pager;
        
        
       
    }
    
    public function executeNew()
    {
        
        
        $con = Propel::getConnection();
        $sql = "SELECT quiz.ID_QUIZ, quiz.DESCRIPTION, quiz.INICIAL_TIME, quiz.FINAL_TIME, quizlog.* 
                FROM quizlog
                right JOIN quiz  ON (quiz.ID_QUIZ=quizlog.ID_QUIZLOG and quizlog.id_usrql = ".  $this->getUserId() . ")  
                where quizlog.id_quizlog is null and quiz.final_time > now()";
       
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $this->quiz_active_list = QuizPeer::populateObjects($stmt);

       
        
         $this->setTemplate('new');
       
    }
    
    public function executeEnd()
    {
        $criteriaEnd = new Criteria();
        //end by time
        //$criteriaEnd->add(QuizPeer::FINAL_TIME, time(),Criteria::LESS_THAN);
        //$this->quiz_end_list = QuizPeer::doSelect($criteriaEnd);
        
        $criteriaEnd->addJoin(QuizlogPeer::ID_QUIZLOG, QuizPeer::ID_QUIZ, Criteria::INNER_JOIN);
        $criteriaEnd->add(QuizlogPeer::ID_USRQL, $this->getUserId());
        $criteriaEnd->add(QuizlogPeer::STATUS, 1);
        //$this->quiz_end_list = QuizlogPeer::doSelect($criteriaEnd);
        $criteriaEnd->addDescendingOrderByColumn(QuizlogPeer::ID_QUIZLOG);
       
        $pager = new sfPropelPager('Quizlog', 5);
        $pager->setCriteria($criteriaEnd);
        $pager->setPage($this->getRequestParameter('page', 1));
        $pager->init();
        $this->pager = $pager;
       
    }
  
    public function executeDo(sfWebRequest $request, $action = '')
    {
        $this->forward404Unless($quiz = QuizPeer::retrieveByPk($request->getParameter('id')), 
                sprintf('Object quiz does not exist (%s).', $request->getParameter('id')));
        $this->sin_preguntas = false;
        $this->finish = false;
        $this->quiz = ($this->quiz == null) ? QuizPeer::retrieveByPK($request->getParameter('id')) : $this->quiz;
        $this->getAdvance($request->getParameter('id'));
        
        if($action != 'save') {
          
            $question = $this->getQuestionStatus($request->getParameter('id')); 
             
            $this->question = $this->getQuestionActive($question, $request);
            
            if($this->question != null) {
              $this->answers = $this->getAnswers($this->question);
              
            }
            else {
              $this->calculeResult($request->getParameter('id'));
              $this->updateUserLog($request->getParameter('id'));
              //calcula la posicion del usuario en el ranking
              $this->getUserPosition($request->getParameter('id'));
        
              $this->setTemplate('finish');
              return;
            }
            $this->action = $action;

            $this->timesQuiz();
        } else {
            
            $this->setTemplate('save');
            return;
        } 

        $this->setTemplate('do');
    }
  
    /**
     * 
     * @param int $idQuestion
     * @return array ids
     * 
     * retorna los ids de las preguntas ya realizadas
     */
    public function getQuestionStatus($idQuiz)
    {

          $criteria = new Criteria();        
          $criteria->add(QuizusrPeer::ID_QUIZ, $idQuiz);
          $criteria->add(QuizusrPeer::ID_USR_QU, $this->getUser()->getGuardUser()->getId());
          $questions = QuizusrPeer::doSelect($criteria);

          $res = array();

          foreach($questions as $question){
              $res[] = $question->getIdQuestion();
          }

          return $res;
    }
  
    public function getQuestionActive($questions, $request)
    {
        $criteria = new Criteria();
        $criteria->add(QuestionsQuizPeer::ID_QUIZ, $request->getParameter('id'));
        $criteria->add(QuestionsQuizPeer::ID_QUESTION, $questions, Criteria::NOT_IN);
        $criteria->addJoin(QuestionsQuizPeer::ID_QUESTION, QuestionPeer::ID_QUESTION);
        
        return QuestionPeer::doSelectOne($criteria);
      
    }
    
    public function timesQuiz()
    {
        if($this->getUser()->getAttribute('active_time') == null) {
            $criteria = new Criteria();
            $criteriaEnd = new Criteria();

            $criteria->add(QuizPeer::INICIAL_TIME, time(),Criteria::LESS_THAN);
            $criteria->add(QuizPeer::FINAL_TIME, time(),Criteria::GREATER_THAN);

            $criteriaEnd->add(QuizPeer::FINAL_TIME, time(),Criteria::LESS_THAN);

            $this->getUser()->setAttribute('active_time', QuizPeer::doSelect($criteria));
            $this->getUser()->setAttribute('end_time', QuizPeer::doSelect($criteriaEnd));
        }

        $this->quiz_active_list = $this->getUser()->getAttribute('active_time');
        $this->quiz_end_list = $this->getUser()->getAttribute('end_time');
    }
    
    public function getAnswers($question)
    {
        
        $criteria = new Criteria();
        $criteria->add(AnswerPeer::ID_QUESTION, $question->getIdQuestion());
        
        return AnswerPeer::doSelect($criteria);
    }
    
    public function saveQuizLog($request)
    {
        $qusr = new Quizusr();
       /*echo "q: ". $request->getParameter('question'); 
       echo "a: ". $request->getParameter('answers');
       echo "u: ". $this->getUser()->getGuardUser()->getId();
       echo "i: ". $request->getParameter('id'); */
        //echo $request->getParameter('question') . '--' . $this->getUser()->getGuardUser()->getId(); die;
       $respond = $this->isRespond($this->getUser()->getGuardUser()->getId(), $request->getParameter('question'), $request->getParameter('id'));
      //echo $respond; die;
       if($respond && $request->getParameter('question') != '' && $request->getParameter('answers') != '' &&
                $this->getUser()->getGuardUser()->getId() != '' && $request->getParameter('id') != '') {
            
            $qusr->setIdQuestion($request->getParameter('question'));
            $qusr->setIdAnswer($request->getParameter('answers'));
            $qusr->setIdUsrQu($this->getUser()->getGuardUser()->getId());
            $qusr->setIdQuiz($request->getParameter('id'));
            $qusr->save();
            
            $this->saveUserLog($request->getParameter('id'));
        }
    }
    
    public function executeSave(sfWebRequest $request)
    {
        
        $this->saveQuizLog($request);
        $this->executeDo($request, 'save');
    }
    
    public function executeViewans(sfWebRequest $request)
    {
        $this->saveQuizLog($request);
        return $this->renderText('1');
        
    }
    
    public function executeNext(sfWebRequest $request)
    {
        $this->saveQuizLog($request);
        $this->executeDo($request, false);
        
    }
    
    public function calculeResult($quiz)
    {
        $this->totalUser = 0;
        $criteria = new Criteria();
       
        $criteria->add(QuestionsQuizPeer::ID_QUIZ, $quiz);
        $criteria->addJoin(QuestionsQuizPeer::ID_QUESTION, QuestionPeer::ID_QUESTION);
        $questions = QuestionPeer::doSelect($criteria);
        
        
        $dif = $this->getValueDif($quiz);
        
        if(sizeof($dif)) {
            $difValue = $dif[0];
            $status = true;
        } else{
           $difValue = null; 
           $status = false;
        }
       
        $bonus = $this->getBonusQuiz($quiz); 
        $valueBonus = (sizeof($bonus) > 0 ) ? $bonus->getBonus() : 0 ;
        //puntaje total en la actividad
        $this->totalActividad = $this->getValueActividad($questions, $difValue, $status) +  $valueBonus; 
        
        $bU = $this->getBonusUser($quiz);
        $userBonus = (sizeof($bU)>0)  ? $bU->getBonus() : 0 ;
        //puntaje obtenido
        return $this->totalUser = $this->getValueActividad($this->getUserResult($quiz), $difValue, $status) +  $userBonus;
        
        
        
        
        //$this->setTemplate('finish');
      
        
       
     }
     
     public function getValueDif($quiz)
     {
        $criteriaValor = new Criteria();
        $criteriaValor->add(DificultyQuizPeer::ID_QUIZ, $quiz);
        return DificultyQuizPeer::doSelect($criteriaValor);
     }

     public function getUserResult($quiz)
     {
        
        $criteriaValor = new Criteria();
        $criteriaValor->addJoin(QuizusrPeer::ID_ANSWER, AnswerPeer::ID_ANSWER, Criteria::INNER_JOIN)
                ->addJoin(AnswerPeer::ID_QUESTION, QuestionPeer::ID_QUESTION, Criteria::INNER_JOIN)
                ->add(AnswerPeer::CORRECT, '1')
                ->add(QuizusrPeer::ID_USR_QU, $this->getUserId())
                ->add(QuizusrPeer::ID_QUIZ, $quiz);
        
        return QuestionPeer::doSelect($criteriaValor);
     }
     
     
     public function executeUserResult($quiz)
     {
        $quiz = 1;
         /*$criteriaValor = new Criteria();
        $criteriaValor->addAlias('questionalias', 'quizusr');
        
        $criteriaValor->addJoin(AnswerPeer::ID_ANSWER, 'questionalias.ID_ANSWER', Criteria::INNER_JOIN);
        $criteriaValor->addJoin(AnswerPeer::ID_QUESTION, QuestionPeer::ID_QUESTION , Criteria::INNER_JOIN);
        $criteriaValor->add(AnswerPeer::CORRECT, '1');
        $criteriaValor->add(QuizusrPeer::ID_USR_QU, $this->getUserId());
        $criteriaValor->add(QuizusrPeer::ID_QUIZ, $quiz);
        
        $criteriaValor->addGroupByColumn(QuestionPeer::ID_QUESTION);*/
        
        $criteriaValor = new Criteria();
        $criteriaValor->addJoin(QuizusrPeer::ID_ANSWER, AnswerPeer::ID_ANSWER, Criteria::INNER_JOIN)
                ->addJoin(AnswerPeer::ID_QUESTION, QuestionPeer::ID_QUESTION, Criteria::INNER_JOIN)
                ->add(AnswerPeer::CORRECT, '1')
                ->add(QuizusrPeer::ID_USR_QU, $this->getUserId())
                ->add(QuizusrPeer::ID_QUIZ, $quiz);
        
        $a =  QuestionPeer::doSelect($criteriaValor);
        var_dump($a); die;
     }

     public function getUserPosition($quiz)
     {
        //echo $quiz;
        $criteriaValor = new Criteria();
        //$criteriaValor->clearSelectColumns();
        //$criteriaValor->addSelectColumn(QuizlogPeer::ID_QUIZ_USR_LOG);
        $criteriaValor->add(QuizlogPeer::ID_QUIZLOG, $quiz);
        $criteriaValor->addDescendingOrderByColumn(QuizlogPeer::RESULT);
       
        $rs = QuizlogPeer::doSelect($criteriaValor);
        //$a = QuizlogPeer::doSelect($criteriaValor);
        
        //var_dump($rs);
        $i = 0;
        foreach($rs as $usr){
            $i++;
            if($usr->getIdUsrql() == $this->getUser()->getGuardUser()->getId())
                break;
        }
        $this->position = $i;
        $this->totUsers = sizeof($rs);
        
       return;
         
         
     }

     public function getValueActividad($questions, $valor, $status = true){
        
         $vale = 0;
         if($status) {
            $easy = $valor->getEasy();
            $medium = $valor->getMedium();
            $hard = $valor->getHard(); 
         }else{ //asignar valores por defecto
            $easy = 1;
            $medium = 2;
            $hard = 3; 
         }
         
        
         //var_dump($questions);
         
         foreach($questions as $ques){
            
             switch ($ques->getIdDificultad()){
                 case 1:
                    $vale += $easy;
                     break;
                 case 2:
                      $vale += $medium;
                     break;
                 case 3:
                      $vale += $hard;
                     break;
             }
            
         }
         
         return $vale;
         
     }
     
    

     public function saveUserLog($quiz)
     {
         $rs = $this->isTotSave($this->getUserId(), $quiz); 
         $rsT = (sizeof($rs) > 0) ? false : true ;
         
         if(!$rsT) return;
         
         $qusr = new Quizlog();
            $qusr->setIdQuizlog($quiz);
            $qusr->setIdUsrql($this->getUser()->getGuardUser()->getId());
            $qusr->setStatus(0);
            $qusr->setResult($this->totalUser);
            $qusr->setDateEnd(time());
            $qusr->save(); 
         //guardar puntaje de usuario
     }
     
     
     public function updateUserLog($quiz)
     {
            $rs = $this->isTotSave($this->getUserId(), $quiz); 
            
            $totBonus = $this->getBonusUser($quiz);
            $bonus = ($totBonus != null) ? $totBonus->getBonus() : 0 ;
            $total = $this->totalUser;
            
            if($rs != null){
                $qusr = QuizlogPeer::retrieveByPK($rs->getIdQuizUsrLog());
                $qusr->setIdQuizlog($quiz);
                $qusr->setIdUsrql($this->getUser()->getGuardUser()->getId());
                $qusr->setStatus(1);
                $qusr->setResult($total);
                $qusr->setBonus($bonus);
                $qusr->setDateEnd(time());
                $qusr->save(); 
            }else{
                return $this->sin_preguntas = true;
            }
            
         //guardar puntaje de usuario
     }
     
     public function isTotSave($idUser, $idQuiz)
     {
        $criteria = new Criteria();
        $criteria->add(QuizlogPeer::ID_USRQL, $idUser);
        $criteria->add(QuizlogPeer::ID_QUIZLOG, $idQuiz);
        
        $res =  QuizlogPeer::doSelectOne($criteria);
        
        return $res;
     }
     
     
     public function isRespond($idUser, $idQuest, $idQuiz)
     {
        $criteria = new Criteria();
        $criteria->add(QuizusrPeer::ID_USR_QU, $idUser);
        $criteria->add(QuizusrPeer::ID_QUESTION, $idQuest);
        $criteria->add(QuizusrPeer::ID_QUIZ, $idQuiz);
        
        $res =  QuizusrPeer::doSelectOne($criteria);
        //echo count($res); die;
        return (count($res) > 0) ? false : true ;
     }
    
     public function getUserId()
     {
         return $this->getUser()->getGuardUser()->getId();
     }
    
    public function getBonusQuiz($quiz)
    {
        $criteriaValor = new Criteria();
        $criteriaValor->add(BonusQuizPeer::ID_QUIZ, $quiz);
        $criteriaValor->addDescendingOrderByColumn(BonusQuizPeer::BONUS);
        return BonusQuizPeer::doSelectOne($criteriaValor);
    }



     public function getBonusUser($quizId)
     {
        
        $quiz = QuizPeer::retrieveByPk($quizId);
         
        
        $inicial = new DateTime($quiz->getInicialTime());
        $end = new DateTime(date("Y-m-d H:i:s"));
        
        //$fecha = $inicial->diff($end);
        $horas = 0;
        if(0 == 0){
            $horas = (1 * 24) + 12;
            
        }
        
        
        $criteriaValor = new Criteria();
        $criteriaValor->add(BonusQuizPeer::ID_QUIZ, $quizId);
        $criteriaValor->add(BonusQuizPeer::HOURS, $horas, Criteria::GREATER_EQUAL);
        $criteriaValor->addDescendingOrderByColumn(BonusQuizPeer::BONUS);
        return BonusQuizPeer::doSelectOne($criteriaValor);
     
     }
     
     
     public function getBonusUserphp53($quizId)
     {
        
        $quiz = QuizPeer::retrieveByPk($quizId);
         
        
        $inicial = new DateTime($quiz->getInicialTime());
        $end = new DateTime(date("Y-m-d H:i:s"));
        
        $fecha = $inicial->diff($end);
        $horas = 0;
        if((int)$fecha->y == 0){
            $horas = ((int)$fecha->d * 24) + (int)$fecha->h;
            
        }
        
        
        $criteriaValor = new Criteria();
        $criteriaValor->add(BonusQuizPeer::ID_QUIZ, $quizId);
        $criteriaValor->add(BonusQuizPeer::HOURS, $horas, Criteria::GREATER_EQUAL);
        $criteriaValor->addDescendingOrderByColumn(BonusQuizPeer::BONUS);
        return BonusQuizPeer::doSelectOne($criteriaValor);
     
     }
     
     
    
     public function getAdvance($quizId)
     {
         
         $tot = $this->getCountTotQuestions($quizId);
         $usr = $this->getCountAnsQuizResponse($quizId);
         $this->adv = ($usr == 0) ? 0 :  round((($usr/$tot) * 100), 2); 
         //echo $usr . '-' . $tot . '-' .$this->adv;
     }
     
     public function getCountTotQuestions($quizId)
     {
        $c = new Criteria();
        $c->add(QuestionsQuizPeer::ID_QUIZ, $quizId );
        return QuestionsQuizPeer::doCount($c);
    }
     
     public function getCountAnsQuizResponse($quizId)
     {
        $c = new Criteria();
        $c->add(QuizusrPeer::ID_QUIZ, $quizId );
        $c->add(QuizusrPeer::ID_USR_QU, $this->getUserId() );
        return QuizusrPeer::doCount($c);
     }
     
    public function import($inputFileName)
    {
       
        ini_set('memory_limit', '-1');
        error_reporting(E_ALL);
        set_time_limit(0);

        date_default_timezone_set('Europe/London');


        set_include_path(get_include_path() . PATH_SEPARATOR . '../../../Classes/');

        /** PHPExcel_IOFactory */
        include 'PHPExcel/IOFactory.php';


        //$inputFileName = 'example2.xlsx';
        //echo 'Loading file ',pathinfo($inputFileName,PATHINFO_BASENAME),' using IOFactory to identify the format<br />';
        try {
                $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
        } catch(Exception $e) {
                die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }


        echo '<hr />';

        $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
        //var_dump($sheetData);
        $idAct = false;
        $idQ = false;
        $idQs = array();
        for($i = 1; $i < (count($sheetData) + 1); $i++){
            
                switch($sheetData[$i][0]){
                    case 'Pregunta':
                        $idQ = $this->createQuestion($sheetData[$i]); 
                        $idQs[] = $idQ;
                    break;
                
                    case 'Respuesta Correcta':
                        $this->createAnswer($sheetData[$i], 0, $idQ);
                    break;
                
                    case 'Respuesta Incorrecta':
                        $this->createAnswer($sheetData[$i], 1, $idQ);
                    break;
                
                    case 'Actividad':
                        $idAct = $this->createQuiz($sheetData[$i]);
                    break;
                
                }
             
        }
        
        $this->createQuestionsQuiz($idAct, $idQs);
        
        

    }
    
    public function createQuestion($question)
    {
        
        $ques = $question[2];
        $dif = ($question[1] == 1) ? 1 : 2;
        $question = new Question();
        $question->setQuestion($ques);
        $question->setIdDificultad($dif);
        $question->save();
        return $question->getIdQuestion();
    }
    
    public function createAnswer($answer, $type, $idQuestion)
    {
        $ans = $answer[2];
        //var_dump($ans); die;
        $answer = new Answer();
        $answer->setAnswer($ans);
        $answer->setIdQuestion($idQuestion);
        $answer->setCorrect($type);
        $answer->save();
        //return $idQuestion;
    }
    
    public function createQuiz($quiz)
    {
     
       $q = $quiz[2];
       $quiz = new Quiz();
       $quiz->setDescription($q);
       $quiz->setInicialTime(time());
       $quiz->setFinalTime(time());
       $quiz->save();
       return $quiz->getIdQuiz();
    }
    
    public function createQuestionsQuiz($idQuiz, $questions)
    {
        if(is_numeric($idQuiz)){
        $ques = 0;
        for($i=0; $i < count($questions); $i++){
            $ques = $questions[$i];
            $qAct = new QuestionsQuiz();
            $qAct->setIdQuestion($ques);
            $qAct->setIdQuiz($idQuiz);
            $qAct->save();
        }
        }
        return;
        
    }
    
    public function executePrepareimport(sfWebRequest $request)
    {
        $this->error = false;
        $this->setTemplate('prepareimport');
    }
    
    public function executeLoadfile(sfWebRequest $request)
    {
        $filename = basename($_FILES['file']['name']);
        $ext = substr($filename, strrpos($filename, '.') + 1);
        $this->error = FALSE;
        $this->msn = FALSE;
        $ruta = '';
       
        if (($ext == "xls" || $ext == "xlsx") 
            && ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
            || $_FILES["file"]["type"] == "application/vnd.ms-excel")) 
            {
                if ($_FILES["file"]["error"] > 0)
                  {
                    $this->error = 'El archivo contiene errores, por favor verifiquelo y subalo de nuevo';
                    $this->setTemplate('prepareimport');
                  }
                else
                  {
                 /* $this->msn =  "Upload: " . $_FILES["file"]["name"] . "<br>";
                  $this->msn .= "Type: " . $_FILES["file"]["type"] . "<br>";
                  $this->msn .=  "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
                  $this->msn .=  "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>"; */

                  if (file_exists(sfConfig::get('sf_upload_dir') .'/' . $filename))
                    {
                        move_uploaded_file($_FILES["file"]["tmp_name"],
                        sfConfig::get('sf_upload_dir') .'/2'. $_FILES["file"]["name"]);
                        $ruta =  sfConfig::get('sf_upload_dir') .'/2'.  $_FILES["file"]["name"];
                    }
                  else
                    {
                    move_uploaded_file($_FILES["file"]["tmp_name"],
                    sfConfig::get('sf_upload_dir') .'/'. $_FILES["file"]["name"]);
                    $ruta =  sfConfig::get('sf_upload_dir') .'/'.  $_FILES["file"]["name"];
                    }
                  }
                  $this->import($ruta);
                  
          }
        else
          {
          $this->error =  'El archivo debe ser un archivo con extensión .xlsx o .xsl'; //no tiene la extensión
          $this->setTemplate('prepareimport');
          }
    }
  

}