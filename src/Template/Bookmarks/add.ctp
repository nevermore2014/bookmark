<div class="bookmarks form large-9 medium-8 columns content">
    <?= $this->Form->create($bookmark) ?>
    <fieldset>
        <legend><?= __('Add Bookmark') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('description');
            echo $this->Form->input('url');
            echo $this->Form->input('tag_string', ['type' => 'text']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
