<div class="col-md-6">
    <h2 class="font-bold">Welcome to LearJet</h2>
    <p>Please login to Continue!</p>
</div>
<div class="col-md-6">
    <div class="ibox-content">
        <?= $this->Flash->render('auth') ?>
        <?= $this->Flash->render() ?>
        <?= $this->Form->create(null, ['class' => 'm-t', 'role' => 'form',
           'templates' => ['inputContainer' => '{{content}}', 'label' => '']])?>
        <div class="form-group">
            <?= $this->Form->input('username', ['class' => 'form-control',
                'placeholder' => 'username', 'required' => true]) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->input('password', ['placeholder' => 'password', 
                'required' => true, 'class' => 'form-control',]) ?>
        </div>
        <?= $this->Form->button(__('Login'), ['class' => 'btn btn-primary block full-width m-b']); ?>
        <?= $this->Form->end() ?>
    </div>
</div>
