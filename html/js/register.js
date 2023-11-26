const form=document.querySelector('#form')
const username=document.querySelector('#username')
const email=document.querySelector('#email')
const password=document.querySelector('#password')

form.addEventListener('submit',(e)=>{
    e.preventDefault()
    validateInputs();


})

function validateInputs(){
    const usernameVal =username.value.trim();
    const emailVal =email.value.trim();
    const passwordVal =password.value.trim();

   if(usernameVal===''){
        setError(username,'Username is required')
   }
   else{
        setSuccess(username)
   }

   if(EmailVal===''){
       setError(email,'Email is required')
  }
   else if(!validateEmail(emailVal)){
       setError(email,'Please enter a valid email') ;
   }
   else{
       setSuccess(email)    
   }

   if(EmailVal===''){
       setError(email,'Email is required')
  }
   else if(!validateEmail(emailVal)){
       setError(email,'Please enter a valid email') ;
   }
   else{
       setSuccess(email)    
   }
   
   if(PasswordVal===''){
    setError(password,'Password is required')
}
   else if(passwordVal.length<8){

    setError(password,'Password mustbe atleast 8 characters long') ;
}
   else{
    setSuccess(password)    
}



}
function SetError(element,message){
    const input= element.parentElement;
    const errorElement = input.querySelector('.error')

    errorElement.innertext=message;
    input.classList.add('error')
    input.classList.remove('success')

}

function SetSuccess(element){
    const input= element.parentElement;
    const errorElement = input.querySelector('.error')

    errorElement.innertext='';
    input.classList.add('success')
    input.classList.remove('error')

}

const validateEmail=(email) => {
    return String (email)
      .toLowerCase();
       match(
        /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
      );

};