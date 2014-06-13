<div class="panel panel-default">
    <div class="panel-heading"></div>
    <div class="panel-body">
        <?php
        echo $this->Form->create(null, array('url' => array('controller' => 'contact',
            'action' => 'add')));
        echo $this->Form->input(null, array('label' => false, 'name' => 'name', 'id' => 'name', 'class' => 'form-control', 'placeholder' => 'First & Last Name'));
        echo $this->Form->input(null, array('label' => false, 'name' => 'email1', 'id' => 'email1', 'class' => 'form-control', 'placeholder' => 'Email Address'));
        echo $this->Form->input(null, array('label' => false, 'name' => 'email2', 'id' => 'email2', 'class' => 'form-control', 'placeholder' => 'Repeat Email Address'));
        echo $this->Form->input(null, array('label' => false, 'name' => 'message', 'id' => 'message', 'rows' => '5', 'class' => 'form-control', 'placeholder' => 'Your message..'));
        echo $this->Form->end(array('label' => 'Send',
            'class' => 'btn btn-primary btn-lg btn-block'));
        ?>
    </div>
</div>