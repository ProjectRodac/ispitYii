<?php

class RijesiIspitController extends Controller
{
   
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
        public $count=0;
        public $tocni=0;
        public $idIspita;

        /**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  
				'actions'=>array('prikaziIspit','createRijesenja','update','admin','delete','index','view'),
				'roles'=>array('superuser','ucenik'),
                            ),
			array(//'deny',  // deny all users
				'users'=>array('*'),
                            ),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreateRijesenja()
	{
            $idIspita = Yii::app()->request->getParam('idIspita');
    
                foreach ($_POST as $key => $value){
                    $model=new UserOdgovori;
                    $model->user_id=Yii::app()->user->id;
                    $model->odgovor_idOdgovor=$value;
                    $model->odgovor_ispit_idispit=$idIspita;
                    $model->save();
                }
            //$this->redirect(array('rjesenjaIspita','idIspita'=>$idIspita));
            
            $criteria = new CDbCriteria();
             $criteria->with= array('ispits','odgovors','odgovors.users');
             $criteria->condition = 'ispit_idispit=:ispit_idispit';
             $criteria->params=(array(':ispit_idispit'=>$idIspita));
             $criteria->together = true;
                $dataProvider=new CActiveDataProvider('Pitanja',array(
                    'criteria'=>$criteria,
                ));
		//$dataProvider=new CActiveDataProvider('User');
		$this->render('rjesenjaIspita',array(
			'dataProvider'=>$dataProvider,
		));
                
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['rijesiIspit']))
		{
			$model->attributes=$_POST['rijesiIspit'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idispit));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
             $criteria = new CDbCriteria();
             $criteria->with= array('users','ispits');
             $criteria->condition = 'users_users.user_id=:user_id and objavljen=1';
             $criteria->params=(array(':user_id'=>Yii::app()->user->id));
             $criteria->together = true;
                $dataProvider=new CActiveDataProvider('Predmet',array(
                    'criteria'=>$criteria,
                ));
		//$dataProvider=new CActiveDataProvider('User');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
                
	}
        
        public function actionPrikaziIspit()
	{
            $idIspita = Yii::app()->request->getParam('idIspita');
             $criteria = new CDbCriteria();
             $criteria->with= array('ispits');
             $criteria->condition = 'ispit_idispit=:ispit_idispit';
             $criteria->params=(array(':ispit_idispit'=>$idIspita));
             $criteria->together = true;
                $dataProvider=new CActiveDataProvider('Pitanja',array(
                    'criteria'=>$criteria,
                ));
		//$dataProvider=new CActiveDataProvider('User');
		$this->render('ispit',array(
			'dataProvider'=>$dataProvider,
		));
                
                /*
		$dataProvider=new CActiveDataProvider('rijesiIspit');
                
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
                 * */
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new rijesiIspit('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['rijesiIspit']))
			$model->attributes=$_GET['rijesiIspit'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return rijesiIspit the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=rijesiIspit::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param rijesiIspit $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='rijesi-ispit-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
