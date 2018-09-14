<ul class="nav" id="side-menu">
    <?php foreach ($menu as $route => $item) {
        $active = (\codingninjas\App::get($item, 'active')) ? 'active' : '';
        $icon = \codingninjas\App::get($item, 'icon');
        $icon = ($icon) ? '<i class="fa '.$icon.' fa-fw"></i> ' : '';
        $title = \codingninjas\App::get($item, 'title');
        $toggle= \codingninjas\App::get($item, 'toggle');
        $target= \codingninjas\App::get($item, 'target');
        ?>
    <li>
        <a class="<?php echo $active; ?>" href="<?php echo $route; ?>" data-toggle="<?php echo $toggle; ?>" data-target="<?php echo $target; ?>"><?php echo $icon; ?><?php echo $title; ?></a>
    </li>
    <?php } ?>
</ul>