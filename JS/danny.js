window.addEventListener("load",init);
let modal;
let modalBtn;
let closeBtn;


function init() {
// get modal content
    modal = document.getElementById('simpleModal');
//get open modal button
    modalBtn = document.getElementById('modalBtn');
//get close button
    closeBtn = document.getElementsByClassName('closeBtn')[0];
}
// listen for open click
    modalBtn.addEventListener('click', openModal);
//listen for close click
    closeBtn.addEventListener('click', closeModal);
//listen for outside click
    window.addEventListener('click', clickOutside);

//function to open modal
    function openModal() {
        modal.style.display = 'block';
    }

//function to close modal
    function closeModal() {
        modal.style.display = 'none';
    }

//function to close modal if outside click
    function clickOutside(e) {
        if (e.target == modal) {
            modal.style.display = 'none';
        }
    }
