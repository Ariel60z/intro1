function myModal(n) {
  var modal = document.getElementById("myModal");
  var img = document.getElementById("myImg" + n);
  var modalImg = document.getElementById("img");
  var captionText = document.getElementById("caption");

  var experts = document.getElementById("experts" + n);
  var name = experts.children[0].innerHTML;
  var title = experts.children[1].innerHTML;

  modal.style.display = "block";
  modalImg.src = img.src;
  captionText.innerHTML = "<h3> " + name + "</h3><span>" + title + "</span>";

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  };
}
