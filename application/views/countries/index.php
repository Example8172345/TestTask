<div class="container">
    <div class="row">
        <h1>Список стран</h1>
    </div>
    <div class="row">
        <ul id="country-list" class="list-group">
            <?php foreach ($data as $countries): ?>
                <li class="list-group-item"><?php echo $countries['country']; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="row">
        <div class="form-group">
            <form action="" method="post" id="country-form" class="form-inline">
                <input type="text" name="country" id="country-input" class="form-control">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
</div>
<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/adding-country.js"></script>