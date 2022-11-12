function logSubmit(event) {
    log.textContent = `Form Submitted! Time stamp: ${event.timeStamp}`;
    event.preventDefault();
    formPage.style.display = 'none';
  }
 
const form = document.getElementById('form');
const log = document.getElementById('log');
const formPage = document.getElementById('formPage');
form.addEventListener('submit', logSubmit);


function preventdefault(e){
  e.preventdefault();
}























// function getData(url){
//     return new Promise((resolved, reject) => {
//         if (!url){
//             reject('No url provided');
//         }

//         const xhr = new XMLHttpRequest()
//         xhr.open("GET", url);
//         xhr.send();
//         xhr.onload = function(){
//             if (xhr.status === 200){
//                 resolved(xhr.responseText);
//             }else{
//                 reject(xhr.status)
//             }
//         };
//     });
// }

// const url = prompt('Enter a url');
// getData(url)
//     .then((result) =>  {
//         console.log('success 1!')
//         console.log(result);
//         return(getData('https://reqres.in/api/users/2'));
//     }).then((result) => {
//         console.log('success 2', result);
//         return(getData('https://reqres.in/api/unknown/2'));
//     }).then((result) => {
//         console.log('success 3!', result)
//     }).catch((status)=>{
//         console.log('Error occured: ');
//         console.log(status);
//     });


// const url = prompt('Enter a url');
// fetch(url)
//     .then((response) => {
//         return response.json()
//     }).then((result) => {
//         console.log('sucess!', result);
//     }).catch((status) => {
//         console.log(status);v
//     });

//     const url = prompt("Enter a URL :");
// fetch(url)
//     .then((response) => {
//         return response.json()
//     }).then((result) => {
//         console.log("Success!", result);
//     }).catch(status => {
//         console.log(`An error with status code ${status} occurred: `); // Runs on error
//     });