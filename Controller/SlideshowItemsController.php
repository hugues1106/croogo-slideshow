<?php
App::uses('SlideshowAppController', 'Slideshow.Controller');
/**
 * SlideshowItems Controller
 *
 * @property SlideshowItem $SlideshowItem
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SlideshowItemsController extends SlideshowAppController {

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
		$this->SlideshowItem->recursive = 0;
		$this->set('slideshowItems', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SlideshowItem->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid slideshow item'));
		}
		$options = array('conditions' => array('SlideshowItem.' . $this->SlideshowItem->primaryKey => $id));
		$this->set('slideshowItem', $this->SlideshowItem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SlideshowItem->create();
			if ($this->SlideshowItem->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The slideshow item has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The slideshow item could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
		$slideshows = $this->SlideshowItem->Slideshow->find('list');
		$this->set(compact('slideshows'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SlideshowItem->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid slideshow item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SlideshowItem->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The slideshow item has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The slideshow item could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('SlideshowItem.' . $this->SlideshowItem->primaryKey => $id));
			$this->request->data = $this->SlideshowItem->find('first', $options);
		}
		$slideshows = $this->SlideshowItem->Slideshow->find('list');
		$this->set(compact('slideshows'));
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
		$this->SlideshowItem->id = $id;
		if (!$this->SlideshowItem->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid slideshow item'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SlideshowItem->delete()) {
			$this->Session->setFlash(__d('croogo', 'Slideshow item deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Slideshow item was not deleted'), 'default', array('class' => 'error'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->SlideshowItem->recursive = 0;
		$this->set('slideshowItems', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->SlideshowItem->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid slideshow item'));
		}
		$options = array('conditions' => array('SlideshowItem.' . $this->SlideshowItem->primaryKey => $id));
		$this->set('slideshowItem', $this->SlideshowItem->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->SlideshowItem->create();
			if ($this->SlideshowItem->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The slideshow item has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The slideshow item could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
		$slideshows = $this->SlideshowItem->Slideshow->find('list');
		$this->set(compact('slideshows'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->SlideshowItem->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid slideshow item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SlideshowItem->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The slideshow item has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The slideshow item could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('SlideshowItem.' . $this->SlideshowItem->primaryKey => $id));
			$this->request->data = $this->SlideshowItem->find('first', $options);
		}
		$slideshows = $this->SlideshowItem->Slideshow->find('list');
		$this->set(compact('slideshows'));
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
		$this->SlideshowItem->id = $id;
		if (!$this->SlideshowItem->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid slideshow item'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SlideshowItem->delete()) {
			$this->Session->setFlash(__d('croogo', 'Slideshow item deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Slideshow item was not deleted'), 'default', array('class' => 'error'));
		$this->redirect(array('action' => 'index'));
	}
}
