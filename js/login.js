loginForm.addEventListener('input', () =>{
    if(username.value.length > 0 && password.value.length > 0){
          loginbtn.setAtribute('disabled');
       }
       else{
         loginbtn.setAtribute('disabled','disabled');
       }
  });