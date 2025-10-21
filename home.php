<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Tajawal:wght@300;400;500;700;800&display=swap" rel="stylesheet">
</head>
<body dir="rtl">
    <div id="mother">
        <form method="post" action="">
            <aside>
                <div id="div">
                    <img src="s11728_indian_college_students_isolated_on_white_background_4761d705-a734-4f64-9f6b-f992619b5ed7_2-photoroom.png" 
                         alt="لوجو الموقع" width="200px">
                    <h3>لوحة المدير</h3>
                    
                    <label>اسم الطالب : </label><br>
                    <input type="text" name="name" id="name"><br>
                    <label>عنوان الطالب : </label><br>
                    <input type="text" name="address" id="address"><br><br>
                    <button type="submit" name="add">اضافة طالب</button><br>
                    <button type="submit" name="del">حذف طالب</button>
                </div>
            </aside>
            <main>
                <table id="tbl">
                    <tr>
                        <th>الرقم التسلسى</th>
                        <th>اسم الطالب</th>
                        <th>عنوان الطالب</th>
                    </tr>
                    <?php 
                    // عرض البيانات من قاعدة البيانات
                    while($row = mysqli_fetch_assoc($res)){
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['address']."</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </main>
        </form>
    </div>
</body>
</html>
