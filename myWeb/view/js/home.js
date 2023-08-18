//nam.15Apr
async function Tutor() {                   
    await sleep(5000);    
    console.log("here")
    document.getElementById('nam').click();
}

// let loadMoreBtn= document.querySelector('#loadSPMore');
// loadMoreBtn.onclick= ()=>{
//     //console.log("click ne");
//     //let nam= document.querySelector('#nam');
//     //Tutor()
//     //document.getElementById('nam').click();    
//     let checkEndSP= document.getElementById('endSPMore');
//     let changeBtnLoadSPMore= document.getElementById('loadSPMore');
        
//     if(checkEndSP.value==1){
//         changeBtnLoadSPMore.disabled= true;
//     }
       
// }


//Start js slideshow
  let slideIndex = 0;
  showSlides();

  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = 'block';
    //slides[slideIndex-1].setAttribute("style", "display: block");
    setTimeout(showSlides, 5000); // Change image every 5 seconds
  }
//End js slideshow

