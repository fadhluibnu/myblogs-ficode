import { Outlet, Link } from "react-router-dom";
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
import { useLocation } from "react-router-dom";
// import SearchForm from "./SearchFormNav";

function SearchForm(props) {
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
  let navbar = parseInt(props.navbar)
  return (
    <form className="d-flex" role="search" style={{ opacity: navbar }}>
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

export default function Layout() {
  const location = useLocation();

  const seccondNav = () => {
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
  };
  const mobileNav = () => {
    const nav = document.getElementById("navbarNavDropdown");
    nav.classList.remove("d-none");
  };
  const closeMobileNav = () => {
    const nav = document.getElementById("navbarNavDropdown");
    nav.classList.add("d-none");
  };
  return (
    <>
      <nav className="navbar navbar-expand-lg bg-white">
        <div className="container" id="real-navbar">
          <img
            src={hamburgerMenu}
            className="hamburger-menu"
            alt="logo"
            onClick={mobileNav}
          />
          <a
            className="navbar-brand me-sm-auto m-lg-auto ms-sm-3 ms-lg-0"
            href="#"
          >
            <img src={logo} alt="Bootstrap" width="34" />
          </a>
          <div
            className="navbar-collapse d-none d-lg-inline-block"
            id="navbarNavDropdown"
          >
            <ul className="navbar-nav m-auto">
              <li className="nav-item">
                <Link className="nav-link active" to="/">
                  Home
                </Link>
              </li>
              <li className="nav-item">
                <Link className="nav-link active" to="/blogs">
                  Blogs
                </Link>
              </li>
              <li className="nav-item">
                <Link className="nav-link active" to="/kategori">
                  Kategori
                </Link>
              </li>
              <li className="nav-item">
                <Link className="nav-link active" to="/playlist">
                  Playlist
                </Link>
              </li>
              <div
                className="close d-lg-none d-inline-block mt-4"
                onClick={closeMobileNav}
              >
                <img src={closeX} />
              </div>
            </ul>
          </div>
          {location.pathname == "/" ? <SearchForm navbar='1' /> : <SearchForm navbar='0' />}
        </div>
        <div
          className="container position-relative d-none"
          id="seccond-navbar"
          style={{ right: -100, opacity: 0, padding: [3, 12] }}
        >
          <form className="d-flex m-auto w-100 form-search-secc" role="search">
            <div className="input-group">
              <span className="input-group-text" id="basic-addon1">
                <img src={search} />
              </span>
              <input
                type="text"
                className="form-control"
                placeholder="Cari Postingan"
                aria-describedby="basic-addon1"
                autofocus
              />
              <span class="input-group-text" onClick={seccondNav}>
                <img src={closeSearch} />
              </span>
            </div>
          </form>
        </div>
      </nav>
      <Outlet />
    </>
  );
}
