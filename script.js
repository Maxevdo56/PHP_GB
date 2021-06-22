document.addEventListener('DOMContentLoaded', () => {
    let callBackButton = document.getElementsByClassName('modal-1');
    let modal1 = document.getElementById('modal-1');
    let closeButton = modal1.getElementsByClassName('modal__close-button')[0];
  
    callBackButton.onclick = function (e) {
      e.preventDefault();
      modal1.classList.add('modal_active');
      tagBody.classList.add('hidden');
    }
  
    closeButton.onclick = function (e) {
      e.preventDefault();
      modal1.classList.remove('modal_active');
      tagBody.classList.remove('hidden');
    }
    });