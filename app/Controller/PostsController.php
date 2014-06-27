<?php

/**
 * Created by PhpStorm.
 * User: Marijn
 * Date: 18/06/14
 * Time: 14:56
 */
class PostsController extends AppController
{
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session', 'Paginator');

    public $paginate = array(
        'limit' => 1,
        'order' => array(
            'date' => 'desc')
    );

    public function index()
    {
        //Load model
        $this->loadModel('Post');
        //Setup pagination
        $this->Paginator->settings = $this->paginate;
        //Get data
        $DynamicData = $this->Paginator->paginate('Post');
        //Prepare for view
        $data = array(
            'title' => 'Blog',
            'subtitle' => 'Things you wish you never knew..',
            'posts' => $DynamicData
        );

        //Render view
        $this->set('data', $data);
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $this->Post->create();
            $this->request->data['Post']['user_id'] = $this->Auth->user('id');
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your post.'));
        }
    }

    public function edit($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $this->Post->id = $id;
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update your post.'));
        }
        if (!$this->request->data) {
            $this->request->data = $post;
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
if ($this->Post->delete($id)) {
    $this->Session->setFlash(
        __('The post with id: %s has been deleted.', h($id))
);
return $this->redirect(array('action' => 'index'));
}
}

} 