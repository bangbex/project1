<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
 <div class="callout callout-danger error"  style="margin-bottom: 0!important;" onclick="this.classList.add('hidden')">
    <h4>Error!</h4>

    <p><?= $message ?></p>
 </div>