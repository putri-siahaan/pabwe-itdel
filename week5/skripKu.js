function validate(){
    let MyName = document.getElementById("myName").value;
    myName = "Nama Saya:" + MyName;
    document.getElementById("namasaya").innerHTML=myName;

    let MyPlace = document.getElementById("myPlace").value;
    myPlace = "Tempat Lahir Saya:" + MyPlace;
    document.getElementById("tempatlahirsaya").innerHTML=myPlace;

    let MyDate = document.getElementById("myDate").value;
    myDate = "Tanggal Lahir Saya:" + MyDate;
    document.getElementById("tanggallahirsaya").innerHTML=myDate;

    let MyGender = document.getElementById("myGender").value;
    myGender = "Jenis Kelamin Saya:" + MyGender;
    document.getElementById("jeniskelaminsaya").innerHTML=myGender;

    let MySchool = document.getElementById("mySchool").value;
    mySchool = "Pendidikan Terakhir Saya:" + MySchool;
    document.getElementById("pendidikanterakhirsaya").innerHTML=mySchool;

    if(MyName.length == 0) {
        alert("nama harus di isi");
        document.getElementById("myName").focus();
    }
    else
    if(MyName.length < 7) {
        alert("nama harus memiliki panjang minimal 7 karakter");
        document.getElementById("myName").focus();
    }
}



