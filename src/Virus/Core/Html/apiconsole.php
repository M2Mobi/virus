<div class="methods">
<div class="logo"><img src="<?= $this->statics('images/platforms/' . $this->response->get_response_data('platform') . '_small.png'); ?>"></div>
<?php foreach ($this->response->get_response_data('methods') as $method): ?>
<div class="method" id="<?= $method ?>"><?= $method ?></div>
<?php endforeach; ?>
</div>

<div class="params">
<form action="<?= $this->base_url() . $this->response->get_response_data('platform') . '/'; ?>" id="api_request">
<?php foreach ($this->response->get_response_data('parameters') as $key => $param): ?>
<input type="text" name="<?= $key ?>" placeholder="<?= $param['title'] ?>" value="" class="<?= implode(' ', $param['methods']); ?>">
<?php endforeach ?>
<input type="hidden" id="method" value="">
<input type="submit" value="Make Request">
</form>
</div>

<div class="output">
<table class="json_display_table">
<colgroup>
  <col width="20%">
  <col width="80%">
</colgroup>
<tbody id="json_display">
<?php
    $output = $this->response->get_response_data('output');
    $output = ($output !== NULL) ? $output : [];

    foreach ($output as $key => $value):
?>
        <tr>
            <td class='json json_key'><?= $key ?>:</td>
            <td class='json' id='json_display_<?= $key ?>'><?= $value ?></td>
        </tr>
<?php
    endforeach;
?>
<tbody>
</table>
</div>

<script src="<?= $this->statics('js/jquery.min.js'); ?>"></script>
<script src="<?= $this->statics('js/jquery.transit.min.js'); ?>"></script>
<script src="<?= $this->statics('js/apiconsole.js'); ?>"></script>
