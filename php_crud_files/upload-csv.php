<?php
require 'header.php';?>
<div class="container">
    <div class=" card mt-5">
        <div class="card-header">
            <h2>Upload file</h2>
            </div>
            <div class="card-body">
                <?php if(!empty($message)):?>
                    <div class="alter alter-success">
                        <?= $message;?>
                    </div>
                    <?php endif;?>
                    <form method="post" action="import.php" name="upload_excel" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Upload excel file</label>
                                <input type="file" name="file">
                        </div>
                        <div class="form-group">
                            <button type="submit" id="dubmit" name="import" class="btn btn-primary button-loading"
                            data-loading-text="loading...">Upload</button>
                        </div>
                    </form> 
        </div>
    </div>
</div>