<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>jadi gini</h1>
            <p><img src="<?= base_url() ?>public/icon/istanbul.png">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ducimus alias dolor accusamus dolore id quas provident necessitatibus asperiores, voluptate, odit dignissimos. Molestiae quis, obcaecati distinctio accusamus nemo in autem?</p>

            <?php
            // d($tes);
            ?>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>