<style type="text/css">
	a,
	a:visited {
		color: #4183C4;
		text-decoration: none;
	}

	a:hover {
		text-decoration: underline;
	}

	pre,
	code {
		font-size: 12px;
	}

	pre {
		width: 100%;
		overflow: auto;
	}

	small {
		font-size: 90%;
	}

	small code {
		font-size: 11px;
	}

	.placeholder {
		outline: 1px dashed #4183C4;
	}

	.mjs-nestedSortable-error {
		background: #fbe3e4;
		border-color: transparent;
	}

	#tree {
		width: 550px;
		margin: 0;
	}

	ol {
		/* max-width: 450px; */
		padding-left: 25px;
	}

	ol.sortable,
	ol.sortable ol {
		list-style-type: none;
	}

	.sortable li div {
		border: 1px solid #d4d4d4;
		-webkit-border-radius: 3px;
		-moz-border-radius: 3px;
		border-radius: 3px;
		cursor: move;
		border-color: #D4D4D4 #D4D4D4 #BCBCBC;
		margin: 0;
		padding: 3px;
	}

	li.mjs-nestedSortable-collapsed.mjs-nestedSortable-hovering div {
		border-color: #999;
	}

	.disclose,
	.expandEditor {
		cursor: pointer;
		width: 20px;
		display: none;
	}

	.sortable li.mjs-nestedSortable-collapsed>ol {
		display: none;
	}

	.sortable li.mjs-nestedSortable-branch>div>.disclose {
		display: inline-block;
	}

	.sortable span.ui-icon {
		display: inline-block;
		margin: 0;
		padding: 0;
	}

	.menuDiv {
		background: #EBEBEB;
	}

	.menuEdit {
		background: #FFF;
	}

	.itemTitle {
		vertical-align: middle;
		cursor: pointer;
	}

	.deleteMenu {
		float: right;
		cursor: pointer;
	}

	/* h1 {
		font-size: 2em;
		margin-bottom: 0;
	}

	h2 {
		font-size: 1.2em;
		font-weight: 400;
		font-style: italic;
		margin-top: .2em;
		margin-bottom: 1.5em;
	} */
/* 
	h3 {
		font-size: 1em;
		margin: 1em 0 .3em;
	} */

	/* p,
	ol,
	ul,
	pre,
	form {
		margin-top: 0;
		margin-bottom: 1em;
	} */

	dl {
		margin: 0;
	}

	dd {
		margin: 0;
		padding: 0 0 0 1.5em;
	}

	code {
		background: #e5e5e5;
	}

	input {
		vertical-align: text-bottom;
	}

	.notice {
		color: #c33;
	}
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" />
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="./Asset/js/jquery.mjs.nestedSortable.js"></script>

<script>
	$(document).ready(function() {
		var ns = $('ol.sortable').nestedSortable({
			forcePlaceholderSize: true,
			handle: 'div',
			helper: 'clone',
			items: 'li',
			opacity: .6,
			placeholder: 'placeholder',
			revert: 250,
			tabSize: 25,
			tolerance: 'pointer',
			toleranceElement: 'div',
			//maxLevels: 4,
			isTree: true,
			expandOnHover: 700,
			startCollapsed: false,
			update: function() {
				// var items = $(this).find('li').attr('id');
				// alert(items);
				/*$.post( "test2.php", { name: "John", time: items })
				.done(function( data ) {
					alert( "Data Loaded: " + data );
				});*/
				//Boy = $('ol.sortable').nestedSortable('Boy');
				//$('#serializeOutput').text(Boy + '\n\n');

				list = $(this).nestedSortable('toArray', {
					startDepthCount: 0
				});
				$.post(
					'./Model/OrgHierarchy/updateOrgHierarchy.php', {
						update_sql: 'ok',
						list: list
					},
					function(data) {
						$("#serializeOutput").hide().html(data).fadeIn('slow')
						//alert(data);
					}
				);

			}
		});

		$('.expandEditor').attr('title', 'Click to show/hide item editor');
		$('.disclose').attr('title', 'Click to shoBoyw/hide children');
		$('.deleteMenu').attr('title', 'Click to delete item.');

		$('.disclose').on('click', function() {
			$(this).closest('li').toggleClass('mjs-nestedSortable-collapsed').toggleClass('mjs-nestedSortable-expanded');
			$(this).toggleClass('ui-icon-plusthick').toggleClass('ui-icon-minusthick');
		});

		$('.expandEditor, .itemTitle').click(function() {
			var id = $(this).attr('data-id');
			$('#menuEdit' + id).toggle();
			$(this).toggleClass('ui-icon-triangle-1-n').toggleClass('ui-icon-triangle-1-s');
		});

		$('.deleteMenu').click(function() {
			var id = $(this).attr('data-id');
			$('#menuItem_' + id).remove();
		});

		$('#serialize').click(function() {
			serialized = $('ol.sortable').nestedSortable('serialize');
			$('#serializeOutput').text(serialized + '\n\n');
		})

		$('#toHierarchy').click(function(e) {
			hiered = $('ol.sortable').nestedSortable('toHierarchy', {
				startDepthCount: 0
			});
			hiered = dump(hiered);
			(typeof($('#toHierarchyOutput')[0].textContent) != 'undefined') ?
			$('#toHierarchyOutput')[0].textContent = hiered: $('#toHierarchyOutput')[0].innerText = hiered;
		})

		$('#toArray').click(function(e) {
			arraied = $('ol.sortable').nestedSortable('toArray', {
				startDepthCount: 0
			});
			arraied = dump(arraied);
			(typeof($('#toArrayOutput')[0].textContent) != 'undefined') ?
			$('#toArrayOutput')[0].textContent = arraied: $('#toArrayOutput')[0].innerText = arraied;
		});
	});

	function dump(arr, level) {
		var dumped_text = "";
		if (!level) level = 0;

		//The padding given at the beginning of the line.
		var level_padding = "";
		for (var j = 0; j < level + 1; j++) level_padding += "    ";

		if (typeof(arr) == 'object') { //Array/Hashes/Objects
			for (var item in arr) {
				var value = arr[item];

				if (typeof(value) == 'object') { //If it is an array,
					dumped_text += level_padding + "'" + item + "' ...\n";
					dumped_text += dump(value, level + 1);
				} else {
					dumped_text += level_padding + "'" + item + "' => \"" + value + "\"\n";
				}
			}
		} else { //Strings/Chars/Numbers etc.
			dumped_text = "===>" + arr + "<===(" + typeof(arr) + ")";
		}
		return dumped_text;
	}


	$(function() {
		$('#add').on('click', function() {
			//alert($('#demo').find('li').first().html());
			var uname = $('#unitname').val();
			//alert(uname)
			if (uname != '') {
				var htmi = '<li class="mjs-nestedSortable-leaf" id="menuItem_1" style="display: list-item;"><div class="menuDiv"><span title="Click to show/hide children" class="disclose ui-icon ui-icon-minusthick"></span><span title="Click to show/hide item editor" class="expandEditor ui-icon ui-icon-triangle-1-n" data-id="7"></span><span><span class="itemTitle" data-id="7">f</span><span title="Click to delete item." class="deleteMenu ui-icon ui-icon-closethick" data-id="1"></span></span><div class="menuEdit hidden" id="menuEdit1">' + uname + '</div></div></li>';
				$('#demo ol:first').prepend(htmi);
			}
		})
	});
