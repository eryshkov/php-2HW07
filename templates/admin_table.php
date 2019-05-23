<?php
/**
 * @var \App\View $this
 */

foreach ($this->dataTableObj->getModels() as $model) {
    ?>
    <div class="row mb-1"><?php
    foreach ($this->dataTableObj->getFunctions() as $function) {
        ?>
        <div class="col-auto">
            <a class="btn btn-outline-info"
               href="/admin/article/<?php echo $row[0]; ?>/edit">✎</a>
        </div>
        <div class="col-auto">
            <a class="btn btn-outline-danger"
               href="/admin/article/<?php echo $row[0]; ?>/delete">X</a>
        </div>
        <div class="col">
            <a href="/article/<?php echo $row[0]; ?>"> <?php echo $row[1]; ?></a>
        </div>
        <?php
    }
    ?></div><?php
}

foreach ($this->dataTableArray as $row) {
    ?>
    <div class="row mb-1">
        <div class="col-auto">
            <a class="btn btn-outline-info"
               href="/admin/article/<?php echo $row[0]; ?>/edit">✎</a>
        </div>
        <div class="col-auto">
            <a class="btn btn-outline-danger"
               href="/admin/article/<?php echo $row[0]; ?>/delete">X</a>
        </div>
        <div class="col">
            <a href="/article/<?php echo $row[0]; ?>"> <?php echo $row[1]; ?></a>
        </div>
    </div>
    <?php
}
