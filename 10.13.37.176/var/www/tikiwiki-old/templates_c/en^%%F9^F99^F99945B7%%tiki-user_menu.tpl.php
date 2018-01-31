<?php /* Smarty version 2.6.18, created on 2010-04-16 02:38:07
         compiled from tiki-user_menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'tiki-user_menu.tpl', 6, false),array('modifier', 'escape', 'tiki-user_menu.tpl', 38, false),array('block', 'tr', 'tiki-user_menu.tpl', 38, false),)), $this); ?>

<?php $this->assign('opensec', '0'); ?>
<?php $this->assign('sep', ''); ?>

<?php $_from = $this->_tpl_vars['channels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pos'] => $this->_tpl_vars['chdata']):
?>
<?php $this->assign('cname', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['menu_info']['menuId'])) ? $this->_run_mod_handler('cat', true, $_tmp, '__') : smarty_modifier_cat($_tmp, '__')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['chdata']['position']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['chdata']['position']))); ?>


<?php if ($this->_tpl_vars['chdata']['type'] != 'o' && $this->_tpl_vars['chdata']['type'] != '-'): ?>

<?php if ($this->_tpl_vars['opensec'] > 0): ?>
<?php $this->assign('sectionType', $this->_tpl_vars['chdata']['type']); ?>
<?php 
global $smarty;
$opensec = $smarty->get_template_vars('opensec');
$sectionType= $smarty->get_template_vars('sectionType');
if ($sectionType == 's' or $sectionType == 'r') {
	$sectionType = 0;
}
while ($opensec > $sectionType) {
	--$opensec;
	echo '</div>';
}
$smarty->assign('opensec', $opensec);
 ?>
<?php endif; ?>

<div class="separator<?php echo $this->_tpl_vars['sep']; ?>
">
<?php if ($this->_tpl_vars['sep'] == 'line'): ?><?php $this->assign('sep', ''); ?><?php endif; ?>
<?php if ($this->_tpl_vars['menu_info']['type'] == 'e' || $this->_tpl_vars['menu_info']['type'] == 'd'): ?>
	<?php if ($this->_tpl_vars['feature_menusfolderstyle'] == 'y'): ?>
	<a class='separator' href="#" onclick="javascript:icntoggle('menu<?php echo $this->_tpl_vars['cname']; ?>
'); return false" title="Toggle options"><img src="img/icons/<?php if ($this->_tpl_vars['menu_info']['type'] != 'd'): ?>o<?php endif; ?>fo.gif" border="0" name="menu<?php echo $this->_tpl_vars['cname']; ?>
icn" alt='Toggle'/></a>
	<?php else: ?>
	<a class='separator' href="#" onclick="javascript:toggle('menu<?php echo $this->_tpl_vars['cname']; ?>
'); return false">[-]</a>
	<?php endif; ?>
<?php endif; ?> 
<?php if ($this->_tpl_vars['chdata']['url']): ?>
<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['chdata']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="separator"><?php $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;smarty_block_tr($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $this->_tpl_vars['chdata']['name']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_tr($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
<?php else: ?>
<a class='separator' href="#" onclick="javascript:icntoggle('menu<?php echo $this->_tpl_vars['cname']; ?>
'); return false"><?php $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;smarty_block_tr($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $this->_tpl_vars['chdata']['name']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_tr($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
<?php endif; ?>
<?php if (( $this->_tpl_vars['menu_info']['type'] == 'e' || $this->_tpl_vars['menu_info']['type'] == 'd' ) && $this->_tpl_vars['feature_menusfolderstyle'] != 'y'): ?><a class='separator' href="#" onclick="javascript:toggle('menu<?php echo $this->_tpl_vars['cname']; ?>
'); return false">[+]</a><?php endif; ?> 
</div> 

<?php $this->assign('opensec', $this->_tpl_vars['opensec']+1); ?>
<?php if ($this->_tpl_vars['menu_info']['type'] == 'e' || $this->_tpl_vars['menu_info']['type'] == 'd'): ?>
<div class="menuSection" <?php if ($this->_tpl_vars['menu_info']['type'] == 'd' && $_COOKIE['menu'] != ''): ?>style="display:none;"<?php else: ?>style="display:block;"<?php endif; ?> id='menu<?php echo $this->_tpl_vars['cname']; ?>
'>
<?php else: ?>
<div class="menuSection">
<?php endif; ?>


<?php elseif ($this->_tpl_vars['chdata']['type'] == 'o'): ?>
<div class="option<?php echo $this->_tpl_vars['sep']; ?>
"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['chdata']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="linkmenu"><?php $this->_tag_stack[] = array('tr', array()); $_block_repeat=true;smarty_block_tr($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $this->_tpl_vars['chdata']['name']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_tr($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></div>
<?php if ($this->_tpl_vars['sep'] == 'line'): ?><?php $this->assign('sep', ''); ?><?php endif; ?>


<?php elseif ($this->_tpl_vars['chdata']['type'] == '-'): ?>
<?php if ($this->_tpl_vars['opensec'] > 0): ?></div><?php $this->assign('opensec', $this->_tpl_vars['opensec']-1); ?><?php endif; ?>
<?php $this->assign('sep', 'line'); ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

<?php if ($this->_tpl_vars['opensec'] > 0): ?>
<?php 
global $smarty;
$opensec = $smarty->get_template_vars('opensec');
while ($opensec) {
	--$opensec;
	echo '</div>';
}
 ?>
<?php endif; ?>


<?php if ($this->_tpl_vars['menu_info']['type'] == 'e' || $this->_tpl_vars['menu_info']['type'] == 'd'): ?>
<script type='text/javascript'>
<?php $_from = $this->_tpl_vars['channels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pos'] => $this->_tpl_vars['chdata']):
?>
<?php if ($this->_tpl_vars['chdata']['type'] != 'o' && $this->_tpl_vars['chdata']['type'] != '-'): ?>
  <?php if ($this->_tpl_vars['feature_menusfolderstyle'] == 'y'): ?>
    setfolderstate('menu<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['menu_info']['menuId'])) ? $this->_run_mod_handler('cat', true, $_tmp, '__') : smarty_modifier_cat($_tmp, '__')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['chdata']['position']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['chdata']['position'])); ?>
', '<?php echo $this->_tpl_vars['menu_info']['type']; ?>
');
  <?php else: ?>
    setsectionstate('menu<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['menu_info']['menuId'])) ? $this->_run_mod_handler('cat', true, $_tmp, '__') : smarty_modifier_cat($_tmp, '__')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['chdata']['position']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['chdata']['position'])); ?>
', '<?php echo $this->_tpl_vars['menu_info']['type']; ?>
');
  <?php endif; ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</script>
<?php endif; ?>
