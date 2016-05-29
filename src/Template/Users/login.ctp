<!-- File: src/Template/Users/login.ctp -->
<div class="container">
    <div class="card card-container">        
        <h4 class="profile-name-card">Administración WebCM</h4>
        <?= $this->Flash->render() ?>
        <?= $this->Form->create(null, ["class" => "form-signin"]) ?>       
        <?= $this->Form->input('username', ['type' => 'text','label'=>'Usuario','required'=>"required"]) ?>       
        <?= $this->Form->input('password', ['type' => 'password','label'=>'Contraseña','required'=>"required"]) ?>   
        <?= $this->Form->button('Entrar', ['class' => 'btn btn-lg btn-primary btn-block btn-signin']) ?>       
        <?= $this->Form->end() ?>         
    </div>
</div>
