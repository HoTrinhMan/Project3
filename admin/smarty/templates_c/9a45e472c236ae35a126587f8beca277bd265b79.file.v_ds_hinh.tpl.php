<?php /* Smarty version Smarty-3.1.14, created on 2018-04-05 11:04:40
         compiled from "views\slider\v_ds_hinh.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48815ac20cf75e67a5-65111346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a45e472c236ae35a126587f8beca277bd265b79' => 
    array (
      0 => 'views\\slider\\v_ds_hinh.tpl',
      1 => 1522919077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48815ac20cf75e67a5-65111346',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ac20cf765ab80_53561741',
  'variables' => 
  array (
    'title' => 0,
    'm_common' => 0,
    'ds_hinh' => 0,
    'hinh' => 0,
    'lst' => 0,
    'm_slider' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac20cf765ab80_53561741')) {function content_5ac20cf765ab80_53561741($_smarty_tpl) {?>
<div class="content-box">
<!-- Start Content Box -->
    <div class="content-box-header">
      <h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
      
      <div style="clear:both"></div>
    </div>
    <!-- End .content-box-header -->
    
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
        
            <h3 style="color:#F00; text-align:center; padding:10px 0; text-indent:10px">
                  <?php if (isset($_SESSION['kq_xoa'])){?>
                  <p style="font-weight:bold; font-size:20px"><?php echo $_SESSION['kq_xoa'];?>
</p>
                  <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_sess('kq_xoa');?>

                   <?php }?>
              </h3>
              <h3 style="color:#00F; text-align:center; padding:10px 0; text-indent:10px">
                  <?php if (isset($_COOKIE['them_hinh_xong'])){?>
                  <?php echo $_COOKIE['them_hinh_xong'];?>

                  <?php echo $_smarty_tpl->tpl_vars['m_common']->value->del_cook('them_hinh_xong');?>

                   <?php }?>
              </h3>
            
            <?php if (count($_smarty_tpl->tpl_vars['ds_hinh']->value)>0){?>
            <p>Nh???ng h??nh ???nh c?? v??? tr?? 0 l?? nh???ng h??nh kh??ng hi???n th??? trong slider. H??nh ???nh trong slider c???n c?? t??? l??? khung h??nh b???ng nhau ????? slider ???????c ?????u</p>
    		<table id="bang">
              <thead>
                <tr>
                  <th><input class="check-all" type="checkbox" /></th>
                  <th>id</th>
                  <th>T??n h??nh</th>
                  <th>V??? tr??</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <?php  $_smarty_tpl->tpl_vars['hinh'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hinh']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_hinh']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hinh']->key => $_smarty_tpl->tpl_vars['hinh']->value){
$_smarty_tpl->tpl_vars['hinh']->_loop = true;
?>
                <tr class="">
                  <th><input value="<?php echo $_smarty_tpl->tpl_vars['hinh']->value->id;?>
" class="chon_xoa" type="checkbox" /></th>
                  <th><?php echo $_smarty_tpl->tpl_vars['hinh']->value->id;?>
</th>
                  <th><img  width="100px" src="<?php echo @constant('IMG');?>
/sliders/<?php echo $_smarty_tpl->tpl_vars['hinh']->value->hinh;?>
"/></th>
                  <th><?php echo $_smarty_tpl->tpl_vars['hinh']->value->vi_tri;?>
</th>
                  <th> <!-- Icons --> 
                    <a href="javascript:Hoi_xoa_hinh_sli(<?php echo $_smarty_tpl->tpl_vars['hinh']->value->id;?>
)" 
                    title="Delete"><img src="<?php echo @constant('IMG_AD');?>
/icons/cross.png" alt="Delete" /></a>
                    </th>
                </tr>
                <?php } ?>
                <tr>
                  <td colspan="5">
                      <div style="width:150px; margin:auto">
                          <input style="height:40px; cursor:pointer" onclick="xoa_nhieu_hinh_sli()"
                          type="button" name="btn_xoa_sp" class="btn_xoa_sp" value="X??a h??nh"/>
                        </div>
                    </td>
                </tr>
                <tr>
                  <td colspan="5"><div class="pages_list"><?php echo $_smarty_tpl->tpl_vars['lst']->value;?>
</div></td>
                </tr>
              </tbody>
            </table>
<script>
function Hoi_xoa_hinh_sli(id)
{
	if(confirm("B???n mu???n x??a h??nh n??y ?"))
	{
		window.location='xoa_hinh_slider.php?id='+id;	
	}	
}

function xoa_nhieu_hinh_sli(){
	var count_chon_xoa = $('.chon_xoa').filter(':checked').length;
	var mang_chon_xoa = [];
	
	for(var i = 0; i<count_chon_xoa; i++)
	{
		var val = $('.chon_xoa').filter(':checked').eq(i).val();
		mang_chon_xoa.push(val);
	}
	var id = mang_chon_xoa.join();
	if(id != '')
		Hoi_xoa_hinh_sli(id);
	else
		alert('H??y ch???n nh???ng h??nh c???n x??a');
}

$('.check-all').click(
	function(){
		$(this).parent().parent().parent().parent().find("input[type='checkbox']").attr('checked', $(this).is(':checked'));   
	}
);
</script>

            <?php }else{ ?>
            <h3 style="padding:20px 0">Kh??ng t??m th???y h??nh ???nh n??o</h3>
			<?php }?>
            <h3 style="text-align:center; padding:10px 0">Th??m h??nh v??o danh s??ch</h3>
            <form name="frm_them_hinh" method="post" enctype="multipart/form-data">
            
            <strong>Th??m h??nh: </strong><input type="file" name="hinh[]" value="" multiple="multiple"/><br />
            <p>(C?? th??? th??m nhi???u h??nh, ?????nh d???ng ph???i l?? jpg,jpeg,bmp,png ; k??ch th?????c kh??ng qu?? 4mb)</p>
            <strong>????a v??o slider: </strong><label>C?? <input type="radio" name="gt" value="1" checked="checked"/></label>
            <label>Kh??ng <input type="radio" name="gt" value="0"/></label>
            <p style="color:#F00; font-style:italic"><?php echo $_smarty_tpl->tpl_vars['m_slider']->value->loi_up_hinh;?>
</p>
            <div style="padding:10px 0"><input type="submit" name="btn_them_hinh" value="Th??m"/></div>
            </form>
         </div> <!-- End #tab1 -->
     </div> <!-- End .content-box-content -->
</div>
<?php }} ?>