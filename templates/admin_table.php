<?php
/**
 * @var \App\View $this
 */

$dataTableArray = $this->dataTableArray;

foreach ($dataTableArray as $row) {
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
