	<div class='col-md-12'>
	<?
		if($q=$this->db->select("item_number,description,category,
			item_picture,retail")->limit(120)->order_by("sales_count desc")
			->get("inventory")){
			foreach($q->result() as $item){
				echo "<div onclick='view_item(\"$item->item_number\");return false;' 
				class='box_item col-lg-2 col-xs-5 ' align='center'>";
	?>
				<div class='foto'>
					<img  src='<?=load_picture($item->item_picture)?>'>
				</div>
				<div class='content'><?=$item->description?></div>
				<div class='item-footer'>
					<div class='item_no'><?=$item->item_number?></div>
					<div class='price'>Rp. <?=number_format($item->retail)?></div>
				</div>
	<?
				echo "</div>";
			}
		}
	?>
	</div>
 
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/eshop/eshop.css">
<script language="javascript">
function view_item(id){
	var url="<?=base_url()?>index.php/eshop/item/view/"+id;
	window.open(url,"_self");
}
</script>
