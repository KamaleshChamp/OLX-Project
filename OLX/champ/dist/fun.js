window.addEventListener('load', () => {

let params = (new URL(document.location)) .searchParams;
const name = params.get('price'); 

document.getElementById('amt').innnerHtml = name;

})
