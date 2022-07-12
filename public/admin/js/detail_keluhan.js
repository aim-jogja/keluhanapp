var a;
function lampiran() {
  if(a==1){
    document.getElementbyId('image').style.display="inline";
    return a=0;
  }
  else {
    document.getElementbyId('image').style.display="none";
    return a=1;
  } 
}
