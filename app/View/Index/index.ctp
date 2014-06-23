<?php
foreach ($data['posts'] as $post) {
    echo '<div class="panel panel-default">';
    echo '<div class="panel-heading">';
    echo '<h3 class="panel-title">
    <div class="alignment-left">' . $post['Page']['title'] . '</div>
    <div class="text-right">' . date('l, j F Y', strtotime($post['Page']['created'])) . '</div>
    </h3>
    </div>';
    echo '<div class="panel-body">' . nl2br($post['Page']['text']) . '</div></div>';
}