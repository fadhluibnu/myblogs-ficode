function realNav() {
  animeRealNav();
  setTimeout(function () {
    document.getElementById("real-navbar").classList.add("d-none");
    document.getElementById("seccond-navbar").classList.remove("d-none");
    // alert('oke')
    animeSecNav();
  }, 500);
}

function animeRealNav() {
  anime({
    targets: "#real-navbar",
    duration: 500,
    opacity: "0",
  });
}
function animeSecNav() {
  anime({
    targets: "#seccond-navbar",
    right: "0px",
    duration: 1000,
    opacity: "1",
  });
}

function seccondNav() {
  anime({
    targets: "#seccond-navbar",
    right: "-100px",
    duration: 500,
    opacity: "0",
  });
  setTimeout(function () {
    document.getElementById("seccond-navbar").classList.add("d-none");
    document.getElementById("real-navbar").classList.remove("d-none");
    anime({
      targets: "#real-navbar",
      duration: 500,
      opacity: "1",
    });
  }, 500);
}


function navbar(){
  const nav = document.getElementById('navbarNavDropdown')
  nav.classList.remove('d-none')
}
function closeNavbar(){
  const nav = document.getElementById('navbarNavDropdown')
  nav.classList.add('d-none')
}