<form action="process.php" method="POST">

學員姓名<font color="red">*</font>:<input type="text" placeholder="your name" name="sName" value="" required><br/><br/>

性別:
男<input type="radio" name="sGender" value="m" >
女<input type="radio" name="sGender" value="f" checked ><br/><br/>

最期待的實驗:
<input type="checkbox" name="sExp[]" value="color">紫高麗菜變色
<input type="checkbox" name="sExp[]" value="volcano">安全火山爆發
<input type="checkbox" name="sExp[]" value="slime">夜光史萊姆<br/><br/>

報名梯次<font color="red">*</font>:<select name="sSession">
<option value="1">第一梯次 (7/06 - 7/10)</option>
<option value="2">第二梯次 (7/13 - 7/17)</option>
</select><br/><br/>

居住地<font color="red">*</font>:<select name="sCity" required>
<option value="" disabled selected>請選擇</option>
<option value="Taipei">台北</option>
<option value="NewTaipei">新北</option>
<option value="Keeiung">基隆</option>
<option value="Yilan">宜蘭</option>
<option value="Taoyuan">桃園</option>
<option value="Hsinchu">新竹</option>
<option value="Miaoli">苗栗</option>
<option value="Taichung">台中</option>
<option value="Changhua">彰化</option>
<option value="Yunlin">雲林</option>
<option value="Nantou">南投</option>
<option value="Chiayi">嘉義</option>
<option value="Tainan">台南</option>
<option value="Kaohsiung">高雄</option>
<option value="Pingtung">屏東</option>
<option value="Hualien">花蓮</option>
<option value="Taitung">台東</option>
</select><br/><br/>

出生年月日<font color="red">*</font>:<input type="date" name="sDate" value="2012-01-01" required><br/><br/>

身分證字號<font color="red">*</font>:<input type="text" name="sId" placeholder="例如: E123456789" required><br/><br/>

選擇喜歡的顏色:<select name="scolor">
<option value="1">紅</option>
<option value="2">橙</option>
<option value="3">黃</option>
<option value="4">綠</option>
<option value="5">藍</option>
<option value="6">紫</option>
<option value="7">白</option>
<option value="8">黑</option>
<option value="9">灰</option>
<option value="10">粉紅</option>
</select><br/><br/>

對科學的熱愛程度:<input type="range" name="sRange" value="50"><br/><br/>

隨行家長人數:<input type="number" name="sNumber" value="1"><br/><br/>

緊急聯絡人姓名<font color="red">*</font>:<input type="text" name="eName" placeholder="請輸入聯絡人姓名" required><br/><br/>

緊急聯絡人電話<font color="red">*</font>:<input type="tel" name="ePhone" placeholder="例如: 0912345678" required><br/><br/>

家長電子信箱:<input type="email" name="sEmail" value="@gmail.com"><br/><br/>

<input type="hidden" name="sCampCode" value="CHEM2026"><br/><br/>

特殊健康狀況:<br/><br/>
<textarea name="comment" rows="5" cols="60">
若無，請填寫「無」
</textarea><br/><br/>

<input type="submit" value="送出報名"><input type="reset" value="重新填寫">

</form>