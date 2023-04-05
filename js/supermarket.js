window.addEventListener('load', init);

//globals
const apiUrl = "esse-webservice/index.php";
let minCardDisplay = 0;
let maxCardDisplay = minCardDisplay + 4;
let storeDetailData = {};
let storeCardCount ;

function init() {

    ajaxRequest(apiUrl, storeDataSuccesHandler);

    addEventListener("click", pointerClickSuccessHandler);

    let cardDisplayMemory = localStorage.getItem('minCardDisplay');
    if(cardDisplayMemory) {
        minCardDisplay =JSON.parse(cardDisplayMemory);
    }
}

function storeDataSuccesHandler(data) {

    storeCardCount = data.length;
    console.log(storeCardCount);

    for (let i = minCardDisplay; i < maxCardDisplay; i++ ) {

        console.log(data[i].id, data[i].name);

        const main = document.getElementById("selection-page")
        let storeCard = document.createElement("object")
        storeCard.className = "card";

        storeCard.dataset.name = data[i].name

        main.appendChild(storeCard)

        let img = document.createElement("IMG");
        img.className = "logo";
        let title = document.createElement("H2");

        img.src = data[i].logo;
        title.innerHTML = data[i].name;

        storeCard.appendChild(img);
        storeCard.appendChild(title);

        ajaxRequest(data[i].url, storeDetailSuccessHandler)

        storeCard.addEventListener("click",storeDialogSuccessHandler)
    }
}

function storeDetailSuccessHandler(data) {
    console.log(data);

let storeCard = document.querySelector(`.card[data-name='${data.name}']`)

        let location = document.createElement("div");
        location.className = "access";
        let locationIcon = document.createElement("IMG");
        let locationSpan = document.createElement("span");

        let wheelChairAccess = document.createElement("div");
        wheelChairAccess.className = "access";
        let wheelChairAccessIcon = document.createElement("IMG");
        let wheelChairAccessSpan = document.createElement("span");

        let customerService = document.createElement("div");
        customerService.className = "access";
        let customerServiceIcon = document.createElement("IMG");
        let customerServiceSpan = document.createElement("span");

        locationIcon.src = "img/symbol3.png";
        wheelChairAccessIcon.src = "img/symbol1.png";
        customerServiceIcon.src = "img/symbol4.png";

        locationSpan.innerHTML = data.location;
        wheelChairAccessSpan.innerHTML = data.accessibility.wheelchair_access;
        customerServiceSpan.innerHTML = data.accessibility.customer_service;

        location.appendChild(locationIcon);
        location.appendChild(locationSpan);

        wheelChairAccess.appendChild(wheelChairAccessIcon);
        wheelChairAccess.appendChild(wheelChairAccessSpan);

        customerService.appendChild(customerServiceIcon);
        customerService.appendChild(customerServiceSpan);

        storeCard.appendChild(location);
        storeCard.appendChild(wheelChairAccess);
        storeCard.appendChild(customerService);

        storeCard.dataset.name = data.name;

        storeDetailData[data.name] = data;
}

function storeDialogSuccessHandler(e) {

    e.preventDefault();

    let modal = document.getElementById("store-detail");
    modal.innerHTML = '';

    let info = storeDetailData[e.target.dataset.name];

    let mainElement = document.createElement('div');
    mainElement.id = 'main-dialog-element';
    modal.appendChild(mainElement);

        let titleItems = document.createElement('div')
        titleItems.id = 'title-items'
        mainElement.appendChild(titleItems)

            let detailTitle = document.createElement('h1');
            detailTitle.innerHTML = `${info.name}: ${info.location}`;
            titleItems.appendChild(detailTitle);

            let detailUrlMain = document.createElement('a');
            detailUrlMain.innerHTML = 'Winkelpagina';
            detailUrlMain.href = info.urls.webpage;
            titleItems.appendChild(detailUrlMain);

            let detailUrlHelp = document.createElement('a');
            detailUrlHelp.innerHTML = 'locatie';
            detailUrlHelp.href = info.urls.location;
            titleItems.appendChild(detailUrlHelp);

        let storeDescription = document.createElement('div');
        storeDescription.innerHTML = info.info;
        storeDescription.id = 'store-description';
        mainElement.appendChild(storeDescription);

    let accessibleParameters = document.createElement('div');
    accessibleParameters.id = 'accessible-parameters';
    modal.appendChild(accessibleParameters);

        let parameterLocation = document.createElement("div");
            let locationIcon = document.createElement("img");
            locationIcon.src = "img/symbol3.png";
            parameterLocation.appendChild(locationIcon);
            let locationSpan = document.createElement('span');
            locationSpan.innerHTML = info.accessibility.location;
            parameterLocation.appendChild(locationSpan);
        accessibleParameters.appendChild(parameterLocation);

        let parameterCustomerService = document.createElement("div");
            let serviceIcon = document.createElement("img");
            serviceIcon.src = "img/symbol4.png";
            parameterCustomerService.appendChild(serviceIcon);
            let customerServiceSpan = document.createElement('span');
            customerServiceSpan.innerHTML = info.accessibility.customer_service;
            parameterCustomerService.appendChild(customerServiceSpan);
        accessibleParameters.appendChild(parameterCustomerService);

        let parameterWheelchairAccessible = document.createElement("div");
            let wheelChairIcon = document.createElement("img");
            wheelChairIcon.src = "img/symbol1.png";
            parameterWheelchairAccessible.appendChild(wheelChairIcon);
            let wheelChairSpan = document.createElement('span');
            wheelChairSpan.innerHTML = info.accessibility.wheelchair_access;
            parameterWheelchairAccessible.appendChild(wheelChairSpan);
        accessibleParameters.appendChild(parameterWheelchairAccessible);

    modal.showModal();

}

function pointerClickSuccessHandler(e) {
    if(e.target.id === "right" || e.target.id === "left") {
        if (e.target.id === "right" && maxCardDisplay < storeCardCount) {
            minCardDisplay++;

            location.reload()
        } else if (e.target.id === "left" && minCardDisplay > 0) {
            minCardDisplay--;

            location.reload()
        }

        localStorage.setItem("minCardDisplay", JSON.stringify(minCardDisplay));

        console.log(minCardDisplay)
    } else {
        return;
    }
}

function ajaxRequest(url, successHandler) {
    fetch(url)
        .then((response) => {
            if (!response.ok) {
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(successHandler)
        .catch(errorHandler);
}

function errorHandler() {

}