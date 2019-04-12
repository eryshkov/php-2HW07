<?php
/**
 * @var \App\View $this
 */

$dataTable = $this->dataTable->elements();

while ($dataTable->valid()) {
    ?>
    <div class="row mb-1">
        <div class="col-auto">
            <a class="btn btn-outline-info"
               href="/admin/article/edit/<?php echo $dataTable->current(); ?>">✎</a>
        </div>
        <div class="col-auto">
            <a class="btn btn-outline-danger"
               href="/admin/article/delete/<?php echo $dataTable->current(); ?>">X</a>
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
