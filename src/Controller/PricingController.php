<?php

namespace App\Controller;

class PricingController extends AppController
{
    public function index()
    {
        $accountingItems = $this->paginate($this->getTableLocator()->get('AccountingItems'));
        $accountingActivities = $this->paginate($this->getTableLocator()->get('AccountingActivities'));

        $this->set(compact('accountingItems'));
        $this->set(compact('accountingActivities'));

        $this->viewBuilder()->setLayout('cirrus');
    }
}
