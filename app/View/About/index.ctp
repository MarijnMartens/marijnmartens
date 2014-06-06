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
?>