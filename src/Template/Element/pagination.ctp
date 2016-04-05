<?php if ($this->Paginator->hasPage(null,2)) : ?> 
<div class="paginator clearfix text-center">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
    </div>
<?php endif; ?>