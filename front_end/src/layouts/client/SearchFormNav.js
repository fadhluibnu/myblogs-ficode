import logo from "../../assets/logo.png";
import hamburgerMenu from "../../assets/hamburger-menu.svg";
import closeX from "../../assets/closeX.svg";
import closeSearch from "../../assets/closeSearch.svg";
import search from "../../assets/search.svg";
import anime from "animejs/lib/anime.es";
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap/dist/js/bootstrap";
import Nav from "react-bootstrap/Nav";
import "../../style.css";
import React from "react";

export default function SearchForm() {
  const realNav = () => {
    anime({
      targets: "#real-navbar",
      duration: 500,
      opacity: "0",
    });
    setTimeout(function () {
      document.getElementById("real-navbar").classList.add("d-none");
      document.getElementById("seccond-navbar").classList.remove("d-none");
      // alert('oke')
      anime({
        targets: "#seccond-navbar",
        right: "0px",
        duration: 1000,
        opacity: "1",
      });
    }, 500);
  };
  return (
    <form className="d-flex" role="search">
      <div className="input-group">
        <span
          className="input-group-text icon-search-mobile"
          id="basic-addon1"
          onClick={realNav}
        >
          <img src={search} />
        </span>
        <input
          type="text"
          className="form-control up-mobile"
          placeholder="Cari Postingan"
          aria-label="Username"
          aria-describedby="basic-addon1"
          onClick={realNav}
        />
      </div>
    </form>
  );
}