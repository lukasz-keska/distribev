<tr>
    <td>
        <span class="top"><?php echo $data->name; ?>
            <?php if($data->photo): ?>
            <a href="<?php echo $data->photo; ?>" class="fancybox">
                <img src="<?php echo bu('gfx/camera.png'); ?>" alt="show">
            </a>
        <?php endif; ?>
        </span>
        <span class="bottom"><?php echo $data->country; ?> </span>
    </td>
    <td>
        <span class="top"><?php echo $data->producer; ?> </span>
        <span class="bottom"><?php echo $data->group; ?> </span>
    </td>
    <td>
        <span class="top"><?php echo $data->barcode; ?> </span>
        <span class="bottom"><?php echo $data->alcohol; ?> </span>
    </td>
</tr>