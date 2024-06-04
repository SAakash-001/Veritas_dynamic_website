const sbbtn = document.querySelector('.form-submit-btn');
const subsbtn = document.querySelector('#subsbtn');
const subsval = document.querySelector('#subsemail');
subsbtn.addEventListener('click' , ()=>{
 if(subsval.value=== ""){
    alert("Enter valid Email")
 }else{
 alert("Thank You for subscribing to us ")}
})

sbbtn.addEventListener('click' , ()=>{
    alert('Thank You for Your Assessment , We will review and  get Back to your Assesment')
})