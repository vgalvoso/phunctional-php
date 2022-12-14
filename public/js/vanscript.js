//get element by id/first class/first tag
const getElement = selector => {
  let element;
  element = document.getElementById(selector)
  if(element != null) return element
  element = document.getElementsByClassName(selector)[0]
  if(element != null) return element
  element = document.getElementsByTagName(selector)[0]
  if(element != null) return element
  return selector
}
//get/set value
const getVal = sel => getElement(sel).value
const setVal = (sel,value) => getElement(sel).value = value
//get/set innerHTML
const getHtml = sel => getElement(sel).innerHTML
const setHtml = (sel,value) => getElement(sel).innerHTML = value
//clear value/innerHTML
const clear = (sel) => {setVal(sel,""); setHtml(sel,"");}
//add/remove class
const addClass = (sel,className) => getElement(sel).classList.add(className)
const removeClass = (sel,className) => getElement(sel).classList.remove(className)
const filterTable = (input,tableId) => {
    // Declare variables
    var filter, tr, td, i, txtValue
    filter = input.value.toUpperCase()
    tr = getElement(tableId).getElementsByTagName("tr")
  
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")
      let matched = false
      for(count = 0; count < td.length; count++){
        if (td[count]) {
            txtValue = td[count].textContent || td[count].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              matched = true
              continue
            }
        }
      }
      if(!matched){
        tr[i].style.display = "none";
      }else{
        tr[i].style.display = "";
      }
    }
}

const filterDrop = (input,divId) => {
  let filter = input.value.toUpperCase()
  let options = getElement(divId).getElementsByTagName("div")
  let i = 0
  for(i=0; i<options.length;i++){
    let txt = getHtml(options[i])
    if(txt.toUpperCase().indexOf(filter) > -1){
      options[i].style.display = ""
    }else{
      options[i].style.display = "none"
    }
  }
}
//onfirmation
const confirmation = message => confirm(message)
//toggle password input
const showPassword = sel => {
  let input = getElement(sel)
  let type = input.getAttribute("type")
  if(type == "text"){
    input.setAttribute("type","password")
    return
  }    
  input.setAttribute("type","text")
}
const passText = (origin,destination) => {
  let txt =  getHtml(origin)
  setVal(destination,txt)
}