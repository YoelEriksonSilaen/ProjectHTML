let error = document.querySelectorAll("span");
let Submit = document.getElementById("btn-submit");



function validate()
{
   
    let name = document.getElementById('nama').value;
    let username = document.getElementById('Uname').value;
    let password = document.getElementById('pass').value;
    let email = document.getElementById('email').value;
    let genderM = document.getElementById('male').value;
    let genderF = document.getElementById('female').value;    
    
    

    if(name.length < 5 || name.length > 15)
    {
        error[0].innerHTML = "Nama Harus Terdiri Dari 5-15 Karakter!";
        result = false;
        return ;
    } 
    else error[0].innerHTML = "";
    
    if(username.length < 5 || username.length > 15)
    {
        error[1].innerHTML = "Username Harus Terdiri Dari 5-15 Karakter!";
        result = false;
        return;
    } 
    else error[1].innerHTML = "";

    if(username.includes(" "))
    {
        error[1].innerHTML = " Username Tidak Boleh Ada Spasi (‘ ‘)"
        result = false;
        return;
    }
    else error[1].innerHTML = "";
    
    if(password.length == 0)
    {
        error[2].innerHTML = "Password Tidak Boleh Kosong!";
        result = false;
        return;
    }
    else error[2].innerHTML = "";

    if(genderM.checked==false && genderF.checked==false )
    {
        error[3].innerHTML = "Harus Pilih Salah Satu!";
        result = false;
        return;
    }   
    else error[3].innerHTML = "";

    if(email.length == 0)
    {
        error[4].innerHTML = "Email Harus Diisi!"
        result = false;
        return;  
    }
    else error[4].innerHTML ="";

    if(!email.includes ("@") || !email.includes ("."))
    {
        error[4].innerHTML = "Email Harus Termasuk  ‘@’ dan ‘.’!"
        result = false;
         return;  
     }   
     else error[4].innerHTML ="";

    if(email.indexOf("@") != email.lastIndexOf("@"))
    {
        error[4].innerHTML = "Email Harus Hanya Ada Satu '@'";
        result = false;
        return;
    }
    else error[4].innerHTML = "";

    if(email.indexOf("@") != email.lastIndexOf("@"))
    {
        error[4].innerHTML = "Email Harus Meliputi '@'";
        result = false;
        return;
    }
    else error[4].innerHTML = "";
    
    
      
    window.confirm("DATA CONFIRMATION\nNama :"+name+"\nUsername :"+username+"\nPassword :"+password+"\nEmail :"+email+"\nGender :"+genderF+genderM);
    return ;
    
   
     

}



