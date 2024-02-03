// NOW AM ADD FUNCTIONS TO BUTTONS INCREMENT AND DECREMENT TOTAL PRICE
// LETS START JS
let valueCount=1;
let increment=document.querySelector(".btn-increment");
let decrement=document.querySelector(".btn-decrement");
let  count =document.querySelector("#quantity");
let  totalcount =document.querySelector("#price");
 //NOW AM CREATING A ARROW FUNCTION
 increment.addEventListener("click",()=>{
  let add=  valueCount++;
  count.value=add;
  totalcount.innerHTML=add*10255;   //ADDING(INCREMENT) FUCTION IS COMPLETED
   })
   decrement.addEventListener("click",()=>{
     //THIS IS DECREMENT FUNCTION  IN THIS AN GIVING A CONDITION TWO DISABLE THE (-)VALUES
   if(valueCount>=2){
    let sub =--valueCount;
    count.value=sub;
    totalcount.innerHTML=sub*10255;  //lets cheack yhe decrement is working or not 
    //DECREMENT FUNCTION IS ALSO COMPLETE
   }

   })

   //THIS IS THE SIMPLE INCREMENT AND DECREMENT AND RATE CALCUTATE 


   //THANKS FOR WACTCHING VEDIO
   // PLEASE SUBSCRIBE R AND R ZOOM CHANNEL