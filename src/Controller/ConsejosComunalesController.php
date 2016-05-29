<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ConsejosComunales Controller
 *
 * @property \App\Model\Table\ConsejosComunalesTable $ConsejosComunales
 */
class ConsejosComunalesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $consejosComunales = $this->paginate($this->ConsejosComunales);

        $this->set(compact('consejosComunales'));
        $this->set('_serialize', ['consejosComunales']);
    }

    /**
     * View method
     *
     * @param string|null $id Consejos Comunale id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consejosComunale = $this->ConsejosComunales->get($id, [
            'contain' => []
        ]);

        $this->set('consejosComunale', $consejosComunale);
        $this->set('_serialize', ['consejosComunale']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $consejosComunale = $this->ConsejosComunales->newEntity();
        if ($this->request->is('post')) {
            $consejosComunale = $this->ConsejosComunales->patchEntity($consejosComunale, $this->request->data);
            if ($this->ConsejosComunales->save($consejosComunale)) {
                $this->Flash->success(__('El Consejo Comunal ha sido guardado.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El Consejo Comunal no pudo ser guardado. Por favor, Intente de nuevo.'));
            }
        }
        $this->set(compact('consejosComunale'));
        $this->set('_serialize', ['consejosComunale']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Consejos Comunale id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $consejosComunale = $this->ConsejosComunales->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consejosComunale = $this->ConsejosComunales->patchEntity($consejosComunale, $this->request->data);
            if ($this->ConsejosComunales->save($consejosComunale)) {
                $this->Flash->success(__('El Consejo Comunal ha sido guardado.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El Consejo Comunal no pudo ser guardado. Por favor, Intente de nuevo.'));
            }
        }
        $this->set(compact('consejosComunale'));
        $this->set('_serialize', ['consejosComunale']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Consejos Comunale id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consejosComunale = $this->ConsejosComunales->get($id);
        if ($this->ConsejosComunales->delete($consejosComunale)) {
            $this->Flash->success(__('El Consejo Comunal fue eliminado'));
        } else {
            $this->Flash->error(__('El Consejo Comunal no pudo ser eliminado. Por favor, Intente de nuevo.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
