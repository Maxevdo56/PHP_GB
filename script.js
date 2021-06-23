document.addEventListener('DOMContentLoaded', () => {

  let clickImage = document.getElementsByClassName('click-image')[0];   // Миниатюра по которой происходит клик
  let modalwindow = document.getElementById('modal-window');   // Модальное окно, которое нужно открыть
  let closeButton = modalwindow.getElementsByClassName('modal-close-button')[0];   // Кнопка "закрыть"
  
  clickImage.onclick = () => modalwindow.classList.add('modal_active');
  closeButton.onclick = () => modalwindow.classList.remove('modal_active');

  // Вызов модального окна несколькими кнопками на странице
  let clickImageButton = document.getElementsByClassName('get-modal_1');

  for (let button of clickImageButton) {
    button.onclick = () => modalwindow.classList.add('modal_active');
    }
});