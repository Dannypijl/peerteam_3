window.addEventListener('load', init);

let apiUrl = 'http://localhost/peerteam_3_luuk/Week_3_clickable_prototype/luuk.api.php';
let jsonData = [];
function init() {
    fetch(apiUrl)
        .then((response) => {
          //  console.log(response.status);
            if (!response.ok) {
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(successHandler)
        .catch(ajaxErrorHandler);
}
function ajaxErrorHandler(e) {
    console.error(e)
}

function successHandler(e) {
        jsonData = (e)
        .then(data => {
            let container = document.getElementById('data-container');
            let container2 = document.getElementById('data-container2');
            container.innerText = JSON.stringify(data);
            container2.innerText = JSON.stringify(data);
                data.forEach(item => {
                    let box = document.createElement('div');
                    box.className = 'data-box';
                    let id = document.createElement('h3');
                    id.innerText = `Box ${item.id}`;
                    let info = document.createElement('p');
                    info.innerText = item.name;
                    box.appendChild(id);
                    box.appendChild(info);
                    container.appendChild(box);
                    container2.appendChild(box)
            });
        });
}
