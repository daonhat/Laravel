<!--<form action = "--><?php //Asset('q&a/database');?><!--" method = "post">-->
<!--    Nhập câu hỏi hoặc câu trả lời <input type ='text' name ='qora'/><br/>-->
<!--    <input type ='submit' value ='Thêm vào câu hỏi' name = 'themcauhoi' / >-->
<!--    <input type ='submit' value ='Thêm vào câu trả lời' name = 'themcautraloi' /><br/>-->
<!--    <input type ='submit' value ='Xóa random câu hỏi' name = 'xoacauhoi' /><br/>-->
<!--    <input type ='submit' value ='Xóa random câu trả lời' name = 'xoacautraloi' /><br/>-->
<!---->
<!--</form>-->

<form action = "<?php url('akira.com/public/database?addq'); ?>" method ="post" name ="addq" >
    Nhập câu hỏi hoặc câu trả lời ở đây
     <input type ='text' name ='qora'/><br/>
    <input type = 'submit' value = 'Thêm câu hỏi'>
</form>

<form action = "<?php Asset('database/adda'); ?>" method ="post" name = "adda" >
    <input type = 'submit' value = 'Thêm câu trả lời'>
</form>