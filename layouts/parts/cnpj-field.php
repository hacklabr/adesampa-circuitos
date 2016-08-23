<?php if($this->isEditable() || $entity->canUser('@control') && $entity->cnpj): ?>
    <p class="privado loja-cnpj"><span class="icon icon-private-info"></span><span class="label">CNPJ: </span><span class="js-editable js-editablemask" data-mask="99.999.999/9999-99" data-edit="cnpj" data-original-title="CNPJ" data-emptytext="Informe o CNPJ"><?php echo $entity->cnpj; ?></span></p>
<?php endif; ?>
