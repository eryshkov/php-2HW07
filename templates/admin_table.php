<?php
/**
 * @var \App\View $this
 */

foreach ($this->dataTableObj->getModels() as $model) {
    ?>
    <div class="row mb-1">
    <div class="col-auto">
        <a class="btn btn-outline-info"
           href="/admin/article/<?php echo $model->id; ?>/edit">✎</a>
    </div>
    <div class="col-auto">
        <a class="btn btn-outline-danger"
           href="/admin/article/<?php echo $model->id; ?>/delete">X</a>
    </div>
    <?php
    foreach ($this->dataTableObj->getFunctions() as $function) {
        ?>
        <div class="col">
            <p> <?php echo $function($model); ?></p>
        </div>
        <?php
    }
    ?></div><?php
}
