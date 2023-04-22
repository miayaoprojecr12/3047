<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ShoppingCart Controller
 *
 * @method \App\Model\Entity\ShoppingCart[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ShoppingCartController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $shoppingCart = $this->paginate($this->ShoppingCart);

        $this->set(compact('shoppingCart'));
    }

    /**
     * View method
     *
     * @param string|null $id Shopping Cart id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shoppingCart = $this->ShoppingCart->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('shoppingCart'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shoppingCart = $this->ShoppingCart->newEmptyEntity();
        if ($this->request->is('post')) {
            $shoppingCart = $this->ShoppingCart->patchEntity($shoppingCart, $this->request->getData());
            if ($this->ShoppingCart->save($shoppingCart)) {
                $this->Flash->success(__('The shopping cart has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shopping cart could not be saved. Please, try again.'));
        }
        $this->set(compact('shoppingCart'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Shopping Cart id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shoppingCart = $this->ShoppingCart->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shoppingCart = $this->ShoppingCart->patchEntity($shoppingCart, $this->request->getData());
            if ($this->ShoppingCart->save($shoppingCart)) {
                $this->Flash->success(__('The shopping cart has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shopping cart could not be saved. Please, try again.'));
        }
        $this->set(compact('shoppingCart'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Shopping Cart id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shoppingCart = $this->ShoppingCart->get($id);
        if ($this->ShoppingCart->delete($shoppingCart)) {
            $this->Flash->success(__('The shopping cart has been deleted.'));
        } else {
            $this->Flash->error(__('The shopping cart could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function cart()
    {
        $cart = $this->request->getSession()->read('Cart');
        $this->set(compact('cart'));
    }


}
