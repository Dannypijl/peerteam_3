window.addEventListener('load', init);

//Global vars
let apiUrl = 'http://localhost/dashboard/CLE3-Webserver/webservice/';
let button;
let timeInfoGallery;
let pokemonData = {};
function init() {
    fetch(apiUrl)
        .then((response) => {
            if (!response.ok) {
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(getCostumerInfoSuccesHandler)
        .catch(getCostumerInfoErrorHandler);

    timeInfoGallery = document.getElementById('timeinfo');
    timeInfoGallery.addEventListener('click', timeInfoClickHandler);

    //Start the application with loading the API data
    ajaxRequest(apiUrl, createTimeInfoCards);
}

function ajaxRequest(url, successHandler)
{
    fetch(url)
        .then((response) => {
            if (!response.ok) {
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(successHandler)
        .catch(ajaxErrorHandler);

}




function getCostumerInfoSuccesHandler (data) {

    for (let timeInfo of data) {
        let timeInfoCard = document.createElement('div');
        timeInfoCard.classList.add('timeInfo-card');
        timeInfoCard.dataset.name = timeInfo.time; // (getCostumerInfo??)

        document.body.appendChild(timeInfoCard);


    }
}


function getCostumerInfoErrorHandler (data) {
    console.log ('error info')
}

function ajaxErrorHandler (data) {
    console.log ('error ajax')
    console.log(data)
}

function timeInfoClickHandler (data) {
    //console.log(data)
}

function createTimeInfoCards (data) {
    console.log(data)
    let list = document.getElementById("timeinfo")

    for (let timeInfo of data) {
        let timeInfoCard = document.createElement('div');
        timeInfoCard.classList.add('timeInfo-card');
        timeInfoCard.dataset.name = timeInfo.time; // (getCostumerInfo??)
        timeInfoCard.innerHTML = timeInfo.time + " " + timeInfo.status;
        list.appendChild(timeInfoCard);


    }
}
