<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Word $word
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Word'), ['action' => 'edit', $word->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Word'), ['action' => 'delete', $word->id], ['confirm' => __('Are you sure you want to delete # {0}?', $word->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Words'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Word'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="words view content">
            <h3><?= h($word->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Spelling') ?></th>
                    <td><?= h($word->spelling) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($word->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($word->created) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Etymology') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($word->etymology)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Notes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($word->notes)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Dictionaries') ?></h4>
                <?php if (!empty($word->dictionaries)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Dictionary') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($word->dictionaries as $dictionaries) : ?>
                        <tr>
                            <td><?= h($dictionaries->id) ?></td>
                            <td><?= h($dictionaries->dictionary) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Dictionaries', 'action' => 'view', $dictionaries->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Dictionaries', 'action' => 'edit', $dictionaries->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Dictionaries', 'action' => 'delete', $dictionaries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dictionaries->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Origins') ?></h4>
                <?php if (!empty($word->origins)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Origin') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($word->origins as $origins) : ?>
                        <tr>
                            <td><?= h($origins->id) ?></td>
                            <td><?= h($origins->origin) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Origins', 'action' => 'view', $origins->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Origins', 'action' => 'edit', $origins->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Origins', 'action' => 'delete', $origins->id], ['confirm' => __('Are you sure you want to delete # {0}?', $origins->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Regions') ?></h4>
                <?php if (!empty($word->regions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Region') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($word->regions as $regions) : ?>
                        <tr>
                            <td><?= h($regions->id) ?></td>
                            <td><?= h($regions->region) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Regions', 'action' => 'view', $regions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Regions', 'action' => 'edit', $regions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Regions', 'action' => 'delete', $regions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $regions->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Types') ?></h4>
                <?php if (!empty($word->types)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Type') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($word->types as $types) : ?>
                        <tr>
                            <td><?= h($types->id) ?></td>
                            <td><?= h($types->type) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Types', 'action' => 'view', $types->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Types', 'action' => 'edit', $types->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Types', 'action' => 'delete', $types->id], ['confirm' => __('Are you sure you want to delete # {0}?', $types->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
