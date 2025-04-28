<?php /*%%SmartyHeaderCode:651305568680fdb2ad736b3-14833227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74c379b51d1205417a9a80b460197f9639320f9c' => 
    array (
      0 => '/var/www/html/modules/blocksearch/blocksearch-top.tpl',
      1 => 1745867777,
      2 => 'file',
    ),
    '8dce1b91333dd38b01cc5df3af095d20fff9aa2e' => 
    array (
      0 => '/var/www/html/modules/blocksearch/blocksearch-instantsearch.tpl',
      1 => 1745867777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '651305568680fdb2ad736b3-14833227',
  'variables' => 
  array (
    'hook_mobile' => 0,
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_680fdb2b168cc4_78103288',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_680fdb2b168cc4_78103288')) {function content_680fdb2b168cc4_78103288($_smarty_tpl) {?><!-- block seach mobile -->
<!-- Block search module TOP -->
<div id="search_block_top">
	<form method="get" action="http://localhost:8080/index.php?controller=search" id="searchbox">
		<p>
			<label for="search_query_top"><!-- image on background --></label>
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query" type="text" id="search_query_top" name="search_query" value="" />
			<input type="submit" name="submit_search" value="Search" class="button" />
		</p>
	</form>
</div>
	<script type="text/javascript">
	// <![CDATA[
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					'http://localhost:8080/index.php?controller=search', {
						minChars: 3,
						max: 10,
						width: 500,
						selectFirst: false,
						scroll: false,
						dataType: "json",
						formatItem: function(data, i, max, value, term) {
							return value;
						},
						parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname };
							return mytab;
						},
						extraParams: {
							ajaxSearch: 1,
							id_lang: 1
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
				})
		});
	// ]]>
	</script>

<!-- /Block search module TOP -->
<?php }} ?>