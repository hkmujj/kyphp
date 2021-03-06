<?php
use Ky\Model\Product;
use Ky\Core\Core\Db;
use Ky\Core\Core\Form;

Form::init();
$_POST['corpid'] = $_SESSION['id'];

$condition = array(
    'productName' => 'like',
    'corpid'      => 'eq',
);
$page = array(
    'url'           => 'index.php?p=www/member/product_list&page=',
    'curPage'       => $_POST['page'],
    'numPerPage'    => 12,
    'style'         => 'default',
);

$data = Product::lists('id,pic,productName,brief,ts,checked',$condition,$_POST,$page);
$row = null;
for($i=0,$len=count($data['data']); $i<$len; $i++){
    $row = $data['data'][$i];
?>



<div class="box">
	<div class="fang" style="width:150px;height:109px">
		<div class="picFit" style="width:150px;height:109px">
		<a href="index.php?p=pdetail&id=<?php echo $row['id']; ?>" target="_self"><img height="109px" src="<?php echo $row['pic']; ?>" width="150px" border="0"></a>
		</div>
	</div>
	<a href="index.php?p=pdetail&id=<?php echo $row['id']; ?>"  class="prodtitle"><?php echo $row['productName']; ?></a>
</div>

<?php
}
?>
