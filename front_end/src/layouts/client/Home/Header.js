import React from "react";

export default function Header() {
  return (
    <header className="container-fluid">
      <div className="container">
        <div className="row align-items-center">
          <div className="col-lg-6 text-center text-lg-start mt-4 mt-lg-0 mb-5 mb-sm-0">
            {/* <h1>Belajar Pemrograman Bersama</h1> */}
            <h1>Lorem Jjidjasoldiand djaijsnf</h1>
            <p>
              Temukan seluruh pembahasan mulai dari dasar hingga mahir. Pilih
              roadmap yang anda sukai
            </p>
            <a
              className="btn btn-primary d-block d-sm-inline"
              href="#"
              role="button"
            >
              Semua Postingan
            </a>
          </div>
          <div className="col-lg-6">
            <div className="image mt-5 d-none d-sm-block"></div>
          </div>
        </div>
      </div>
    </header>
  );
}
