<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Mailer\Mailer;
use Cake\Validation\Validator;

/**
 * Enquiries Controller
 *
 * @property \App\Model\Table\EnquiriesTable $Enquiries
 * @method \App\Model\Entity\Enquiry[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnquiriesController extends AppController
{
    // ...

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $enquiry = $this->Enquiries->newEmptyEntity();
        if ($this->request->is('post')) {
            $enquiry = $this->Enquiries->patchEntity($enquiry, $this->request->getData());

            // Validate the email address
            $validator = new Validator();
            $validator->email('email');
            $errors = $validator->errors(['email' => $enquiry->email]);

            if (empty($errors) && $this->Enquiries->save($enquiry)) {
                // Send email
                // ...

                $this->Flash->success(__('Your enquiry has been submitted successfully.'));
            } else {
                if (!empty($errors)) {
                    $this->Flash->error(__('The provided email is invalid. Please enter a valid email address.'));
                } else {
                    $this->Flash->error(__('The enquiry could not be saved. Please, try again.'));
                }
            }
        }
        $this->set(compact('enquiry'));
    }

    /**
     * Mark as sent method
     *
     * @param string|null $id Enquiry id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function mark($id = null)
    {
        $enquiry = $this->Enquiries->get($id);
        if ($enquiry->email_sent) {
            $this->Flash->error(__('This enquiry is already marked as sent.'));
        } else {
            $enquiry->email_sent = true;
            if ($this->Enquiries->save($enquiry)) {
                $this->Flash->success(__('The enquiry has been marked as sent.'));
            } else {
                $this->Flash->error(__('The enquiry could not be marked as sent. Please, try again.'));
            }
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Enquiry id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $enquiry = $this->Enquiries->get($id);
        if ($this->Enquiries->delete($enquiry)) {
            $this->Flash->success(__('The enquiry has been deleted.'));
        } else {
            $this->Flash->error(__('The enquiry could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function adminIndex()
    {
        $enquiries = $this->paginate($this->Enquiries);

        $this->set(compact('enquiries'));
    }

}