</script>



<?php
require_once './config.php';
$sql = " SELECT OrgStrucId, OrgLevelId, OrgPartId, OrgGroupTypeId, OrgTypeId, OrgStrucMain, OrgStrucSubMain, OrgStrucName, OrgStrucActive FROM OrgStruc; ";

$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);

$rows = sqlsrv_num_rows($query);

if ($rows > 0) {
	$category = array();
	while ($result = sqlsrv_fetch_array($query)) {
		$category['categories'][$result['OrgStrucId']] = $result;
		$category['parent_cats'][$result['OrgStrucMain']][] = $result['OrgStrucId'];
		?>

	<?php	}
}


// -------ถูกต้อง--------
function getCategories($parent, $category, $csui = true)
{ //
	$html = "";
	if (isset($category['parent_cats'][$parent])) {
		if ($csui == true) {
			$html .= '<ol class="sortable ui-sortable mjs-nestedSortable-branch mjs-nestedSortable-expanded" style="padding-left:0px;">';
		} else {
			$html .= '<ol>';
		}

		foreach ($category['parent_cats'][$parent] as $cat_id) {
			if (!isset($category['parent_cats'][$cat_id])) {
				$html .= " <li class='mjs-nestedSortable-leaf' id='menuItem_" . $cat_id . "'>";
				$html .= "<div class='menuDiv'>";
				$html .= '<input type="checkbox" name="valueHirarchy" value="' . $cat_id . '"' ;
					if(isset($_GET['OrgStrucMain'])&&($_GET['OrgStrucMain']==$cat_id)){
						$html .= 'checked';
					}
				$html .= '>';
				$html .= '<span data-id="' . $cat_id . '" class="itemTitle"></span>';
				$html .= "<a onclick='getData(" . $cat_id . ")'>". $category['categories'][$cat_id]['OrgStrucName'] . $cat_id . "</a>  ";
				$html .= "</div>";
				$html .= "</li> ";
			}
			if (isset($category['parent_cats'][$cat_id])) {
				$html .= "<li style='display: list-item;' class='mjs-nestedSortable-branch mjs-nestedSortable-expanded' id='menuItem_" . $cat_id . "'>";
				$html .= "<div class='menuDiv'> <input type='checkbox'  class='valueHirarchy' name='valueHirarchy' value='" . $cat_id . "'";
							if(isset($_GET['OrgStrucMain'])&&($_GET['OrgStrucMain']==$cat_id)){
								$html .= 'checked';
							}
				$html .= '>';
				$html .= "<a onclick='getData(" . $cat_id . ")'>" . $category['categories'][$cat_id]['OrgStrucName']."</a>";
				$html .= '<span data-id="' . $cat_id . '" class="itemTitle"></span>';
				$html .= "</div>";
				$html .= getCategories($cat_id, $category, $csui = false);
				$html .= "</li> ";
			}
		}
		$html .= "</ol>";
	}
	return $html;
}
// -------ถูกต้อง--------
?>
<section id="demo" class="text-left">

	<?php echo getCategories(0, $category);
	//echo  getCategories(0, 1);
	?>
</section>

<script>


	var valueHi = [];
	$.each($("input[name='valueHirarchy']:checked"), function() {
		valueHi.push($(this).val());
	});

		$(document).ready(function() {
		console.log("ready!");
	});

	function hirarchyValue(valueHi) {

		alert("valueHirarchy" + valueHi);
	}

	function getData(id){
		alert(id);
	}
</script>