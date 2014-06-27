<?php
foreach ($data['posts'] as $post) {
    echo '<div class="panel panel-default">';
    echo '<div class="panel-heading">';
    echo '<h3 class="panel-title">
    <div class="alignment-left">' . $post['Post']['title'] . '</div>
    <div class="text-right">' . date('l, j F Y', strtotime($post['Post']['created'])) . '</div>
    </h3>
    </div>';
    echo '<div class="panel-body">' . nl2br($post['Post']['body']) . '</div></div>';
}
echo '<ul class="pager">';
echo $this->Paginator->prev('← Previous', array('tag' => 'li', 'class' => 'previous'), null, array('tag' => 'li', 'disabledTag' => 'a', 'class' => 'previous disabled'));
echo $this->Paginator->next('Next →', array('tag' => 'li', 'class' => 'next'), null, array('tag' => 'li', 'disabledTag' => 'a', 'class' => 'next    disabled'));
echo '</ul>';
?>