<?php
    include('head.php');
?>
<section class="del_record_s" id="rec">
    <h1>admin</h1>
    <div class="container-md">
        <div class="alert alert-warning">
            <form method="POST" action="admin.php">
                <input class="form-control col-5" required type="number" min="2" max="10" placeholder="Название опроса" name="pp5">
                <input class="form-control col-5" required type="number" min="3" max="10" placeholder="Название опроса" name="pp6">
                <input type="submit" value="отправить">
            </form>
            
        </div>
    </div>
</section>
<?php
    include('foot.php');
?>