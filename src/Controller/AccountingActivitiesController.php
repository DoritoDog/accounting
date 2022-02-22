<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AccountingActivities Controller
 *
 * @property \App\Model\Table\AccountingActivitiesTable $AccountingActivities
 * @method \App\Model\Entity\AccountingActivity[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AccountingActivitiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $accountingActivities = $this->paginate($this->getTableLocator()->get('AccountingActivities'));

        $this->set(compact('accountingActivities'));
    }

    /**
     * View method
     *
     * @param string|null $id Accounting Activity id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accountingActivity = $this->getTableLocator()->get('AccountingActivities')->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('accountingActivity'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $accountingActivity = $this->getTableLocator()->get('AccountingActivities')->newEmptyEntity();
        if ($this->request->is('post')) {
            $accountingActivity = $this->getTableLocator()->get('AccountingActivities')->patchEntity($accountingActivity, $this->request->getData());
            if ($this->getTableLocator()->get('AccountingActivities')->save($accountingActivity)) {
                $this->Flash->success(__('The accounting activity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The accounting activity could not be saved. Please, try again.'));
        }
        $this->set(compact('accountingActivity'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Accounting Activity id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $accountingActivity = $this->getTableLocator()->get('AccountingActivities')->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accountingActivity = $this->getTableLocator()->get('AccountingActivities')->patchEntity($accountingActivity, $this->request->getData());
            if ($this->getTableLocator()->get('AccountingActivities')->save($accountingActivity)) {
                $this->Flash->success(__('The accounting activity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The accounting activity could not be saved. Please, try again.'));
        }
        $this->set(compact('accountingActivity'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Accounting Activity id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $accountingActivity = $this->getTableLocator()->get('AccountingActivities')->get($id);
        if ($this->getTableLocator()->get('AccountingActivities')->delete($accountingActivity)) {
            $this->Flash->success(__('The accounting activity has been deleted.'));
        } else {
            $this->Flash->error(__('The accounting activity could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
