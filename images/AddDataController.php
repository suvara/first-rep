<?php
	class AddDataController implements IController{
		public function IndexAction(){
			$fc = FrontController:: getInstance();
			$model = new AddDataModel();
			$result = $model->render('../views/show_add.php');
			$fc->setBody($result);
		}
		public function AddAction(){
			$fc = FrontController:: getInstance();
			$model = new AddModel();
			//if(!$model->postData())throw new Exception('Не удалось добавить запись !');
			$result = $model->render('../views/show_good_posted.php');
			$fc->setBody($result);
		}
		
	}
?>