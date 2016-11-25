<li>
    <a href="">
        <?= $item['name'] ?>
        <?php if (isset($item['childs'])) : ?>
            <span >
                <i class="glyphicon glyphicon-align-left"></i>
            </span>
        <?php endif; ?>
    </a>
    <?php if (isset($item['childs'])) : ?>
        <ul>
            <?= $this->getMenuHtml($item['childs']) ?>
        </ul>
    <?php endif; ?>
</li>