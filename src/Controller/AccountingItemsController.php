<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\I18n\I18n;

/**
 * AccountingItems Controller
 *
 * @property \App\Model\Table\AccountingItemsTable $AccountingItems
 * @method \App\Model\Entity\AccountingItem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AccountingItemsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $accountingItems = $this->paginate($this->getTableLocator()->get('AccountingItems'));

        $this->set(compact('accountingItems'));
    }

    /**
     * View method
     *
     * @param string|null $id Accounting Item id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accountingItem = $this->getTableLocator()->get('AccountingItems')->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('accountingItem'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $accountingItem = $this->getTableLocator()->get('AccountingItems')->newEmptyEntity();
        if ($this->request->is('post')) {
            $accountingItem = $this->getTableLocator()->get('AccountingItems')->patchEntity($accountingItem, $this->request->getData());
            if ($this->getTableLocator()->get('AccountingItems')->save($accountingItem)) {
                $this->Flash->success(__('The accounting item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The accounting item could not be saved. Please, try again.'));
        }
        $this->set(compact('accountingItem'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Accounting Item id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $accountingItem = $this->getTableLocator()->get('AccountingItems')->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accountingItem = $this->getTableLocator()->get('AccountingItems')->patchEntity($accountingItem, $this->request->getData());
            if ($this->getTableLocator()->get('AccountingItems')->save($accountingItem)) {
                $this->Flash->success(__('The accounting item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The accounting item could not be saved. Please, try again.'));
        }
        $this->set(compact('accountingItem'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Accounting Item id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $accountingItem = $this->getTableLocator()->get('AccountingItems')->get($id);
        if ($this->getTableLocator()->get('AccountingItems')->delete($accountingItem)) {
            $this->Flash->success(__('The accounting item has been deleted.'));
        } else {
            $this->Flash->error(__('The accounting item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
