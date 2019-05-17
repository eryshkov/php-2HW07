<?php
/**
 * @var \App\View $this
 */

$dataTable = $this->dataTableObj->elements();

while ($dataTable->valid()) {
    ?>
    <div class="row mb-1">
        <div class="col-auto">
            <a class="btn btn-outline-info"
               href="/admin/article/<?php echo $dataTable->current(); ?>/edit">✎</a>
        </div>
        <div class="col-auto">
            <a class="btn btn-outline-danger"
               href="/admin/article/<?php echo $dataTable->current(); ?>/delete">X</a>
        </div>
        <div class="col">
            <a href="/article/<?php echo $dataTable->current(); ?>">
                <?php $dataTable->next();
                echo $dataTable->current();
                $dataTable->next(); ?>
            </a>
        </div>
    </div>
    <?php
}
?>
