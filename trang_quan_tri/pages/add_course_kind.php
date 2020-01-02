
<!DOCTYPE html>
<html>
<head>
	<title>Học phí và lương</title>
	<link rel="stylesheet" type="text/css" href="add_class.css">
</head>
<body>
	<p style="margin-left: 680px;
    margin-top: 50px; font-size: 50px; color: red">Học phí và lương</p>
	<form action="xl_add_course_kind.php" method="post" style="margin-left: 500px;">
		<p>STT</p><input type="text" name="stt" class="indl">	
		<p>Mã khóa học</p><input type="text" name="ma_khoa" class="indl">	
		<p>Độ tuổi</p><input type="text" name="do_tuoi" class="indl">
		<p>Học phí</p> <input type="text" name="hoc_phi" class="indl">
		<p>Lương</p> <input type="text" name="luong" class="indl">
		<br>
		<input type="submit" value="Thêm" id="btnthem">
	</form>
</body>
</html>