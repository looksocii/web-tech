function validateForm() {
    var num = 0;
    var txt = "";

    let idNumber = document.forms["myForm"]["IDNumber"].value;
    if (idNumber.length != 13) {
        txt += "กรุณากรอกหมายเลขบัตรประชาชนให้ครบ 13 หลัก\n";
        num += 1;
    }

    let idStudent = document.forms["myForm"]["IDStudent"].value;
    if (idStudent.length != 8) {
        txt += "กรุณากรอกเลขรหัสนักศึกษาให้ครบ 8 หลัก\n";
        num += 1;
    }

    let first = document.forms["myForm"]["First"].value;
    if (first == "xxx") {
        txt += "กรุณาเลือกคำนำหน้า\n";
        num += 1;
    }

    let firstName = document.forms["myForm"]["FirstName"].value;
    if (firstName.length < 2 || firstName.length > 20) {
        txt += "กรุณากรอกชื่อให้มีความยาวระหว่าง 2-20 ตัวอักษร\n";
        num += 1;
    }

    let lastName = document.forms["myForm"]["LastName"].value;
    if (lastName.length < 2 || lastName.length > 30) {
        txt += "กรุณากรอกนามสกุลให้มีความยาวระหว่าง 2-30 ตัวอักษร\n";
        num += 1;
    }

    let address = document.forms["myForm"]["Address"].value;
    let addre = document.forms["myForm"]["Addre"].value;
    if (address.length <= 5 || addre.length <= 5) {
        txt += "กรุณากรอกที่อยู่ให้มีความยาวมากกว่า 5 ตัวอักษร\n";
        num += 1;
    }

    let add = document.forms["myForm"]["Add"].value;
    if (add.length < 2) {
        txt += "กรุณากรอกตำบล/แขวงให้มีความยาวมากกว่า 2 ตัวอักษรขึ้นไป\n";
        num += 1;
    }

    let ad = document.forms["myForm"]["Ad"].value;
    if (ad.length == 0) {
        txt += "กรุณากรอกอำเภอ/เขตด้วยตัวอังกษร\n";
        num += 1;
    }

    let province = document.forms["myForm"]["province"].value;
    if (province == "fff") {
        txt += "กรุณาเลือกจังหวัด\n";
        num += 1;
    }

    let post = document.forms["myForm"]["post"].value;
    if (post.length != 5) {
        txt += "กรุณากรอกรหัสไปรษณีย์ให้ครบ 5 หลัก\n";
        num += 1;
    }

    let tol = document.forms["myForm"]["tol"].value;
    if (tol.length < 9 || tol.length > 10) {
        txt += "กรุณากรอกเบอร์โทรศัพท์ให้ครบ 9-10 หลัก\n";
        num += 1;
    }

    if (num != 0){
        alert(txt);
        return false;
    }
    else{
        alert("Welcome! "+firstName+" "+lastName);
        return false;
    }
}
