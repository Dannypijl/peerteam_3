window.addEventListener('load', init);

//Globals
let apiUrl = 'http://localhost/peerteam_3/dannyWebServices.php';
let storeData = {};
let gallery;
let detailDialog;
let detailContent;

/**
 * Initialize after the DOM is ready
 */
function init()
{
    //Retrieve gallery and add a click event for every Store
    gallery = document.getElementById('store-gallery');
    gallery.addEventListener('click', storeClickHandler);

    //Retrieve modal elements, and add click event for closing modal
    detailDialog = document.getElementById('store-detail');
    detailContent = detailDialog.querySelector('.modal-content');
    detailDialog.addEventListener('click', detailModalClickHandler);
    detailDialog.addEventListener('close', dialogCloseHandler);

    //Start the application with loading the API data
    ajaxRequest(apiUrl, createStoreCards);
}

/**
 * AJAX-call to retrieve data from a webservice
 *
 * @param url
 * @param successHandler
 */
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

/**
 * Create initial Pokémon cards based on initial API data
 *
 * @param data
 */
function createStoreCards(data)
{
    //Loop through the list of store
    for (let store of data.results) {
        //Wrapper element for every store card. We need the wrapper now, because adding it later
        //will result in store being ordered based on the load times of the API instead of chronically
        let storeCard = document.createElement('div');
        storeCard.classList.add('pokemon-card');
        storeCard.dataset.name = store.name;

        //Append store card to the actual HTML
        gallery.appendChild(storeCard);

        //Retrieve the detail information from the API
        ajaxRequest(store.url, fillStoreCard);
    }
}

/**
 * Create the actual contents of the card based on the loaded API information
 *
 * @param pokemon
 */
function fillStoreCard(store)
{
    //Wrapper element for every Store card
    let storeCard = document.querySelector(`.store-card[data-name='${store.name}']`);

    //Element for the name of the Store
    let title = document.createElement('h2');
    title.innerHTML = `${store.name} (#${store.id})`;
    storeCard.appendChild(title);

    //Element for the image of the store
    let image = document.createElement('img');
    image.src = store.sprites.other.home.front_default;
    storeCard.appendChild(image);

    //Element for the button to load the shiny version of the Pokémon
    let button = document.createElement('button');
    button.innerHTML = 'Show shiny';
    button.dataset.id = store.id;
    storeCard.appendChild(button);

    //Store Pokémon data globally for later use in other functions
    storeData[store.id] = store;
}

/**
 * Show an error message to inform the API isn't working correctly
 *
 * @param data
 */
function ajaxErrorHandler(data)
{
    let error = document.createElement('div');
    error.classList.add('error');
    error.innerHTML = 'Er is helaas iets fout gegaan met de API, probeer het later opnieuw';
    gallery.before(error);
}

/**
 * Open the detailview with information of a Store
 *
 * @param e
 */
function storeClickHandler(e)
{
    let clickedItem = e.target;

    //Check if we clicked on a button
    if (clickedItem.nodeName !== 'BUTTON') {
        return;
    }

    //Get the information from the global stored data
    let pokemon = pokemonData[clickedItem.dataset.id];

    //Reset the content
    detailContent.innerHTML = '';

    //Show the name we used on the main grid
    let title = document.createElement('h1');
    title.innerHTML = `${pokemon.name} (#${pokemon.id})`;
    detailContent.appendChild(title);

    //Display the shiny
    let shiny = document.createElement('img');
    shiny.src = pokemon.sprites.other.home.front_shiny;
    detailContent.appendChild(shiny);

    //Open the modal
    detailDialog.showModal();
    gallery.classList.add('dialog-open');
}

/**
 * Close the modal if clicked on the close button or outside the modal (on the backdrop)
 *
 * @param e
 */
function detailModalClickHandler(e)
{
    if (e.target.nodeName === 'DIALOG' || e.target.nodeName === 'BUTTON') {
        detailDialog.close();
    }
}

/**
 * Close the underlying blur effect when dialog is closed (both on our own click or the native ESC key)
 *
 * @param e
 */
function dialogCloseHandler(e)
{
    gallery.classList.remove('dialog-open');
}
