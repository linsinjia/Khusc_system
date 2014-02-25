<form id="form1" name="form1" method="post">
  <p>
    <label>
      <input type="radio" name="condition" value="0" id="condition_0" />
      第幾屆畢業生</label>
    <label>
      <input type="radio" name="condition" value="1" id="condition_1" />
      姓名</label>
    <label>
      <input type="radio" name="condition" value="2" id="condition_2" />
      學號</label>
    <label>
      <input type="radio" name="condition" value="3" id="condition_3" />
      專題老師</label>
    <label>
    關鍵字:
    <input type="text" name="conditiontext" id="conditiontext" value="<?php //echo $_POST ["conditiontext"] ;?>"/>
    <label for="conditiontext"></label>
    <input type="submit" name="submit1" id="submit1" value="送出" />
  </p>
</form>

<?php
if (isset($_POST ["conditiontext"])){
		$textbox = $_POST ["conditiontext"];
		$radiobox = $_POST ["condition"];
		if($radiobox=="0"){
			if($textbox!=null)
			foreach($list as $item):
			echo $item->stu_ID;
			endforeach;
		}
		if($radiobox=="1"){

		}
		if($radiobox=="2"){
						
		}
		if($radiobox=="3"){

		}
		
}
?>
