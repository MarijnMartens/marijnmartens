<?php

echo '<div class="panel panel-default">';
echo '<div class="panel-heading">';
echo '<h3 class="panel-title">
    Projects
    </h3>
    </div>';
echo '<div class="panel-body">';
foreach ($data['projects'] as $project) {
    echo '<div class="alignment-left">' . $this->Html->link($project['Project']['title'], array('action' => 'read', $project['Project']['id'])) . '</div>';
}
echo '</div>';
echo '</div>';
echo '<ul class="pager">';
echo $this->Paginator->prev('← Previous', array('tag' => 'li', 'class' => 'previous'), null, array('tag' => 'li', 'disabledTag' => 'a', 'class' => 'previous disabled'));
echo $this->Paginator->next('Next →', array('tag' => 'li', 'class' => 'next'), null, array('tag' => 'li', 'disabledTag' => 'a', 'class' => 'next    disabled'));
echo '</ul>';
?>