<?php
foreach ($data['posts'] as $row) {
    echo '<div class="panel panel-default">';
    echo '<div class="panel-heading">';
    echo '<h3 class="panel-title">
    <div class="alignment-left">' . $row['Post']['title'] . '</div>
    <div class="text-right">' . date('l, j F Y', strtotime($row['Post']['date'])) . '</div>
    </h3>
    </div>';
    echo '<div class="panel-body">' . nl2br($row['Post']['text']) . '</div></div>';
}
echo '<ul class="pager">';
echo $this->Paginator->prev('← Previous', array('tag' => 'li', 'class' => 'previous'), null, array('tag' => 'li', 'disabledTag' => 'a', 'class' => 'previous disabled'));
echo $this->Paginator->next('Next →', array('tag' => 'li', 'class' => 'next'), null, array('tag' => 'li', 'disabledTag' => 'a', 'class' => 'next    disabled'));
echo '</ul>';
?>