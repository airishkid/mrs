<h2><?php echo __('Plan'); ?></h2>
<dl>
    <dt><?php echo __('Id'); ?></dt>
    <dd>
        <?php echo h($plan['Plan']['id']); ?>
        &nbsp;
    </dd>
    <dt><?php echo __('Weight'); ?></dt>
    <dd>
        <?php echo h($plan['Plan']['diet']); ?>
        &nbsp;
    </dd>
    <dt><?php echo __('Patient'); ?></dt>
    <dd>
        <?php echo $this->Html->link($plan['Patient']['id'], array('controller' => 'patients', 'action' => 'view', $plan['Patient']['id'])); ?>
        &nbsp;
    </dd>
</dl>
