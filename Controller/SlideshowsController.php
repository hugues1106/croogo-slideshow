<?php
App::uses('SlideshowAppController', 'Slideshow.Controller');
/**
 * Slideshows Controller
 *
 * @property Slideshow $Slideshow
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SlideshowsController extends SlideshowAppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Slideshow->recursive = 0;
		$this->set('slideshows', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Slideshow->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid slideshow'));
		}
		$options = array('conditions' => array('Slideshow.' . $this->Slideshow->primaryKey => $id));
		$this->set('slideshow', $this->Slideshow->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Slideshow->create();
			if ($this->Slideshow->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The slideshow has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The slideshow could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Slideshow->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid slideshow'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Slideshow->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The slideshow has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The slideshow could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('Slideshow.' . $this->Slideshow->primaryKey => $id));
			$this->request->data = $this->Slideshow->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Slideshow->id = $id;
		if (!$this->Slideshow->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid slideshow'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Slideshow->delete()) {
			$this->Session->setFlash(__d('croogo', 'Slideshow deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Slideshow was not deleted'), 'default', array('class' => 'error'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Slideshow->recursive = 0;
		$this->set('slideshows', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Slideshow->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid slideshow'));
		}
		$options = array('conditions' => array('Slideshow.' . $this->Slideshow->primaryKey => $id));
		$this->set('slideshow', $this->Slideshow->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Slideshow->create();
			if ($this->Slideshow->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The slideshow has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The slideshow could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Slideshow->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid slideshow'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Slideshow->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The slideshow has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The slideshow could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('Slideshow.' . $this->Slideshow->primaryKey => $id));
			$this->request->data = $this->Slideshow->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Slideshow->id = $id;
		if (!$this->Slideshow->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid slideshow'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Slideshow->delete()) {
			$this->Session->setFlash(__d('croogo', 'Slideshow deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Slideshow was not deleted'), 'default', array('class' => 'error'));
		$this->redirect(array('action' => 'index'));
	}
}
