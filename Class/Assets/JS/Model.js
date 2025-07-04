function openModal(buttonId) {
  const buttonElem = document.getElementById(buttonId);
  var Id = buttonId.split("_")[1];
  const modalBox = document.getElementById("deleteModal_" + Id);
  // console.log(buttonElem);
  // console.log(modalBox);
  modalBox.style.display = "block";
}
function closeModal(buttonId) {
  const buttonElem = document.getElementById(buttonId);
  var Id = buttonId.split("_")[1];
  const modalBox = document.getElementById("deleteModal_" + Id);
  modalBox.style.display = "none";
}
