let note=0
let inc=0
 function add5(){
   inc+=1
   if(inc<5) {
      note+=5
   
    document.getElementById('note').innerText=note+"/20"
    console.log(inc)
 }
   }

 function add4(){
   inc+=1
   if(inc<5){
      
   note+=4
    document.getElementById('note').innerText=note+"/20"
    console.log(inc)

 }
}
function add3(){
   inc+=1
   if(inc<5){
      
    note+=3
    document.getElementById('note').innerText=note+"/20"
    console.log(inc)

 }
}
   